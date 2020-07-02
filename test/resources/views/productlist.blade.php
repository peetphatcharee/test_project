@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">รายการสินค้า</div>

                <div class="card-body">
                    <div align="right"> <a href="AddProduct" class="btn btn-success">เพิ่มสินค้า</a> </div>
                    <br>
                    <div style="overflow:auto">   
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">ลำดับ</th>
                                <th scope="col">สินค้า</th>
                                <th scope="col">ราคา/ชิ้น</th>
                                <th scope="col">ยอดจำนวนคงเหลือ</th>
                                <th></th>
                                @if (auth::user() != '')
                               
                                @endif
                              </tr>
                            </thead>
                            <tbody>
                              <?php $i = 0; ?>
                        @foreach($Pro as $key)
                        <?php $i++?>
              
                              <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$key->product_name}}</td>
                                <td>{{$key->product_price}}</td>
                                <td>{{$key->product_count}}</td>
                                <td>

                                  <a href="getProduct{{$key->product_id}}"><button class="btn btn-warning">อัพเดท</button></a> 
                        
                                  <a href="delProduct{{$key->product_id}}"><button class="btn btn-danger">ลบ</button></a>
                                
                                </td>
                              </tr>
                              @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
