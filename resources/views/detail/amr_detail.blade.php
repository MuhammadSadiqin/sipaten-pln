@extends('layouts.master')
@section('content')
<div class="main-panel">
    <!-- BEGIN : Main Content-->
    <div class="main-content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('amr.index') }}" class="btn btn-raised btn-warning">
                        <i class="ft-arrow-left"></i> Kembali ke Menu AMR
                    </a>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="bordered-layout-basic-form">Detail Pelanggan AMR</h4>
                        </div>
                        <div class="card-body">
                            <div class="px-3">
                                <form class="form form-horizontal form-bordered" action="{{ route('amr.update', ['amr' => $amr->id]) }}" method="POST">

                                    <div class="form-body">
                                        <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
                                        <div class="form-group row">
                                            @csrf
                                            @method('PATCH')
                                            <label class="col-md-3 label-control" for="id">ID</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="id" value="{{ $amr->id }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="nama">Nama</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="nama" value="{{ $amr->nama }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="ulp">ULP</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="ulp" value="{{ $amr->ulp }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="kd_unit">Kode Unit</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="kd_unit" value="{{ $amr->kd_unit }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="id_pel">ID Pelanggan</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="id_pel" value="{{ $amr->id_pel }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="nama">Nama</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="nama" value="{{ $amr->nama }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="alamat">Alamat</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" id="alamat" readonly>{{ $amr->alamat }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="tarif">Tarif</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="tarif" value="{{ $amr->tarif }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="daya">Daya</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="daya" value="{{ $amr->daya }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="peta">Peta</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="peta" value="{{ $amr->peta }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="tipe">Tipe</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="tipe" value="{{ $amr->tipe }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="kelainan">Kelainan</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="kelainan" value="{{ $amr->kelainan }}" readonly>
                                            </div>
                                        </div>
                                        <!-- Tambahkan bagian lain sesuai kebutuhan -->

                                        <h4 class="form-section"><i class="ft-file-text"></i> Requirements</h4>

                                        
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="status">Status</label>
                                            <div class="col-md-9">
                                                <select id="status" name="status" class="form-control" required onchange="toggleConditionalFields()">
                                                    <option value="none" selected="" disabled="">Pilih Status</option>
                                                    <option value="Selesai" @if ($amr->status === 'Selesai') selected @endif>Selesai</option>
                                                    <option value="Belum" @if ($amr->status === 'Belum') selected @endif>Belum</option>
                                                    <option value="Tunda" @if ($amr->status === 'Tunda') selected @endif>Tunda</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div id="conditionalFieldsContainerTunda" style="display: none;">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="alasan_tunda" id="alasanTundaField">Alasan Tunda</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="alasan_tunda" name="alasan_tunda" value="{{ $amr->alasan_tunda }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="ket_tunda" id="ketTundaField">Keterangan Tunda</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="ket_tunda" name="ket_tunda" value="{{ $amr->ket_tunda }}">
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div id="conditionalFieldsContainer" style="display: none;">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="petugas">Petugas</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="petugas" name="petugas" value="{{ $amr->petugas }}">
                                                </div>
                                            </div>
                                          
                                            
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="tgl_tl">Tanggal TL</label>
                                                <div class="col-md-9">
                                                    <input type="date" class="form-control" id="tgl_tl" name="tgl_tl" value="{{ $amr->tgl_tl }}">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="merk_meter">Merk Meter</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="merk_meter" name="merk_meter" value="{{ $amr->merk_meter }}">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="no_meter">Nomor Meter</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="no_meter" name="no_meter" value="{{ $amr->no_meter }}">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="merk_modem">Merk Modem</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="merk_modem" name="merk_modem" value="{{ $amr->merk_modem }}">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="no_modem">Nomor Modem</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="no_modem" name="no_modem" value="{{ $amr->no_modem }}">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="merk_kartu">Merk Kartu</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="merk_kartu" name="merk_kartu" value="{{ $amr->merk_kartu }}">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="ip_kartu">IP Kartu</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="ip_kartu" name="ip_kartu" value="{{ $amr->ip_kartu }}">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="foto">Foto</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="foto" name="foto" value="{{ $amr->foto }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="no_berita_acara">Nomor Berita Acara</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="no_berita_acara" name="no_berita_acara" value="{{ $amr->no_berita_acara }}">
                                                </div>
                                            </div>
        
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="ket">Keterangan</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="ket" name="ket" value="{{ $amr->ket }}">
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
                                        <a href="{{ route('generatepdf.amr', ['id' => $amr->id]) }}" class="btn btn-raised btn-success" id="btn-generate-pdf">
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
