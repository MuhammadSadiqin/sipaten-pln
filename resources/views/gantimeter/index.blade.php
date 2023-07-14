<x-app-layout>
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
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Import Ganti Meter </button>
                </form>
            </div>
            <div class="bg-white">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="border px-6 py-4">ID</th>
                            <th class="border px-6 py-4">user_id</th>
                            <th class="border px-6 py-4">ULP</th>
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
                        @forelse ($gantimeter as $item)
                        <tr>
                        <td class="border px-6 py-4">{{ $item->id }}</td>
                        <td class="border px-6 py-4">{{ $item->user_id }}</td>
                        <td class="border px-6 py-4">{{ $item->ulp }}</td>
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
                                <td colspan="5" class="border text-center p-5">
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
</x-app-layout>
