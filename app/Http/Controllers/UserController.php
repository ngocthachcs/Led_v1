<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Cookie;

class UserController extends Controller
{
    // Trang chu
    public function index()
    {
        $sliders = DB::table('slider')
            ->orderBy('oder', 'asc')
            ->get();
        $sp_1 = DB::table('products')
            ->where('category_id', 1)
            ->get();
        $sp_2 = DB::table('products')
            ->where('category_id', 3)
            ->get();
        $sp_3 = DB::table('products')
            ->where('category_id', 4)
            ->get();
        $sp_4 = DB::table('products')
            ->where('category_id', 5)
            ->get();
        $array_slug = [
            ['title'=>'ĐÈN TRANG TRÍ','slug'=>'den-trang-tri'],
            ['title'=>'ĐÈN LED ÂM TRẦN','slug'=>'den-led-am-tran'],
            ['title'=>'ĐÈN LED TUÝP','slug'=>'den-led-tuyp'],
            ['title'=>'ĐÈN LED DÂY','slug'=>'den-led-day']
        ];
        return view('user.index', compact('sliders', 'sp_1', 'sp_2', 'sp_3', 'sp_4', 'array_slug'));
    }
    public function viewTimKiem(Request $req)
    {
        $search = Request()->input('s');
        $listSanPhams = DB::table('products as n')
            ->where('n.title', 'LIKE','%'.$search.'%' )
            ->orderBy('n.id', 'desc')
            ->paginate(12);
        return view('user.tim-kiem',compact('listSanPhams'));
    }

    public function viewGioiThieu()
    {
        return view('user.gioi-thieu');
    }

    public function viewCuaHang(Request $req)
    {
        $reqInit['orderby']='';
        $arr = [
                    ['name'=>'id', 'order' => 'desc'],
                    ['name'=>'price', 'order' => 'asc'],
                    ['name'=>'price', 'order' => 'desc']
                ];
        $query = DB::table('products');
            if (isset($req['orderby'])) {
                if ($req['orderby'] != '') {
                    $query = $query->orderby($arr[$req['orderby'] - 1]['name'], $arr[$req['orderby'] - 1]['order']);
                    $reqInit['orderby']=$req['orderby'];
                }
            }
            $listSanPhams = $query->paginate(12);
        return view('user.cua-hang',compact('listSanPhams', 'reqInit'));
    }

    public function viewDanhMuc($slug)
    {
        $listSanPhams = DB::table('products')
            ->leftjoin('categorys', 'products.category_id', '=', 'categorys.id')
            ->where('categorys.slug', '=', $slug)
            ->select(
                'products.id','products.title', 'products.img', 'products.price', 'products.slug'
            )
            ->orderBy('products.id', 'desc')
            ->paginate(12);
        return view('user.danh-muc',compact('listSanPhams'));
    }
    public function viewSanPham($slug)
    {
        $sanpham = DB::table('products')
            ->where('slug', '=', $slug)
            ->first();
        $sp_lienquan = DB::table('products')
            ->leftjoin('categorys', 'products.category_id', '=', 'categorys.id')
            ->where('products.slug', '=', $slug)
            ->select(
                'products.id','products.title', 'products.img', 'products.price', 'products.slug'
            )
            ->skip(0)->take(5)->get();
        return view('user.san-pham',compact('sanpham', 'sp_lienquan'));
    }
    
    // Gioi thieu
    public function viewPage($slug)
    {
        return view('user.page');
    }

    // Gio hang
    public function viewGioHang()
    {
        return view('user.gio-hang');
    }
    public function addGioHang(Request $req)
    {
        // Cookie::queue(Cookie::forget('giohang'));
        // return 1;
        $id_sp = $req->input('id_sp');
        $sp = DB::table('products')
            ->where('id', $id_sp)
            ->select('id','title','price', 'img')
            ->first();
        $obj_sp = (object)array(
            'id' => $sp->id,
            'title' => $sp->title,
            'price' => $sp->price,
            'img' => $sp->img,
            'quality' => 1
            );
        $giohang = Cookie::get('giohang');
        $check = 1;
        if(count($giohang) > 0){
            foreach ($giohang as $gh){
                if($gh->id == $obj_sp->id){
                    $gh->quality = $gh->quality + 1;
                    $check = 0;
                }
            }
        }else{
            $giohang = [];
        }
        if ($check == 1){
            array_push($giohang, $obj_sp);
        }
        Cookie::queue('giohang', $giohang, 36000);
        return response()->json($giohang);
    }
    public function editGioHang(Request $req)
    {
        // Cookie::queue(Cookie::forget('giohang'));
        // return 1;
        $sl = $req->input('sl');
        $giohang = Cookie::get('giohang');
        $i = 0;
        if(count($giohang) > 0){
            foreach ($giohang as $gh){
                $gh->quality = $sl[$i];
            }
        }
        Cookie::queue('giohang', $giohang, 36000);
        return redirect()->route('user.giohang');
    }
    public function deleteSanPham($id)
    {
        $giohang = Cookie::get('giohang');
        $stt = 0;
        foreach ($giohang as $gh) {
            if($id == $gh->id){
                $stt_d = $stt;
                break;
            }
        }
        array_splice($giohang, $stt_d, 1);
        Cookie::queue('giohang', $giohang, 36000);
        return redirect()->route('user.giohang');
    }

    // Thanh Toan
    public function viewThanhToan(Request $req)
    {
        return view('user.thanh-toan');
    }
    public function postThanhToan(Request $req)
    {
        $data= $req->input('user');
        $code = 'DH-'.time();
        $total = 0;
        foreach ($giohang as $product) {
            $total += $product->price * $producut->quality;
        }
        $cart_id = DB::table('cart')
            ->insertGetId(array(
                'code' => $code,
                'status' => 1,
                'name_user' => $data['name_user'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'company' => $data['company'],
                'address' => $data['address'],
                'ma_buu_dien' => $data['ma_buu_dien'],
                'total' => $total,
                'created_at' => date('Y-m-d H:i:s')
            ));
        $giohang = Cookie::get('giohang');
        foreach ($giohang as $product) {
            DB::table('cart_details')->insert(array(
                'cart_id' => $cart_id,
                'product_id' => $product['id'],
                'quality' => $product['quality']
            ));
        }
        return response()->json('ok');
        // return view('admin.danhmuc.add-danhmuc', compact('danhmuc'));
    }

    // Lien He
    public function viewLienHe()
    {
        return view('user.lien-he');
    }
    public function postLienHe(Request $req)
    {
        $data= $req->input('lh');
        DB::table('messages')->insert(array(
            'name' => $data['name'],
            'email' => $data['email'],
            'title' => $data['title'],
            'content' => $data['content'],
            'created_at' => date('Y-m-d H:i:s')
        ));
        return redirect()->route('user.getLienHe');
    }
}
