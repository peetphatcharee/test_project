<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public static function getOrderAdd(){//  public static function getAll($id){
        //return 2;
        return DB::table('orders')
       
          ->get();
       
        }
    public static function getProductAdd(){//  public static function getAll($id){
      //return 2;
      return DB::table('products')
      
        ->get();
        }
}
