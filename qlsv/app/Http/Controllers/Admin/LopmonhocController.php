<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\LopService;
use Illuminate\Http\Request;


class LopmonhocController extends Controller
{
    //
    protected $lopService;
    public function __construct(LopService $lopService)
    {
        $this->lopService = $lopService;
    }

    public function create(){
        return view('admin.lop.add',[
            'title'=>'Thêm mới lớp học'
        ]);
    }
    public function postcreate(Request $request){
        //echo "thêm mới thành công";
        //dd($request->input());
        $result = $this->lopService->create($request);
        return redirect()->back();
    }
}
