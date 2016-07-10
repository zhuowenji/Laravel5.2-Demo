@extends('layouts/admin_master')
@section('content')
@include('notification')
<div class="page-header">
    <h1>
        Dashboard
        <small>
            <i class="icon-double-angle-right"></i>
            概述 &amp; 统计
        </small>
    </h1>
</div><!-- /.page-header -->
@include('notification')
<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->

        <div class="alert alert-block alert-success">
            <button type="button" class="close" data-dismiss="alert">
                <i class="icon-remove"></i>
            </button>
            <i class="icon-ok green"></i>
             Welcome

        </div>

        {!! Form::open() !!}
           <div class="form-group">
               {!! Form::label('title','标题:') !!}
               {!! Form::text('title',null,['class'=>'form-control']) !!}
           </div>
           <div class="form-group">
               {!! Form::label('content','正文:') !!}
               {!! Form::textarea('content',null,['class'=>'form-control']) !!}
           </div>
           <div class="form-group">
               {!! Form::submit('发表文章',['class'=>'btn btn-success form-control']) !!}
           </div>
        {!! Form::close() !!}

        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->
@stop
