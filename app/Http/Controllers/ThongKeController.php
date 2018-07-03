<?php

namespace App\Http\Controllers;
use App\ThongKe;
use Illuminate\Http\Request;

class ThongKeController extends Controller
{
    //
    public function getThongKeDoanhThu(Request $request)
    {
    	$month=date('n');
    	$year=date('Y');
    	if(isset($request->thang)) {$month = $request->thang;$year = $request->nam;}
    	$ThongKe = new ThongKe();
    	$thongkedoanhthu= $ThongKe->getdoanhthu($request->thang,$request->nam);
    	return view('page.thongkedoanhthu',['thongkedoanhthu'=>$thongkedoanhthu, 'month'=>$month,'year'=>$year]);
    }
}