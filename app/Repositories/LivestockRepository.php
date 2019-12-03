<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Livestock;
use File;

class LivestockRepository
{
    private $model;

    public function __construct(Livestock $model)
    {
        $this->model = $model;
    }

    public function get($id)
    {
        $livestock = $this->model->where('id', $id)->first();
        return $livestock;
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $name = str_replace(' ', '', $request->get('name'));
            $livestock = $this->model->create([
                'cattleman_id' => $request->cattleman_id,
                'name' => $request->name,
                'livestock_type_id' => $request->livestock_type_id,
                'price' => $request->price,
                'stock' => $request->stock,
                'weight' => $request->weight,
                'description' => $request->description,
                'qr_code' => 'QrCode_livestock_' .  $name,
                'image' => 'image_' . $name
                ]
            );
            DB::commit();
            return $livestock;
        } catch (\Exception $e) {
            throw new \Exception($e);
        }
    }

    public function update(Request $request, $livestock)
    {
        DB::beginTransaction();
        try {
            $livestock->update([
                'name' => $request->name,
                'livestock_type_id' => $request->livestock_type_id,
                'price' => str_replace(".", '', $request->price),
                'stock' => $request->stock,
                'weight' => $request->weight,
                'description' => $request->description
                ],
            );
            DB::commit();
            return $livestock;
        } catch (\Exception $e) {
            throw new \Exception($e);
        }
    }

    public function fileUpload(Request $request, $livestock)
    {
        try {
            $name = str_replace(' ', '', $request->get('name'));
            $file = $request->file('image');
            $fileName = 'livestock_' . $request->cattleman_id . $name . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/img/livestock'), $fileName);
            $livestock->image = $fileName;
            $livestock->save();
        } catch (\Exception $e) {
            throw new \Exception($e);
        }
    }

    public function delete($livestock)
    {
        DB::beginTransaction();

        try {
            $livestock->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw new \Exception($e);
        }
    }

    public function deleteImage($livestock)
    {
        File::delete(public_path('assets/img/livestock/' . $livestock->image));
    }
}
