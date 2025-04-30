@extends('layouts.admin')

@section('content')
<div class="flex">
    {{-- Sidebar --}}
    @include('components.sidebar-admin')

    <div class="flex-1 min-h-screen bg-[#d1d1c4]">
        {{-- Konten Daftar Meja --}}
        <div class="p-6">
            <div class="flex items-center justify-between mb-4">
            <h2 class="text-xl font-semibold flex items-center gap-2">
            <i class="bi bi-people"></i> Daftar Pelanggan
            </h2>
            </div>

            <div class="mt-2 flex justify-between items-center"></div>
            
            <hr class="my-4 border border-gray-400">
            <div class="overflow-x-auto bg-white rounded-lg shadow">
                <table class="table w-full">
                    <thead class="bg-gray-100">
                        <tr>
                            <th>NO</th>
                            <th>EMAIL</th>
                            <th>NAMA CUSTOMER</th>
                            <th>NAMA PENGGUNA</th>
                            <th>NO. HANDPHONE</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $pelangganList = [
                                ['email' => 'feather@gmail.com', 'nama customer' => 'M. Naufal Hakim','nama pengguna' => 'Featherine','no. handphone' => '+62 812-6145-9098'],
                                ['email' => 'rafrezzz123@gmail.com', 'nama customer' => 'Rafles Yuda Stevenses N.','nama pengguna' => 'ydhscwlth','no. handphone' => '+62 896-4400-6733'],
                                ['email' => 'mriskifebrian22@gmail.com', 'nama customer' => 'Muhammad Rizky Febrian','nama pengguna' => 'Carmite','no. handphone' => '+62 822-8644-1928'],
                                ['email' => 'sakilaputri@gmail.com', 'nama customer' => 'Sakila Ananda Putri','nama pengguna' => 'Kila','no. handphone' => '+62 812-7762-930'],
                            ];
                        @endphp

                        @foreach($pelangganList as $index => $pelanggan)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $pelanggan['email'] }}</td>
                            <td>{{ $pelanggan['nama customer'] }}</td>
                            <td>{{ $pelanggan['nama pengguna'] }}</td>
                            <td>{{ $pelanggan['no. handphone'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
