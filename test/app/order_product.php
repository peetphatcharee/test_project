<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class order_product extends Model
{
    public static function getAll_OrderPro(){//หน้าแสดงปลา
        return DB::table('order_products')
        //  ->where('order_products.product_id',$id)//->where('ingredient_recipe.R_id',$id)
        ->select('order_products.*','products.product_name','order_products.count','order_products.amount')
        ->join('products','order_products.product_id','products.product_id')
        ->join('orders','order_products.order_id','orders.order_id')
          ->get();

    }
    
}
