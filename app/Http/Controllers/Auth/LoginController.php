<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use DB;
use Session;

class LoginController extends Controller
{
    // Admin
    public function getLoginAdmin(){
        return view('admin.dang-nhap');
    }
    public function postLoginAdmin(Request $req){
        $objUser = DB::table('users')
            ->where('email', $req->email)
            ->where('passwork', $req->passwork )
            ->first();
        if( count($objUser) > 0){
            // $user = array('id'=> $objUser->Id,'name'=> $objUser->FullName,'role'=> $objUser->Role);
            Session::put('admin', (object)$objUser);
            return redirect()->route('admin.getSanPham');
        }
        else{
            return redirect()->route('admin.dang-nhap');
        }
    }
    public function logoutAdmin(){
        Session::forget('admin');
        return redirect()->route('admin.dang-nhap');
    }
}
