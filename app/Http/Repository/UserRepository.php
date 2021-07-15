<?php
namespace App\Http\Repository;
use App\Http\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Http\Request;
class UserRepository implements UserRepositoryInterface{
    protected $User, $UserInterface;
    public function __construct(User $User, UserRepositoryInterface $UserInterface){
        $this->UserRepositoryInterface = $UserInterface;
        $this->User = $User;
    }

    public function getAllUser(){
        $users = $this->User->all();
        return view('dashboard.pages.users.index', compact('users'));
    }
}