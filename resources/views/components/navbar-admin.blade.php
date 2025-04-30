<div class="navbar bg-[#969586] shadow-md px-6 flex justify-between items-center">
    <div class="text-black font-bold text-lg">
        Dashboard Admin
    </div>
    <!-- Dropdown Avatar -->
    <div class="dropdown dropdown-end">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
            <div class="w-10 rounded-full ring ring-neutral ring-offset-base-100 ring-offset-2">
                <img src="{{ asset('images/logo.png') }}" alt="Avatar" />
            </div>
        </div>
        <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52 text-black">
            <li><a href="/profile">Profil</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>
</div>
