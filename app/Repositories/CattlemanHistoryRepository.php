<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CattlemanHistory;

class CattlemanHistoryRepository
{
    private $model;

    public function __construct(CattlemanHistory $model)
    {
        $this->model = $model;
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        $cattlemanHistory = $this->model->create([
            'title' =>  $request->title,
            'description' => $request->description,
            'cattleman_id' => $request->cattleman_id
        ]);
        DB::commit();
        return $cattlemanHistory;
    }

    public function fileUpload(Request $request, $history)
    {
        try {
            $id = $history->id;
            $file = $request->file('image');
            $fileName = 'id_' . $id . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/img/cattleman/history'), $fileName);
            $history->image = $fileName;
            $history->save();
        } catch (\Exception $e) {
            throw new \Exception($e);
        }
    }
}
