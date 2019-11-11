<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Model\Userimage;
use App\Employee;
use Image;

class HomeController extends Controller
{
  public function store(Request $request)
  {
     $validatedData = $request->validate([
        'name' => 'required|unique:users|max:255|regex:/^[a-zA-Z ]+$/',
        'email' => 'required|email|unique:users',

        'password' => 'required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
        //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

      ]);

          $user = new User;
          $user->name = $request->name;
          $user->email = $request->email;

          $user->password = Hash::make($request->password);
          $user->save();


          if (count($request->user_image)>0) {
            foreach ($request->user_image as $image) {
             // $image= $request->file('user_image');
              $img=time().'.'.$image->getClientOriginalExtension();
              $location= public_path('images/users/'.$img);
              Image::make($image)->save($location);
              $user_image = new Userimage;
              $user_image->user_id = $user->id;
              $user_image ->image= $img;
              $user_image->save();
            }
          }

      session()->flash('success','New User Added successfully');
      return redirect()->route('register');
  }

  public function delete($id){
 $employee=Employee::find($id);
 if (!Is_null($employee)) {
   $employee->delete();
 }

 return back();
}

}
