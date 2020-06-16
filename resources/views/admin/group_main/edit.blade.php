@extends('layouts.admin')
@section('header')
    <!-- Page header -->
        <div class="page-header-content">
            <div class="page-title">
                <h4><span class="text-semibold">پنل مدیریت</span> - گروه اصلی </h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="/home"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li class="active">مدیریت گروه اصلی</li>
            </ul>
        </div>
    <!-- /page header -->
@endsection
@section('content')
    <!-- Content area -->

    <div class="panel panel-flat">

        <div class="panel-body">

            <form class="form-horizontal" action="{{route('group_main.update',['id'=>$group_main->id])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <fieldset class="content-group">
                    <legend class="text-bold">ویرایش گروه اصلی {{$group_main->name}}</legend>

                    <div class="form-group">
                        <label class="control-label col-lg-2">نام گروه اصلی</label>
                        <div class="col-lg-10">
                            <input type="text" name="name" class="form-control" autofocus value="{{$group_main->name}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">وضعیت گروه اصلی</label>
                        <div class="radio">
                            <div class="col-lg-10">
                                <label>
                                    <input type="radio" name="status" class="styled" value="1" @if($group_main->status == 1) checked="checked" @endif>
                                    فعال
                                </label>
                                <label>
                                    <input type="radio" name="status" class="styled" value="0" @if($group_main->status == 0) checked="checked" @endif>
                                    غیرفعال
                                </label>
                            </div>
                        </div>
                    </div>

                </fieldset>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">ویرایش<i class="icon-arrow-left13 position-right"></i></button>
                </div>
            </form>
        </div>
    </div>
@endsection
