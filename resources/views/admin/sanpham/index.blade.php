@extends('admin.template.master')
@section('content')

  <div class="row">
            <div class="col-8 text-center">
                <h4>Danh sách sản phẩm</h4>
            </div>
            <div class="col-4 text-center">
                <h4>Thêm sản phẩm</h4>
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
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Giá tiền</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row"></th>
                            
                            <td>
                              <a href="" class="btn btn-success">Sửa</a>
                              <a href="" class="btn btn-danger">Xóa</a>
                            </td>
                        </tr>
                       
                        
                        </tbody>
                    </table>
                </div>
                <div class="col-4">
                    <form action="" method="POST">
                      @csrf
                        <div class="form-group">
                          <div class="form-group">
                            <label for="exampleInputTenloai">Tên sản phẩm</label>
                            <input type="text" name="tenDichVu" class="form-control" id="exampleInputTendichvu" aria-describedby="tendichvuHelp" placeholder="Nhập tên dịch vụ...">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputTenloai">Giá sản phẩm</label> <br>                 
                            <input type="text" name="giaDichVu" class="form-control" id="exampleInputTendichvu" aria-describedby="tendichvuHelp" placeholder="Nhập giá dịch vụ...">
                          </div>
                          <div class="form-group" >
                            <label for="exampleInputTenloai">Mô tả sản phẩm</label> <br>
                            <textarea name="moTaSP" id="" cols="50" rows="20"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="hinhSP">Hình sản phẩm</label>
                            <input type="file" name="hinhSP" class="form-control" id="hinhSP" aria-describedby="tenloaiHelp" placeholder="Hình sản phẩm...">
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
    </div>
 
@endsection