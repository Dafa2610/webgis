<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Facades\DB;

class TitikModel extends Model
{
    public function allData(){
        $result = DB::table('maps')
        ->select('id','latitude','longitude')
        ->get();
    }
}
