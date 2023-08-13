<?php

namespace App\Http\Controllers\API;

use App\Models\TigaPhasa;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class TigaPhasaController extends Controller
{
    public function all(Request $request)
    {
        $limit = $request->input('limit', 100000000);

        $gantiMeters = TigaPhasa::paginate($limit);

        return ResponseFormatter::success(
            $gantiMeters,
            'Data GantiMeter berhasil diambil'
        );
    }

    public function getById($id)
    {
        $gantiMeter = TigaPhasa::find($id);

        if ($gantiMeter) {
            return ResponseFormatter::success(
                $gantiMeter,
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
