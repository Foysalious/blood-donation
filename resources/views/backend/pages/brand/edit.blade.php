@extends('backend.template.layout')

@section('dashboard-content')

<div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Update Brand</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">Card Block</h6>
          <p class="br-section-text">An example some text within a card block.</p>

          <div class="row mg-b-20">
            <div class="col-md">
              <div class="card card-body">
               <form action="{{route('updateBrand', $brand->id) }}" method="POST" enctype="multipart/form-data">
               	@csrf
               	<div class="form-group">
               		<label>
               			Brand Name
               		</label>
               		<input type="text" name="brand_name" class="form-control" value="{{$brand->name}}">
               		
               	</div>
               	<div class="form-group">
               		<label>
               			Description
               		</label>
               		<textarea rows="3" name="brand_description" class="form-control"  >{{$brand->description}}</textarea>
               		
               	</div>
               	<div class="form-group">
               		<label>
               			Brand Thumbnail
               		</label> <br><br>

                  @if ($brand->image== NULL)
                  No Image Uploaded
                  @else
                  <img src="{{asset('images/brand/'.$brand->image)}}" width="100">
                  @endif
               		<input type="file" name="image" class="form-control-file"  >
               		
               	</div>
               

               	<div class="form-group">
               	
               		<input type="submit" name="SaveChanges" value="Save Changes"class="btn btn-primary">
               		
               	</div>
               </form> 
					
				
              </div><!-- card -->
            </div><!-- col -->
          </div>
         </div>
        </div>  
      

@endsection