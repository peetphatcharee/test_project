@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">เพิ่มการสั่งสินค้า</div>

                <div class="card-body">
                    <form method="POST" action="SaveOrder" >
                        @csrf
                        
                            
                            <div class="form-group row">
                                <label for="order_date" class="col-md-4 col-form-label text-md-right">วันที่</label>
                            <div class="col-md-6">
                            <input name="order_date" type="date" class="form-control{{ $errors->has('order_date') ? ' is-invalid' : '' }}" id="order_date" required autofocus>
                          </div>
                            </div>

                            <div class="form-group row">
                            <label for="order_time" class="col-md-4 col-form-label text-md-right">เวลา</label>
                            <div class="col-md-6">
                            <input name="order_time" type="time" class="form-control{{ $errors->has('order_time') ? ' is-invalid' : '' }}" id="order_time" required autofocus>
                          </div>
                            </div>

                            <div class="form-group row">
                          
                            <label for="order_customer" class="col-md-4 col-form-label text-md-right">ชื่อลูกค้า</label>
                            <div class="col-md-6">
                            <input name="order_customer" type="text" class="form-control{{ $errors->has('order_customer') ? ' is-invalid' : '' }}" id="order_customer" required autofocus>
                          </div>
                            </div>

                            

                          
                    
                            <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      เปิดบิล
                                  </button>
                              </div>
                          </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
