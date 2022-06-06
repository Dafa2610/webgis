<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Database\Facades\DB;
use app\models\TitikModel;

class TitikController extends controllers
{
    public function __construct(){
        $this TitikModel = new TitikModel();
    }
    
    public function index(){
        return view('home');
    }
    public function titik(){
        $results = $this->TitikModel->allData();
        return json_encoder($results);
    }
}
