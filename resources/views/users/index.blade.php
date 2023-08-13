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
                <div class="row">
                    <div class="col-sm-12">
                        <div class="content-header">User</div>
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
                                    <div class="col-lg-6 col-md-12">
                                        <a href="{{ route('users.create') }}" class="btn btn-success">
                                            <i class="fas"></i> + Create User
                                        </a>
                                    </div>
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
