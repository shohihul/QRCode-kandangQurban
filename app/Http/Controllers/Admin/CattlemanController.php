<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Models\Regencie;
use App\Models\Cattleman;
use App\Repositories\CattlemanRepository;

use App\Http\Requests\CattlemanStoreRequest;
use App\Http\Requests\CattlemanUpdateRequest;

class CattlemanController extends Controller
{
    public function __construct(CattlemanRepository $cattlemanRepository)
    {
        $this->middleware('auth:admin');
        $this->cattlemanRepository = $cattlemanRepository;
    }
    
    public function index()
    {
        $cattleman = Cattleman::paginate(10);
        return view('admin.cattleman.index',
            compact(
                'cattleman'
            )
        );
    }

    public function get_by_province(Request $request)
    {
        
        if (!$request->province_id) {
            $html = '<option value="">'.trans('global.pleaseSelect').'</option>';
        } else {
            $html = '';
            $regencies = Regencie::where('province_id', $request->province_id)->get();
            foreach ($regencies as $regency) {
                $html .= '<option value="'.$regency->id.'">'.$regency->name.'</option>';
            }
        }
        return response()->json(['html' => $html]);
    }

    public function create()
    {
        $province = Province::all();
        return view('admin.cattleman.create',
            compact(
                'province'
            )
        );
    }

    public function store(CattlemanStoreRequest $request)
    {
        $cattleman = $this->cattlemanRepository->store($request);
        $this->cattlemanRepository->fileUpload($request, $cattleman);
        
        \Session::flash('status', 'Berhasil Menambahkan Peternak');
        return redirect(route('admin-cattleman.index'));
    }

    public function detail($id)
    {
        $cattleman = $this->cattlemanRepository->get($id);

        return view('admin.cattleman.detail',
            compact(
                'cattleman'
            )
        );
    }

    public function edit($id)
    {
        $cattleman = $this->cattlemanRepository->get($id);
        $province = Province::all();

        return view('admin.cattleman.edit',
            compact(
                'cattleman',
                'province'
            )
        );
    }

    public function update(CattlemanUpdateRequest $request, $id)
    {
        $cattleman = $this->cattlemanRepository->get($id);
        $this->cattlemanRepository->update($request, $cattleman);

        if ($request->has('photo_profile')) {
            $this->cattlemanRepository->deletePhoto($cattleman);
            $this->cattlemanRepository->fileUpload($request, $cattleman);
        }

        \Session::flash('status', 'Berhasil Mengubah Data');
        return redirect(route('admin-cattleman.detail', $id));
    }

    public function delete($id)
    {
        $cattleman = $this->cattlemanRepository->get($id);
        $this->cattlemanRepository->deletePhoto($cattleman);
        $this->cattlemanRepository->delete($cattleman);

        \Session::flash('status', 'Berhasil Menghapus Data');
        return redirect(route('admin-cattleman.index'));
    }
}
