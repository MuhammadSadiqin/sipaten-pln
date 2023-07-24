{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ganti Meter') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-7 lg:px-8">
            <div class="mb-10">
                <form action="{{ route('GantiMeter.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Upload Excel
                </label>
                <input name="file" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="file" placeholder="Excel">
                <br>
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Import TO Ganti Meter </button>
                </form>
                <br>
                <tr>
                    <th colspan="5">
                        <a class="btn btn-warning float-end" href="{{ route('gantimeter.export') }}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4  rounded">Export TO Ganti Meter </button></a>
                    </th>
                </tr>
                <div class="mb-4 flex justify-end">
                    <form action="{{ route('gantimeter.index') }}" method="GET">
                        <input type="text" name="search" placeholder="Search..." class="border border-gray-300 rounded-md py-2 px-4">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">Search</button>
                    </form>
                </div>
            </div>
            <div class="bg-white">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="border px-6 py-4">ID</th>
                            <th class="border px-6 py-4">ULP</th>
                            <th class="border px-6 py-4">Kode Unit</th>
                            <th class="border px-6 py-4">Id Pelanggan</th>
                            <th class="border px-6 py-4">Alamat</th>
                            <th class="border px-6 py-4">Tarif</th>
                            <th class="border px-6 py-4">Daya</th>
                            <th class="border px-6 py-4">Peta</th>
                            <th class="border px-6 py-4">Tipe</th>
                            <th class="border px-6 py-4">Kelainan</th>
                            <th class="border px-6 py-4">Petugas</th>
                            <th class="border px-6 py-4">Status</th>
                            <th class="border px-6 py-4">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($gantimeter as $item)
                        <tr>
                        <td class="border px-6 py-4">{{ $item->id }}</td>
                        <td class="border px-6 py-4">{{ $item->user_id }}</td>
                        <td class="border px-6 py-4">{{ $item->ulp }}</td>
                        <td class="border px-6 py-4">{{ $item->kd_unit }}</td>
                        <td class="border px-6 py-4">{{ $item->id_pel }}</td>
                        <td class="border px-6 py-4">{{ $item->alamat }}</td>
                        <td class="border px-6 py-4">{{ $item->tarif }}</td>
                        <td class="border px-6 py-4">{{ $item->daya }}</td>
                        <td class="border px-6 py-4">{{ $item->peta }}</td>
                        <td class="border px-6 py-4">{{ $item->tipe }}</td>
                        <td class="border px-6 py-4">{{ $item->kelainan }}</td>
                        <td class="border px-6 py-4">{{ $item->petugas }}</td>
                        <td class="border px-6 py-4">{{ $item->status }}</td>
                        <td class="border px-6 py-4 text-center">
                            <a href="{{ route('gantimeter.edit',$item->id) }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-2 rounded">
                                Edit
                            </a>
                            <form action="{{ route('gantimeter.destroy',$item->id) }}" method="POST" class="inline-block">
                                {!! method_field('delete'). csrf_field() !!}
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 mx-2 rounded">
                                    Delete
                                </button>
                            </form>
                        </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="13" class="border text-center p-5">
                                    Data tidak ditemukan
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="text-center mt-5">
                {{ $gantimeter->links() }}
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends('layouts.master')
@section('content')
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="content-header">Tiga Phasa</div>
                        <p class="content-sub-header"></p>
                    </div>
                </div>
                <!-- Zero configuration table -->
                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="card-content">

                                    {{-- <form action="{{ route('GantiMeter.import') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-lg-6 col-md-12">
                                            <label for="file">With Browse button</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                                        aria-describedby="inputGroupFileAddon01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-raised btn-icon btn-outline-primary">Upload Excel  <i class="fa fa-cloud-download"></i></button>
                                            <button type="button" class="btn btn-raised btn-icon btn-outline-success">Export Excel  <i class="fa fa-cloud-download"></i></button>
                                               
                                    </form> --}}
                                    <form action="{{ route('tigaphasa.import') }}" method="POST"
                                        enctype="multipart/form-data" class="mt-4">
                                        @csrf
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label class="font-weight-bold" for="file">Upload Excel</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="file"
                                                            name="file">
                                                        <label class="custom-file-label" for="file">Choose file</label>
                                                    </div>
                                                    <br>

                                                </div>
                                                <button type="submit"
                                                    class="btn btn-raised btn-icon btn-outline-primary">Upload Excel <i
                                                        class="fa fa-cloud-download"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-body card-dashboard table-responsive">
                                    <table id="myTable" class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>ULP</th>
                                                <th>Kode Unit</th>
                                                <th>Id Pelanggan</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Tarif</th>
                                                <th>Daya</th>
                                                <th>Peta</th>
                                                <th>Tipe</th>
                                                <th>Kelainan</th>
                                                <th>Petugas</th>
                                                <th>Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($tigaphasa as $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    {{-- <td>{{ $item->user_id }}</td> --}}
                                                    <td>{{ $item->ulp }}</td>
                                                    <td>{{ $item->kd_unit }}</td>
                                                    <td>{{ $item->id_pel }}</td>
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->alamat }}</td>
                                                    <td>{{ $item->tarif }}</td>
                                                    <td>{{ $item->daya }}</td>
                                                    <td>{{ $item->peta }}</td>
                                                    <td>{{ $item->tipe }}</td>
                                                    <td>{{ $item->kelainan }}</td>
                                                    <td>{{ $item->petugas }}</td>
                                                    <td>{{ $item->status }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="13">No data available</td>
                                                </tr>
                                            @endforelse
                                    </table>
                                    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script> --}}
                                    {{-- <script>
                                        $(document).ready( function () {
                                        $('#myTable').DataTable();
                                    } );
                                    </script> --}}
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
            <!--/ Zero configuration table -->
        </div>
    </div>
    <!-- END : End Main Content-->
    </div>
@endsection
