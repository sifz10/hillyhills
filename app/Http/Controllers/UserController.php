<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Image;

class UserController extends Controller
{
    public function profile_settings(Request $request)
    {
      $user = Auth::user();
      return view('dashboard.settings.index', [
        'user' => $user,
      ]);
    }

    public function profile_settings_save(Request $request)
    {
      $user = Auth::user();
      $user->name = $request->name;
      $user->email = $request->email;
      if($request->hasFile('avatar'))
      {
          $imageName = time().'.'.$request->avatar->extension();
          $path = $request->avatar->move('uploads/avatars', $imageName);
          Image::make($path)->fit(400, 400)->save($path);
          $user->avatar = $path;
          $oldFile = Auth::user()->avatar;
          !is_null($oldFile) && Storage::delete($oldFile);
      }
      $user->password = Hash::make($request->password);
      $user->save();
      return back()->with('success', 'User profile has been solved');
    }
}
