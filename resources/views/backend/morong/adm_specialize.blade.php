@extends('backend.master')
@section('title', 'Chuyên ngành')
@section('main')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Mở rộng - Chuyên ngành</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li class="active">Chuyên ngành</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
             <section class="col-lg-12 connectedSortable">
                <div class="table table-responsive">
                    <table class="table table-bordered" id="table">
                        <tr>
                            <th width="150px">ID</th>
                            <th>Tên khoa</th>
                            <th>Tên Chuyên ngành</th>
                            <th>Ngày tạo</th>
                            <th class="text-center">
                                <a class="create-modal btn btn-success btn-sm">
                                    <i class="glyphicon glyphicon-plus"></i>
                                </a>
                            </th>
                        </tr>
                        {{ csrf_field() }}
                        @foreach ($b as $value)
                        <tr class="post{{$value->id}}">
                            <td>{{$value->id}}</td>
                            <td>{{$value->science_name}}</td>
                            <td><a class="show-modal" data-id="{{$value->id}}" data-name="{{$value->specialize_name}}" data-khoa="{{$value->science_id}}">
                                    {{ $value->specialize_name }}
                                </a></td>
                            <td>{{ $value->created_at }}</td>
                            <td class="text-center">

                                <a class="edit-modal btn btn-warning btn-sm" data-id="{{$value->id}}" data-name="{{$value->specialize_name}}" data-khoa="{{$value->science_name}}">
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </a>
                                <a class="delete-modal btn btn-danger btn-sm" data-id="{{$value->id}}" data-name="{{$value->specialize_name}}"  data-khoa="{{$value->science_name}}">
                                    <i class="glyphicon glyphicon-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="text-right">
                        {{$b->links()}}
                    </div>
                </div>

                
            </section>
        </div>
        {{-- Modal Form Create Post --}}
        <div id="create" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="body">Chọn khoa</label>
                                <div class="col-sm-10">
                                    <select name="khoa" id="khoa" class="form-control">
                                        <option value=""></option>
                                        @foreach($khoas as $k)
                                            <option value="{{$k->id}}">{{$k->science_name}}</option>
                                        @endforeach
                                    </select>
                                    <p class="error text-center alert alert-danger hidden"></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="body">Tên khóa</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="VD: K27" required>
                                    <p class="error text-center alert alert-danger hidden"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="submit" id="add">
                            <span class="glyphicon glyphicon-plus"></span>Thêm mới
                        </button>
                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                            <span class="glyphicon glyphicon-remobe"></span>Đóng
                        </button>
                    </div>
                </div>
            </div>
        </div></div>
{{-- Modal Form Show POST --}}
<div id="show" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">ID :</label>
                    <b id="i"/>
                </div>
                <div class="form-group">
                    <label for="">Tên chuyên ngành:</label>
                    <b id="ti"/>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Modal Form Edit and Delete Post --}}
