@extends('frontend.master')
@section('title', 'Doanh nghiệp')
@section('banner')
@include('frontend.slider.slider_pr')
@stop
@section('main')
<br>
<section id="dieuhuong-doc">
    <div class="container">
        <div class="row">
            <div class="col-md-4 nav-doc">
                @include('frontend.doanhnghiep.nav.nav-enter')
            </div>
            <div class="col-md-8 baiviet">
                <div class="dieuhuong-doc-search">
                    <div class="row dieuhuong-doc-search-2">
                        <div class="col-md-4 dieuhuong-doc-search-2-col dieuhuong-doc-search-2-text">
                            <i class="fas fa-search"></i>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm">
                            </div>
                        </div>
                        <div class="col-md-3 dieuhuong-doc-search-2-col">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Chọn ngành nghề</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 dieuhuong-doc-search-2-col">
                            <div class="form-group">
                                <select class="form-control" id="sel1">
                                    <option>Tỉnh/Thành phố</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 dieuhuong-doc-search-2-col">
                            <div class="form-group">
                                <input type="submit" class="form-control" value="Tìm kiếm">
                            </div>
                        </div>
                    </div>
                    <div class="row dieuhuong-doc-search-info">
                        <div class="col-6 text-left">
                            <p>Tổng số hồ sơ <span class="text-success">980</span> bộ</p>
                        </div>
                        <div class="col-6 text-right">
                            <p><a href="#">Mới nhất</a> | <a href="#">Hạn nộp hồ sơ</a></p>
                        </div>
                    </div>
                </div>
                <div class="baiviet-post">
                    @foreach($tin as $ti)
                    <div class="student">
                        <div class="row student-content">
                            <div class="col-md-5 student-content-col enterprise-content-col">
                                <div class="card">
                                    <img src="{{asset('../storage/app/tintuyendung/'.$ti->recruitment_img)}}" style="width:100%" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title text-center"><a href="#">{{$ti->recruitment_name}}</a></h4>
                                        <div class="card-text">{!! $ti->recruitment_describe !!}</div>
                                    </div>
                                    <div class="text-center card-chitiet"><a href="{{url('/enterprise/detail_ttd/'.$ti->id)}}">Xem chi tiết <i class="fas fa-angle-double-right"></i></a></div>
                                </div>
                            </div>
                            <div class="col-md-7 student-content-col enterprise-content-col">
                                <div class="enterprise-content-col-title">
                                    <div class="d-flex">
                                      <div class="">
                                        <h5>Ứng viên</h5>
                                      </div>
                                      <div class="flex-grow-1">
                                        <hr>
                                      </div>
                                      <div class="enterprise-col-title-sx">
                                        <div class="dropdown">
                                          <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                                           Sắp xếp
                                          </button>
                                          <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Tin mới nhất</a>
                                            <a class="dropdown-item" href="#">Tin nộp trước</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="enterprise-content-col-send">
                                    @foreach($jr as $j)
                                        @if($j->recruitment_id == $ti->id)
                                        <div class="media">
                                            @if(!empty($j->student_img))
                                                <img src="images/viet.jpg" class="rounded-circle" style="width:60px; height: 60px;">
                                            @else
                                                <i class="fas fa-user-circle fa-4x" style="width:60px;"></i>    
                                            @endif
                                            <div class="media-body">
                                                <h4>{{$j->jobapplication_name}}</h4>
                                                <p><small><i>Người gửi: </i></small> {{$j->student_name}}</p>
                                                 <p>Ngày nhận: {{$j->created_at}}</p>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                    <div class="media-paginate d-flex justify-content-end">
                                        {{-- {{$jr->links('vendor.pagination.simple-default')}} --}}
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach

                   
                    <div class="col-md-12 student-pgn">
                        <div class="row">
                            {{$tin->links('vendor.pagination.bootstrap-4')}}
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>
<br>

@stop