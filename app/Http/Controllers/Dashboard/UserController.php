<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
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
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'password'=>'required|confirmed',
        ]);
        $request_data = $request->except(['password']);
        $request_data['password'] = bcrypt($request->password);
        $user = User::create($request_data);
        session()->flash('success', trans('general.your_data_creating_successfully'));
        return redirect()->route('user.index');
    }
}
