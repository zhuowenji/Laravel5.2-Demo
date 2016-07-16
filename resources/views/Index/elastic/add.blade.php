@extends('layouts/index')
@section('content')

<div class="page-header">
  <h1>
    <a href="/elastic" >Elasticsearch</a>
    <small>
      <i class="icon-double-angle-right"></i>
      添加数据
    </small>
  </h1>
</div><!-- /.page-header -->

@include('notification')

{!! Form::open() !!}
   <div class="form-group">
       {!! Form::label('title', '标题:') !!}
       {!! Form::text('title', Input::old('title'),['class'=>'form-control']) !!}
   </div>
   <div class="form-group">
       {!! Form::label('content','正文:') !!}
       {!! Form::textarea('content', Input::old('content'),['class'=>'form-control']) !!}
   </div>
   <div class="form-group">
       {!! Form::submit('添加数据',['class'=>'btn btn-success form-control']) !!}
   </div>
{!! Form::close() !!}

@stop
