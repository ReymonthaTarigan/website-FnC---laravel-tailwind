<?php

namespace App\Http\Controllers;
use App\Models\Form;
use App\Mail\FormSubmitted;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function read_data(){
        $dataform = Form::all();
        return view('dataPesanan', ['data' => $dataform]);
    }

    public function save_data(Request $req)
    {
        try {
            // Validasi input form
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

            // Jika tidak ada 'project_type' dan 'other_project' keduanya kosong, tampilkan error
            if (empty($req->project_type) && empty($req->other_project)) {
                return back()->withErrors(['project_type' => 'Harus mengisi salah satu: Jenis Proyek atau Lainnya.']);
            }

            // Simpan data form ke database
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

            // Coba kirim email
            try {
                Mail::to('wirus.himatif@gmail.com')->send(new FormSubmitted($req->all()));
            } catch (\Exception $e) {
                // Jika pengiriman email gagal, beri pesan error namun tetap lanjut redirect
                return redirect('/pengajuanPesanan')->with('error', 'Data tersimpan, tetapi pengiriman email gagal: ' . $e->getMessage());
            }

            // Redirect ke halaman sukses jika berhasil
            return redirect('/pengajuanPesanan')->with('success', 'Data berhasil disimpan dan email telah dikirim.');
        } catch (\Exception $e) {
            // Tangani jika ada error lain, termasuk validasi gagal
            return back()->withErrors(['msg' => 'Gagal menyimpan data: ' . $e->getMessage()]);
        }
    }


}
