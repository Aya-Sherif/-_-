@extends('layouts.lay')
@section('content')
<div class="main_content_container">
    <div class="main_container  main_menu_open">
        <!--Start system bath-->
        <div class="home_pass hidden-xs">
            <ul>
                <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>

            </ul>
        </div>
        <!--/End system bath-->
        <div class="page_content">

            <h1 class="heading_title">تعديل بيانات الموظف {{$user->name}}</h1>
            @include('layouts.message')




            <div class="form">
                <form class="form-horizontal" action="{{ route('user.update', $user->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="input0" class="col-sm-2 control-label bring_right left_text">اسم العضو</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input0" name="name" placeholder="اسم العضو"
                                value="{{$user->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input2" class="col-sm-2 control-label bring_right left_text">البريد
                            الالكتروني</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="input2" name="email"
                                placeholder="البريد الالكتروني" value="{{$user->email }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="client" class="col-sm-2 control-label bring_right left_text">الوظيفه</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="client" name="role">
                                <option value="">اضافة وظيفة</option>
                                <option value="sales" {{ $user->role == 'sales' ? 'selected' : '' }}>مندوب</option>
                                <option value="accounts" {{ $user->role == 'accounts' ? 'selected' : '' }}>حسابات
                                </option>
                                <option value="stock" {{ $user->role == 'stock' ? 'selected' : '' }}>مخازن</option>
                                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>ادمن</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="client" class="col-sm-2 control-label bring_right left_text">الحاله</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="client" name="status">
                                <option value="1" {{ $user->status == '1' ? 'selected' : '' }}>يعمل</option>
                                <option value="0" {{ $user->status == '0' ? 'selected' : '' }}>مجمد/حساب محذوف
                                </option>

                            </select>
                        </div>
                    </div>
                    <div class=" form-group">
                        <label for="input3" class="col-sm-2 control-label bring_right left_text">كلمة المرور</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="input3" name="password"
                                placeholder="كلمة المرور">
                        </div>
                    </div>


                    <!-- Submit and Reset Buttons -->
                    <div class="form-group">
                    <div class="col-sm-12 col-sm-offset-0">
                    <button type="submit" class="btn btn-danger">تعديل بيانات عميل</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!--/End Main content container-->
@endsection
