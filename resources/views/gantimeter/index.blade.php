<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ganti Meter') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10">
                <a href="{{ route('gantimeter.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            + Create User
                </a>
            </div>
            <div class="bg-white">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="border px-6 py-4">ID</th>
                            <th class="border px-6 py-4">ULP</th>
                            <th class="border px-6 py-4">Kode Unit</th>
                            <th class="border px-6 py-4">Id Pelanggan</th>
                            <th class="border px-6 py-4">Almaat</th>
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
                        {{-- @forelse ($user as $item)
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
    </div> --}}
</x-app-layout>
