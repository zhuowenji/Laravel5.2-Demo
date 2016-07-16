<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\Elastic;
use Illuminate\Http\Request;
use Redirect;
use View;

/* https://github.com/elastic/elasticsearch-php */

class ElasticController extends Controller
{

    public function getIndex()
    {
        $elastic = new Elastic;

        if (!$elastic->typeExists()) {
            //搜索数据库存入es
            $elastic->addAllToIndex();
        };

        $list = $elastic->orderby('id', 'desc')->paginate(10);

        return View::make('index/elastic/index')->with(compact('list'));
    }

    public function getSearch(Request $reques)
    {
        $elastic = new Elastic;

        // 获取提交数据
        $data = $reques->all();

        $list = $elastic->search($data['info'])->toArray();

        return View::make('index/elastic/search')->with(compact('list'));
    }

    public function getAdd()
    {
        return View::make('index/elastic/add');
    }

    public function postAdd(Request $reques)
    {
        $data = $reques->all();

        $elastic = new Elastic;

        $elastic->title   = $data['title'];
        $elastic->content = $data['content'];

        if (!$elastic->save($data)) {
            return Redirect::back()->withInput()->with('error', '添加失败');
        };

        $elastic->addToIndex();

        // 添加成功
        return Redirect::back()->with('success', '添加成功');
    }

}
