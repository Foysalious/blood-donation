@extends('backend.template.layout')

@section('dashboard-content')

<div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Manage Product</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="br-section-wrapper">
        	<main class="py-4">@include('backend.partials.alerts')</main>
          <h6 class="br-section-label">Card Block</h6>
          <p class="br-section-text">An example some text within a card block.</p>

          <div class="row mg-b-20">
            <div class="col-md">
              <div class="card card-body">
                <table class="table">
					  <thead class="thead-dark">
					    <tr>
					      <th scope="col">SL</th>
					      <th scope="col">Images</th>
					      <th scope="col">Brand</th>
					      <th scope="col">Category</th>
					      <th scope="col">Title</th>
					      <th scope="col">Slug</th>
					      <th scope="col">Regular Price</th>
					      <th scope="col">Offer Price</th>
					      <th scope="col">Quantity</th>
					      <th scope="col">Featured</th>
					      <th scope="col">Status</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@php
					  	$i=1;
					  	@endphp

					  	@foreach($products as $product)
					    <tr>
					      <th scope="row">{{$i}}</th>
					      <td>
					      	@php $j=1;
					      	@endphp
					      @foreach($product->images as $image)
					       @if($j>0)
					       	<img src="{{asset('images/products/'.$image->image)}}"width="25">
					       	@endif
					       	@php $j--; @endphp
					      @endforeach
					       </td>
					      <td>{{$product->brand->name}}</td>
					      <td>{{$product->category->name}}</td>
					      <td>{{$product->title}}</td>
					      <td>{{$product->slug}}</td>
						  <td>{{$product->regular_price}} BDT</td>
					      <td>
					      	@if($product->offer_price==NULL)
					      			

					      		@elseif($product->offer_price!=NULL)
					      			{{$product->offer_price}} BDT
								@endif


					      </td>
					      <td>{{$product->quantity}} pcs</td>
					      <td>
					      		@if($product->is_featured==1)
					      			<span class="badge badge-success">Yes</span>

					      		@elseif($product->is_featured==0)
					      			<span class="badge badge-primary">No</span>
								@endif

						  </td>
					      <td>
					      	@if($product->status==1)
					      			<span class="badge badge-primary">Active</span>

					      		@elseif($product->status==0)
					      			<span class="badge badge-danger">In-Active</span>
								@endif
						  </td>

					    
					     
					      <td>
					      	<div class="btn-group">
					      		<a href="{{route('editProduct', $product->id)}}" class="btn btn-success btn-sm">Update<a>
					      		<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteproduct">Delete</button>
					      	</div>

					      	<div class="modal fade" id="deleteproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Do you want to delete this Product ?</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
							        <form action="{{route('deleteProduct',  $product->id)}}" method="post">
							        	@csrf
							        	<button type="submit" class="btn btn-primary">Delete</button>
							            </a>
							        </form>
							      
							    </div>
							  </div>
							</div>

					      </td>	


					    </tr>
					    @php
					  	$i++;
					  	@endphp
					  	@endforeach
					  </tbody>
					
				</table>
              </div><!-- card -->
            </div><!-- col -->
          </div>
         </div>
        </div>  
      

@endsection