<?php

namespace App\Imports;

use App\Models\GantiMeter;
use Maatwebsite\Excel\Concerns\ToModel;

class GantiMeterExport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new GantiMeter([
            //
        ]);
    }
}
