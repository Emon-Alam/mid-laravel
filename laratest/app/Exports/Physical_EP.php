<?php

namespace App\Exports;

use App\PhysicalStore;
use Maatwebsite\Excel\Concerns\FromQuery;


class Physical_EP implements FromQuery //, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return PhysicalStore::query()->where('status','pending')->whereYear('date_sold',date('Y'))->whereMonth('date_sold',date('m'));
    }
    
}
