@extends('layouts/app')
@section('title', 'PPDB Wikrama')
@section('content')
<form action="/insert" method="post">
    {{ csrf_field() }}
<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				<div class="card-title">Form Daftar</div>
			</div>
			<div class="card-body">
                {{-- 1.Siswa --}}
            <b style="font-size: 15px;">1.Form Siswa</b>
			<div class="form-group">
				<label for="exampleFormControlFile1">Foto Siswa 3x4 :</label>
				<input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
			</div>
			<div class="form-group">
				<label for="namalengkap">Nama Lengkap :</label>
				<input type="text" name="nama_lengkap" class="form-control" id="namalengkap" placeholder="Enter fullname...">
            </div>
            <div class="form-group">
				<label for="namapanggil">Nama Panggilan :</label>
				<input type="text" name="nama_panggilan" class="form-control" id="namapanggil" placeholder="Enter name...">
            </div>
            <div class="form-check">
				<label>Jenis Kelamin :</label><br/>
					<label class="form-radio-label">
						<input class="form-radio-input" type="radio" name="jk" value="laki"  checked="">
							<span class="form-radio-sign">Laki - Laki</span>
					</label>
					<label class="form-radio-label ml-3">
						<input class="form-radio-input" type="radio" name="jk" value="perempuan">
							<span class="form-radio-sign">Perempuan</span>
					</label>
            </div>
            <div class="form-group">
				<label for="tp">Tempat Lahir :</label>
                <input type="text" name="tempat_lahir" class="form-control" id="tp" placeholder="Tempat Lahir...">
            </div>
            <div class="form-group">
				<label for="tp2">Tanggal Lahir :</label>
                <input type="date" name="tanggal_lahir" class="form-control" id="tp2" placeholder="Tanggal Lahir...">
            </div>
			<div class="form-group">
				<label for="exampleFormControlSelect1">Kewarganegaraan / Agama :</label>
					<select name="agama" class="form-control" id="exampleFormControlSelect1">
						<option value="islam">islam</option>
						<option value="kristen">kristen</option>
						<option value="katolik">katolik</option>
						<option value="buddha">buddha</option>
						<option value="konghucu">konghucu</option>
					</select>
            </div>
            <div class="form-group">
				<label for="ct">Cita - Cita :</label>
                <input type="text" name="cita" class="form-control" id="ct" placeholder="cita...">
            </div>
            <div class="form-group">
				<label for="hn">Hobby :</label>
                <input type="text" name="hoby" class="form-control" id="hn" placeholder="hobby...">
            </div>
            <div class="form-group">
				<label for="ank">Anak Ke- :</label>
                <input type="number" name="anak_ke" class="form-control" id="ank" placeholder="anak ke berapa...">
			</div>
			<div class="form-group">
				<b>Jumlah Saudara :</b><br>
				<label for="inlineinput" class="col-md-3 col-form-label">Kandung :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="jml_saudara" class="form-control input-full" id="inlineinput" placeholder="Enter Input">
					</div>
				<label for="inlineinput2" class="col-md-3 col-form-label">Tiri :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="jml_saudara" class="form-control input-full" id="inlineinput2" placeholder="Enter Input">
					</div>
				<label for="inlineinput3" class="col-md-3 col-form-label">Angkat :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="jml_saudara" class="form-control input-full" id="inlineinput3" placeholder="Enter Input">
                    </div>
			</div>
			<div class="form-group">
				<label for="bebe">Berat Badan(Kg) :</label>
                <input type="number" name="berat_badan" class="form-control" id="bebe" placeholder="...">
			</div>
			<div class="form-group">
				<label for="tiba">Tinggi Badan(cm) :</label>
                <input type="number" name="tinggi_badan" class="form-control" id="tiba" placeholder="...">
			</div>
			<div class="form-group">
				<label for="drah">Gol. Darah :</label>
                <input type="text" name="gol_darah" class="form-control" id="drah" placeholder="...">
            </div>
            {{-- 2. Keterangan tmpt tinggal --}}
            <b style="margin-left: 10px;font-size: 15px;">2.Keterangan Tempat Tinggal</b>
            <div class="form-group">
				<label for="almtrm">Alamat Rumah :</label>
                <input type="text" name="alamat" class="form-control" id="almtrm" placeholder="alamat(rt/rw)">
            </div>
            <div class="form-group">
				<label for="klrhn">Kelurahan :</label>
                <input type="text" name="kelurahan" class="form-control" id="klrhn" placeholder="...">
            </div>
            <div class="form-group">
				<label for="kcmtn">Kecamatan :</label>
                <input type="text" name="kecamatan" class="form-control" id="kcmtn" placeholder="...">
            </div>
            <div class="form-group">
				<label for="kbkt">Kota/Kabupaten :</label>
                <input type="text" name="kota" class="form-control" id="kbkt" placeholder="...">
            </div>
            <div class="form-group">
				<label for="prov">Provinsi :</label>
                <input type="text" name="provinsi" class="form-control" id="prov" placeholder="...">
            </div>
            <div class="form-group">
				<label for="kdps">Kode Pos :</label>
                <input type="text" name="kd_pos" class="form-control" id="kdps" placeholder="...">
            </div>
            <div class="form-group">
				<label for="tlprmh">No. Telpon Rumah :</label>
                <input type="number" name="no_telp_rumah" class="form-control" id="tlprmh" placeholder="...">
            </div>
            <div class="form-group">
				<label for="emel">E-mail :</label>
                <input type="email" name="email" class="form-control" id="emel" placeholder="...">
            </div>
            <div class="form-check">
				<label>Tinggal Dengan :</label><br/>
					<label class="form-radio-label">
						<input class="form-radio-input" type="radio" name="tinggal_dengan" value="orangtua"  checked="">
							<span class="form-radio-sign">Orang Tua</span>
					</label>
					<label class="form-radio-label ml-3">
						<input class="form-radio-input" type="radio" name="tinggal_dengan" value="asrama">
							<span class="form-radio-sign">Asrama</span>
                    </label>
                    <label class="form-radio-label ml-3">
						<input class="form-radio-input" type="radio" name="tinggal_dengan" value="saudara">
							<span class="form-radio-sign">Saudara</span>
					</label>
            </div>
            {{-- 3.Keterangan Kesehatan --}}
            <b style="margin-left: 10px;font-size: 15px;">3.Keterangan Kesehatan</b>
            <div class="form-group">
				<label for="pykt">Riwayat Penyakit(namaPenyakit/kapan) :</label>
                <input type="text" name="penyakit" class="form-control" id="pykt" placeholder="jika tidak maka kosongkan...">
            </div>
            {{-- 4.Data OrangTua/Wali --}}
            <b style="margin-left: 10px;font-size: 15px;">4.Data OrangTua/Wali</b><br>
            <b style="margin-left: 13px;font-size: 13px;">A. Data Ayah</b>
            {{-- Data Ayah --}}
            <div class="form-group">
				<label for="nmyh">Nama Ayah :</label>
                <input type="text" name="nama_ayah" class="form-control" id="nmyh" placeholder="masih ada/almarhum">
            </div>
            <div class="form-group">
				<label for="tlhr">Tempat Lahir :</label>
                <input type="text" name="tempatlahir_ayah" class="form-control" id="tlhr" placeholder="Tempat Lahir...">
            </div>
            <div class="form-group">
				<label for="tlhr2">Tanggal Lahir :</label>
                <input type="date" name="tglahir_ayah" class="form-control" id="tlhr2" placeholder="Tanggal Lahir...">
            </div>
            <div class="form-group">
				<label for="krjyh">Pekerjaan :</label>
                <input type="text" name="kerja_ayah" class="form-control" id="krjyh" placeholder="...">
            </div>
            <div class="form-group">
				<label for="pdtrkh">Pendidikan Terakhir :</label>
                <input type="text" name="pend_akhira" class="form-control" id="pdtrkh" placeholder="...">
            </div>
            <div class="form-group">
				<label for="exampleFormControlSelect1">Kewarganegaraan / Agama :</label>
					<select name="agama_ayah" class="form-control" id="exampleFormControlSelect1">
						<option value="islam">islam</option>
						<option value="kristen">kristen</option>
						<option value="katolik">katolik</option>
						<option value="buddha">buddha</option>
						<option value="konghucu">konghucu</option>
					</select>
            </div>
            <div class="form-group">
				<label for="nohape">No. HP/WA :</label>
                <input type="number" name="no_telpayah" class="form-control" id="nohape" placeholder="...">
            </div>
            <b style="margin-left: 13px;font-size: 13px;">B. Data Ibu</b>
            {{-- Data Ibu --}}
            <div class="form-group">
				<label for="nmibu">Nama Ibu :</label>
                <input type="text" name="nama_ibu" class="form-control" id="nmibu" placeholder="masih ada/almarhum">
            </div>
            <div class="form-group">
				<label for="thli">Tempat Lahir :</label>
                <input type="text" name="tempatlahir_ibu" class="form-control" id="thli" placeholder="Tempat Lahir...">
            </div>
            <div class="form-group">
				<label for="thli2">Tanggal Lahir :</label>
                <input type="date" name="tglahir_ibu" class="form-control" id="thli2" placeholder="Tanggal Lahir...">
            </div>
            <div class="form-group">
				<label for="krjibu">Pekerjaan :</label>
                <input type="text" name="kerja_ibu" class="form-control" id="krjibu" placeholder="...">
            </div>
            <div class="form-group">
				<label for="pdibu">Pendidikan Terakhir :</label>
                <input type="text" name="pend_akhiri" class="form-control" id="pdibu" placeholder="...">
            </div>
            <div class="form-group">
				<label for="exampleFormControlSelect1">Kewarganegaraan / Agama :</label>
					<select name="agama_ibu" class="form-control" id="exampleFormControlSelect1">
						<option value="islam">islam</option>
						<option value="kristen">kristen</option>
						<option value="katolik">katolik</option>
						<option value="buddha">buddha</option>
						<option value="konghucu">konghucu</option>
					</select>
            </div>
            <div class="form-group">
				<label for="nohapeibu">No. HP/WA :</label>
                <input type="number" name="no_telpibu" class="form-control" id="nohapeibu" placeholder="...">
            </div>
            <b style="margin-left: 13px;font-size: 13px;">C. Data Wali</b>
            {{-- Data Wali --}}
            <div class="form-group">
				<label for="nmwl">Nama Wali :</label>
                <input type="text" name="nama_wali" class="form-control" id="nmwl" placeholder="masih ada/almarhum">
            </div>
            <div class="form-group">
				<label for="tlhrw">Tempat Lahir :</label>
                <input type="text" name="tempatlahir_wali" class="form-control" id="tlhrw" placeholder="Tempat Lahir...">
            </div>
            <div class="form-group">
				<label for="tlhrw2">Tanggal Lahir :</label>
                <input type="date" name="tglahir_wali" class="form-control" id="tlhrw2" placeholder="Tanggal Lahir...">
            </div>
            <div class="form-group">
				<label for="krjyhw">Pekerjaan :</label>
                <input type="text" name="kerja_wali" class="form-control" id="krjyhw" placeholder="...">
            </div>
            <div class="form-group">
				<label for="pdtrkhw">Pendidikan Terakhir :</label>
                <input type="text" name="pend_akhirw" class="form-control" id="pdtrkhw" placeholder="...">
            </div>
            <div class="form-group">
				<label for="hbngdgmrd">Hubungan Dengan Murid :</label>
                <input type="text" name="hubungan" class="form-control" id="hbngdgmrd" placeholder="...">
            </div>
            <div class="form-group">
				<label for="exampleFormControlSelect1">Kewarganegaraan / Agama :</label>
					<select name="agama_wali" class="form-control" id="exampleFormControlSelect1">
						<option value="islam">islam</option>
						<option value="kristen">kristen</option>
						<option value="katolik">katolik</option>
						<option value="buddha">buddha</option>
						<option value="konghucu">konghucu</option>
					</select>
            </div>
            <div class="form-group">
				<label for="nohape">No. HP/WA :</label>
                <input type="number" name="no_telpwali" class="form-control" id="nohape" placeholder="...">
            </div>
            <div class="form-group">
				<label for="emelwali">Alamat E-Mail :</label>
                <input type="email" name="email_wali" class="form-control" id="emelwali" placeholder="...">
            </div>
            {{-- Nilai - Nilai --}}
            <b style="margin-left: 10px;font-size: 15px;">5.Nilai Raport</b><br><br>
            {{-- 1.Pai --}}
            <b style="margin-left: 13px;font-size: 13px;">A. Mapel PAI</b>
            <div class="form-group">
				<label for="paihiji" class="col-md-3 col-form-label">Kelas 7 SemesterSatu :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_paikelasatu_satu" class="form-control input-full" id="paihiji" placeholder="Enter Input">
					</div>
				<label for="paihiji2" class="col-md-3 col-form-label">Kelas 7 SemesterDua :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_paikelasatu_dua" class="form-control input-full" id="paihiji2" placeholder="Enter Input">
					</div>
				<label for="paihiji3" class="col-md-3 col-form-label">Kelas 8 SemesterSatu :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_paikelasdua_satu" class="form-control input-full" id="paihiji3" placeholder="Enter Input">
                    </div>
                <label for="paihiji4" class="col-md-3 col-form-label">Kelas 8 SemesterDua :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_paikelasdua_dua" class="form-control input-full" id="paihiji4" placeholder="Enter Input">
                    </div>
                <label for="paihiji5" class="col-md-3 col-form-label">Kelas 9 SemesterSatu :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_paikelastiga_satu" class="form-control input-full" id="paihiji5" placeholder="Enter Input">
                    </div>
            </div>
            {{-- 2.Bahasa indonesia --}}
            <b style="margin-left: 13px;font-size: 13px;">B. Mapel B.Indo</b>
            <div class="form-group">
				<label for="indohiji" class="col-md-3 col-form-label">Kelas 7 SemesterSatu :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_indokelasatu_satu" class="form-control input-full" id="indohiji" placeholder="Enter Input">
					</div>
				<label for="indohiji2" class="col-md-3 col-form-label">Kelas 7 SemesterDua :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_indokelasatu_dua" class="form-control input-full" id="indohiji2" placeholder="Enter Input">
					</div>
				<label for="indohiji3" class="col-md-3 col-form-label">Kelas 8 SemesterSatu :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_indokelasdua_satu" class="form-control input-full" id="indohiji3" placeholder="Enter Input">
                    </div>
                <label for="indohiji4" class="col-md-3 col-form-label">Kelas 8 SemesterDua :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_indokelasdua_dua" class="form-control input-full" id="indohiji4" placeholder="Enter Input">
                    </div>
                <label for="indohiji5" class="col-md-3 col-form-label">Kelas 9 SemesterSatu :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_indokelastiga_satu" class="form-control input-full" id="indohiji5" placeholder="Enter Input">
                    </div>
            </div>
            {{-- 3.Bahasa inggris --}}
            <b style="margin-left: 13px;font-size: 13px;">C. Mapel B.Inggris</b>
            <div class="form-group">
				<label for="inggrishiji" class="col-md-3 col-form-label">Kelas 7 SemesterSatu :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_inggriskelasatu_satu" class="form-control input-full" id="inggrishiji" placeholder="Enter Input">
					</div>
				<label for="inggrishiji2" class="col-md-3 col-form-label">Kelas 7 SemesterDua :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_inggriskelasatu_dua" class="form-control input-full" id="inggrishiji2" placeholder="Enter Input">
					</div>
				<label for="inggrishiji3" class="col-md-3 col-form-label">Kelas 8 SemesterSatu :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_inggriskelasdua_satu" class="form-control input-full" id="inggrishiji3" placeholder="Enter Input">
                    </div>
                <label for="inggrishiji4" class="col-md-3 col-form-label">Kelas 8 SemesterDua :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_inggriskelasdua_dua" class="form-control input-full" id="inggrishiji4" placeholder="Enter Input">
                    </div>
                <label for="inggrishiji5" class="col-md-3 col-form-label">Kelas 9 SemesterSatu :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_inggriskelastiga_satu" class="form-control input-full" id="inggrishiji5" placeholder="Enter Input">
                    </div>
            </div>
            {{-- 4.Matematika --}}
            <b style="margin-left: 13px;font-size: 13px;">D. Mapel Matematika</b>
            <div class="form-group">
				<label for="mtkhiji" class="col-md-3 col-form-label">Kelas 7 SemesterSatu :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_mtkkelasatu_satu" class="form-control input-full" id="mtkhiji" placeholder="Enter Input">
					</div>
				<label for="mtkhiji2" class="col-md-3 col-form-label">Kelas 7 SemesterDua :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_mtkkelasatu_dua" class="form-control input-full" id="mtkhiji2" placeholder="Enter Input">
					</div>
				<label for="mtkhiji3" class="col-md-3 col-form-label">Kelas 8 SemesterSatu :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_mtkkelasdua_satu" class="form-control input-full" id="mtkhiji3" placeholder="Enter Input">
                    </div>
                <label for="mtkhiji4" class="col-md-3 col-form-label">Kelas 8 SemesterDua :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_mtkkelasdua_dua" class="form-control input-full" id="mtkhiji4" placeholder="Enter Input">
                    </div>
                <label for="mtkhiji5" class="col-md-3 col-form-label">Kelas 9 SemesterSatu :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_mtkkelastiga_satu" class="form-control input-full" id="mtkhiji5" placeholder="Enter Input">
                    </div>
            </div>
            {{-- 5.ipa --}}
            <b style="margin-left: 13px;font-size: 13px;">E. Mapel IPA</b>
            <div class="form-group">
				<label for="ipahiji" class="col-md-3 col-form-label">Kelas 7 SemesterSatu :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_ipakelasatu_satu" class="form-control input-full" id="ipahiji" placeholder="Enter Input">
					</div>
				<label for="ipahiji2" class="col-md-3 col-form-label">Kelas 7 SemesterDua :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_ipakelasatu_dua" class="form-control input-full" id="ipahiji2" placeholder="Enter Input">
					</div>
				<label for="ipahiji3" class="col-md-3 col-form-label">Kelas 8 SemesterSatu :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_ipakelasdua_satu" class="form-control input-full" id="ipahiji3" placeholder="Enter Input">
                    </div>
                <label for="ipahiji4" class="col-md-3 col-form-label">Kelas 8 SemesterDua :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_ipakelasdua_dua" class="form-control input-full" id="ipahiji4" placeholder="Enter Input">
                    </div>
                <label for="ipahiji5" class="col-md-3 col-form-label">Kelas 9 SemesterSatu :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_ipakelastiga_satu" class="form-control input-full" id="ipahiji5" placeholder="Enter Input">
                    </div>
            </div>
            {{-- 6.ips --}}
            <b style="margin-left: 13px;font-size: 13px;">F. Mapel IPS</b>
            <div class="form-group">
				<label for="ipshiji" class="col-md-3 col-form-label">Kelas 7 SemesterSatu :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_ipskelasatu_satu" class="form-control input-full" id="ipshiji" placeholder="Enter Input">
					</div>
				<label for="ipshiji2" class="col-md-3 col-form-label">Kelas 7 SemesterDua :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_ipskelasatu_dua" class="form-control input-full" id="ipshiji2" placeholder="Enter Input">
					</div>
				<label for="ipshiji3" class="col-md-3 col-form-label">Kelas 8 SemesterSatu :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_ipskelasdua_satu" class="form-control input-full" id="ipshiji3" placeholder="Enter Input">
                    </div>
                <label for="ipshiji4" class="col-md-3 col-form-label">Kelas 8 SemesterDua :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_ipskelasdua_dua" class="form-control input-full" id="ipshiji4" placeholder="Enter Input">
                    </div>
                <label for="ipshiji5" class="col-md-3 col-form-label">Kelas 9 SemesterSatu :</label>
					<div class="col-md-9 p-0">
						<input type="number" name="nilai_ipskelastiga_satu" class="form-control input-full" id="ipshiji5" placeholder="Enter Input">
                    </div>
            </div>
            <div class="form-group">
				<label for="prsts">Prestasi Yang Pernah Diraih :</label>
                <input type="text" name="prestasi" class="form-control" id="prsts" placeholder="...">
            </div>
            <div class="form-group">
				<label for="exampleFormControlSelect1">Informasi SMK Wikrama 1 Garut Dari :</label>
					<select name="infowk" class="form-control" id="exampleFormControlSelect1">
						<option value="family">family</option>
						<option value="website">website</option>
						<option value="teman">teman</option>
						<option value="brosur">brosur</option>
                        <option value="sekolahsmp">sekolah smp</option>
                        <option value="facebook">facebook</option>
                        <option value="karyawan">karyawan/guru</option>
                        <option value="lainnya">lainnya</option>
					</select>
            </div>
			<div class="card-action">
				<button class="btn btn-success">Submit</button>
				<button class="btn btn-danger">Cancel</button>
            </div>
		  </div>
      </div>
  </div>
</div>
</form>
@endsection
