{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <<div class="mb-10">
                <a href="{{ route('users.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            + Create User
                </a>
            </div>
            <div class="mb-4 flex justify-end">
                <form action="{{ route('users.index') }}" method="GET">
                    <input type="text" name="search" placeholder="Search..." class="border border-gray-300 rounded-md py-2 px-4">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">Search</button>
                </form>
            </div>
            <div class="bg-white">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="border px-6 py-4">ID</th>
                            <th class="border px-6 py-4">Name</th>
                            <th class="border px-6 py-4">Email</th>
                            <th class="border px-6 py-4">Level</th>
                            <th class="border px-6 py-4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($user as $item)
                        <tr>
                        <td class="border px-6 py-4">{{ $item->id }}</td>
                        <td class="border px-6 py-4">{{ $item->name }}</td>
                        <td class="border px-6 py-4">{{ $item->email }}</td>
                        <td class="border px-6 py-4">{{ $item->level }}</td>
                        <td class="border px-6 py-4 text-center">
                            <a href="{{ route('users.edit',$item->id) }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-2 rounded">
                                Edit
                            </a>
                            <form action="{{ route('users.destroy',$item->id) }}" method="POST" class="inline-block">
                                {!! method_field('delete'). csrf_field() !!}
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 mx-2 rounded">
                                    Delete
                                </button>
                            </form>
                        </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="border text-center p-5">
                                    Data tidak ditemukan
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="text-center mt-5">
                {{ $user->links() }}
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
                                    <form action="{{ route('Amr.import') }}" method="POST" enctype="multipart/form-data"
                                        class="mt-4">
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
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Level</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($user as $item)
                                            <tr>
                                                <td class="border px-6 py-4">{{ $item->id }}</td>
                                                <td class="border px-6 py-4">{{ $item->name }}</td>
                                                <td class="border px-6 py-4">{{ $item->email }}</td>
                                                <td class="border px-6 py-4">{{ $item->level }}</td>
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
