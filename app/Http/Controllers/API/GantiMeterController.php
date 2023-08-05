<?php

namespace App\Http\Controllers\API;

use App\Models\GantiMeter;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class GantiMeterController extends Controller
{
    public function all(Request $request)
    {
        $limit = $request->input('limit', 10);

        $gantiMeters = GantiMeter::paginate($limit);

        return ResponseFormatter::success(
            $gantiMeters,
            'Data GantiMeter berhasil diambil'
        );
    }

    public function getById($id)
    {
        $gantiMeter = GantiMeter::find($id);

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
