<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function UserList(){
        $data= array(array('name'=>'Hien'));
        return view('user.v_user_list')->with('userlist',$data);
    }
}
