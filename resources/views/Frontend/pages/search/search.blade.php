@extends('Frontend.layouts.app')

@section('content')
<div class="container">
    <div class="row mg-b-20">
        <div class="col-md">
            <div class="card card-body">
                <table id="myTable" class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-center">SL</th>
                            <th scope="col" class="text-center">Name</th>
                            <th scope="col" class="text-center">Phone Number</th>
                            <th scope="col" class="text-center">Email</th>
                            <th scope="col" class="text-center">Gender</th>
                            <th scope="col" class="text-center">Religion</th>
                            <th scope="col" class="text-center">Blood Group</th>
                            <th scope="col" class="text-center">Profile Picture</th>
                            <th scope="col" class="text-center">Birth Date</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=1;
                        @endphp

                        @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$i}}</th>
                            <td>
                                {{$user->first_name}} {{$user->last_name}}
                            </td>

                            <td>
                                {{$user->phone_number}}
                            </td>

                            <td>
                                {{$user->email}}
                            </td>

                            <td>
                                @if($user->gender == 1)
                                Male
                                @elseif($user->gender == 2)
                                Female
                                @elseif($user->gender == 3)
                                other
                                @endif
                            </td>

                            <td>
                                @if($user->religion == 1)
                                Islam
                                @elseif($user->religion == 2)
                                Hinduism
                                @elseif($user->religion == 3)
                                Christianity
                                @elseif($user->religion == 4)
                                Buddhism
                                @elseif($user->religion == 5)
                                Others
                                @endif
                            </td>

                            <td class="text-center">
                                @if($user->blood_group == 1)
                                A+
                                @elseif($user->blood_group == 2)
                                A-
                                @elseif($user->blood_group == 3)
                                B+
                                @elseif($user->blood_group == 4)
                                B-
                                @elseif($user->blood_group == 5)
                                O+
                                @elseif($user->blood_group == 6)
                                O-
                                @elseif($user->blood_group == 7)
                                AB+
                                @elseif($user->blood_group == 8)
                                AB-
                                @endif
                            </td>

                            <td>
                                @if($user->profile_picture == NULL)
                                No Image Attached
                                @else
                                <img src="{{asset('images/user/'.$user->profile_picture)}}" width="100">
                                @endif
                            </td>

                            <td>
                                {{$user->	birth_date}}
                            </td>

                            <td>
                                <div class="btn-group">
                                    <a href="" class="btn btn-success btn-sm">Call<a>
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
@endsection