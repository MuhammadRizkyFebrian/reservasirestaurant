<div class="navbar bg-[#969586] px-6 shadow-md items-center">
    <!-- Kiri: Logo dan Brand -->
    <div class="flex-1">
        <a href="/" class="flex items-center gap-3">
            <img src="{{ asset('images/logo.png') }}" class="h-16 w-16 object-contain" alt="Logo">
            <span class="text-black font-bold text-xl"></span>
        </a>
    </div>

    <!-- Kanan: Menu Navigasi + Search + Avatar -->
    <div class="flex-none gap-4 items-center">
        <!-- Menu -->
        <ul class="menu menu-horizontal px-1 text-black text-lg hidden md:flex">
            <li tabindex="0">
                <details>
                    <summary>Menu</summary>
                    <ul class="p-2 bg-base-100 text-black rounded-t-none w-40">
                        <li><a href="/menu/makanan">Makanan</a></li>
                        <li><a href="/menu/minuman">Minuman</a></li>
                    </ul>
                </details>
            </li>
            <li><a class="hover:font-semibold">Ulasan</a></li>
        </ul>

        <!-- Pencarian -->
        <div class="form-control relative">
            <input type="text" placeholder="Pencarian" class="input input-bordered input-sm w-32 md:w-48 bg-white text-black pl-10" />
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1010.5 3a7.5 7.5 0 006.15 13.65z" />
            </svg>
        </div>

        <!-- Dropdown Avatar -->
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full ring ring-neutral ring-offset-base-100 ring-offset-2">
                    <img src="https://i.pravatar.cc/100?img=3" alt="Avatar" />
                </div>
            </div>
            <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52 text-black">
                <li><a href="/profile">Profil</a></li>
                <li><a href="#">Riwayat Pemesanan</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
    </div>
</div>