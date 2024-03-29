<aside
  class="fixed flex flex-col shrink-0 w-[300px] h-[100vh] z-40 bg-white border-r border-r-dashed border-r-neutral-200"
  id="sidenav-main">
  <div class=" flex shrink-0 p-8 items-center justify-between">
    <a class="transition-colors duration-200 ease-in-out" href="#">
      <img alt="Logo" src="{{ asset('logo-UPK.svg') }}" class="inline h-[40px]">
    </a>
  </div>

  <div class="hidden border-b border-dashed lg:block border-neutral-200"></div>

  <div class="flex items-center justify-between px-8 py-5">
    <div class="flex items-center mr-5">
      <div class="mr-5">
        <div class="inline-block relative shrink-0 cursor-pointer rounded-[.95rem]">
        <span class="material-symbols-outlined border-4 border-cyan-400 rounded-full">mood</span>
        </div>
      </div>
      <div class="mr-2 ">
        <a href="javascript:void(0)"
          class="hover:text-primary transition-colors duration-200 ease-in-out text-[1.075rem] font-semibold text-secondary-inverse">
          {{ Auth::user()->username }}
        </a>
        <span class="block text-cyan-500 font-medium  text-sm">Admin UPK</span>
      </div>
    </div>
    <a class="inline-flex relative items-center group justify-end text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-[.95rem] transition-colors duration-150 ease-in-out text-dark bg-transparent shadow-none border-0"
      href="javascript:void(0)">
      <span
        class="leading-none transition-all duration-200 peer shrink-0 group-hover:text-primary text-secondary-dark 
        hover:bg-gray-100 hover:text-gray-500 p-2 rounded-md">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z">
          </path>
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" class=""></path>
        </svg>
      </span>
    </a>
  </div>

  <div class="hidden border-b border-dashed lg:block border-neutral-200"></div>

  <div class="relative pl-3 my-5 overflow-y-scroll">
    <div class="flex flex-col w-full font-medium">

      <!-- menu item -->
      <div>
        <span class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
          <a href="/admin"
            class="flex items-center flex-grow text-base transition-colors duration-150 hover:text-cyan-500 {{ $title == 'Dashboard' ? 'font-semibold text-dark-500' : 'text-stone-500'}}">Dashboard</a>
        </span>
      </div>

      <!-- menu item -->
      <div>
        <span class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
          <a href="/admin/pengajuan"
            class="flex items-center flex-grow text-base transition-colors duration-150 hover:text-cyan-500 {{ $title == 'Pengajuan' ? 'font-semibold text-dark-500' : 'text-stone-500'}}">Pengajuan</a>
        </span>
      </div>

      <!-- menu item -->
      <div>
        <span class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
          <a href="/admin/peminjaman"
            class="flex items-center flex-grow text-base transition-colors duration-150 hover:text-cyan-500 {{ $title == 'Peminjaman' ? 'font-semibold text-dark-500' : 'text-stone-500'}}">Peminjaman</a>
        </span>
      </div>


      <!-- menu item -->
      <div>
        <span class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
          <a href="/admin/pengembalian"
            class="flex items-center flex-grow text-base transition-colors duration-150 hover:text-cyan-500 {{ $title == 'Pengembalian' ? 'font-semibold text-dark-500' : 'text-stone-500'}}">Pengembalian</a>
        </span>
      </div>

      <!-- menu item -->
      <div>
        <span class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
          <a href="/admin/laporan"
            class="flex items-center flex-grow text-base transition-colors duration-150 hover:text-cyan-500 {{ $title == 'Laporan' ? 'font-semibold text-dark-500' : 'text-stone-500'}}">Laporan</a>
        </span>
      </div>

      <!-- menu item -->
      <div>
        <span class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
          <a href="/admin/pjmk"
            class="flex items-center flex-grow text-base transition-colors duration-150 hover:text-cyan-500 {{ $title == 'PJMK' ? 'font-semibold text-dark-500' : 'text-stone-500'}}">PJMK</a>
        </span>
      </div>

      <!-- menu item -->
      <div>
        <span class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
          <a href="/admin/kelas"
            class="flex items-center flex-grow text-base transition-colors duration-150 hover:text-cyan-500 {{ $title == 'Kelas' ? 'font-semibold text-dark-500' : 'text-stone-500'}}">Ruang Kelas</a>
        </span>
      </div>

      <!-- menu item -->
      <div>
        <span class="select-none flex items-center px-4 py-[.775rem] cursor-pointer my-[.4rem] rounded-[.95rem]">
          <a href="/admin/inventaris"
            class="flex items-center flex-grow text-base transition-colors duration-150 hover:text-cyan-500 {{ $title == 'Inventaris' ? 'font-semibold text-dark-500' : 'text-stone-500'}}">Inventaris</a>
        </span>
      </div>

      <div class="mt-10">
        <span class="select-none flex justify-center p-2 cursor-pointer rounded-sm bg-rose-50">
          <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="text-base text-center text-rose-500 font-semibold">
              Log Out
            </button>
          </form>
        </span>
      </div>

    </div>
  </div>
</aside>