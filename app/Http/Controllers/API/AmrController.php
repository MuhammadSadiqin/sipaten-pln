<?php

namespace App\Http\Controllers\API;

use App\Models\Amr;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class AmrController extends Controller
{
    public function all(Request $request)
    {
        $limit = $request->input('limit', 100000000);

        $amr = Amr::paginate($limit);

        return ResponseFormatter::success(
            $amr,
            'Data GantiMeter berhasil diambil'
        );
    }

    public function getById($id)
    {
        $amr = Amr::find($id);

        if ($amr) {
            return ResponseFormatter::success(
                $amr,
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
