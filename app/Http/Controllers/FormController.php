<?php

namespace App\Http\Controllers;
use App\Models\Form;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function read_data(){
        $dataform = Form::all();
        return view('dataPesanan', ['data' => $dataform]);
    }

    public function save_data(Request $req){
        $req->validate([
            'nama' => ['required'],
            'email' => ['required', 'email'],
            'nomor_whatsapp' => ['required'],
            'jenis_proyek' => ['required'],
            'deskripsi_proyek' => ['required'],
            'deadline' => ['required', 'date'],
            'design_confirm' => ['required'],
        ]);

        $dataform = Form::create([
            'nama' => $req->nama,
            'email' => $req->email,
            'nomor_whatsapp' => $req->nomor_whatsapp,
            'jenis_proyek' => $req->jenis_proyek,
            'deskripsi_proyek' => $req->deskripsi_proyek,
            'deadline' => $req->deadline,
            'design_confirm' => $req->design_confirm,
        ]);
        return redirect('/');
    }
}
