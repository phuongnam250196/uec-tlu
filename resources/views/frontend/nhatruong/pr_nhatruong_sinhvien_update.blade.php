@extends('frontend.master')
@section('title', 'NT | Cập nhật việc làm sinh viên')
@section('banner')
@include('frontend.slider.slider_pr')
@stop
@section('main')
<br>
<section id="dieuhuong-doc">
    <div class="container">
        <div class="row">
            <div class="col-md-4 nav-doc">
                @include('frontend.navbar.nav-school')
            </div>
            <div class="col-md-8 baiviet">
                <div class="" style="background: white; margin-bottom: 15px;">
                    <div class="d-flex breadcrumb_title" style="padding-top: 5px;">
                      <div class="p-2 mr-auto"><h1 class="text-uppercase"><strong>Cập nhật việc làm</strong></h1></div>
                      <div class="p-2">
                            <ul class="breadcrumb" style="background: white;">
                              <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
                              <li class="breadcrumb-item"><a href="{{url('/school')}}">Nhà trường</a></li>
                              <li class="breadcrumb-item active">Cập nhật</li>
                            </ul>
                      </div>
                    </div>
                </div>
                <div class="row std_row">
                    <div class="col-md-8 std_col" >
                        <div class="std_col_1" style="background: white;">
                            <div class="change_password">
                              <form method="POST">
                                <div class="form-group">
                              <label>Mã sinh viên</label>
                              <input type="text" class="form-control" name="student_code" value="{{$school->student_code}}">
                            </div>
                            <div class="form-group">
                              <label>Họ và tên</label>
                              <input type="text" class="form-control" name="student_name" value="{{$school->student_name}}">
                            </div>
                            
                            <div class="row">
                              <div class="col-md-6 form-group">
                                <label>Ngày sinh</label>
                                <input type="date" class="form-control" name="student_birthday" value="{{$school->student_birthday}}">
                              </div>
                              <div class="col-md-6 form-group">
                                <label>Giới tính</label>
                                <input type="text" class="form-control" name="student_gender" value="@if($school->student_gender == 0) Nam @else Nữ @endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6 form-group">
                                <label>Số điện thoại</label>
                                <input type="text" class="form-control" name="student_gender" value="@if($school->student_gender == 0) Nam @else Nữ @endif">
                              </div>
                              <div class="col-md-6 form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="student_gender" value="@if($school->student_gender == 0) Nam @else Nữ @endif">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-4 form-group">
                                <label>Khoa</label>
                                <select class="custom-select form-control" name="science_id">
                                  <option selected>Chọn khoa</option>
                                  {{-- @foreach($science as $sci)
                                    <option value="{{$sci->id}}" @if($sci->id == $school->science_id) selected @endif>{{$sci->science_name}}</option>
                                  @endforeach --}}
                                </select>
                                @if($errors->has('science_id'))
                                  <p class="help text-danger">{{ $errors->first('science_id') }}</p>
                                @endif
                              </div>
                              <div class="col-md-8 form-group">
                                <label>Chuyên ngành</label>
                                <select class="custom-select form-control" name="specialize_id">
                                  <option selected>Chọn chuyên ngành</option>
                                  {{-- @foreach($specialize as $spe)
                                    <option value="{{$spe->id}}" @if($spe->id == $school->specialize_id) selected @endif>{{{$spe->specialize_name}}}</option>
                                  @endforeach --}}
                                </select>
                                @if($errors->has('specialize_id'))
                                  <p class="help text-danger">{{ $errors->first('specialize_id') }}</p>
                                @endif
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-4 form-group">
                                <label>Khóa</label>
                                <select class="custom-select form-control" name="course_id">
                                  <option selected>Chọn khóa</option>
                                  {{-- @foreach($course as $cours)
                                  <option value="{{$cours->id}}" @if($cours->id == $school->course_id) selected @endif>{{{$cours->course_name}}}</option>
                                  @endforeach --}}
                                </select>
                                @if($errors->has('course_id'))
                                  <p class="help text-danger">{{ $errors->first('course_id') }}</p>
                                @endif
                              </div>
                              <div class="col-md-8 form-group">
                                <label>Lớp</label>
                                <input type="text" class="form-control" name="student_class" value="{{$school->student_class}}">
                                @if($errors->has('student_class'))
                                  <p class="help text-danger">{{ $errors->first('student_class') }}</p>
                                @endif
                              </div>
                            </div>
                            <div class="form-group">
                              <label>Giáo viên chủ nhiệm</label>
                              <input type="text" class="form-control" name="student_head_teacher" value="{{$school->student_head_teacher}}">
                              @if($errors->has('student_head_teacher'))
                                <p class="help text-danger">{{ $errors->first('student_head_teacher') }}</p>
                              @endif
                            </div>
                            <div class="form-group">
                              <label>Địa chỉ hiện tại</label>
                              <input type="text" class="form-control" name="student_address" value="{{$school->student_address}}">
                              @if($errors->has('student_address'))
                                <p class="help text-danger">{{ $errors->first('student_address') }}</p>
                              @endif
                            </div>
                            <div class="form-group">
                              <label>Tỉnh/Thành phố</label>
                              <select class="custom-select form-control" name="area_id" >
                                <option selected>Chọn Tình/Thành phố</option>
                                {{-- @foreach($area as $are)
                                  <option value="{{$are->id}}" @if($are->id == $school->area_id) selected @endif>{{$are->area_name}}</option>
                                @endforeach --}}
                              </select>
                              @if($errors->has('area_id'))
                                <p class="help text-danger">{{ $errors->first('area_id') }}</p>
                              @endif
                            </div>
                                <div class="form-group">
                                  <label>Tên công việc</label>
                                  <input type="text" class="form-control" name="school_name" value="{{old("school_name")}}">
                                </div>
                                <div class="row">
                                  <div class="col-md-6 form-group">
                                    <label>Chức vụ</label>
                                    <input type="text" class="form-control" name="school_phone" value="{{$school->school_phone}}">
                                  </div>
                                  <div class="col-md-6 form-group">
                                    <label>Thời gian làm</label>
                                    <input type="text" class="form-control" name="school_email" value="{{$school->school_email}}">
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label>Tên công ty</label>
                                  <input type="text" class="form-control" name="school_address" value="{{$school->school_address}}">
                                </div>
                                <div class="form-group">
                                  <label>Địa chỉ công ty</label>
                                  <input type="text" class="form-control" name="school_web" value="{{$school->school_web}}">
                                </div>
                                <button type="submit" class="btn btn-outline-primary">Cập nhật</button>
                                <a href="{{url('school/info')}}" class="btn btn-outline-secondary">Hủy bỏ</a>
                                {{csrf_field()}}
                              </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 std_col">
                        <div class="" style="background: white">
                            <img onclick="a()"  style="width: 100%" src="{{asset('local/storage/app/school/'.$school->school_logo)}}">
                            <p class="text-center">TLU</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
@stop