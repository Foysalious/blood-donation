@extends('backend.template.layout')

@section('dashboard-content')

<div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Create Brand</h4>
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
               <form action="{{route('storeUsers')}}" method="POST" enctype="multipart/form-data">
               	@csrf
               	<div class="form-group">
               		<label>
               			First Name
               		</label>
               		<input type="text" name="first_name" class="form-control">
               		
               	</div>

                <div class="form-group">
                  <label>
                    Last Name
                  </label>
                  <input type="text" name="last_name" class="form-control">
                  
                </div>
               	<div class="form-group">
               		<label>
               			Phone Number
               		</label>
               		<input type="text" name="phone_number" class="form-control">
               		
               	</div>
               	<div class="form-group">
               		<label>
               			Email
               		</label>
               		<input type="email" name="email" class="form-control">
               		
               	</div>

                  <div class="form-group">
                  <label>
                    Password
                  </label>
                  <input type="password" name="password" class="form-control">
                  
                </div>

                    

                  <div class="form-group">
                  <label>
                    Confirm Password
                  </label>
                  <input type="password" name="password_confirmation" class="form-control">
                  
                </div>

                  <div class="form-group">
                  <label>
                    Gender
                  </label>
                  <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" required autocomplete="gender">
                       <option></option>
                       <option value="1">male</option>
                       <option value="2">female</option>
                       <option value="3">other</option>
                  </select>
                  
                </div>

                 <div class="form-group">
                  <label>
                    Religion
                  </label>
                  <select id="religion" class="form-control @error('religion') is-invalid @enderror" name="religion" required autocomplete="religion">
                      <option></option>
                      <option value="1" selected="">Islam</option>
                      <option value="2">Hinduism</option>
                      <option value="3">Christianity</option>
                      <option value="4">Buddhism</option>
                      <option value="5">Others</option>
                  </select>
                  
                </div>

                 <div class="form-group">
                  <label>
                    Blood Group
                  </label>
                  <select id="blood_group" class="form-control @error('blood_group') is-invalid @enderror" name="blood_group" required autocomplete="blood_group">
                      <option></option>
                      <option value="1">A+</option>
                      <option value="2">A-</option>
                      <option value="3">B+</option>
                      <option value="4">B-</option>
                      <option value="5">O+</option>
                      <option value="6">O-</option>
                      <option value="7">AB+</option>
                      <option value="8">AB-</option>
                  </select>
                  
                </div>
               	
                 <div class="form-group">
                  <label>
                    Profile Picture
                  </label>
                  <input type="file" name="profile_picture" class="form-control-file">
                  
                </div>

                 <div class="form-group">
                  <label>
                    Status
                  </label>
                  <select id="status" class="form-control @error('religion') is-invalid @enderror" name="status" required autocomplete="religion">
                      <option></option>
                      <option value="0">Active</option>
                      <option value="1">In-Active</option>
                      
                  </select>                  
                </div>

                <div class="form-group">
                  <label>
                    User Role
                  </label>
                  <select id="user_role" class="form-control @error('religion') is-invalid @enderror" name="user_role" required autocomplete="religion">
                      <option></option>
                      <option value="0">Admin</option>
                      <option value="1">Regular User</option>
                      
                  </select>  
                  
                </div>

                   <div class="form-group">
                  <label>
                  Birth Date
                  </label>
                  <input type="Date" name="birth_date" class="form-control-file">
                  
                </div>



               	<div class="form-group">
               	
               		<input type="submit" name="addUser" value="Add User"class="btn btn-primary">
               		
               	</div>
                </div>
               </form> 
					
				
              </div><!-- card -->
            </div><!-- col -->
          </div>
         </div>
        </div>  
      

@endsection