<div id="myModal"class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="modal">
                    <div class="form-group">
                        <label class="control-label col-sm-2"for="id">ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="fid" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="body">Chọn khoa</label>
                        <div class="col-sm-10">
                            <select name="khoa" id="khoad" class="form-control">
                                <option value=""></option>
                                @foreach($khoas as $k)
                                    <option value="{{$k->id}}">{{$k->science_name}}</option>
                                @endforeach
                            </select>
                            <p class="error text-center alert alert-danger hidden"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2"for="body">Tên khóa</label>
                        <div class="col-sm-10">
                            <textarea type="name" class="form-control" id="b"></textarea>
                        </div>
                    </div>
                </form>
                {{-- Form Delete Post --}}
                <div class="deleteContent">
                    Bạn có chắc muốn xóa không???? <span class="title"></span>?
                    <span class="hidden id"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn actionBtn" data-dismiss="modal">
                    <span id="footer_action_button" class="glyphicon"></span>
                </button>
                <button type="button" class="btn btn-warning" data-dismiss="modal">
                    <span class="glyphicon glyphicon"></span>Đóng
                </button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    {{-- ajax Form Add Post--}}
    $(document).on('click','.create-modal', function() {
        $('#create').modal('show');
        $('.form-horizontal').show();
        $('.modal-title').text('Thêm mới khóa học');
    });
    $("#add").click(function() {
        $.ajax({
            type: 'POST',
            url: '{{asset('admin/morong/chuyennganh/add/')}}',
            data: {
            '_token': $('input[name=_token]').val(),
                'name': $('input[name=name]').val(),
                'khoa': $('select[name=khoa]').val()
        },
        success: function(data){
            if ((data.errors)) {
                $('.error').removeClass('hidden');
                $('.error').text(data.errors.title);
                $('.error').text(data.errors.body);
            } else {
                $('.error').remove();
                $('#table').append("<tr class='post" + data.id + "'>"+
                    "<td>" + data.id + "</td>"+
                    "<td>" + data.science_id + "</td>"+
                    "<td><a class='show-modal' data-id='" + data.id + "' data-name='" + data.specialize_name + "'>" + data.specialize_name + "</a></td>"+
                    "<td>" + data.created_at + "</td>"+
                    "<td class='text-center'><button class='edit-modal btn btn-warning btn-sm' data-id='" + data.id + "' data-name='" + data.specialize_name + "'><span class='glyphicon glyphicon-pencil'></span></button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "' data-name='" + data.specilize_name + "'><span class='glyphicon glyphicon-trash'></span></button></td>"+
                    "</tr>");
                // window.location=('{{asset('admin/morong/chuyennganh/')}}')
            }
        },
    });
        $('#name').val('');
        $('#khoa').val('');
    }); 

    // function Edit POST
    $(document).on('click', '.edit-modal', function() {
        $('#footer_action_button').text(" Cập nhật");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Sửa thông tin Chuyên ngành');
        $('.deleteContent').hide();
// $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#b').val($(this).data('name'));
        $('#khoad').val($(this).data('science_id'));
        $('#myModal').modal('show');
    });

    $('.modal-footer').on('click', '.edit', function() {
        $.ajax({
            type: 'POST',
            url: '{{asset('admin/morong/chuyennganh/edit/')}}',
            data: {
            '_token': $('input[name=_token]').val(),
                'id': $("#fid").val(),
                'name': $('#b').val(),
                'khoa': $('#khoad').val()
        },
        success: function(data) {
            $('.post' + data.id).replaceWith(" "+
                "<tr class='post" + data.id + "'>"+
                "<td>" + data.id + "</td>"+
                "<td>" + data.science_name + "</td>"+
                "<td><a class='show-modal' data-id='" + data.id + "' data-name='" + data.specialize_name + "' data-khoa='" + data.science_name + "'>" + data.specialize_name + "</a></td>"+
                "<td>" + data.created_at + "</td>"+
                "<td class='text-center'> <button class='edit-modal btn btn-warning btn-sm' data-id='" + data.id + "' data-name='" + data.specialize_name + "'><span class='glyphicon glyphicon-pencil'></span></button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "' data-name='" + data.specialize_name + "'><span class='glyphicon glyphicon-trash'></span></button></td>"+
                "</tr>");
            }
        });
    });

    // form Delete function
    $(document).on('click', '.delete-modal', function() {
        $('#footer_action_button').text(" Xóa");
        $('#footer_action_button').removeClass('glyphicon-check');
        $('#footer_action_button').addClass('glyphicon-trash');
        $('.actionBtn').removeClass('btn-success');
        $('.actionBtn').addClass('btn-danger');
        $('.actionBtn').addClass('delete');
        $('.modal-title').text('Xóa thông tin chuyên ngành');
        $('.id').text($(this).data('id'));
        $('.deleteContent').show();
        $('.form-horizontal').hide();
        $('.title').html($(this).data('title'));
        $('#myModal').modal('show');
    });

    $('.modal-footer').on('click', '.delete', function(){
        $.ajax({
            type: 'POST',
            url: '{{asset('admin/morong/chuyennganh/delete/')}}',
            data: {
                '_token': $('input[name=_token]').val(),
                    'id': $('.id').text()
            },
            success: function(data){
                $('.post' + $('.id').text()).remove();
            }
        });
    });

    // Show function
    $(document).on('click', '.show-modal', function() {
        $('#show').modal('show');
        $('#i').text($(this).data('id'));
        $('#ti').text($(this).data('name'));
        $('.modal-title').text('Thông tin chuyên ngành');
    });
</script>
<!-- /.row (main row) -->
</section>
<!-- /.content -->
</div>
@stop