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
}
