@extends('admin.template.master')
@section('content')

  <div class="row">
            <div class="col-8 text-center">
                <h4>Danh sách khách hàng</h4>
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
                <h4>Thêm khách hàng</h4>
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
                            <th scope="col">Tên khách hàng</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i=1;
                        @endphp
                        @foreach ($khachHang as $item)
                        <tr>
                          <th>{{$i++}}</th>
                            <th scope="row">{{$item->kh_ma}}</th>
                            <td>{{$item->kh_ten}}</td>
                            <td>{{$item->kh_diachi}}</td>
                            <td>{{$item->kh_sdt}}</td>
                            <td>
                              <a href="" class="btn btn-primary">Chi Tiết</a>
                              <a href="" class="btn btn-success">Sửa</a>
                            </td>
                        </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
                </div>
                <div class="col-4">
                    <form action="them-khach-hang" method="POST">
                      @csrf
                        <div class="form-group">
                          <div class="form-group">
                            <label for="exampleInputTenloai">Tên khách hàng</label>
                            <input type="text" name="tenKhachHang" class="form-control" id="exampleInputTendichvu" aria-describedby="tendichvuHelp" placeholder="Nhập tên khách hàng...">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputTenloai">Địa chỉ khách hàng</label>
                            <input type="text" name="diaChiKhachHang" class="form-control" id="exampleInputTendichvu" aria-describedby="tendichvuHelp" placeholder="Nhập địa chỉ khách hàng...">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputTenloai">Số điện thoại khách hàng</label>
                            <input type="text" name="sdtKhachHang" class="form-control" id="exampleInputTendichvu" aria-describedby="tendichvuHelp" placeholder="Nhập số điện thoại khách hàng...">
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
    </div>
 
@endsection