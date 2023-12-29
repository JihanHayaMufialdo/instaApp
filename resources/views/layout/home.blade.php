@extends('layout.app')

@section('content')
    {{-- <x-navbar /> --}}
    <x-sidebar/>

    {{-- <div class="flex-1 p-4 sm:ml-64"> --}}
    <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-5 shadow">
        @yield('main')
    </div>
    {{-- </div> --}}
@endsection
