<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Http\Request;
use Image;
use File;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
 
class UserController extends Controller
{
    
     public function index()
    {   
        $users= User::orderBy('id','asc')->get();
        return view('backend.pages.Users.manage', compact('users'));
    }

     public function create()
    { 
        return view('backend.pages.Users.create');

    }

     public function store(Request $request)
    {
        
        $request->validate([
            'first_name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'last_name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'phone_number' => ['required', 'digits:11', 'regex:/^([0|1]{2})+([3|4|5|6|7|8|9]{1})+\d{8}+/'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
            'password_confirmation' => 'required|same:password',
            'gender' => 'required',
            'religion' => 'required',
            'blood_group' => 'required',
            'birth_date' => 'required',
            'profile_picture' =>'nullable'



        ],
        [
            'first_name.required'               => 'Please insert First Name',
            'last_name.required'                => 'Please insert Last Name',
            'phone_number.required'             => 'Please insert Phone Number',
            'email.required'                    => 'Please insert Email',
            'password.required'                 => 'Please insert Password',
            'password_confirmation.required'    => 'Please insert Confirm Password',
            'gender.required'                   => 'Please insert Gender',
            'religion.required'                 => 'Please insert Religion',
            'blood_group.required'              => 'Please insert Blood Group',
            'birth_date.required'               => 'Please insert Birth Date',
            'profile_picture.required'                    =>'Please insert a Image',
        ]);
        $user= new User();
        $user->first_name= $request->first_name;
        $user->last_name= $request->last_name;
        $user->phone_number= $request->phone_number;
        $user->password = Hash::make($request->password);
        $user->gender = $request->gender;
        $user->religion = $request->religion;
        $user->blood_group = $request->blood_group;
        $user->blood_group = $request->blood_group;
        $user->email = $request->email;
        $user->birth_date = $request->birth_date;
         if ($request->profile_picture) {
           $image = $request->file('profile_picture');
           $img = time() . '.'.$image->getclientoriginalextension();
           $location= public_path('images/user/'. $img);
           Image::make($image)->save($location);
           $user->profile_picture = $img;
        }
        $user->save();
        return redirect()->route('manageUsers');
    }

     public function edit(User $user,$id)
    {
        $user= User::find($id);

        if (!is_null($user)) 
        {
        
         return view('backend.pages.Users.edit',compact('user'));
        }

        else
        {
        return route('manageUsers');
        }
    }

     public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'last_name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'phone_number' => ['required', 'digits:11', 'regex:/^([0|1]{2})+([3|4|5|6|7|8|9]{1})+\d{8}+/'],
            'email' => 'required|email|unique:users',
            'gender' => 'required',
            'religion' => 'required',
            'blood_group' => 'required',
            'birth_date' => 'required',
            'profile_picture' =>'nullable',
        ],
        [
            'first_name.required'               => 'Please insert First Name',
            'last_name.required'                => 'Please insert Last Name',
            'phone_number.required'             => 'Please insert Phone Number',
            'email.required'                    => 'Please insert Email',
            'gender.required'                   => 'Please insert Gender',
            'religion.required'                 => 'Please insert Religion',
            'blood_group.required'              => 'Please insert Blood Group',
            'birth_date.required'               => 'Please insert Birth Date',
            'profile_picture.required'          =>'Please insert a Image',
        ]);

        $user = User::find($id);
        $user->first_name= $request->first_name;
        $user->last_name= $request->last_name;
        $user->phone_number= $request->phone_number;
        $user->gender = $request->gender;
        $user->religion = $request->religion;
        $user->blood_group = $request->blood_group;
        $user->email = $request->email;
        $user->birth_date = $request->birth_date;
         if ($request->profile_picture) {
           $image = $request->file('profile_picture');
           $img = time() . '.'.$image->getclientoriginalextension();
           $location= public_path('images/user/'. $img);
           Image::make($image)->save($location);
           $user->profile_picture = $img;
        }

        $user->save();
        return redirect()->route('manageUsers')->with('warning','Your request has been updated.');
    }



    public function destroy(User $user,$id)
    {
        $user= User::find($id);

        if (!is_null($user)) {
        
        
          if (File::exists('images/user/'. $user->profile_picture)) {
                File::delete('images/user/'. $user->profile_picture);
                # code...
            }
            $user->delete();
        }
        return redirect()->route('manageUsers')->with('warning','Your request has been deleted.');
    
     }

     //REGULARE USER UPDATE//
     ///////////////////////////////

      public function editRegularUser(User $user,$id)
    {
        $user= User::find($id);

        if (!is_null($user)) 
        {
        
         return view('Frontend.pages.edit',compact('user'));
        }

        
    }

     public function updateRegularUser(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'last_name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'phone_number' => ['required', 'digits:11', 'regex:/^([0|1]{2})+([3|4|5|6|7|8|9]{1})+\d{8}+/'],
            
            'gender' => 'required',
            'religion' => 'required',
            'blood_group' => 'required',
            'birth_date' => 'required',
            'profile_picture' =>'nullable',
            'password' => 'nullable',
        ],
        [
            'first_name.required'               => 'Please insert First Name',
            'last_name.required'                => 'Please insert Last Name',
            'phone_number.required'             => 'Please insert Phone Number',
            'email.required'                    => 'Please insert Email',
            'gender.required'                   => 'Please insert Gender',
            'religion.required'                 => 'Please insert Religion',
            'blood_group.required'              => 'Please insert Blood Group',
            'birth_date.required'               => 'Please insert Birth Date',
            'profile_picture.required'          =>'Please insert a Image',
            'password.required'                 =>'Please Enter the Password',
        ]);

        $user = User::find($id);
        $user->first_name= $request->first_name;
        $user->last_name= $request->last_name;
        $user->phone_number= $request->phone_number;
        $user->gender = $request->gender;
        $user->religion = $request->religion;
        $user->blood_group = $request->blood_group;
        $user->email = $request->email;
        $user->birth_date = $request->birth_date;

            if ($request->password==$request->con_pass) {
                $user->password = hash::make($request->password);
            }

         if ($request->profile_picture) {
           $image = $request->file('profile_picture');
           $img = time() . '.'.$image->getclientoriginalextension();
           $location= public_path('images/user/'. $img);
           Image::make($image)->save($location);
           $user->profile_picture = $img;
        }

        $user->save();
        return redirect()->route('home')->with('warning','Your request has been updated.');
    }

    public function delete(User $user,$id)
    {
        $user= User::find($id);

        if (!is_null($user)) {
        
        
          if (File::exists('images/user/'. $user->profile_picture)) {
                File::delete('images/user/'. $user->profile_picture);
                # code...
            }
            $user->delete();
        }
        return redirect()->route('manageUsers')->with('warning','Your request has been deleted.');
    
     }


 }

