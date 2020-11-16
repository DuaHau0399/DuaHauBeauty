@extends('admin.template.master')
@section('content')

  <div class="row">
            <div class="col-8 text-center">
                <h4>Danh sách dịch vụ</h4>
                 <!-- Xoadv -->
              @if(Session::has('alert-del'))
                  <p style="color: blue" class="text-center">
                    {{ Session::get('alert-del') }}
                  </p>
                @endif  
                @if(Session::has('alert-del-error'))
                  <p style="color: red" class="text-center">
                    {{ Session::get('alert-del-error') }}
                  </p>
                @endif  
            </div>
            <div class="col-4 text-center">
                <h4>Thêm dịch vụ</h4>
                <!-- Themdv -->
                @if(Session::has('alert'))
                  <p style="color: blue" class="text-center">
                    {{ Session::get('alert') }}
                  </p>
                @endif  
                @if(Session::has('alert-error'))
                  <p style="color: red" class="text-center">
                    {{ Session::get('alert-error') }}
                  </p>
                @endif
              
            </div>
        </div>
    <div class="row">
    <div class="col-8">
                <form action="" method="GET">
                  <p class="text-center mt-1"> <b>Tìm kiếm</b> </p>
                  <div class="col-12 mb-2">
                    <input type="text" name="tuKhoa" class="form-control" id="exampleInputTenloai" aria-describedby="tenloaiHelp" placeholder="Tìm kiếm theo tên...">
                  </div>
                </form>
                    <table class="table mt-2">
                        <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">ID</th>
                            <th scope="col">Tên dịch vụ</th>
                           
                            <th scope="col">Giá tiền</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                          $i=1;
                        @endphp
                        @foreach ($giaDV as $item)
                        <tr>
                          <th>{{ $i++ }}</th>
                            <th scope="row">{{ $item->dv_ma }}</th>
                          
                            <td>{{ $item->dv_ten }}</td>
                            <td>{{ $item->gia_tien}}</td>
                            <td>
                              <a href="" class="btn btn-primary">Chi Tiết</a>
                              <a href="{{route('sua-dich-vu',['id'=>$item->dv_ma])}}" class="btn btn-success">Sửa</a>
                              <a href="{{route('xoa-dich-vu',['id'=>$item->dv_ma])}}" class="btn btn-danger" >Xóa</a>
                              
                            </td>
                        </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
                </div>
                <div class="col-4">
                    <form action="{{ route('them-dich-vu')}}" method="POST">
                      @csrf
                        <div class="form-group">
                          <div class="form-group">
                            <label for="exampleInputTenloai">Tên dịch vụ</label>
                            <input type="text" name="tenDichVu" class="form-control" id="exampleInputTendichvu" aria-describedby="tendichvuHelp" placeholder="Nhập tên dịch vụ...">
                          </div>
                          <!-- <div class="form-group">
                            <label for="exampleInputTenloai">Ngày cập nhật</label> <br>                 
                            <input type="text" name="ngay" class="form-control" id="exampleInputTendichvu" aria-describedby="tendichvuHelp" placeholder="Nhập ngày...">
                          </div> -->
                          <div class="form-group">
                            <label for="exampleInputTenloai">Giá dịch vụ</label> <br>                 
                            <input type="text" name="giaDichVu" class="form-control" id="exampleInputTendichvu" aria-describedby="tendichvuHelp" placeholder="Nhập giá dịch vụ...">
                          </div>
                          <div class="form-group" >
                            <label for="exampleInputTenloai">Mô tả dịch vụ</label> <br>
                            <textarea name="moTaDV" id="summernote" cols="50" rows="20"></textarea>
                          </div>
                        
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
    </div>
 
@endsection