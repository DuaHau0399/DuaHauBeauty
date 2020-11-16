<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class KhachHangController extends Controller
{
    public function index(){
        $khachHang = DB::table('khachhang')->get();
        return view('admin.khachhang.index', compact('khachHang'));
    }
    public function themKH(Request $request){
        try {
            $addKhachHang = DB::table('khachhang')->insert(
                [
                    'kh_ten' => $request->tenKhachHang,
                    'kh_diachi' => $request->diaChiKhachHang,
                    'kh_sdt' => $request->sdtKhachHang
                ]
            );
            Session::flash('alert', 'Thêm thành công');
            return redirect()->route('khach-hang');
        } catch (\Throwable $th) {
            Session::flash('alert-error', 'Có lỗi xảy ra trong quá trình thêm');
            return redirect()->route('khach-hang');
        }
    }
    // public function xoaKH($id)
    // {
    //     try {
    //         $deDichVu = DB::table('khachhang')->where('kh_ma',$id)->delete();
    //         Session::flash('alert-del', 'Xóa thành công');
    //         return redirect()->route('khach-hang');
    //     } catch (\Throwable $th) {
    //         Session::flash('alert-del-error', 'Xóa thành công');
    //         return redirect()->route('khach-hang');
    //     }
    // }
}
