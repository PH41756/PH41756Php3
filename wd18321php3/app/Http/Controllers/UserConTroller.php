<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserConTroller extends Controller
{
    //
    function showUser(){
        $user = [
            [
                'id'=> '1',
                'name'=> 'jheiu'
            ],
            [
                 'id'=> '2',
                'name'=> 'kheiu'
            ]
            ];
        return view('/list-user')->with([ 'user' => $user ]);
    }
    function getUser($id, $name=''){
        echo $id; echo'<br>';
        echo $name;
    }
    function updateUser(Request $Request){
        echo $Request->id;

        echo $Request->name;
    }
    function thongTinSv(){
        $thongTinSv = [
            [
                'id'=> '1',
                'name'=> 'hieu',
                'lop'=> 'wd18321'
            ]

            ];
            return view('/lab1')->with([ 'thongTinSv' => $thongTinSv ]);
    }
}
