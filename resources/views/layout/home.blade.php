@extends('layout.app')

@section('content')
    <div class="flex flex-col sm:flex-row">
        <x-sidebar/>
        <x-navbar/>

        <div class="flex-1 p-4">
            <div class="p-4">
                @yield('main')
            </div>
        </div>
    </div>
@endsection
