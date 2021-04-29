<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class manageAdminController extends Controller
{
    public function index()
    {
        return view('Admin.addAdmin');
    }

    public function store(Request $request)
    {
        request()->validate([
            'admin_name' => 'required|min:4',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6',
            'admin_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if (!empty(request()->admin_image)){
            $imageName = time().'.'.request()->admin_image->getClientOriginalExtension();
            request()->admin_image->move(public_path('images'), $imageName);
        }
        else {
            $imageName= 'default.png';
        }


        $var = new Admin();
        $var->admin_name = $request->input('admin_name');
        $var->email = $request->input('email');
        $var->password = Hash::make($request->input('password'));
        $var->admin_image = $imageName;
        $var->save();
        return redirect('admin/viewAdmin')->with('success', 'Admin created successfully.');
    }

    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('Admin.editAdmin', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'admin_name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'admin_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if (!empty(request()->admin_image)){
            $admin = Admin::find($id);
            $imageName= $admin-> admin_image;
            if ($imageName != 'default.png'){
                File::delete(public_path('images/'.$imageName));
            }
            $imageName = time().'.'.request()->admin_image->getClientOriginalExtension();
            request()->admin_image->move(public_path('images'), $imageName);
        }
        else {
            $admin = Admin::find($id);
            $imageName= $admin-> admin_image;
        }

        $admin = Admin::find($id);
        $admin->admin_name =  $request->get('admin_name');
        $admin->email = $request->get('email');
        $admin->password = Hash::make($request->get('password'));
        $admin->admin_image = $imageName;
        $admin->save();

        return redirect('admin/viewAdmin')->with('success', 'Admin updated!');
    }

    public function destroy($id)
    {
        $admin = Admin::find($id);
        if ($admin->admin_image != 'default.png'){
            File::delete(public_path('images/'.$admin->admin_image));
        }
        $admin->delete();
        return back()->with('success', 'Admin deleted!');
    }
}
