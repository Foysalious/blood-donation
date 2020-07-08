@extends('backend.template.layout')

@section('dashboard-content')

<div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Create Category</h4>
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
               <form action="{{route('storecategory')}}" method="POST" enctype="multipart/form-data">
               	@csrf
               	<div class="form-group">
               		<label>
               			Category Name
               		</label>
               		<input type="text" name="cat_name" class="form-control">
               		
               	</div>
               	<div class="form-group">
               		<label>
               			Description
               		</label>
               		<textarea rows="3" name="cat_description" class="form-control"></textarea>
               		
               	</div>
               	<div class="form-group">
               		<label>
               			Category Thumbnail
               		</label>
               		<input type="file" name="image" class="form-control-file">
               		
               	</div>
               	<div class="form-group">
               		<label>Parent Category</label>
               		<select class="form-control" name="parent_id">
               			<option value="0">Select a Primary Category(Optional)</option>
                    @foreach($parent_categories as $parent)
                    <option value="{{$parent->id}}}">{{$parent->name}}</option>

                    @endforeach

               			<option value="1">Demo</option>
               		</select>
               		
               	</div>

               	<div class="form-group">
               	
               		<input type="submit" name="addCategory" value="Add Category"class="btn btn-primary">
               		
               	</div>
               </form> 
					
				
              </div><!-- card -->
            </div><!-- col -->
          </div>
         </div>
        </div>  
      

@endsection