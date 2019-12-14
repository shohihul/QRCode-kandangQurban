<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cattleman;
use App\Models\Livestock;

class HomeController extends Controller
{

    public function profile($id)
    {
        $cattleman = Cattleman::where('id', $id)->first();
        $livestock = Livestock::where('cattleman_id', $id)->get();
        return view('profile',
            compact(
                'cattleman',
                'livestock'
            )
        );
    }

    public function livestock($id)
    {
        $livestock = Livestock::where('id', $id)->first();
        return view('livestock',
            compact(
                'livestock'
            )
        );
    }

    public function scanner()
    {
        return view('scanner');
    }
}
