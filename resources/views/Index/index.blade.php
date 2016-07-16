@extends('layouts/index')
@section('content')
@include('notification')

<div class="page-header">
  <h1>
    <a href="/elastic" >Home</a>
  </h1>
</div><!-- /.page-header -->

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
    </div><!-- /.col -->
</div><!-- /.row -->

@stop
