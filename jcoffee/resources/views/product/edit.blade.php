@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Edit Product
@stop

@section('contentheader_title')
	Edit product
@stop

@section('main-content')
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="{{ route('postEditProducts') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Name Category</label>
						<!-- <input type="text" name="id_o" class="form-control" placeholder="Enter Id_order"> -->
						<select class="form-control" name="id_cg">
							@foreach ($category as $item)
								<option value="{{$item->id}}">{{$item->name}}</option>	
							@endforeach
                        </select>
						
					</div>
					<div class="form-group">
						<!-- <label>Id</label> -->
						<input type="text" name="id" class="form-control" 
                        value="{{ ($product != null)?$product->id:'' }}" style="display: none;">
					</div>
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control"
                        value="{{ ($product != null)?$product->name:'' }}">
					</div>
					<div class="form-group">
						<label>Sale</label>
						<input type="text" name="sale" class="form-control"
                        value="{{ ($product != null)?$product->sale:'' }}">
					</div>
					<div class="form-group">
						<label>Price</label>
						<input type="text" name="price" class="form-control"
                        value="{{ ($product != null)?$product->price:'' }}">
					</div>
					<div class="form-group">
						<label>Thumbnail</label>
						<input type="text" name="thumbnail" class="form-control" 
						value="{{ ($product != null)?$product->thumbnail:'' }}">
					</div>
					<button class="btn btn-success">Edit</button>
				</form>
			</div>
		</div>
	</div>
@stop