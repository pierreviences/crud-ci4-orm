<?php

namespace App\Controllers;

use App\Models\TamuModel;

class Tamu extends BaseController{
    public function index(){
        $tamu_model = new TamuModel();
        $all_data_tamu = $tamu_model->findAll();
        return view('tamu', ['all_data_tamu' => $all_data_tamu]);
    }

    public function add_data_tamu(){
        return view('add_data_tamu');
    }
}

?>