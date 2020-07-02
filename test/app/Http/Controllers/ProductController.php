<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Product as Pro;
class ProductController extends Controller
{
    public function getPro()
    {
        
        return view('AddProduct');//หน้าformเพิ่ม Product
         
       
    }
    public function SavePro(Request $req)//บันทึก Product
    {
        
       

        $product = array("product_name"=>$req->input("product_name"),
		
		"product_price"=>$req->input("product_price"),
        "product_count"=>$req->input("product_count"),
        );
        //dd($product);
        Pro::insert($product);//**** */
        return redirect('Productlist');

        
        
    }
    public function getListPro(){//แสดง Product
       
        $product = Pro::get();//**** */
        
    	$data = array('Pro'=>$product); 
		return view('Productlist',$data);
    		

    }
    public function getProduct($id){//หน้าformแก้ไข Product(

    	$product = Pro::where('product_id',$id)->first();//**** */

    	$data = array('product'=>$product);

    	return view('productEdit',$data);

    	// dd($product);
    }
    public function updateProduct(Request $req){

        $product_id = $req->product_id;

    	$product_name = $req->product_name;
    	$product_price = $req->product_price;
    	$product_count = $req->product_count;
    	// dd($product_id);

    	$data = array('product_name'=>$product_name,
    		'product_price'=>$product_price,
    		'product_count'=>$product_count);


    	pro::where('product_id',$product_id)->update($data);//**** */
    	
    	return redirect('Productlist');

    }
    public function delProduct($id){//ลบ Product

    	pro::where('product_id',$id)->delete();//**** */
    	
    	return redirect('Productlist');

    }
// -------------------------end Product-------------------------

    

}
