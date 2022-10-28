<?php

namespace App\Imports;

use App\Models\Admin\Employee;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportEmployee implements ToModel
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Employee([
            'name' => $row[1],
            'designation' => $row[2],
            'subject' => $row[3],
            'is_teacher' => $row[4]
        ]);
    }
}
