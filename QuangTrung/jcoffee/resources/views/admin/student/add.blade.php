@extends('adminlte::layouts.app')
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;

}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f0c8b0e8;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
@section('htmlheader_title')
	Order Coffee
@stop

@section('contentheader_title')
	Order Coffee
@stop

@section('main-content')
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="{{ route('postStudent') }}">
					{{ csrf_field() }}
					<div class="row">
					  <div class="col-75">
					    <div class="container">
					      <form action="/action_page.php">
					      
					        <div class="row">
					          <div class="col-50">
					            <h3>Order</h3>
					            <label for="fname"><i class="fa fa-user"></i> Oder ID</label>
					            <input type="text" id="fname" name="firstname" placeholder="ID.....">
					            <label for="product"><i class="fa fa-coffee"></i> Product</label>
					            <input type="text" id="product" name="product" placeholder="product....">					           
					            <label for="amount"><i class="fa fa-cubes"></i> Amount</label>
					            <input type="text" id="amount" name="amount" placeholder="amount....">
					            <label for="table"><i class="fa fa-table"></i> Table</label>
					            <input type="text" id="table" name="table" placeholder="table....">

					            <div class="col-md-12">
					              <div class="col-md-4">
					                <label for="date"><i class="material-icons"></i> Date</label>
					                <input type="text" id="datadata" name="date" placeholder="date">
					              </div>
					              <div class="col-md-4">
					                <label for="month">Month</label>
					                <input type="text" id="month" name="month" placeholder="month">
					              </div>
					              <div class="col-md-4">
					                <label for="year">Year</label>
					                <input type="text" id="year" name="year" placeholder="year">
					              </div>
					            </div>					        	
					          </div>
								<div class="col-50">
					            <h3>Price</h3>           
					            <label for="DiscountDiscountDiscount">Discount</label>
					            <input type="text" id="DiscountDiscount" name="Discount" placeholder="Discount">
					            <label for="total">Total money</label>
					            <input type="text" id="total" name="totalmoney" placeholder="Total money">
					            <center><img src="{{ asset('/img/item-11.jpg') }}" alt="" width="100%"></center>  
					        	</div>
					        <input type="submit" value="Order Coffee" class="btn" >
					      </form>
					    </div>
					  </div>
				</form>
			</div>
		</div>
	</div>
@stop

@section('js')

@stop