@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">รายการสั่งสินค้า</div>

                <div class="card-body">
                    <div align="right"> <a href="AddOrder" class="btn btn-success">เพิ่มการสั่งซื้อสินค้า</a> </div>   
                    <br>
                    <div style="overflow:auto">   
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">ลำดับ</th>
                                <th scope="col">วันที่</th> 
                                <th scope="col">ลูกค้า</th>
                                <th></th>
                                @if (auth::user() != '')
                               
                                @endif
                              </tr>
                            </thead>
                            <tbody>
                              <?php $i = 0; ?>
                        @foreach($ord as $key)
                        <?php $i++?>
              
                              <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$key->order_date}}&nbsp; {{$key->order_time}}</td>
                                <td>{{$key->order_customer}}</td>
                                <td><a href="Add_OrderPro{{$key->order_id}}" class="btn btn-primary">เพิ่มสินค้า</a> 
                                <a href="" class="btn btn-warning"> พิมพ์</a> </td>
                                
                                
                              </tr>
                              @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
