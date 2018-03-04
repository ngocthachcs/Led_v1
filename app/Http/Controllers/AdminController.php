<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\GetData;

class AdminController extends Controller
{
    public function viewHome()
    {
        return redirect()->route('admin.getSanPham');
    }
    // Danh muc
    public function viewDanhMuc()
    {
        $danhmucs = DB::table('categorys')->paginate(10);
        return view('admin.danhmuc.list-danhmuc', compact('danhmucs'));
    }
    public function viewAddDanhMuc()
    {
        return view('admin.danhmuc.add-danhmuc');
    }
    public function postAddDanhMuc(Request $req)
    {
        $data = $req->input('dm');
        $check = GetData::checkNameInsert($data['name'], 'name', 'categorys');
        if($check == 0){
            $data['slug']= GetData::stripUnicode($data['name']);
            $data['slug']= strtolower(str_replace(" ","-",$data['slug']));
            DB::table('categorys')->insert(array(
                'name' => $data['name'],
                'slug' => $data['slug'],
                'content' => null,
                'created_at' => date('Y-m-d H:i:s')
            ));
            return redirect()->route('admin.getDanhMuc');
        }else{
            return 'loi';
        }
    }
    public function viewEditDanhMuc($slug)
    {
        $danhmuc = DB::table('categorys')
            ->where('slug',$slug)
            ->first();
        return view('admin.danhmuc.edit-danhmuc',compact('danhmuc'));
    }
    public function postEditDanhMuc(Request $req)
    {
        $data = $req->input('dm');
        $check = GetData::checkNameUpdate($data['id'], 'id', $data['name'], 'name', 'categorys');
        if($check == 0){
            $data['slug']= GetData::stripUnicode($data['name']);
            $data['slug']= strtolower(str_replace(" ","-",$data['slug']));
            DB::table('categorys')
            ->where('id', $data['id'])
            ->update(array(
                'name' => $data['name'],
                'slug' => $data['slug'],
                'content' => null,
                'updated_at' => date('Y-m-d H:i:s')
            ));
            return redirect()->route('admin.getDanhMuc');
        }else{
            return 'loi';
        }
    }
    public function deleteDanhMuc($id)
    {
        $check = GetData::checkNameInsert($id, 'category_id', 'products');
        if($check == 0){
            $danhmuc = DB::table('categorys')
                ->where('id',$id)
                ->delete();
            return redirect()->route('admin.getDanhMuc');
        }
        else{
            return 'loi';
        }
    }

    // San Pham
    public function viewSanPham()
    {
        $sanphams = DB::table('products')->paginate(10);
        return view('admin.sanpham.list-sanpham', compact('sanphams'));
    }
    public function viewAddSanPham()
    {
        $danhmucs = DB::table('categorys')->get();
        return view('admin.sanpham.add-sanpham', compact('danhmucs'));
    }
    public function postAddSanPham(Request $req)
    {
        $data= $req->input('sp');
        $file= $req->file('file');
        $check = GetData::checkNameInsert($data['title'], 'title', 'products');
        if($check == 0){
            $data['slug']= GetData::stripUnicode($data['title']);
            $data['slug']= strtolower(str_replace(" ","-",$data['slug']));
            if(isset($file)){
                $nameFile = time().'_'.$file->getClientOriginalName();
                $path = 'assets/uploads/images/';
                $file->move($path,$nameFile);
            }
            DB::table('products')->insert(array(
                'category_id' => $data['category_id'],
                'title' => $data['title'],
                'slug' => $data['slug'],
                'price' => $data['price'],
                'old_price' => $data['old_price'],
                'thong_so_ky_thuat' => $data['thong_so_ky_thuat'],
                'mo_ta' => $data['mo_ta'],
                'img' => $path.$nameFile,
                'status' => $data['status'],
                'created_at' => date('Y-m-d H:i:s')
            ));
            return redirect()->route('admin.getSanPham');
        }else{
            return 'loi';
        }
    }
    public function viewEditSanPham($id)
    {
        $danhmucs = DB::table('categorys')->get();
        $sanpham = DB::table('products')
            ->where('id',$id)
            ->first();
        return view('admin.sanpham.edit-sanpham', compact('sanpham', 'danhmucs'));
    }
     public function postEditSanPham(Request $req)
    {
        $data= $req->input('sp');
        $file= $req->file('file');
        $check = GetData::checkNameUpdate($data['id'], 'id',$data['title'], 'title', 'products');
        if($check == 0){
            $data['slug']= GetData::stripUnicode($data['title']);
            $data['slug']= strtolower(str_replace(" ","-",$data['slug']));
            if(isset($file)){
                $nameFile = time().'_'.$file->getClientOriginalName();
                $path = 'assets/uploads/images/';
                $file->move($path,$nameFile);
                $data['img'] = $path.$nameFile;
            }
            DB::table('products')
            ->where('id', $data['id'])
            ->update(array(
                'category_id' => $data['category_id'],
                'title' => $data['title'],
                'slug' => $data['slug'],
                'price' => $data['price'],
                'old_price' => $data['old_price'],
                'thong_so_ky_thuat' => $data['thong_so_ky_thuat'],
                'mo_ta' => $data['mo_ta'],
                'img' => $data['img'],
                'status' => $data['status'],
                'updated_at' => date('Y-m-d H:i:s')
            ));
            return redirect()->route('admin.getSanPham');
        }else{
            return 'loi';
        }
    }
    public function deleteSanPham($id)
    {
        $sanpham = DB::table('products')
            ->where('id',$id)
            ->delete();
        return redirect()->route('admin.getSanPham');
    }

    // Don Hang
    public function viewDonHang()
    {
        $donhangs = DB::table('cart')->orderby('id', 'desc')->paginate(10);
        return view('admin.list-donhang', compact('donhangs'));
    }
    public function viewDetailDonHang($id)
    {
        $sanphams = DB::table('cart_details')
            ->leftjoin('products', 'cart_details.product_id', '=', 'products.id')
            ->where('cart_details.cart_id', $id)
            ->select('products.id', 'products.title', 'products.price', 'cart_details.quality')
            ->get();
        return view('admin.detail-donhang', compact('sanphams'));
    }
    // Lien He
    public function viewLienHe()
    {
        $lienhes = DB::table('messages')->orderby('id', 'desc')->paginate(10);
        return view('admin.list-lienhe', compact('lienhes'));
    }

}
