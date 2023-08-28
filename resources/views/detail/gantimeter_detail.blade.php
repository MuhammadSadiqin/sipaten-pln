@extends('layouts.master')
@section('content')
<div class="main-panel">
    <!-- BEGIN : Main Content-->
    <div class="main-content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('gantimeter.index') }}" class="btn btn-raised btn-warning">
                        <i class="ft-arrow-left"></i> Kembali ke Menu Gantimeter
                    </a>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="bordered-layout-basic-form">Detail Pelanggan Gantimeter</h4>
                        </div>
                        <div class="card-body">
                            <div class="px-3">
                                <form class="form form-horizontal form-bordered" action="{{ route('gantimeter.update', ['gantimeter' => $gantimeter->id]) }}" method="POST">

                                    <div class="form-body">
                                        <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
                                        <div class="form-group row">
                                            @csrf
                                            @method('PATCH')
                                            <label class="col-md-3 label-control" for="id">ID</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="id" value="{{ $gantimeter->id }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="nama">Nama</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="nama" value="{{ $gantimeter->nama }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="ulp">ULP</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="ulp" value="{{ $gantimeter->ulp }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="kd_unit">Kode Unit</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="kd_unit" value="{{ $gantimeter->kd_unit }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="id_pel">ID Pelanggan</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="id_pel" value="{{ $gantimeter->id_pel }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="nama">Nama</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="nama" value="{{ $gantimeter->nama }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="alamat">Alamat</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" id="alamat" readonly>{{ $gantimeter->alamat }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="tarif">Tarif</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="tarif" value="{{ $gantimeter->tarif }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="daya">Daya</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="daya" value="{{ $gantimeter->daya }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="peta">Peta</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="peta" value="{{ $gantimeter->peta }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="tipe">Tipe</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="tipe" value="{{ $gantimeter->tipe }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="kelainan">Kelainan</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="kelainan" value="{{ $gantimeter->kelainan }}" readonly>
                                            </div>
                                        </div>

                                    <h4 class="form-section"><i class="ft-file-text"></i> Requirements</h4>

                                    <!-- Bagian yang diganti -->
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="status">Status</label>
                                        <div class="col-md-9">
                                            <select id="status" name="status" class="form-control" required onchange="toggleConditionalFields()">
                                                <option value="none" selected="" disabled="">Pilih Status</option>
                                                <option value="Selesai" @if ($gantimeter->status === 'Selesai') selected @endif>Selesai</option>
                                                <option value="Belum" @if ($gantimeter->status === 'Belum') selected @endif>Belum</option>
                                                <option value="Tunda" @if ($gantimeter->status === 'Tunda') selected @endif>Tunda</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div id="conditionalFieldsContainerTunda" style="display: none;">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="alasan_tunda" id="alasanTundaField">Alasan Tunda</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="alasan_tunda" name="alasan_tunda" value="{{ $gantimeter->alasan_tunda }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="ket_tunda" id="ketTundaField">Keterangan Tunda</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="ket_tunda" name="ket_tunda" value="{{ $gantimeter->ket_tunda }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="conditionalFieldsContainer" style="display: none;">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="petugas">Petugas</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="petugas" name="petugas" value="{{ $gantimeter->petugas }}" placeholder="nama">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="tgl_tl">Tanggal TL</label>
                                            <div class="col-md-9">
                                                <input type="date" class="form-control" id="tgl_tl" name="tgl_tl" value="{{ $gantimeter->tgl_tl }}" placeholder="Tanggal">
                                            </div>
                                        </div>
    
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="merk_meter_lama">Merk Meter Lama</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="merk_meter_lama" name="merk_meter_lama" value="{{ $gantimeter->merk_meter_lama }}" placeholder="Merk Meter Lama">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="no_meter_lama">Nomor Meter Lama</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="no_meter_lama" name="no_meter_lama" value="{{ $gantimeter->no_meter_lama }}" placeholder="*1111">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="sisa_token_lama">Sisa Token Lama</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="sisa_token_lama" name="sisa_token_lama" value="{{ $gantimeter->sisa_token_lama }}" placeholder="*1111" >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="foto_app_lama">Foto Aplikasi Lama</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="foto_app_lama" name="foto_app_lama" value="{{ $gantimeter->foto_app_lama }}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="merk_meter_baru">Merk Meter Baru</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="merk_meter_baru" name="merk_meter_baru" value="{{ $gantimeter->merk_meter_baru }}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="no_meter_baru">Nomor Meter Baru</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="no_meter_baru" name="no_meter_baru" value="{{ $gantimeter->no_meter_baru }}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="sisa_token_baru">Sisa Token Baru</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="sisa_token_baru" name="sisa_token_baru" value="{{ $gantimeter->sisa_token_baru }}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="foto_app_baru">Foto Aplikasi Baru</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="foto_app_baru" name="foto_app_baru" value="{{ $gantimeter->foto_app_baru }}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="no_hp_pelanggan">Nomor HP Pelanggan</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="no_hp_pelanggan" name="no_hp_pelanggan" value="{{ $gantimeter->no_hp_pelanggan }}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="teken_pelanggan">Teken Pelanggan</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="teken_pelanggan" name="teken_pelanggan" value="{{ $gantimeter->teken_pelanggan }}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="nama_pelanggan">Nama Pelanggan</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="{{ $gantimeter->nama_pelanggan }}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="teken_petugas">Teken Petugas</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="teken_petugas" name="teken_petugas" value="{{ $gantimeter->teken_petugas }}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="no_berita_acara">Nomor Berita Acara</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="no_berita_acara" name="no_berita_acara" value="{{ $gantimeter->no_berita_acara }}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="ket">Keterangan</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="ket" name="ket" value="{{ $gantimeter->ket }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="created_at">Tanggal di Upload</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="created_at" name="created_at" value="{{ $gantimeter->created_at }}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="updated_at">Tanggal Di Edit</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{ $gantimeter->updated_at }}" disabled>
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
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> <!-- Tambahkan baris ini -->
                                        <button type="submit" class="btn btn-raised btn-primary" id="btn-save">
                                            <i class="fa fa-check-square-o"></i> Save
                                        </button>
                                        <a href="{{ route('generatepdf.gantimeter', ['id' => $gantimeter->id]) }}" class="btn btn-raised btn-success" id="btn-generate-pdf">
                                            <i class="fa fa-file-pdf"></i> Generate PDF
                                        </a>
                                    </div>
                                </form>
                                <!-- Tambahkan script yang dibutuhkan -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
