@extends('layouts.app')

@section('title', 'Profil Pengguna')

@section('content')
<div class="flex flex-col items-center justify-start min-h-screen pt-7 bg-[#cdcfc0] font-sans">
    <div class="bg-[#cdcfc0] w-full max-w-5xl px-10 py-8">
        <h2 class="text-3xl font-bold mb-8 text-center text-black">Profil Pengguna</h2>

        <div class="flex flex-col md:flex-row gap-12 justify-center">
            <!-- Foto Profil -->
            <div class="flex flex-col items-center gap-4">
                <div class="avatar">
                    <div class="w-40 h-40 rounded-full bg-base-300 ring ring-gray-400 ring-offset-2">
                        <img src="{{ asset('images/logo.png') }}" alt="Foto Profil">
                    </div>
                </div>
                <button class="btn bg-[#d9d9d9] text-black rounded-full px-5 flex items-center gap-2">
                    Ganti Foto
                    <i data-lucide="upload" class="w-4 h-4"></i>
                </button>
            </div>
            
            <!-- Form Profil -->
            <div class="flex-1 space-y-5">
                <div class="form-control">
                    <label class="label font-bold text-sm">Email:</label>
                    <input type="text" class="input input-bordered input-disabled bg-[#c6c8ba] text-black" value="hscwlth@gmail.com" disabled>
                </div>
                <div class="form-control">
                    <label class="label font-bold text-sm">Username:</label>
                    <input type="text" class="input input-bordered input-disabled bg-[#c6c8ba] text-black" value="ydhscwlth." disabled>
                </div>
                <div class="form-control">
                    <label class="label font-bold text-sm">Password:</label>
                    <input type="text" class="input input-bordered input-disabled bg-[#c6c8ba] text-black" value="password123" disabled>
                </div>
                <div class="form-control">
                    <label class="label font-bold text-sm">No. Handphone:</label>
                    <input type="text" class="input input-bordered input-disabled bg-[#c6c8ba] text-black" value="1234567890" disabled>
                </div>

                <div class="flex justify-end">
                <button class="btn bg-[#5e5c49] hover:bg-[#4b4a3a] text-white font-bold rounded-md px-6 py-2 flex items-center gap-2">
                    Edit
                    <i data-lucide="pencil" class="w-4 h-4"></i>
                </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
