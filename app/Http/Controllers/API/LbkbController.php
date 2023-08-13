<?php

namespace App\Http\Controllers\API;

use App\Models\Lbkb;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class LbkbController extends Controller
{
    public function all(Request $request)
    {
        $limit = $request->input('limit', 100000000);

        $lbkb = Lbkb::paginate($limit);

        return ResponseFormatter::success(
            $lbkb,
            'Data GantiMeter berhasil diambil'
        );
    }

    public function getById($id)
    {
        $lbkb = Lbkb::find($id);

        if ($lbkb) {
            return ResponseFormatter::success(
                $lbkb,
                'Data GantiMeter berhasil ditemukan'
            );
        } else {
            return ResponseFormatter::error(
                null,
                'Data GantiMeter tidak ditemukan',
                404
            );
        }
    }
}
