@extends('admin.template.master')
@section('detail')
<div class="row">
	<div class="col-12 text-center">
		<h4>Sửa dịch vụ {{$dichVu->dv_ten}}</h4>
	</div>
</div>
<div class="col-/12">
	<form action="{{route('xu-ly-sua-dich-vu',['id'=>$dichVu->'dv_ma'])}}" method="POST">
		@csrf
		<div class="form-group">
			<label for="">Tên dịch vụ</label>
			<input type="text" autocomplete="off" value="" name="tenDichVu"class="form-control" id="dichVu" placeholder="Nhập tên dịch vụ...">
		</div>
		<div class="form-group">
			<label for="giaDichVu">Giá</label><br>
			<input type="text" class="form-control" name="giaDichVu" value="{{$dichVu->gia_tien}}">
		</div>
        <div class="form-group" >
            <label for="exampleInputTenloai">Mô tả dịch vụ</label> <br>
            <textarea name="moTaDV" id="summernote" cols="50" rows="20"></textarea>
        </div>
		<button type="submit" class="btn btn-primary">Sửa</button>
	</form>
</div>
</div>   
@endsection



