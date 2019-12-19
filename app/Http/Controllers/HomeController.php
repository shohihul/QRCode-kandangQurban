<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cattleman;
use App\Models\Livestock;
use App\Models\CattlemanHistory;
use App\Models\LivestockHistory;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function profile($id)
    {
        $cattleman = Cattleman::where('id', $id)->first();
        $livestock = Livestock::where('cattleman_id', $id)->paginate(5);
        $history = CattlemanHistory::where('cattleman_id', $id)->orderBy('id', 'DESC')->paginate(5);

        return view('profile',
            compact(
                'cattleman',
                'livestock',
                'history'
            )
        );
    }

    public function livestock($id)
    {
        $livestock = Livestock::where('id', $id)->first();
        $history = LivestockHistory::where('livestock_id', $id)->orderBy('id', 'DESC')->paginate(5);

        return view('livestock',
            compact(
                'livestock',
                'history'
            )
        );
    }

    public function scanner()
    {
        return view('scanner');
    }
}
