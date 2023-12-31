<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserInfo extends Controller
{
    public function __invoke(Request $request)
  {

    $user_key=180119;
    $secret_key=$request->secret_key;

    $data=[
        'Name'=>'Ahsan Al Bashar',
        'Class'=>'Bsc Engineering',
        'Session'=>'2017-2018'
    ];

    if($user_key == $secret_key){
        return response()->json([
            'data'=>$data,
        ]);
    }

    else
    return response()->json($ahsan=['ahsan','Al','Bahsar'],200);

  }
}
