<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class homeController extends Controller
{
    public function get()
    {   
        // $page = file_get_contents(`https://www.pornhub.com/webmasters/is_video_active?id={$id}`);
        return response()->json([
            'is_active' => 'true'
        ]);
    }

    public function login()
    {
        return view('Auth.login');
    }

    public function register()
    {
        return view('Auth.register');
    }
}
