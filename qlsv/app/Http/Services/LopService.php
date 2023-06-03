<?php

namespace App\Http\Services;

use App\Models\Lopmonhoc;
use mysql_xdevapi\Session;

class LopService
{
    public function create($request){
        try {
            Lopmonhoc::create([
                'malop'=>$request->input('malop'),
                'tenlop'=>$request->input('tenlop'),
                'mota'=>$request->input('mota'),
                'soluongsv'=>$request->input('soluongsv'),
            ]);
            Session()->flash('success','Thêm mới lớp học thành công');
        }
        catch (Exception $ex){
            Session()->flash('error',$ex->getMessage());
            return false;
        }
        return true;
    }
    public function getAll(){
        //return Lopmonhoc::get();
        return Lopmonhoc::paginate(1);
    }
    public function edit($lop,$request){
        try {
            $lop->malop = $request->input('malop');
            $lop->tenlop = $request->input('tenlop');
            $lop->mota = $request->input('mota');
            $lop->soluongsv = $request->input('soluongsv');
            $lop->save();
            Session()->flash('success','Cập nhật thông tin lớp học thành công');

        }
        catch (Exception $ex){
            Session()->flash('error','Cập nhật thông tin lớp học KHÔNG thành công');
            return false;
        }
        return true;
    }
    public function delete($request){
        //
        $lop = Lopmonhoc::Where('id',$request->input('id')).first();
        if($lop){
           $lop->delete();
           return true;
        }
        return false;
    }
}
