<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Livestock;
use File;
use QrCode;
use Cloudder;

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
                'price' => str_replace(".", '', $request->price),
                'stock' => $request->stock,
                'weight' => $request->weight,
                'description' => $request->description,
                'qr_code' => 'qrcode_livestock_' .  $name . '.png',
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
                ]
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

    public function qrcode(Request $request, $livestock)
    {
        $name = str_replace(' ', '', $request->name);
        $content = 'http://localhost:8000/livestock/detail/' . $livestock->id;
        QrCode::format('png')
            ->size(500)
            ->generate($content, public_path('assets/img/qrcode/livestock/' . 'qrcode_livestock_' .  $name . '.png'));
    }

    public function uploadCloudinary(Request $request)
    {
        $name = str_replace(' ', '', $request->name);
        $fileName = 'qrcode_livestock_' .  $name . '.png';
        $file = public_path('assets/img/qrcode/livestock/' . $fileName);
        Cloudder::upload($file, $fileName, ['folder' => 'KandangQurban/livestock/']);
    }
}
