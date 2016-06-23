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

        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->
@stop
