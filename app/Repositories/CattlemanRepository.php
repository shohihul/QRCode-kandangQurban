<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cattleman;
use Hash;
use File;

class CattlemanRepository
{
    private $model;

    public function __construct(Cattleman $model)
    {
        $this->model = $model;
    }

    public function get($id)
    {
        $cattleman = $this->model->where('id', $id)->first();
        return $cattleman;
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $name = str_replace(' ', '', $request->name);
            $cattleman = $this->model->create([
                'email' => $request->email,
                'name' => $request->name,
                'gender' => $request->gender,
                'regencie_id' => $request->regencie_id,
                'address' => $request->address,
                'password' => Hash::make($request->password),
                'qr_code' => 'QrCode_cattleman_' .  $name,
                'photo_profile' => 'photoProfile_' . $name
                ],
            );
            DB::commit();
            return $cattleman;
        } catch (\Exception $e) {
            throw new \Exception($e);
        }
    }

    public function update(Request $request, $cattleman)
    {
        DB::beginTransaction();
        try {
            $cattleman->update([
                'email' => $request->email,
                'name' => $request->name,
                'gender' => $request->gender,
                'regencie_id' => $request->regencie_id,
                'address' => $request->address,
                ],
            );
            DB::commit();
            return $cattleman;
        } catch (\Exception $e) {
            throw new \Exception($e);
        }
    }

    public function fileUpload(Request $request, $cattleman)
    {
        try {
            $name = str_replace(' ', '', $request->get('name'));
            $file = $request->file('photo_profile');
            $fileName = 'photoProfile_' . $name . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/img/cattleman'), $fileName);
            $cattleman->photo_profile = $fileName;
            $cattleman->save();
        } catch (\Exception $e) {
            throw new \Exception($e);
        }
    }

    public function delete($cattleman)
    {
        DB::beginTransaction();

        try {
            $cattleman->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw new \Exception($e);
        }
    }

    public function deletePhoto($cattleman)
    {
        File::delete(public_path('assets/img/cattleman/' . $cattleman->photo_profile));
    }
}
