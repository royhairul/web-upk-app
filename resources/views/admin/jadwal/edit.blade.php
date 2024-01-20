<!-- Edit Jadwal untuk Halaman Admin -->
@php $jadwal = $jadwal[0] @endphp

@extends('layouts.admin', ['page' => 'Jadwal'])

@section('title', 'Edit Jadwal Baru')

@section('main-content')
<form action="{{ route('admin.jadwal.update', $jadwal->jadwal_id) }}" method="post">
  @method('PUT')
  @csrf
  <h2 class="mt-10 text-2xl font-bold leading-9 tracking-tight text-gray-900 ">Edit Jadwal</h2>
  <p class="text-base leading-9 tracking-tight text-gray-400">
    Ubah Jadwal pada Mata Kuliah
    <span class="font-semibold text-cyan-500">{{ $jadwal->jadwal_matakuliah }}</span>
  </p>
  <div class="w-full mt-5 grid grid-cols-2 gap-5">

    <div class="row-span-1">
      <label for="hari" class="block text-sm font-medium leading-6 text-gray-900">Hari</label>
      <div class="mt-2">
        <select id="hari" name="hari" required
          class="block w-full rounded-md border-0 pl-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-1 focus:ring-inset focus:ring-cyan-600 sm:max-w-xs sm:text-sm sm:leading-6">
          <option value="">Pilih Hari...</option>
          <option value="Senin" @selected($jadwal->jadwal_hari == 'Senin')>Senin</option>
          <option value="Selasa" @selected($jadwal->jadwal_hari == 'Selasa')>Selasa</option>
          <option value="Rabu" @selected($jadwal->jadwal_hari == 'Rabu')>Rabu</option>
          <option value="Kamis" @selected($jadwal->jadwal_hari == 'Kamis')>Kamis</option>
          <option value="Jumat" @selected($jadwal->jadwal_hari == 'Jumat')>Jumat</option>
          <option value="Sabtu" @selected($jadwal->jadwal_hari == 'Sabtu')>Sabtu</option>
        </select>
      </div>
    </div>

    <div class="row-span-1">
      <label for="prodi" class="block text-sm font-medium leading-6 text-gray-900">Program Studi</label>
      <div class="mt-2">
        <select id="prodi" name="prodi" autocomplete="prodi" required
          class="block w-full rounded-md border-0 pl-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-1 focus:ring-inset focus:ring-cyan-600 sm:max-w-xs sm:text-sm sm:leading-6">
          <option default>Pilih Program Studi...</option>
          @foreach($prodi as $pd)
          <option value="{{$pd->prodi_code}}" @selected($jadwal->jadwal_prodi == $pd->prodi_code)>
            {{$pd->prodi_code}} - {{ $pd->prodi_nama }}
          </option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="row-span-1">
      <label for="ruangkelas" class="block text-sm font-medium leading-6 text-gray-900">Ruang Kelas</label>
      <div class="mt-2">
        <select id="ruangkelas" name="ruangkelas" required
          class="block w-full rounded-md border-0 pl-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-1 focus:ring-inset focus:ring-cyan-600 sm:max-w-xs sm:text-sm sm:leading-6">
          <option value="" selected default>Pilih Ruang Kelas</option>
          @foreach($ruangkelas as $rk)
          <option value="{{$rk->ruangkelas_code}}" @selected($jadwal->jadwal_ruangkelas == $rk->ruangkelas_code)>
            {{$rk->ruangkelas_code}}
          </option>
          @endforeach
        </select>
      </div>
    </div>
    
    <div class="row-span-1">
      <label for="semester" class="block text-sm font-medium leading-6 text-gray-900">Semester</label>
      <div class="mt-2">
        <input id="semester" name="semester" type="text" required value="{{ $jadwal->jadwal_semester }}" class="block w-full rounded-md border-0 pl-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6
                  @error('email') ring-rose-500  @enderror">
        @error('semester')
        <p class="absolute text-sm text-rose-500">{{ $message }}</p>
        @enderror
      </div>
    </div>
    
    <div class="row-span-1">
      <label for="waktu_mulai" class="block text-sm font-medium leading-6 text-gray-900">Waktu Perkuliahan</label>
      <div class="flex gap-x-4">
        <div class="relative mt-2" id="timepicker-first" data-te-input-wrapper-init>
          <input value="{{ $jadwal->jadwal_waktu_mulai }}" type="text" name="waktu_mulai" id="peminjaman_timestart" autocomplete="given-name" placeholder="Mulai"
            class="block w-full rounded-md border-0 pl-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
        </div>
    
        <div class="relative mt-2" id="timepicker-last" data-te-input-wrapper-init>
          <input value="{{ $jadwal->jadwal_waktu_selesai }}"type="text" name="waktu_selesai" id="peminjaman_timefinish" autocomplete="given-name" placeholder="Selesai"
            class="block w-full rounded-md border-0 pl-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
        </div>
      </div>
    </div>
    
    <div class="row-span-1">
      <label for="matakuliah" class="block text-sm font-medium leading-6 text-gray-900">Mata Kuliah</label>
      <div class="mt-2">
        <input value="{{ $jadwal->jadwal_matakuliah }} "type="text" name="matakuliah" id="matakuliah" autocomplete="given-name" required value="{{ old('nama') }}"
          class="block w-full rounded-md border-0 pl-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6">
      </div>
    </div>
    
    <div class="col-span-2 place-self-end flex gap-x-4">
      <button type="submit"
        class="rounded-md bg-cyan-600 px-5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-cyan-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-cyan-600"
        id="next-btn">Edit Jadwal</button>
    </div>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script>
      const timeStart = document.querySelector("#timepicker-first");
      const timepickerStart = new te.Timepicker(timeStart, {
        increment: true,
        format24: true,
        minTime: "07:30",
        maxTime: "16:00",
      });

      const input = timeStart.querySelector('input#peminjaman_timestart');

      let getTimeStart = "";
      input.addEventListener('input', () => {
        getTimeStart = input.value.toString();
        const timeFinish = document.querySelector("#timepicker-last");
        const timepickerFinish = new te.Timepicker(timeFinish, {
          increment: true,
          format24: true,
          minTime: getTimeStart,
          maxTime: "16:00",
        });
      });

    </script>
    @endsection