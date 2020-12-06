<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formulir;
class FormulirController extends Controller
{
    public function insert(Request $request)
    {
        $request->validate([
            'file' => 'mimes:jpg,png,jpeg|max:3000'
        ]);
        $data = new Formulir();
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $request->file('file')->move('file/', $filename);
            $data->file = $filename;
        }
        $data->nama_lengkap = $request->nama_lengkap;
        $data->nama_panggilan = $request->nama_panggilan;
        $data->jk = $request->jk;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->agama = $request->agama;
        $data->cita = $request->cita;
        $data->hoby = $request->hoby;
        $data->anak_ke = $request->anak_ke;
        $data->jml_saudara = $request->jml_saudara;
        $data->berat_badan = $request->berat_badan;
        $data->tinggi_badan = $request->tinggi_badan;
        $data->gol_darah = $request->gol_darah;
        $data->alamat = $request->alamat;
        $data->kelurahan = $request->kelurahan;
        $data->kecamatan = $request->kecamatan;
        $data->kota = $request->kota;
        $data->provinsi = $request->provinsi;
        $data->kd_pos = $request->kd_pos;
        $data->no_telp_rumah = $request->no_telp_rumah;
        $data->email = $request->email;
        $data->tinggal_dengan = $request->tinggal_dengan;
        $data->penyakit = $request->penyakit;
        $data->nama_ayah = $request->nama_ayah;
        $data->tempatlahir_ayah = $request->tempatlahir_ayah;
        $data->tglahir_ayah = $request->tglahir_ayah;
        $data->kerja_ayah = $request->kerja_ayah;
        $data->pend_akhira = $request->pend_akhira;
        $data->agama_ayah = $request->agama_ayah;
        $data->no_telpayah = $request->no_telpayah;
        $data->nama_ibu = $request->nama_ibu;
        $data->tempatlahir_ibu = $request->tempatlahir_ibu;
        $data->tglahir_ibu = $request->tglahir_ibu;
        $data->kerja_ibu = $request->kerja_ibu;
        $data->pend_akhiri = $request->pend_akhiri;
        $data->agama_ibu = $request->agama_ibu;
        $data->no_telpibu = $request->no_telpibu;
        $data->nama_wali = $request->nama_wali;
        $data->tempatlahir_wali = $request->tempatlahir_wali;
        $data->tglahir_wali = $request->tglahir_wali;
        $data->kerja_wali = $request->kerja_wali;
        $data->pend_akhirw = $request->pend_akhirw;
        $data->hubungan = $request->hubungan;
        $data->agama_wali = $request->agama_wali;
        $data->no_telpwali = $request->no_telpwali;
        $data->email_wali = $request->email_wali;
        $data->nilai_paikelasatu_satu = $request->nilai_paikelasatu_satu;
        $data->nilai_paikelasatu_dua = $request->nilai_paikelasatu_dua;
        $data->nilai_paikelasdua_satu = $request->nilai_paikelasdua_satu;
        $data->nilai_paikelasdua_dua = $request->nilai_paikelasdua_dua;
        $data->nilai_paikelastiga_satu = $request->nilai_paikelastiga_satu;
        $data->nilai_indokelasatu_satu = $request->nilai_indokelasatu_satu;
        $data->nilai_indokelasatu_dua = $request->nilai_indokelasatu_dua;
        $data->nilai_indokelasdua_satu = $request->nilai_indokelasdua_satu;
        $data->nilai_indokelasdua_dua = $request->nilai_indokelasdua_dua;
        $data->nilai_indokelastiga_satu = $request->nilai_indokelastiga_satu;
        $data->nilai_inggriskelasatu_satu = $request->nilai_inggriskelasatu_satu;
        $data->nilai_inggriskelasatu_dua = $request->nilai_inggriskelasatu_dua;
        $data->nilai_inggriskelasdua_satu = $request->nilai_inggriskelasdua_satu;
        $data->nilai_inggriskelasdua_dua = $request->nilai_inggriskelasdua_dua;
        $data->nilai_inggriskelastiga_satu = $request->nilai_inggriskelastiga_satu;
        $data->nilai_mtkkelasatu_satu = $request->nilai_mtkkelasatu_satu;
        $data->nilai_mtkkelasatu_dua = $request->nilai_mtkkelasatu_dua;
        $data->nilai_mtkkelasdua_satu = $request->nilai_mtkkelasdua_satu;
        $data->nilai_mtkkelasdua_dua = $request->nilai_mtkkelasdua_dua;
        $data->nilai_mtkkelastiga_satu = $request->nilai_mtkkelastiga_satu;
        $data->nilai_ipakelasatu_satu = $request->nilai_ipakelasatu_satu;
        $data->nilai_ipakelasatu_dua = $request->nilai_ipakelasatu_dua;
        $data->nilai_ipakelasdua_satu = $request->nilai_ipakelasdua_satu;
        $data->nilai_ipakelasdua_dua = $request->nilai_ipakelasdua_dua;
        $data->nilai_ipakelastiga_satu = $request->nilai_ipakelastiga_satu;
        $data->nilai_ipskelasatu_satu = $request->nilai_ipskelasatu_satu;
        $data->nilai_ipskelasatu_dua = $request->nilai_ipskelasatu_dua;
        $data->nilai_ipskelasdua_satu = $request->nilai_ipskelasdua_satu;
        $data->nilai_ipskelasdua_dua = $request->nilai_ipskelasdua_dua;
        $data->nilai_ipskelastiga_satu = $request->nilai_ipskelastiga_satu;
        $data->prestasi = $request->prestasi;
        $data->info_wk = $request->info_wk;
        $data->save();
        return redirect('/formpengisian');
    }
}
