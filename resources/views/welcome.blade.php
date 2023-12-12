@extends('Comment.layout')

@section('content')
    @if (session('success'))
        <div class="ml-4 mt-4">
            <div id="toast-success"
                class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
                role="alert">
                <div
                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="sr-only">Check icon</span>
                </div>
                <div class="ml-3 text-sm font-normal">{{ session('success') }}</div>
                <button type="button" onclick="closeToast('toast-success')"
                    class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                    aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        </div>
    @endif
    <section style="background-color: #29332b" class="text-red-600 body-font  dark:bg-slate-900">
        <div class="container mx-auto flex md:px-24 md:py-10 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow mt-5 md:mt-0   md:w-1.5/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 style="color: #39ff14;"
                    class="text-2xl font-serif leading-9 tracking-tight mb-3 text-yellow-700 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-5xl md:leading-normal">
                    Drop a Smile in the <i style="color: #39ff14;" class='text-green-700 bx bxs-quote-alt-left'></i> San Yu
                    Aung <i style="color: #39ff14;" class='text-green-700 bx bxs-quote-alt-right'></i> Suggestion Box 😊
                </h1>
                {{-- <p class="mb-8 md:pl-0  pl-2 pr-2 leading-relaxed dark:text-gray-300">
                    Short description here, Short description here Short description here Short description here Short
                    description here Short description here.
                </p> --}}
                <div class="mt-5 flex justify-center">
                    <a target="_blank" href="https://portfolio.sanyuaung.dev/" style="color: #39ff14;"
                        class="inline-flex font-serif text-white border-green-700 border-solid border py-2 px-6 rounded-full font-bold focus:outline-none hover:bg-green-700 rounded text-lg">
                        My Portfolio
                    </a>

                    <a href="{{ route('create') }}" style="color: #39ff14;"
                        class="ml-4 inline-flex font-serif text-white border-green-700 border-solid border py-2 px-6 rounded-full font-bold focus:outline-none hover:bg-green-700 rounded text-lg">Go
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: #39ff14;transform: ;msFilter:;">
                            <path
                                d="M5.536 21.886a1.004 1.004 0 0 0 1.033-.064l13-9a1 1 0 0 0 0-1.644l-13-9A.998.998 0 0 0 5 3v18a1 1 0 0 0 .536.886zM7 4.909 17.243 12 7 19.091V4.909z">
                            </path>
                        </svg>
                    </a>
                    <a href="{{ route('list') }}/" style="color: #39ff14;"
                        class="ml-4 inline-flex font-serif text-white border-green-700 border-solid border py-2 px-6 rounded-full font-bold focus:outline-none hover:bg-green-700 rounded text-lg">
                        Watch<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: #39ff14;transform: ;msFilter:;">
                            <path
                                d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 11c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4z">
                            </path>
                            <path d="M12 10c-1.084 0-2 .916-2 2s.916 2 2 2 2-.916 2-2-.916-2-2-2z"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full mb-5 md:mb-0 md:w-1/2 w-3/6">
                <img class="object-cover object-center rounded" alt="hero" src="images/balloon.svg">
            </div>
        </div>
    </section>
    <script>
        function closeToast(id) {
            const toast = document.getElementById(id);
            if (toast) {
                toast.style.display = 'none';
            }
        }

        function autoCloseToast(id) {
            setTimeout(() => {
                closeToast(id);
            }, 3000);
        }
        autoCloseToast('toast-success');
    </script>
@endsection
