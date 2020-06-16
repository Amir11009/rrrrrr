@extends('layouts.admin')
@section('header')
    <!-- Page header -->
        <div class="page-header-content">
            <div class="page-title">
                <h4><span class="text-semibold">پنل مدیریت</span> - زیرگروه1 </h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="/home"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li class="active">مدیریت زیرگروه1</li>
            </ul>
        </div>
    <!-- /page header -->
@endsection
@section('content')
    <!-- Content area -->

        <!-- Media library -->
        <div class="panel panel-white">
            <div class="panel-heading">
                <h6 class="panel-title text-semibold">لیست زیرگروه1</h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <table class="table table-striped media-library table-lg">
                <thead>
                <tr>
                    <th></th>
                    <th class="text-center">عکس</th>
                    <th></th>
                    <th>نام</th>
                    <th>گروه اصلی</th>
                    <th>وضعیت</th>
                    <th class="text-center">فعالیت</th>
                </tr>
                </thead>
                <tbody>
                @foreach($group_sub1s as $group_sub1)
                <tr>
                    <td><input type="checkbox" class="styled"></td>
                    <td>
                        <a href="/img/group_sub1/{{$group_sub1->image}}" target="_blank" data-popup="lightbox">
                            <img src="/img/group_sub1/{{$group_sub1->image}}" alt="" class="img-rounded img-preview">
                        </a>
                    </td>
                    <td></td>
                    <td>{{$group_sub1->name}}</td>
                    <td>{{$group_sub1->group_main->name}}</td>
                    <td>
                        @if($group_sub1->status==1)
                            فعال
                        @else
                            غیرفعال
                        @endif
                    </td>
                    <td class="text-center">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{route('group_sub1.edit',['id'=>$group_sub1->id])}}"><i class="icon-pencil7"></i> ویرایش</a></li>
                                    <li class="divider"></li>
                                    <li><a href="/admin/group_sub1/delete/{{$group_sub1->id}}"><i class="icon-bin"></i>حذف</a></li>
                                    {{--@if(\App\Off_product::where('group_sub1_id',$group_sub1->id)->get()->count()==0)--}}
                                        {{--<li class="divider"></li>--}}
                                        {{--<li><a href="/admin/group_sub1/off/{{$group_sub1->id}}"><i class="icon-pencil7"></i>گروه تخفیفی</a></li>--}}
                                    {{--@endif--}}
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /media library -->
@endsection
