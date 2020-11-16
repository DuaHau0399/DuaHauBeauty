<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;
class DichVuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $giaDV = DB::table('dongiadv')
        ->join('ngay','ngay.ngay_ma','dongiadv.ngay_ma')
        ->join('dichvu','dichvu.dv_ma','dongiadv.dv_ma')
        // ->select('dichvu.dv_ten', 'dongiaDV.gia_tien')
        ->get();
        // dd($giaDV);
        // $dichVu = DB::table('dichvu')->get();
        return view('admin.dichvu.index', compact('giaDV'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $addNgay = DB::table('ngay')->insertGetId(
                [
                   'ngay' => Carbon::now()
                ]
            ); 
            $addDichVu = DB::table('dichvu')->insertGetId(
                [
                    'dv_ten' => $request->tenDichVu,
                    'dv_mota' => $request->moTaDV
                ]
            );
           
            $addGia = DB::table('dongiaDV')->insert(
                [
                    'dv_ma' => $addDichVu,
                    'ngay_ma' => $addNgay,
                    'gia_tien' => $request->giaDichVu
                ]
            );
            Session::flash('alert', 'Thêm thành công');
            return redirect()->route('dich-vu');
        } catch (\Throwable $th) {
            Session::flash('alert-error', 'Có lỗi trong quá trình thêm');
            return redirect()->route('dich-vu');
        }
        
    }
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dichVu =  DB::table('dongiadv')
            ->join('ngay','ngay.ngay_ma','dongiadv.ngay_ma')
            ->join('dichvu','dichvu.dv_ma','dongiadv.dv_ma')
            ->where('dv_ma',$id)->get();
            dd($dichVu);
        return view('admin.dichvu.suadv', compact('dichVu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function suaDV(Request $request, $id){
        $updateDV = DB::table('dichvu')->where('dv_ma',$id)->update(
            [
                'dv_ten'=>$request->tenDichVu,
                'dv_mota'=>$request->moTaDV,
            ]
        );
        $updatengayDV = DB::table('ngay')->update(
            [
                'ngay' => Carbon::now()
            ]
        );
        $updateGiaDV = DB::table('dongiaDV')->update(
            [
                'dv_ma' => $updateDV,
                'ngay_ma' => $updatengayDV,
                'gia_tien' => $request->giaDichVu
            ]
        );
        return redirect()->route('dich-vu', compact('updateDV'));
    }
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $deDichVu = DB::table('dichvu')->where('dv_ma',$id)->delete();
            Session::flash('alert-del', 'Xóa thành công');
            return redirect()->route('dich-vu');
        } catch (\Throwable $th) {
            Session::flash('alert-del-error', 'Xóa thành công');
            return redirect()->route('dich-vu');
        }
    }
}
