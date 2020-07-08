@extends('backend.template.layout')

@section('dashboard-content')

<div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Manage Brand</h4>
          <p class="mg-b-0">Blood Donation Manage Page</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="br-section-wrapper">
        	<main class="py-4">@include('backend.partials.alerts')</main>
          <h6 class="br-section-label">Card Block</h6>
          <p class="br-section-text mb-1">Manage Users.</p>

          <div class="row mg-b-20">
            <div class="col-md">
              <div class="card card-body">
                <table id="myTable"class="table">
					  <thead class="thead-dark">
					    <tr>
					      <th scope="col">SL</th>
					      <th scope="col">First Name</th>
					      <th scope="col">Last Name</th>
					      <th scope="col">Phone Number</th>
					      <th scope="col">Email</th>
					      <th scope="col">Gender</th>
					      <th scope="col">Religion</th>
					      <th scope="col">Blood Group</th>
					      <th scope="col">Profile Picture</th>
					      <th scope="col">Status</th>
					      <th scope="col">User Role</th>
					      <th scope="col">Birth Date</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@php
					  	$i=1;
					  	@endphp

					  	@foreach($users as $user)
					    <tr>
					      <th scope="row">{{$i}}</th>
					      <td>{{$user->	first_name}}</td>
					      <td>{{$user->	last_name}}</td>
					      <td>{{$user->	phone_number}}</td>
					      <td>{{$user->	email}}</td>
					      <td>@if($user->gender==1)
					      		Male
					      		@elseif($user->gender==2)
					      		Female
					      		@elseif($user->gender==3)
					      		other
					      		@endif
					      </td>
					      <td>@if($user->religion==1)
					      		Islam
					      		@elseif($user->religion==2)
					      		Hinduism
					      		@elseif($user->religion==3)
					      		Christianity
					      		@elseif($user->religion==4)
					      		Buddhism
					      		@elseif($user->religion==5)
					      		Others
					      		@endif</td>
					      <td>@if($user->blood_group==1)
					      		A+
					      		@elseif($user->blood_group==2)
					      		A-
					      		@elseif($user->blood_group==3)
					      		B+
					      		@elseif($user->blood_group==4)
					      		B-
					      		@elseif($user->blood_group==5)
					      		O+
					      		@elseif($user->blood_group==6)
					      		O-
					      		@elseif($user->blood_group==7)
					      		AB+
					      		@elseif($user->blood_group==8)
					      		AB-
					      		@endif</td>
					      <td>
					      		@if($user->profile_picture==NULL)
					      			No Image Attached

					      		@else
					      		
					      			<img src="{{asset('images/user/'.$user->profile_picture)}}" width="100">
					      		

					      		@endif
					      </td>
					      <td>@if($user->status==0)
					      		Active
					      		@elseif($user->status==1)
					      		In-Active
					      		
					      		@endif</td>
					      <td>@if($user->user_role==0)
					      		Admin
					      		@elseif($user->user_role==1)
					      		Regular User
					      		
					      		@endif</td>
					      <td>{{$user->	birth_date}}</td>


					      
					     
					      <td>
					      	<div class="btn-group">
					      		<a href="{{route('editUsers',$user->id)}}" class="btn btn-success btn-sm">Update<a>
					      		<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletuser{{$user->id}}">Delete</button>
					      	</div>

					      	<div class="modal fade" id="deletuser{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Do you want to delete this ?</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
							        <form action="{{route('deleteUsers', $user->id)}}" method="post">
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