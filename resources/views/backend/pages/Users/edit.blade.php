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
                {!! Form::open(['action' => ["Backend\UserController@update", $user->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                  <div class="form-group">
                    {{Form::label('title', 'First Name:')}}
                    {{Form::text('title', $user->first_name, ['name' => 'first_name', 'class' => ($errors->has('first_name') ? 'form-control is-invalid' : 'form-control')])}}
                  </div>

                  <div class="form-group">
                    {{Form::label('title', 'Last Name:')}}
                    {{Form::text('title', $user->last_name, ['name' => 'last_name', 'class' => ($errors->has('last_name') ? 'form-control is-invalid' : 'form-control')])}}
                  </div>

                  <div class="form-group">
                    {{Form::label('title', 'Phone Number:')}}
                    {{Form::text('title', $user->phone_number, ['name' => 'phone_number', 'class' => ($errors->has('phone_number') ? 'form-control is-invalid' : 'form-control')])}}
                  </div>

                  <div class="form-group">
                    {{Form::label('title', 'Email:')}}
                    {{Form::email('title', $user->email, ['name' => 'email', 'class' => ($errors->has('email') ? 'form-control is-invalid' : 'form-control')])}}
                  </div>

                  <div class="form-group">
                    {{Form::label('title', 'Gender:')}}
                    {{Form::select('gender', ['1' => 'male', '2' => 'female', '3' => 'other'], $user->gender, ['class' => 'form-control'])}}
                  </div>

                  <div class="form-group">
                    {{Form::label('title', 'Religion:')}}
                    {{Form::select('religion', ['1' => 'Islam', '2' => 'Hinduism', '3' => 'Christianity', '4' => 'Buddhism', '5' => 'others'], $user->religion, ['class' => 'form-control'])}}
                  </div>

                  <div class="form-group">
                    {{Form::label('title', 'Blood group:')}}
                    {{Form::select('blood_group', ['1' => 'A+', '2' => 'A-', '3' => 'B+', '4' => 'B-', '5' => 'O+', '6' => 'O-', '7' => 'AB+', '8' => 'AB-'], $user->blood_group, ['class' => 'form-control'])}}
                  </div>

                  <div class="form-group">
                    <label>Birth Date</label>
                    {{ Form::date('birth_date', $user->birth_date, ['class' => 'form-control']) }}
                  </div>

                  <div class="form-group">
                    @if ($user->profile_picture == null)
                      
                      <label>No image uploaded. Add new profile picture:</label>
                    @else
                    <img src="{{asset('images\\user\\'.$user->profile_picture)}}" width="100" class="d-block mb-2 rounded">
                    <label>Change Profile Picture</label>
                    @endif
                    {{Form::file('profile_picture', ['class' => 'form-control', 'value' => $user->profile_picture])}}
                  </div>

                  <div class="form-group">
                    {{Form::label('title', 'Status:')}}
                    {{Form::select('status', ['0' => 'active', '1' => 'inactive'], $user->status, ['class' => 'form-control'])}}
                  </div>

                  <div class="form-group">
                    {{Form::label('title', 'User role:')}}
                    {{Form::select('user_role', ['0' => 'admin', '1' => 'user'], $user->user_role, ['class' => 'form-control'])}}
                  </div>

                  {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
                {!! Form::close() !!}
					
				
              </div><!-- card -->
            </div><!-- col -->
          </div>
         </div>
        </div>  
      

@endsection