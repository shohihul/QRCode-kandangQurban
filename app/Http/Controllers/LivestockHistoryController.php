<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livestock;
use App\Http\Requests\LivestockHistoryStoreRequest;
use App\Repositories\LivestockHistoryRepository;

class LivestockHistoryController extends Controller
{
    public function __construct(LivestockHistoryRepository $livestockHistoryRepository)
    {
        $this->middleware('auth:web');
        $this->livestockHistoryRepository = $livestockHistoryRepository;
    }
    
    public function store(LivestockHistoryStoreRequest $request)
    {
        $history = $this->livestockHistoryRepository->store($request);

        if ($request->has('image')) {
            $this->livestockHistoryRepository->fileUpload($request, $history);
        }

        \Session::flash('status', 'Berhasil Menambahkan Riwayat Hewan Ternak');
        return redirect(route('livestock.detail', $request->livestock_id));
    }
}
