@extends('layouts.frontend-dashboard')
@section('frontend-content')
<div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
    <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
        <div class="flex h-12 w-12 items-center justify-center rounded-full border border-blue-100 bg-blue-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
            </svg>
        </div>

        <div class="ml-4">
            <h2 class="font-semibold">{{$transactionCount}} Pesanan Kamu</h2>
            <p class="mt-2 text-sm text-gray-500">Last opened 4 days ago</p>
        </div>
    </div>

    <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
        <div class="flex h-12 w-12 items-center justify-center rounded-full border border-orange-100 bg-orange-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-400" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
        </div>

        <div class="ml-4">
            <h2 class="font-semibold">{{$userCount}} Users Terdaftar</h2>
            <p class="mt-2 text-sm text-gray-500">Last checked 3 days ago</p>
        </div>
    </div>
    <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
        <div class="flex h-12 w-12 items-center justify-center rounded-full border border-red-100 bg-red-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-400" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
        </div>

        <div class="ml-4">
            <h2 class="font-semibold">{{$productCount}} Product Tersedia </h2>
            <p class="mt-2 text-sm text-gray-500">Last authored 1 day ago</p>
        </div>
    </div>
    <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
        <div class="flex h-12 w-12 items-center justify-center rounded-full border border-indigo-100 bg-indigo-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-400" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
            </svg>
        </div>

        <div class="ml-4">
            <h2 class="font-semibold">{{$categoryCount}} Kateogry Produk</h2>
            <p class="mt-2 text-sm text-gray-500">Last commented 8 days ago</p>
        </div>
    </div>
</div>
{{-- section 2  --}}
<div class="flex flex-col space-y-8">
    <!-- First Row -->
    <div class="grid grid-cols-1 md:grid-cols-4 xl:grid-cols-5 px-4 xl:p-0 gap-y-4 md:gap-6">
        <div class="md:col-span-2 xl:col-span-3 bg-white p-6 rounded-2xl border border-gray-50">
            <div class="flex flex-col space-y-6 md:h-full md:justify-between">
                <div class="flex justify-between">
                    <span class="text-xs text-gray-500 font-semibold uppercase tracking-wider">
                        Pengeluaran Account
                    </span>
                    <span class="text-xs text-gray-500 font-semibold uppercase tracking-wider">
                        Total Pengeluaran
                    </span>
                </div>
                <div class="flex gap-2 md:gap-4 justify-between items-center">
                    <div class="flex flex-col space-y-4">
                        <h2 class="text-gray-800 font-bold tracking-widest leading-tight">{{Auth::user()->name}}'
                            Pengeluaran</h2>
                        <div class="flex items-center gap-4">
                            <p class="text-lg text-gray-600 tracking-wider">**** **** *321</p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>
                    </div>
                    <h2 class="text-lg md:text-xl xl:text-3xl text-gray-700 font-black tracking-wider">
                        <span class="md:text-xl">Rp.</span>
                        {{number_format($revenue)}}
                    </h2>
                </div>
                <div class="flex gap-2 md:gap-4">
                    <a href="#"
                        class="bg-blue-600 px-5 py-3 w-full text-center md:w-auto rounded-lg text-white text-xs tracking-wider font-semibold hover:bg-blue-800">
                        Transfer Money
                    </a>
                    <a href="#"
                        class="bg-blue-50 px-5 py-3 w-full text-center md:w-auto rounded-lg text-blue-600 text-xs tracking-wider font-semibold hover:bg-blue-600 hover:text-white">
                        Link Account
                    </a>
                </div>
            </div>
        </div>
        <div
            class="col-span-2 p-6 rounded-2xl bg-gradient-to-r from-blue-500 to-blue-800 flex flex-col justify-between">
            <div class="flex flex-col">
                <p class="text-white font-bold">Lorem ipsum dolor sit amet</p>
                <p class="mt-1 text-xs md:text-sm text-gray-50 font-light leading-tight max-w-sm">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio soluta saepe consequuntur
                    facilis ab a. Molestiae ad saepe assumenda praesentium rem dolore? Exercitationem, neque
                    obcaecati?
                </p>
            </div>
            <div class="flex justify-between items-end">
                <a href="#"
                    class="bg-blue-800 px-4 py-3 rounded-lg text-white text-xs tracking-wider font-semibold hover:bg-blue-600 hover:text-white">
                    Learn More
                </a>
            </div>
        </div>

    </div>
    <!-- End First Row -->
    <!-- Start Second Row -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 px-4 xl:p-0 gap-4 xl:gap-6">
        <div class="col-span-1 md:col-span-2 lg:col-span-4 flex justify-between">
            <h2 class="text-xs md:text-sm text-gray-700 font-bold tracking-wide md:tracking-wider">
                Expenses By Category</h2>
            <a href="#" class="text-xs text-gray-800 font-semibold uppercase">More</a>
        </div>
        <div class="bg-white p-6 rounded-xl border border-gray-50">
            <div class="flex justify-between items-start">
                <div class="flex flex-col">
                    <p class="text-xs text-gray-600 tracking-wide">Pengeluaran Hari ini</p>
                    <h3 class="mt-1 text-lg text-blue-500 font-bold">Rp. {{number_format($revenuetoday)}} </h3>
                    <span class="mt-4 text-xs text-gray-500">Last Transaction 3 Hours ago</span>
                </div>
                <div class="bg-blue-500 p-2 md:p-1 xl:p-2 rounded-md">
                    <i class="fi fi-sr-inbox-in text-white"></i>

                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-xl border border-gray-50">
            <div class="flex justify-between items-start">
                <div class="flex flex-col">
                    <p class="text-xs text-gray-600 tracking-wide">Transaksi Sukses</p>
                    <h3 class="mt-1 text-lg text-green-500 font-bold">{{number_format($transactionsukses)}}</h3>
                    <span class="mt-4 text-xs text-gray-500">Last Transaction 3 Days ago</span>
                </div>
                <div class="bg-green-500 p-2 md:p-1 xl:p-2 rounded-md">
                    <i class="fi fi-sr-cloud-check text-white"></i>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-xl border border-gray-50">
            <div class="flex justify-between items-start">
                <div class="flex flex-col">
                    <p class="text-xs text-gray-600 tracking-wide">Transaksi Onboarding</p>
                    <h3 class="mt-1 text-lg text-yellow-500 font-bold">{{number_format($transactiononboarding)}}</h3>
                    <span class="mt-4 text-xs text-gray-600">Last Transaction 4 Days ago</span>
                </div>
                <div class="bg-yellow-500 p-2 md:p-1 xl:p-2 rounded-md">
                    <i class="fi fi-sr-refresh text-white"></i>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-xl border border-gray-50">
            <div class="flex justify-between items-start">
                <div class="flex flex-col">
                    <p class="text-xs text-gray-600 tracking-wide">Transaksi Pending</p>
                    <h3 class="mt-1 text-lg text-indigo-500 font-bold">{{number_format($transactionpending)}}</h3>
                    <span class="mt-4 text-xs text-gray-500">Last Transaction 1 Month ago</span>
                </div>
                <div class="bg-indigo-500 p-2 md:p-1 xl:p-2 rounded-md">
                    <i class="fi fi-sr-time-past text-white"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- End Second Row -->

</div>




@endsection
