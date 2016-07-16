@extends('layouts/index')
@section('content')
@include('notification')

<div class="page-header">
  <h1>
    <a href="/elastic" >Elasticsearch</a>
    <small>
      <i class="icon-double-angle-right"></i>
      数据列表
    </small>
  </h1>
</div><!-- /.page-header -->

{!! Form::open(['url'=>'/elastic/search','method'=>"get"]) !!}
<div class="col-sm-2">
  {{Form::text('info', Input::get('info'), array('class' => 'input-group form-control search-query', 'placeholder' => '请输入搜索信息'))}}
</div>

<span class="input-group-btn">
  <button type="submit" class="btn btn-purple btn-sm">
  搜索
  <i class="icon-search icon-on-right bigger-110"></i>
  </button>
  &nbsp;&nbsp;&nbsp;
  {{Html::link("/elastic", '全部数据', ['class' => 'bigger-110 btn  btn-primary  btn-sm'])}}
</span>
{!! Form::close() !!}

<div class="col-xs-12">
@foreach($list as $info)
<div class="row-fluid">
  <div class="span12">
    <h3>{{ $info['title'] }}</h3>
    <p>{{ $info['content'] }}</p>
    <p><a href="#">View details &raquo;</a></p>
  </div><!--/span-->
</div><!--/row-->
@endforeach
</div>

@stop
