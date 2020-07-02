@extends('layouts.app')

@section('content')
<div class="container">
  <h2>แก้ไขสินค้า</h2>
  <a href="Productlist"><button class="btn btn-primary"> << กลับสู่รายการสินค้า</button></a>
  <br><br>

  <form action="updateProduct" method="post">
    @csrf
    <input type="hidden" class="form-control" id="product_id" placeholder="" name="product_id" value="{{$product->product_id}}">

    <div class="form-group">
      <label for="product_name">ชื่อสินค้า</label>
      <input type="text" class="form-control" id="product_name" placeholder="" name="product_name" value="{{$product->product_name}}">
    </div>
    
    <div class="form-group">
      <label for="product_price">ราคา</label>
      <input type="text" class="form-control" id="product_price" placeholder="" name="product_price" value="{{$product->product_price}}">
    </div>

    <div class="form-group">
      <label for="product_count">จำนวน</label>
      <input type="text" class="form-control" id="product_count" placeholder="" name="product_count" value="{{$product->product_count}}">
    </div>

    <button type="submit" class="btn btn-success">แก้ไขข้อมูล</button>

  </form>

</div>
@endsection