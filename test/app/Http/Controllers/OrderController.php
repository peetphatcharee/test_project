<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Order as ord;
use App\Product as Pro;
use App\order_product as ord_pro;
class OrderController extends Controller
{
    
    public function getListOrder(){//แสดง order
       
        $Ord = ord::get();
        
    	$data = array('ord'=>$Ord); 
		return view('OrderProduct_List',$data);
    		

    }

    public function getOrder()//หน้าformเพิ่ม Order
    {
        
        return view('AddOrder');
         
        //dd($product_name,$product_price,$product_count);
        //
    }
    public function SaveOrder(Request $req)////บันทึก Order
    {
        
       

        $order= array("order_date"=>$req->input("order_date"),
		"order_time"=>$req->input("order_time"),
        "order_customer"=>$req->input("order_customer"),
        "total"=>0);
        //dd($order);
        ord::insert($order);
        return redirect('OrderProduct_List');
  
    }
    public function getOrderPro($id)//หน้าformเพิ่ม OrderProduct
    {
       
        // dd($id);
        $order = ord::get();  //เอา ข้อมูลในตาราง order มาแสดง
        $order_pro = Pro::get(); //เอาข้อมูลใน Product มา select
        $ord_pro = ord_pro::getAll_OrderPro();
        
        //  $Order = ord::getAll_OrderPro();
        
        $data = array('ord'=>$order,'order_pro'=>$order_pro,'ord_pro'=>$ord_pro); 
        // dd($data);
		return view('Add_OrderPro',$data);
        
        
    }
    public function updateOrderPro(Request $req){
    
        $product_id = $req->product_id;
    	$order_id = $req->order_id;
        $count = $req->count;
       
    	 //dd($order_product_id);
        $product = Pro::where('product_id',$product_id)->first();//**** */
        $price = $product->product_price;//ดึงข้อมูล
        $amount =  $price*$count;
        //dd($amount);
        $data = array('product_id'=>$product_id,
            'order_id'=>$order_id,
            'count'=>$count,
            'amount'=> $amount);
       // dd($data);
        
       ord_pro::insert($data);//**** */
    	
    	return redirect("Add_OrderPro$order_id");

    }

}
