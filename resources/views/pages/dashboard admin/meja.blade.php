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
                <i class="bi bi-layout-text-sidebar-reverse"></i> Daftar Meja
            </h2>
            </div>

            <div class="mt-2 flex justify-between items-center">
                <button class="btn btn-sm btn-outline btn-primary">
                    <i class="bi bi-plus-lg"></i> Tambah Daftar Meja
                </button>
            </div>
            <hr class="my-4 border border-gray-400">
            <div class="overflow-x-auto bg-white rounded-lg shadow">
                <table class="table w-full">
                    <thead class="bg-gray-100">
                        <tr>
                            <th>NO</th>
                            <th>KODE MEJA</th>
                            <th>TIPE MEJA</th>
                            <th>STATUS</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $mejaList = [
                                ['kode' => 'MJ01', 'tipe meja' => 'Persegi', 'status' => 'Tersedia'],
                                ['kode' => 'MJ02', 'tipe meja' => 'Bulat', 'status' => 'Terisi'],
                                ['kode' => 'MJ03', 'tipe meja' => 'Persegi Panjang', 'status' => 'Tersedia'],
                            ];
                        @endphp

                        @foreach($mejaList as $index => $meja)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $meja['kode'] }}</td>
                            <td>{{ $meja['tipe meja'] }}</td>
                            <td>
                                <span class="badge {{ $meja['status'] === 'Tersedia' ? 'badge-success' : 'badge-error' }}">
                                    {{ $meja['status'] }}
                                </span>
                            </td>
                            <td><a href="#" class="text-blue-500 hover:underline">Edit</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
