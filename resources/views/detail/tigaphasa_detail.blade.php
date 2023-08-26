@extends('layouts.master')
@section('content')
<div class="main-panel">
    <!-- BEGIN : Main Content-->
    <div class="main-content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('tigaphasa.index') }}" class="btn btn-raised btn-warning">
                        <i class="ft-arrow-left"></i> Kembali ke Menu Tigaphasa
                    </a>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="bordered-layout-basic-form">Detail Pelanggan Tigaphasa</h4>
                        </div>
                        <div class="card-body">
                            <div class="px-3">
                                <form class="form form-horizontal form-bordered" action="{{ route('tigaphasa.update', ['tigaphasa' => $tigaphasa->id]) }}" method="POST">

                                    <div class="form-body">
                                        <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
                                        <div class="form-group row">
                                            @csrf
                                            @method('PATCH')
                                            <label class="col-md-3 label-control" for="id">ID</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="id" value="{{ $tigaphasa->id }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="nama">Nama</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="nama" value="{{ $tigaphasa->nama }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="ulp">ULP</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="ulp" value="{{ $tigaphasa->ulp }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="kd_unit">Kode Unit</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="kd_unit" value="{{ $tigaphasa->kd_unit }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="id_pel">ID Pelanggan</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="id_pel" value="{{ $tigaphasa->id_pel }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="nama">Nama</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="nama" value="{{ $tigaphasa->nama }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="alamat">Alamat</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" id="alamat" readonly>{{ $tigaphasa->alamat }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="tarif">Tarif</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="tarif" value="{{ $tigaphasa->tarif }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="daya">Daya</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="daya" value="{{ $tigaphasa->daya }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="peta">Peta</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="peta" value="{{ $tigaphasa->peta }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="tipe">Tipe</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="tipe" value="{{ $tigaphasa->tipe }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="kelainan">Kelainan</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="kelainan" value="{{ $tigaphasa->kelainan }}" readonly>
                                            </div>
                                        </div>
                                        <!-- Bagian lainnya diubah dengan "tigaphasa" -->

                                        <h4 class="form-section"><i class="ft-file-text"></i> Requirements</h4>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="status">Status</label>
                                            <div class="col-md-9">
                                                <select id="status" name="status" class="form-control" required onchange="toggleConditionalFields()">
                                                    <option value="none" selected="" disabled="">Pilih Status</option>
                                                    <option value="Selesai" @if ($tigaphasa->status === 'Selesai') selected @endif>Selesai</option>
                                                    <option value="Belum" @if ($tigaphasa->status === 'Belum') selected @endif>Belum</option>
                                                    <option value="Tunda" @if ($tigaphasa->status === 'Tunda') selected @endif>Tunda</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div id="conditionalFieldsContainerTunda" style="display: none;">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="alasan_tunda" id="alasanTundaField">Alasan Tunda</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="alasan_tunda" name="alasan_tunda" value="{{ $tigaphasa->alasan_tunda }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="ket_tunda" id="ketTundaField">Keterangan Tunda</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="ket_tunda" name="ket_tunda" value="{{ $tigaphasa->ket_tunda }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="conditionalFieldsContainer" style="display: none;">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="petugas">Petugas</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="petugas" name="petugas" value="{{ $tigaphasa->petugas }}">
                                                </div>
                                            </div>
                                          
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="tgl_tl">Tanggal TL</label>
                                                <div class="col-md-9">
                                                    <input type="date" class="form-control" id="tgl_tl" name="tgl_tl" value="{{ $tigaphasa->tgl_tl }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="merk_type_kwh_meter_lama">Merk/Type KWH Meter Lama</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="merk_type_kwh_meter_lama" name="merk_type_kwh_meter_lama" value="{{ $tigaphasa->merk_type_kwh_meter_lama ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="arus_kwh_meter_lama">Arus KWH Meter Lama</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="arus_kwh_meter_lama" name="arus_kwh_meter_lama" value="{{ $tigaphasa->arus_kwh_meter_lama ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="no_seri_kwh_meter_lama">No. Seri KWH Meter Lama</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="no_seri_kwh_meter_lama" name="no_seri_kwh_meter_lama" value="{{ $tigaphasa->no_seri_kwh_meter_lama ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="kelas_kwh_meter_lama">Kelas KWH Meter Lama</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="kelas_kwh_meter_lama" name="kelas_kwh_meter_lama" value="{{ $tigaphasa->kelas_kwh_meter_lama ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="tahun_kwh_meter_lama">Tahun KWH Meter Lama</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="tahun_kwh_meter_lama" name="tahun_kwh_meter_lama" value="{{ $tigaphasa->tahun_kwh_meter_lama ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="stan_lwbp_kwh_meter_lama">STAN LWBP KWH Meter Lama</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="stan_lwbp_kwh_meter_lama" name="stan_lwbp_kwh_meter_lama" value="{{ $tigaphasa->stan_lwbp_kwh_meter_lama ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="stan_wbp_kwh_meter_lama">STAN WBP KWH Meter Lama</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="stan_wbp_kwh_meter_lama" name="stan_wbp_kwh_meter_lama" value="{{ $tigaphasa->stan_wbp_kwh_meter_lama ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="stan_total_kwh_meter_lama">STAN Total KWH Meter Lama</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="stan_total_kwh_meter_lama" name="stan_total_kwh_meter_lama" value="{{ $tigaphasa->stan_total_kwh_meter_lama ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="stan_kvarh_kwh_meter_lama">STAN kVARh KWH Meter Lama</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="stan_kvarh_kwh_meter_lama" name="stan_kvarh_kwh_meter_lama" value="{{ $tigaphasa->stan_kvarh_kwh_meter_lama ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="merk_type_kwh_meter_baru">Merk/Type KWH Meter Baru</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="merk_type_kwh_meter_baru" name="merk_type_kwh_meter_baru" value="{{ $tigaphasa->merk_type_kwh_meter_baru ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="arus_kwh_mwtwer_baru">Arus KWH Meter Baru</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="arus_kwh_mwtwer_baru" name="arus_kwh_mwtwer_baru" value="{{ $tigaphasa->arus_kwh_mwtwer_baru ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="no_seri_kwh_meter_baru">No. Seri KWH Meter Baru</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="no_seri_kwh_meter_baru" name="no_seri_kwh_meter_baru" value="{{ $tigaphasa->no_seri_kwh_meter_baru ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="kelas_kwh_meter_baru">Kelas KWH Meter Baru</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="kelas_kwh_meter_baru" name="kelas_kwh_meter_baru" value="{{ $tigaphasa->kelas_kwh_meter_baru ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="tahun_kwh_meter_baru">Tahun KWH Meter Baru</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="tahun_kwh_meter_baru" name="tahun_kwh_meter_baru" value="{{ $tigaphasa->tahun_kwh_meter_baru ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="stan_lwbp_kwh_meter_baru">STAN LWBP KWH Meter Baru</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="stan_lwbp_kwh_meter_baru" name="stan_lwbp_kwh_meter_baru" value="{{ $tigaphasa->stan_lwbp_kwh_meter_baru ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="stan_wbp_kwh_meter_baru">STAN WBP KWH Meter Baru</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="stan_wbp_kwh_meter_baru" name="stan_wbp_kwh_meter_baru" value="{{ $tigaphasa->stan_wbp_kwh_meter_baru ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="stan_total_kwh_meter_baru">STAN Total KWH Meter Baru</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="stan_total_kwh_meter_baru" name="stan_total_kwh_meter_baru" value="{{ $tigaphasa->stan_total_kwh_meter_baru ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="stan_kvarh_kwh_meter_baru">STAN kVARh KWH Meter Baru</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="stan_kvarh_kwh_meter_baru" name="stan_kvarh_kwh_meter_baru" value="{{ $tigaphasa->stan_kvarh_kwh_meter_baru ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="merk_type_ct_terpasang">Merk/Type CT Terpasang</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="merk_type_ct_terpasang" name="merk_type_ct_terpasang" value="{{ $tigaphasa->merk_type_ct_terpasang ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="ratio_ct_terpasang">Ratio CT Terpasang</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="ratio_ct_terpasang" name="ratio_ct_terpasang" value="{{ $tigaphasa->ratio_ct_terpasang ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="ganti_ct">Ganti CT</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="ganti_ct" name="ganti_ct" value="{{ $tigaphasa->ganti_ct ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="ratio_ct_baru">Ratio CT Baru</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="ratio_ct_baru" name="ratio_ct_baru" value="{{ $tigaphasa->ratio_ct_baru ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="merk_type_vt_terpasang">Merk/Type VT Terpasang</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="merk_type_vt_terpasang" name="merk_type_vt_terpasang" value="{{ $tigaphasa->merk_type_vt_terpasang ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="ratio_vt_terpasang">Ratio VT Terpasang</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="ratio_vt_terpasang" name="ratio_vt_terpasang" value="{{ $tigaphasa->ratio_vt_terpasang ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="ganti_vt">Ganti VT</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="ganti_vt" name="ganti_vt" value="{{ $tigaphasa->ganti_vt ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="merk_type_vt_baru">Merk/Type VT Baru</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="merk_type_vt_baru" name="merk_type_vt_baru" value="{{ $tigaphasa->merk_type_vt_baru ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="ratio_vt_baru">Ratio VT Baru</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="ratio_vt_baru" name="ratio_vt_baru" value="{{ $tigaphasa->ratio_vt_baru ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="amper_pembatas_lama">Amper Pembatas Lama</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="amper_pembatas_lama" name="amper_pembatas_lama" value="{{ $tigaphasa->amper_pembatas_lama ?? '' }}">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="merk_type_pembatas_baru">Merk/Type Pembatas Baru</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="merk_type_pembatas_baru" name="merk_type_pembatas_baru" value="{{ $tigaphasa->merk_type_pembatas_baru ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="amper_pembatas_baru">Amper Pembatas Baru</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="amper_pembatas_baru" name="amper_pembatas_baru" value="{{ $tigaphasa->amper_pembatas_baru ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="tegangan_rs">Tegangan RS</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="tegangan_rs" name="tegangan_rs" value="{{ $tigaphasa->tegangan_rs ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="tegangan_rt">Tegangan RT</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="tegangan_rt" name="tegangan_rt" value="{{ $tigaphasa->tegangan_rt ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="tegangan_st">Tegangan ST</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="tegangan_st" name="tegangan_st" value="{{ $tigaphasa->tegangan_st ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="tegangan_rn">Tegangan RN</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="tegangan_rn" name="tegangan_rn" value="{{ $tigaphasa->tegangan_rn ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="tegangan_rn_kwh_meter">Tegangan RN (KWH Meter)</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="tegangan_rn_kwh_meter" name="tegangan_rn_kwh_meter" value="{{ $tigaphasa->tegangan_rn_kwh_meter ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="tegangan_sn">Tegangan SN</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="tegangan_sn" name="tegangan_sn" value="{{ $tigaphasa->tegangan_sn ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="tegangan_sn_kwh_meter">Tegangan SN (KWH Meter)</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="tegangan_sn_kwh_meter" name="tegangan_sn_kwh_meter" value="{{ $tigaphasa->tegangan_sn_kwh_meter ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="tegangan_tn_kwh_meter">Tegangan TN (KWH Meter)</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="tegangan_tn_kwh_meter" name="tegangan_tn_kwh_meter" value="{{ $tigaphasa->tegangan_tn_kwh_meter ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="arus_primer_r">Arus Primer R</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="arus_primer_r" name="arus_primer_r" value="{{ $tigaphasa->arus_primer_r ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="arus_sekunder_r">Arus Sekunder R</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="arus_sekunder_r" name="arus_sekunder_r" value="{{ $tigaphasa->arus_sekunder_r ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="arus_error_r">Arus Error R</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="arus_error_r" name="arus_error_r" value="{{ $tigaphasa->arus_error_r ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="arus_primer_s">Arus Primer S</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="arus_primer_s" name="arus_primer_s" value="{{ $tigaphasa->arus_primer_s ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="arus_sekunder_s">Arus Sekunder S</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="arus_sekunder_s" name="arus_sekunder_s" value="{{ $tigaphasa->arus_sekunder_s ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="arus_error_s">Arus Error S</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="arus_error_s" name="arus_error_s" value="{{ $tigaphasa->arus_error_s ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="tegangan_tn">Tegangan TN</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="tegangan_tn" name="tegangan_tn" value="{{ $tigaphasa->tegangan_tn ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="arus_primer_t">Arus Primer T</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="arus_primer_t" name="arus_primer_t" value="{{ $tigaphasa->arus_primer_t ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="arus_sekunder_t">Arus Sekunder T</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="arus_sekunder_t" name="arus_sekunder_t" value="{{ $tigaphasa->arus_sekunder_t ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="arus_error_t">Arus Error T</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="arus_error_t" name="arus_error_t" value="{{ $tigaphasa->arus_error_t ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="fotoPhasor">Foto Phasor</label>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control-file" id="fotoPhasor" name="fotoPhasor" value="{{ $tigaphasa->fotoPhasor ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="fotoPemeriksaan">Foto Pemeriksaan</label>
                                                <div class="col-md-9">
                                                    <input type="file" class="form-control-file" id="fotoPemeriksaan" name="fotoPemeriksaan" value="{{ $tigaphasa->fotoPemeriksaan ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="temuan">Temuan</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" id="temuan" name="temuan">{{ $tigaphasa->temuan ?? '' }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="no_hp_pelanggan">No. HP Pelanggan</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="no_hp_pelanggan" name="no_hp_pelanggan" value="{{ $tigaphasa->no_hp_pelanggan ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="teken_pelanggan">Teken Pelanggan</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="teken_pelanggan" name="teken_pelanggan" value="{{ $tigaphasa->teken_pelanggan ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nama_pelanggan">Nama Pelanggan</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="{{ $tigaphasa->nama_pelanggan ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="teken_mengetahui">Teken Mengetahui</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="teken_mengetahui" name="teken_mengetahui" value="{{ $tigaphasa->teken_mengetahui ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="teken_petugas_1">Teken Petugas 1</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="teken_petugas_1" name="teken_petugas_1" value="{{ $tigaphasa->teken_petugas_1 ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nama_petugas_1">Nama Petugas 1</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="nama_petugas_1" name="nama_petugas_1" value="{{ $tigaphasa->nama_petugas_1 ?? '' }}">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="teken_petugas2">Teken Petugas 2</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="teken_petugas2" name="teken_petugas2" value="{{ $tigaphasa->teken_petugas2 ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="nama_petugas_2">Nama Petugas 2</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="nama_petugas_2" name="nama_petugas_2" value="{{ $tigaphasa->nama_petugas_2 ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="no_berita_acara">No. Berita Acara</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="no_berita_acara" name="no_berita_acara" value="{{ $tigaphasa->no_berita_acara ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="ket">Keterangan</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" id="ket" name="ket">{{ $tigaphasa->ket ?? '' }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        function toggleConditionalFields() {
                                            var statusSelect = document.getElementById("status");
                                            var conditionalFieldsContainer = document.getElementById("conditionalFieldsContainer");
                                            var conditionalFieldsContainerTunda = document.getElementById("conditionalFieldsContainerTunda");
                                                                                        
                                            if (statusSelect.value === "Selesai") {
                                                conditionalFieldsContainer.style.display = "block";
                                                conditionalFieldsContainerTunda.style.display = "none";
                                            }else if (statusSelect.value === "Tunda") {
                                                conditionalFieldsContainerTunda.style.display = "block";
                                                conditionalFieldsContainer.style.display = "none";
                                            }else {
                                                conditionalFieldsContainer.style.display = "none";
                                                conditionalFieldsContainerTunda.style.display = "none";
                                            }
                                        }
                                        
                                        // Initial call to set the initial visibility
                                        toggleConditionalFields();
                                        </script>

                                    <div class="form-actions">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-raised btn-primary" id="btn-save">
                                            <i class="fa fa-check-square-o"></i> Save
                                        </button>
                                        <a href="{{ route('generatepdf.tigaphasa', ['id' => $tigaphasa->id]) }}" class="btn btn-raised btn-success" id="btn-generate-pdf">
                                            <i class="fa fa-file-pdf"></i> Generate PDF
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
