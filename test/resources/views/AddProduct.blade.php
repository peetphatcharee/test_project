@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">เพิ่มสินค้า</div>

                <div class="card-body">
                    <form method="POST" action="SaveProduct" >
                        @csrf
                        
                            
                            <div class="form-group row">
                                <label for="ProductName" class="col-md-4 col-form-label text-md-right">ชื่อสินค้า</label>
                            <div class="col-md-6">
                            <input name="product_name" type="text" class="form-control{{ $errors->has('product_name') ? ' is-invalid' : '' }}" id="product_name" required autofocus>
                          </div>
                            </div>

                            <div class="form-group row">
                            <label for="ProductPrice" class="col-md-4 col-form-label text-md-right">ราคา</label>
                            <div class="col-md-6">
                            <input name="product_price" type="text" class="form-control{{ $errors->has('product_price') ? ' is-invalid' : '' }}" id="product_price" required autofocus>
                          </div>
                            </div>

                            <div class="form-group row">
                          
                            <label for="ProductCount" class="col-md-4 col-form-label text-md-right">จำนวน</label>
                            <div class="col-md-6">
                            <input name="product_count" type="text" class="form-control{{ $errors->has('product_count') ? ' is-invalid' : '' }}" id="product_count" required autofocus>
                          </div>
                            </div>

                          
                    
                            <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      บันทึก
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
