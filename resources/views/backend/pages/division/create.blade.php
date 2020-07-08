@extends('backend.template.layout')

@section('dashboard-content')

<div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Create New Division</h4>
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
               <form action="{{route('storeDivision')}}" method="POST" enctype="multipart/form-data">
               	@csrf
               	<div class="form-group">
               		<label>
               			Division Name
               		</label>
               		<input type="text" name="name" class="form-control">
               		
               	</div>

                <div class="form-group">
                  <label>
                    Priority Number
                  </label>
                  <input type="text" name="priority" class="form-control">
                  
                </div>
               	

               	<div class="form-group">
               	
               		<input type="submit" name="addDivision" value="Add Division"class="btn btn-primary">
               		
               	</div>
               </form> 
					
				
              </div><!-- card -->
            </div><!-- col -->
          </div>
         </div>
        </div>  
      

@endsection