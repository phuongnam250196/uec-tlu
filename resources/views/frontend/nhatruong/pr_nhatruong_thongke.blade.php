@extends('frontend.master')
@section('title', 'NT | Thống kê')
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
                      <div class="p-2 mr-auto"><h1 class="text-uppercase"><strong>Báo cáo - Thống kê</strong></h1></div>
                      <div class="p-2">
                            <ul class="breadcrumb" style="background: white;">
                              <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
                              <li class="breadcrumb-item"><a href="{{url('school')}}">Nhà trường</a></li>
                              <li class="breadcrumb-item active">Tạo mới</li>
                            </ul>
                      </div>
                    </div>
                </div>
                <div class="dieuhuong-doc-search">
                    <div class="row dieuhuong-doc-search-2">
                        <div class="col-md-2 dieuhuong-doc-search-2-col">
                            <div class="form-group">
                                <select class="form-control" id="sel1">
                                    <option>Sắp xếp</option>
                                    <option>Tăng</option>
                                    <option>Giảm</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 dieuhuong-doc-search-2-col">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Số lượng">
                            </div>
                        </div>
                        <div class="col-md-3 dieuhuong-doc-search-2-col">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Chuyên ngành</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 dieuhuong-doc-search-2-col">
                            <div class="form-group">
                                <select class="form-control" id="sel1">
                                    <option>Khóa</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1 dieuhuong-doc-search-2-col">
                            <div class="form-group">
                                <input type="submit" class="form-control" value="Tìm">
                            </div>
                        </div>
                        <div class="col-md-1 dieuhuong-doc-search-2-col">
                            <div class="form-group">
                                <input type="submit" class="form-control" value="Excel">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="baiviet-post">
                    <div class="tt-thongked">
                        <div class="table-responsive">
                            <table class="table table-hover" style="width: 2000px;">
                                <thead>
                                    <tr>
                                        <th width="20">ID</th>
                                        <th>Mã sinh viên</th>
                                        <th>Họ tên</th>
                                        <th>Ngày sinh</th>
                                        <th>Khoa</th>
                                        <th>Chuyên ngành</th>
                                        <th>Khóa</th>
                                        <th>Lớp</th>
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th>Giáo viên</th>
                                        <th>Địa chỉ</th>
                                        <th>Tỉnh/thành phố</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>A25288</td>
                                        <td>Trần Phương Nam</td>
                                        <td>25/01/1996</td>
                                        <td>Toán tin</td>
                                        <td>Khoa học máy tính</td>
                                        <td>K27</td>
                                        <td>TI27g1</td>
                                        <td>01654524503</td>
                                        <td>phuongnam250196@gmail.com</td>
                                        <td>Mai Thúy Nga</td>
                                        <td>168 Kim giang</td>
                                        <td>Hà Nội</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>A24244</td>
                                        <td>Trương Lông Phú</td>
                                        <td>22/11/1996</td>
                                        <td>Toán tin</td>
                                        <td>Khoa học máy tính</td>
                                        <td>K27</td>
                                        <td>TI27e1</td>
                                        <td>0938282783</td>
                                        <td>bachlaoto@gmail.com</td>
                                        <td>Mai Thúy Nga</td>
                                        <td>168 Kim giang</td>
                                        <td>Hà Nội</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>A25345</td>
                                        <td>Nguyễn Thọ Việt</td>
                                        <td>09/10/1996</td>
                                        <td>Toán tin</td>
                                        <td>Khoa học máy tính</td>
                                        <td>K27</td>
                                        <td>TI27g1</td>
                                        <td>0978654832</td>
                                        <td>viet240395@gmail.com</td>
                                        <td>Mai Thúy Nga</td>
                                        <td>11 Hà đông</td>
                                        <td>Hà Nội</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>A25300</td>
                                        <td>Nguyễn Mạnh Huy</td>
                                        <td>18/02/1996</td>
                                        <td>Ngoại ngữ</td>
                                        <td>Ngôn ngữ Trung</td>
                                        <td>K27</td>
                                        <td>TI27g1</td>
                                        <td>01656098214</td>
                                        <td>manhhuy@gmail.com</td>
                                        <td>Nguyễn Thị Minh</td>
                                        <td>16 Đền Lừ</td>
                                        <td>Hà Nội</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md-12 pr_dn_paginate">
                    <div class="row">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
@stop