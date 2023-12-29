@extends('layout.home')

@section('main')
<div class="p-4 sm:ml-64">
    <div class="p-4 mt-14">
        <div class="max-w-lg mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center mt-3 mb-3">
                <div class="ml-3 mr-3">
                    <img class="rounded-full w-12 h-12" src="/assets/img/poto.jpeg" alt="">
                </div>
                <div class="text-black">
                    <span><b>jihannhayaa</b></span>
                    <br>
                    <span>2023-12-29</span>
                </div>
            </div>
            <div class="">
                <img class="h-auto w-full" src="/assets/img/post.png" alt="image description">
            </div>

            <div class="flex flex-col mt-1 ml-3 mb-3">
                <div class="flex items-center font-normal text-black">
                    <span class="iconify" data-width="30" data-icon="flat-color-icons:like"></span>
                    <span class="ms-3">
                        5 suka
                    </span>
                </div>
                <div class= "font-normal text-black mt-2">
                    no capt
                </div>
                <form action="">
                    <div class="mt-3 flex items-center">
                        <input type="text" name="text" id="text" class="mr-2 flex-grow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="add comment...">
                        <button type="submit" class="mr-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Send
                        </button>
                    </div>
                </form>

                    {{-- <div class="mt-2">
                    <a href="#" class="mb-3 font-normal text-gray-500">
                        Add comment...
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
