<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // public static function postPro($product){//เพิ่ม Product
    //     return DB::table('product')
    //     ->insert($product); //
    // }
    public static function getListAll(){//หน้าแสดง Product
        return DB::table('products')
       
        ->get();
    }
    public static function getOrderAll(){//หน้าแสดง  Order
        return DB::table('order')
       
        ->get();
    }
    public static function postOrder($order){//เพิ่ม Product
        return DB::table('order')
        ->insert($order); //
    }
}
