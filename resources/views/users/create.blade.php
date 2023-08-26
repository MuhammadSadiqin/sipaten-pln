{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {!! __('User &raquo; Create') !!}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                @if ($errors->any())
                    <div class="mb-5" role="alert">
                        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                            there's something wrong
                        </div>
                        <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            <p>
                            <ul>
                                @foreach ($errors->all() as $errors)
                                    <li>
                                        {{ $errors }}
                                    </li>
                                @endforeach
                            </ul>
                            </p>
                        </div>
                    </div>
                @endif
                <form action="{{ route('users.store') }}" class="w-full" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Name
                            </label>
                            <input value="{{ old('name') }}" name="name"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" type="text" placeholder="User Name">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Email
                            </label>
                            <input value="{{ old('email') }}" name="email"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" type="email" placeholder="User Email">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Password
                            </label>
                            <input value="{{ old('password') }}" name="password"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" type="password" placeholder="User Password">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Password Confirmation
                            </label>
                            <input value="{{ old('password_confirmation') }}" name="password_confirmation"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" type="password" placeholder="User Password Confirmation">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Level
                            </label>
                            <select name="level"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name">
                                <option value="PETUGAS">Petugas</option>
                                <option value="ADMIN">Admin</option>
                            </select>
                        </div>
                    </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3 text-right">
                    <button type="submit"
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Save User
                    </button>
                </div>
            </div>
            </form>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="striped-row-layout-basic">Create User</h4>
                        </div>
                        <div class="card-body">
                            <div class="px-3">
                                <form class="form form-horizontal striped-rows form-bordered" action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label" for="name">Name</label>
                                            <div class="col-md-9">
                                                <input value="{{ old('name') }}" name="name" type="text" class="form-control" id="name">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label" for="email">Email</label>
                                            <div class="col-md-9">
                                                <input value="{{ old('email') }}" name="email" type="email" class="form-control" id="email">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label" for="password">Password</label>
                                            <div class="col-md-9">
                                                <input value="{{ old('password') }}" name="password" type="password" class="form-control" id="password" required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label" for="password_confirmation">Password Confirmation</label>
                                            <div class="col-md-9">
                                                <input value="{{ old('password_confirmation') }}" name="password_confirmation" type="password" class="form-control" id="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label" for="level">Level</label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="level" name="level">
                                                    <option value="ADMIN">Admin</option>
                                                    <option value="PETUGAS">Petugas</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="text-end">
                                            <a href="{{ route('users.index') }}" class="btn btn-raised btn-warning">
                                                <i class="ft-x"></i> Cancel
                                            </a>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-check-square-o"></i> Create
                                            </button>
                                        </div>
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