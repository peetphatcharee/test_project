@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">สั่งสินค้า</div>
               
                <div class="card-body">
               
                <div align="right"> <strong> วันที่</strong>  &nbsp;{{$ord[0]->order_date}}&nbsp;
                  <strong> เวลา</strong>  &nbsp;{{$ord[0]->order_time}}
                </div>   
                
                <div><strong>ลูกค้า &nbsp; &nbsp;{{$ord[0]->order_customer}}</strong></div>
                
                    <br>
                    <div style="overflow:auto">  
                      {{-- form  --}}
                      <form action="updateOrder_Pro" method="POST">
                       
                        <input type="hidden" class="form-control" id="order_id" placeholder="" name="order_id" value="{{$ord[0]->order_id}}">
                       
                        @csrf
                        <div class="form-row">
                          <div class="form-group col-md-4">
                              <label for="product_id">สินค้า</label>
                          <select id="product_id" class="form-control" name="product_id" >
                                <option selected>Choose...</option>
                                @foreach ($order_pro as $key)
 
                              <option value="{{$key->product_id}}">{{$key->product_name}}</option>
                              @endforeach
                              </select>
                            </div>

                            <div class="form-group col-md-4">
                              <label for="order_product_id">จำนวน</label>
                          <input type="text"id="order_product_id" class="form-control" name="count" >
                     
                              
                             
                            </div>
                            <div class="form-group col-md-4">
                             <br>
                              <button type="submit" class="btn btn-primary">
                                บันทึก
                            </button>
                        
                              </select>
                            </div>
                       
                      </div>
                        
                      </form> 
                      {{-- end form --}}
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">ลำดับ</th>
                                <th scope="col">สินค้า</th> 
                                <th scope="col">จำนวน</th>
                                <th scope="col">ราคา</th>
                              
                                @if (auth::user() != '')
                               
                                @endif
                              </tr>
                            </thead>
                            <tbody>
                              <?php $i = 0; ?>
                              @foreach ($ord_pro as $key)
                        <?php $i++?>
              
                              <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$key->product_name}}</td>
                                <td>{{$key->count}}</td>
                                <td>{{$key->amount}}</td>
                                
                                
                                
                              </tr>
                              @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
