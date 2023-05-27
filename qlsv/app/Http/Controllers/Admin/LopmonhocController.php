<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateLopMHRequest;
use App\Http\Services\LopService;
use App\Models\Lopmonhoc;


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
    public function postcreate(CreateLopMHRequest $request){
        //echo "thêm mới thành công";
        //dd($request->input());
        $result = $this->lopService->create($request);
        return redirect()->back();
    }
    public function list(){
        $lops = $this->lopService->getAll();
        return view('admin.lop.list',[
            'title'=>'Danh sách lớp học',
            'lops'=> $lops
        ]);
    }
    public function edit(Lopmonhoc $lop){
        return view('admin.lop.edit',[
            'title'=>'Cập nhật thông tin lớp học',
            'lop'=>$lop
        ]);
    }
    public function postedit(Lopmonhoc $lop, CreateLopMHRequest $request){
       $result = $this->lopService->edit($lop,$request);
       return redirect()->back();
    }
}
