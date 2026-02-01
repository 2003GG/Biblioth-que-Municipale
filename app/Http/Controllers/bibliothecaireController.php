<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class bibliothecaireController extends Controller
{
    public function index(){
    $users = User::All();
    return view('members',compact('users'));

    }
    public function destroy(User $user){
        $user->delete();
        return redirect(route('members.index'))->with('success','member delete successefuly');

    }

    public function Creat()
    {


    }
    public function store($name,$email)
    {
        $user=[
            'name'=>$name,
            'email'=>$email,
        ];
          Member::create($user);
         
        return redirect(route('members.index'));
    }

}
