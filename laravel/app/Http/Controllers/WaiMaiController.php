<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;

class WaiMaiController extends Controller
{
    public $app = ['meituan' => '美团外卖', 'elm' => '饿了么', 'baidu' => '百度外卖'];

    public function getCoupon($app)
    {
        $data = Coupon::where('app', $this->app[$app])->orderby('id', 'desc')->limit(20)->get();
//        foreach ($data as $value) {
//            $result[array_search($value['app'], $this->app)][] = $value;
//
//        }
        $result = [
            'title' => $this->app[$app],
            'data' => $data,
        ];
        return view('coupon', compact('result'));
        return $result;
    }

    public function click(Request $request)
    {
        $id = $request->get('id');
        return Coupon::where('id', $id)->increment('click');
    }
}
