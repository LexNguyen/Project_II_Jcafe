@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Order Coffee
@stop

@section('contentheader_title')
	Order Coffee
@stop
@section('main-content')
	<div class="container-fluid spark-screen" style="background-image: url({{ asset('/img/item-12.jpg')}}); padding: 15px">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6" style="background-color: #cc7a54;padding: 10px">
				<form method="post" action="{{ route('postStudent') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Order ID</label>
						<input type="text" name="orderid" class="form-control" placeholder="Enter ID">
					</div>
					<div class="form-group">
                <label>Date Order</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                </div>
              </div>
					<div class="form-group">
						<label>Products</label>
						<input type="text" name="products" class="form-control" placeholder="Enter Products">
					</div>
					<div class="form-group">
						<label>Quantity</label>
						<input type="text" name="quantity" class="form-control" placeholder="Enter Quantity">
					</div>
					<div class="form-group">
                  		<label>Desk</label>
                  		<select class="form-control">
			                <option>Desk 1</option>
			                <option>Desk 2</option>
			                <option>Desk 3</option>
			                <option>Desk 4</option>
			                <option>Desk 5</option>
			                <option>Desk 6</option>
			                <option>Desk 7</option>
			                <option>Desk 8</option>
                 		</select>
                	</div>
					<div class="form-group">
                  		<label>Discounts</label>
                  		<select class="form-control">
			                <option> 10%</option>
			                <option> 15%</option>
			                <option> 20%</option>
			                <option> 25%</option>
			                <option> 30%</option>
                 		</select>
                	</div>
					<div class="form-group">
						<label>Total Money</label>
						<div class="input-group">
                			<span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                			<input type="text" class="form-control">
                			<span class="input-group-addon">.00</span>
             			</div>
					</div>
					
					<button class="btn btn-success">Order</button>
				</form>
			</div>
		</div>
	</div>
@stop

@section('js')

@stop