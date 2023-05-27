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
}
