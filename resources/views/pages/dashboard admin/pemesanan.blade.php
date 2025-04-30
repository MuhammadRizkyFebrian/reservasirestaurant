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
            <i class="bi bi-envelope"></i> Daftar Pemesanan
            </h2>
            </div>

            <div class="mt-2 flex justify-between items-center"></div>
            
            <hr class="my-4 border border-gray-400">
            <div class="overflow-x-auto bg-white rounded-lg shadow">
                <table class="table w-full">
                    <thead class="bg-gray-100">
                        <tr>
                            <th>NO</th>
                            <th>NAMA PEMESAN</th>
                            <th>NO. HANDPHONE</th>
                            <th>JUMLAH ORANG</th>
                            <th>TANGGAL</th>
                            <th>WAKTU</th>
                            <th>CATATAN KHUSUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $pemesananList = [
                                ['nama pemesan' => 'M. Naufal Hakim','no. handphone' => '+62 812-6145-9098', 'jumlah orang' => '7', 'tanggal' => '17-08-2025', 'waktu' => '13:00', 'catatan khusus' => '-'],
                                ['nama pemesan' => 'Rafles Yuda Stevenses N.','no. handphone' => '+62 896-4400-6733', 'jumlah orang' => '5', 'tanggal' => '18-08-2025', 'waktu' => '15:00', 'catatan khusus' => '-'],
                                ['nama pemesan' => 'Muhammad Rizky Febrian','no. handphone' => '+62 822-8644-1928', 'jumlah orang' => '9', 'tanggal' => '19-08-2025', 'waktu' => '17:00', 'catatan khusus' => '-'],
                                ['nama pemesan' => 'Sakila Ananda Putri','no. handphone' => '+62 812-7762-930', 'jumlah orang' => '4', 'tanggal' => '20-08-2025', 'waktu' => '19:00', 'catatan khusus' => '-'],
                            ];
                        @endphp

                        @foreach($pemesananList as $index => $pemesanan)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $pemesanan['nama pemesan'] }}</td>
                            <td>{{ $pemesanan['no. handphone'] }}</td>
                            <td>{{ $pemesanan['jumlah orang'] }}</td>
                            <td>{{ $pemesanan['tanggal'] }}</td>
                            <td>{{ $pemesanan['waktu'] }}</td>
                            <td>{{ $pemesanan['catatan khusus'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
