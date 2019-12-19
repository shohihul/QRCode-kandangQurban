<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cattleman;
use App\Http\Requests\CattlemanHistoryStoreRequest;
use App\Repositories\CattlemanHistoryRepository;

class CattlemanHistoryController extends Controller
{
    public function __construct(CattlemanHistoryRepository $cattlemanHistoryRepository)
    {
        $this->middleware('auth:web');
        $this->cattlemanHistoryRepository = $cattlemanHistoryRepository;
    }

    public function store(CattlemanHistoryStoreRequest $request)
    {
        $history = $this->cattlemanHistoryRepository->store($request);

        if ($request->has('image')) {
            $this->cattlemanHistoryRepository->fileUpload($request, $history);
        }

        \Session::flash('status', 'Berhasil Menambahkan Riwayat Hewan Ternak');
        return redirect(route('cattleman.profile', $request->cattleman_id));
    }
}
