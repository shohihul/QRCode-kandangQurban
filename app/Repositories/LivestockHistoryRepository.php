<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LivestockHistory;

class LivestockHistoryRepository
{
    private $model;

    public function __construct(LivestockHistory $model)
    {
        $this->model = $model;
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        $livestockHistory = $this->model->create([
            'title' =>  $request->title,
            'description' => $request->description,
            'livestock_id' => $request->livestock_id
        ]);
        DB::commit();
        return $livestockHistory;
    }

    public function fileUpload(Request $request, $history)
    {
        try {
            $id = $history->id;
            $file = $request->file('image');
            $fileName = 'id_' . $id . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/img/livestock/history'), $fileName);
            $history->image = $fileName;
            $history->save();
        } catch (\Exception $e) {
            throw new \Exception($e);
        }
    }
}
