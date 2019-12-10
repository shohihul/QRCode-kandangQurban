<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\LivestockCategory;
use App\Models\LivestockType;
use App\Models\Cattleman;
use App\Models\Livestock;
use App\Repositories\LivestockRepository;

use App\Http\Requests\LivestockStoreRequest;
use App\Http\Requests\LivestockUpdateRequest;

class LivestockController extends Controller
{
    public function __construct(LivestockRepository $livestockRepository)
    {
        $this->middleware('auth:admin');
        $this->livestockRepository = $livestockRepository;
    }
    
    public function index()
    {
        $livestock = Livestock::paginate(10);
        return view('admin.livestock.index',
            compact(
                'livestock'
            )
        );
    }

    public function get_by_category(Request $request)
    {
        if (!$request->category_id) {
            $html = '<option value="">Null</option>';
        } else {
            $html = '';
            $type = LivestockType::where('livestock_category_id', $request->category_id)->get();
            foreach ($type as $jenis) {
                $html .= '<option value="'.$jenis->id.'">'.$jenis->name.'</option>';
            }
        }
        return response()->json(['html' => $html]);
    }

    public function create()
    {
        $category = LivestockCategory::all();
        $cattlemans = Cattleman::all();
        return view('admin.livestock.create',
            compact(
                'category',
                'cattlemans'
            )
        );
    }

    public function store(Request $request)
    {
        $livestock = $this->livestockRepository->store($request);
        $this->livestockRepository->fileUpload($request, $livestock);
        $this->livestockRepository->qrcode($request);
        $this->livestockRepository->uploadCloudinary($request);
        
        \Session::flash('status', 'Berhasil Menambahkan Hewan Ternak Peternak');
        return redirect(route('admin-livestock.index'));
    }

    public function detail($id)
    {
        $livestock = $this->livestockRepository->get($id);

        return view('admin.livestock.detail',
            compact(
                'livestock'
            )
        );
    }

    public function edit($id)
    {
        $category = LivestockCategory::all();
        $livestock = Livestock::where('id', $id)->first();
        return view('admin.livestock.edit',
            compact(
                'category',
                'livestock'
            )
        );
    }

    public function update(LivestockUpdateRequest $request, $id)
    {
        $livestock = $this->livestockRepository->get($id);
        $this->livestockRepository->update($request, $livestock);

        if ($request->has('image')) {
            $this->livestockRepository->deleteImage($livestock);
            $this->livestockRepository->fileUpload($request, $livestock);
        }

        \Session::flash('status', 'Berhasil Mengubah Data');
        return redirect(route('admin-livestock.detail', $id));
    }

    public function delete($id)
    {
        $livestock = $this->livestockRepository->get($id);
        $this->livestockRepository->deleteImage($livestock);
        $this->livestockRepository->delete($livestock);

        \Session::flash('status', 'Berhasil Menghapus Data');
        return redirect(route('admin-livestock.index'));
    }
}
