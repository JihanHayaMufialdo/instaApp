@extends('layout.home')

@section('main')
<div class="p-4 sm:ml-64">
    <div class="p-4 mt-14">
        <form action="{{route('home')}}" method="GET">
            @csrf
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-5 rounded-t-lg" src={{ asset('assets/img/post.png') }} alt="" />
                </a>
                <div class="px-5 pb-5">
                    <div class="mb-3">
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Caption
                        </label>
                        <input type="text" name="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="add caption...">
                    </div>
                    <div class="flex items-center justify-between ml-auto mb-3">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Posting
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
