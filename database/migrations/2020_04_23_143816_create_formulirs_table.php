<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormulirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulirs', function (Blueprint $table) {
            // Data murid
            $table->bigIncrements('id');
            $table->string('file');
            $table->string('nama_lengkap', 150);
            $table->string('nama_panggilan', 50);
            $table->string('jk', 15);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama', 35);
            $table->string('cita', 50);
            $table->string('hoby', 50);
            $table->string('anak_ke', 20);
            $table->string('jml_saudara', 20)->nullable();
            $table->string('berat_badan', 50);
            $table->string('tinggi_badan', 50);
            $table->string('gol_darah', 5);
            // keterangan tempat tinggal
            $table->string('alamat', 200);
            $table->string('kelurahan', 50);
            $table->string('kecamatan', 50);
            $table->string('kota', 50);
            $table->string('provinsi', 50);
            $table->string('kd_pos', 25);
            $table->string('no_telp_rumah', 15);
            $table->string('email', 50);
            $table->string('tinggal_dengan', 20)->nullable();
            // Keterangan kesehatan
            $table->string('penyakit', 100)->nullable();
            // Data orangtua/wali
            // 1.ayah
            $table->string('nama_ayah', 70);
            $table->string('tempatlahir_ayah', 70);
            $table->date('tglahir_ayah', 70);
            $table->string('kerja_ayah', 70);
            $table->string('pend_akhira', 70);
            $table->string('agama_ayah', 70);
            $table->string('no_telpayah', 70);
            // 2.ibu
            $table->string('nama_ibu', 70);
            $table->string('tempatlahir_ibu', 70);
            $table->date('tglahir_ibu', 70);
            $table->string('kerja_ibu', 70);
            $table->string('pend_akhiri', 70);
            $table->string('agama_ibu', 70);
            $table->string('no_telpibu', 70);
            // 3.Wali = gak wajib isi
            $table->string('nama_wali', 70)->nullable();
            $table->string('tempatlahir_wali', 70)->nullable();
            $table->date('tglahir_wali', 70)->nullable();
            $table->string('kerja_wali', 70)->nullable();
            $table->string('pend_akhirw', 70)->nullable();
            $table->string('hubungan', 70)->nullable();
            $table->string('agama_wali', 70)->nullable();
            $table->string('no_telpwali', 70)->nullable();
            $table->string('email_wali', 70)->nullable();
            // Nilai Raport
            // 1.pai
            $table->string('nilai_paikelasatu_satu', 50);
            $table->string('nilai_paikelasatu_dua', 50);
            $table->string('nilai_paikelasdua_satu', 50);
            $table->string('nilai_paikelasdua_dua', 50);
            $table->string('nilai_paikelastiga_satu', 50);
            // 2.Bahasa indonesia
            $table->string('nilai_indokelasatu_satu', 50);
            $table->string('nilai_indokelasatu_dua', 50);
            $table->string('nilai_indokelasdua_satu', 50);
            $table->string('nilai_indokelasdua_dua', 50);
            $table->string('nilai_indokelastiga_satu', 50);
            // 3.Bahasa Inggris
            $table->string('nilai_inggriskelasatu_satu', 50);
            $table->string('nilai_inggriskelasatu_dua', 50);
            $table->string('nilai_inggriskelasdua_satu', 50);
            $table->string('nilai_inggriskelasdua_dua', 50);
            $table->string('nilai_inggriskelastiga_satu', 50);
            // 4.Matematika
            $table->string('nilai_mtkkelasatu_satu', 50);
            $table->string('nilai_mtkkelasatu_dua', 50);
            $table->string('nilai_mtkkelasdua_satu', 50);
            $table->string('nilai_mtkkelasdua_dua', 50);
            $table->string('nilai_mtkkelastiga_satu', 50);
            // 4.ipa
            $table->string('nilai_ipakelasatu_satu', 50);
            $table->string('nilai_ipakelasatu_dua', 50);
            $table->string('nilai_ipakelasdua_satu', 50);
            $table->string('nilai_ipakelasdua_dua', 50);
            $table->string('nilai_ipakelastiga_satu', 50);
            // 4.ips
            $table->string('nilai_ipskelasatu_satu', 50);
            $table->string('nilai_ipskelasatu_dua', 50);
            $table->string('nilai_ipskelasdua_satu', 50);
            $table->string('nilai_ipskelasdua_dua', 50);
            $table->string('nilai_ipskelastiga_satu', 50);
            // 5.Prestasi
            $table->string('prestasi', 150)->nullable();
            // Informasi smk wikrama garut dari mana
            $table->string('info_wk', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formulirs');
    }
}
