<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneralModel;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'data' => GeneralModel::getRow('tb_beranda', '*', 'WHERE id_beranda=1')
        ]);
    }
}
