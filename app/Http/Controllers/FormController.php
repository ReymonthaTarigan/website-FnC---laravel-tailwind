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

    public function save_data(Request $req)
    {
        try{
            $req->validate([
                'fname' => ['required'],
                'email' => ['required', 'email'],
                'phone' => ['required'],
                'instansi' => ['required'],
                'project_type' => ['nullable'],
                'other_project' => ['nullable'],
                'project_desc' => ['required'],
                'cost' => ['required', 'numeric'],
                'deadline' => ['required', 'date'],
                'project_status' => ['required'],
            ]);

            if (empty($req->project_type) && empty($req->other_project)) {
                return back()->withErrors(['project_type' => 'Harus mengisi salah satu: Jenis Proyek atau Lainnya.']);
            }

            $dataform = Form::create([
                'fname' => $req->fname,
                'email' => $req->email,
                'phone' => $req->phone,
                'instansi' => $req->instansi,
                'project_type' => $req->project_type,
                'other_project' => $req->other_project,
                'project_desc' => $req->project_desc,
                'cost' => $req->cost,
                'deadline' => $req->deadline,
                'project_status' => $req->project_status,
            ]);

            return redirect('/pengajuanPesanan');
        } catch (\Exception $e) {
            return back()->withErrors(['msg' => 'Gagal menyimpan data: ' . $e->getMessage()]);
        }
    }

}
