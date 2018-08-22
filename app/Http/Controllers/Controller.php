<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use App\User;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    

    public function getData()
    {
        $users = new User;

        $data['data'] = $users -> get();

        if (count('data[0]') >0 ) {
            return view('admin.index', $data);
        } else {
            return view('admin.index');
        }
    }   

}
