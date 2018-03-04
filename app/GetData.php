<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class GetData extends Model
{
    public static function getCategory()
    {
        $danhmuc = DB::table('categorys')
            ->get();
        return $danhmuc;
    }
    public static function getSPNoiBat()
    {
        $sp_noi_bat = DB::table('products')
            ->where('status', 1)
            ->orderby('id', 'desc')
            ->skip(0)->take(4)->get();
        return $sp_noi_bat;
    }
    public static function getSPGiamGia()
    {
        $sp_giam_gia = DB::table('products')
            ->where('status', 2)
            ->orderby('id', 'desc')
            ->skip(0)->take(4)->get();
        return $sp_giam_gia;
    }
    public static function stripUnicode($str){
        $unicode = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd'=>'đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',            
            'i'=>'í|ì|ỉ|ĩ|ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
            'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'D'=>'Đ',
            'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
            'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
            );
            foreach($unicode as $nonUnicode=>$uni){
                $str = preg_replace("/($uni)/i", $nonUnicode, $str);
            }
            // $str = str_replace(' ','_',$str);
            return $str;
    }
    public static function checkNameInsert ($name,$field,$table){
        $count = DB::table($table)->where($field, $name)->count();
        return $count;
    }
    protected static function checkNameUpdate ($id,$fieldId,$name,$field,$table){
        $count = DB::table($table)
            ->where($fieldId,'<>', $id)
            ->where($field, $name)
            ->count();
        return $count;
    }
}
