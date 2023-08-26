@extends('layouts.master')
@section('content')
<div class="main-panel">
    <!-- BEGIN : Main Content-->
    <div class="main-content">
        <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('lbkb.index') }}" class="btn btn-raised btn-warning">
                            <i class="ft-arrow-left"></i> Kembali ke Menu LBKB
                        </a>
                      <div class="card">
                        <div class="card-header">
                          <h4 class="card-title" id="bordered-layout-basic-form">Detail Pelanggan LBKB</h4>
                        </div>
                        <div class="card-body">
                          <div class="px-3">
                            <form class="form form-horizontal form-bordered" action="{{ route('lbkb.update', ['lbkb' => $lbkb->id]) }}" method="POST">
                               
                              <div class="form-body">
                                <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
                                <div class="form-group row">
                                    @csrf
                                    @method('PATCH')
                                    <label class="col-md-3 label-control" for="id">ID</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="id" value="{{ $lbkb->id }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="ulp">ULP</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="ulp" value="{{ $lbkb->ulp }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="kd_unit">Kode Unit</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="kd_unit" value="{{ $lbkb->kd_unit }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="id_pel">ID Pelanggan</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="id_pel" value="{{ $lbkb->id_pel }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="nama">Nama</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="nama" value="{{ $lbkb->nama }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="alamat">Alamat</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="alamat" readonly>{{ $lbkb->alamat }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="tarif">Tarif</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="tarif" value="{{ $lbkb->tarif }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="daya">Daya</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="daya" value="{{ $lbkb->daya }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="peta">Peta</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="peta" value="{{ $lbkb->peta }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="tipe">Tipe</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="tipe" value="{{ $lbkb->tipe }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="kelainan">Kelainan</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="kelainan" value="{{ $lbkb->kelainan }}" readonly>
                                    </div>
                                </div>
                               
                                
                
                                <h4 class="form-section"><i class="ft-file-text"></i> Requirements</h4>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="status">Status</label>
                                    <div class="col-md-9">
                                        <select id="status" name="status" class="form-control" required onchange="toggleConditionalFields()">
                                            <option value="none" selected="" disabled="">Pilih Status</option>
                                            <option value="Selesai" @if ($lbkb->status === 'Selesai') selected @endif>Selesai</option>
                                            <option value="Belum" @if ($lbkb->status === 'Belum') selected @endif>Belum</option>
                                            <option value="Tunda" @if ($lbkb->status === 'Tunda') selected @endif>Tunda</option>
                                        </select>
                                    </div>
                                </div>

                                <div id="conditionalFieldsContainerTunda" style="display: none;">
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="alasan_tunda" id="alasanTundaField">Alasan Tunda</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="alasan_tunda" name="alasan_tunda" value="{{ $lbkb->alasan_tunda }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="ket_tunda" id="ketTundaField">Keterangan Tunda</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="ket_tunda" name="ket_tunda" value="{{ $lbkb->ket_tunda }}">
                                        </div>
                                    </div>
                                </div>

                                <div id="conditionalFieldsContainer" style="display: none;">
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="petugas">Petugas</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="petugas" name="petugas" value="{{ $lbkb->petugas }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="tgl_tl">Tanggal TL</label>
                                        <div class="col-md-9">
                                            <input type="date" class="form-control" id="tgl_tl" name="tgl_tl" value="{{ $lbkb->tgl_tl }}">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="foto_app_sebelum">Foto Sebelum</label>
                                        <div class="col-md-9">
                                            <img src="{{ $lbkb->foto_app_sebelum }}" alt="Foto Sebelum" id="fotoSebelum">
                                            {{-- <input type="file" name="foto_app_sebelum_upload" id="fotoUpload" accept="image/*"> --}}
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="foto_app_sesudah">Foto Sesudah</label>
                                        <div class="col-md-9">
                                            <img src="{{ $lbkb->foto_app_sesudah }}" alt="Foto Sesudah" id="fotoSesudah">
                                            {{-- <input type="file" class="form-control" id="foto_app_sesudah_upload" name="foto_app_sesudah_upload" accept="image/*"> --}}
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="no_hp_pelanggan">Nomor HP Pelanggan</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="no_hp_pelanggan" name="no_hp_pelanggan" value="{{ $lbkb->no_hp_pelanggan }}">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="teken_pelanggan">Teken Pelanggan</label>
                                        <div class="col-md-9">
                                            <div id="signatureContainer">
                                                <canvas id="signatureCanvas" style="border: 1px solid black;"></canvas>
                                            </div>
                                            <button id="clearSignature">Hapus Tanda Tangan</button>
                                            <input type="hidden" name="teken_pelanggan" id="hiddenSignature" value="{{ $lbkb->teken_pelanggan }}" disabled>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="nama_pelanggan">Nama Pelanggan</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="{{ $lbkb->nama_pelanggan }}">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="teken_petugas">Teken Petugas</label>
                                        <div class="col-md-9">
                                            <div id="signatureContainer">
                                                <canvas id="signatureCanvas" style="border: 1px solid black;"></canvas>
                                            </div>
                                            <button id="clearSignature">Hapus Tanda Tangan</button>
                                            <input type="hidden" name="teken_petugas" id="hiddenSignature" value="{{ $lbkb->teken_petugas }}">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="nama_petugas">Nama Petugas</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" value="{{ $lbkb->nama_petugas }}">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="no_berita_acara">Nomor Berita Acara</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="no_berita_acara" name="no_berita_acara" value="{{ $lbkb->no_berita_acara }}">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="ket">Keterangan</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="ket" name="ket" value="{{ $lbkb->ket }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="created_at">Tanggal di Upload</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="created_at" name="created_at" value="{{ $lbkb->created_at }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="updated_at">Tanggal Di Edit</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{ $lbkb->updated_at }}" disabled>
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
                                
                                toggleConditionalFields();
                                </script>
                            
                              <div class="form-actions">
                                <button type="submit" class="btn btn-raised btn-primary" id="btn-save">
                                    <i class="fa fa-check-square-o"></i> Save
                                </button>
                                <a href="{{ route('generatepdf.lbkb', ['id' => $lbkb->id]) }}" class="btn btn-raised btn-success" id="btn-generate-pdf">
                                    <i class="fa fa-file-pdf"></i> Generate PDF
                                </a>
                              </div>
                            </form>
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            {{-- <script>
                                document.getElementById('btn-save').addEventListener('click', function() {
                                    Swal.fire({
                                        title: 'Apakah Anda yakin?',
                                        text: "Anda akan menyimpan perubahan ini!",
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Ya, Simpan!',
                                        cancelButtonText: 'Batal'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            const form = document.querySelector('.form-horizontal');
                                            const formData = new FormData(form);

                                            fetch('{{ route('lbkb.update', ['lbkb' => $lbkb->id]) }}', {
                                                method: 'POST',
                                                body: formData,
                                                headers: {
                                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                                },
                                            })
                                            .then(response => response.json())
                                            .then(data => {
                                                Swal.fire(
                                                    'Disimpan!',
                                                    'Data berhasil disimpan.',
                                                    'success'
                                                );
                                            })
                                            .catch(error => {
                                                console.error('Error:', error);
                                                Swal.fire(
                                                    'Error!',
                                                    'Terjadi kesalahan saat menyimpan data.',
                                                    'error'
                                                );
                                            });
                                        }
                                    });
                                });
                            </script> --}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
    </div>
</div>


@endsection