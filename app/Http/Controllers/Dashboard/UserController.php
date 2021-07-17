<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('dashboard.pages.users.index', compact('users'));
    }

    public function create(){
        return view('dashboard.pages.users.create');
    }

    public function store(Request $request){
        //dd($request->all());
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'image'=>'image',
            'password'=>'required|confirmed',
        ]);
        $request_data = $request->except(['password', 'password_confirmation', 'permissions', 'image']);
        $request_data['password'] = bcrypt($request->password);
        if($request->image){
            Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/users_images/' . $request->image->hashName()));
        }
        $request_data['image'] = $request->image->hashName();
        $user = User::create($request_data);
        $user->attachRole('admin');
        return redirect()->route('user.index')->with(['success' => trans('general.your_data_creating_successfully')]);
        $user->syncPermissions($request->permissions);
    }

    public function edit($id){
        $user = User::find($id);
        return view('dashboard.pages.users.edit', compact('user'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'image'=>'image',
        ]);
        $user = User::find($id);
        $request_data = $request->except(['permissions', 'image']);
        if($request->image){
            if($user->image != 'default.png'){
                Storage::disk('public_uploads')->delete('/users_images/' . $user->image);
            }
            Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/users_images/' . $request->image->hashName()));
            $request_data['image'] = $request->image->hashName();
        }
        $user->update($request_data);
        return redirect()->route('user.index')->with(['success' => trans('general.your_data_updating_successfully')]);
        $user->syncPermissions($request->permissions);
    }

    public function destroy($id){
        try {
            //get specific categories and its translations
            $user = User::find($id);
            if (!$user)
                return redirect()->route('user.index')->with(['error'=>trans('general.not_found_record')]);
            if($user->image != 'default.png'){
                Storage::disk('public_uploads')->delete('/users_images/' . $user->image);
            }
            $user->delete();

            return redirect()->route('user.index')->with(['success' => trans('general.your_data_deleting_successfully')]);

        } catch (\Exception $ex) {
            return redirect()->route('user.index')->with(['error' => trans('general.some_error_happining')]);
        }
    }
}
