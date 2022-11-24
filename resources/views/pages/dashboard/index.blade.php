@extends('layouts.admin')
@section('admin-content')


{{-- section 1  --}}
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
            <h2 class="font-semibold">{{$transactionCount}} Pesanan</h2>
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
            <h2 class="font-semibold">{{$userCount}} Users</h2>
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
            <h2 class="font-semibold">{{$productCount}} Product</h2>
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
            <h2 class="font-semibold">{{$categoryCount}} Kateogry</h2>
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
                        Income Account
                    </span>
                    <span class="text-xs text-gray-500 font-semibold uppercase tracking-wider">
                        Total Earning Funds
                    </span>
                </div>
                <div class="flex gap-2 md:gap-4 justify-between items-center">
                    <div class="flex flex-col space-y-4">
                        <h2 class="text-gray-800 font-bold tracking-widest leading-tight">Dewata Store'
                            Revenue</h2>
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
                    <p class="text-xs text-gray-600 tracking-wide">Pendapatan Hari ini</p>
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
    <!-- Start Third Row -->
    <div class="grid grid-cols-1 md:grid-cols-5 items-start px-4 xl:p-0 gap-y-4 md:gap-6">
        <div class="col-start-1 col-end-5">
            <h2 class="text-xs md:text-sm text-gray-800 font-bold tracking-wide">Stock Update</h2>
        </div>
        {{-- Grafik  --}}
        <div class="col-span-2 bg-white p-6 rounded-xl border border-gray-50 flex flex-col space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3  justify-between items-center">
                <div class="p-4 cursor-pointer border">
                    <span class="text-xs text-gray-500 font-semibold">Stock In</span>
                    <h2 class="text-gray-800 font-bold  text-sm tracking-wider">{{number_format($stockin)}} qty</h2>
                </div>
                <div class="p-4 cursor-pointer border">
                    <span class="text-xs text-gray-500 font-semibold">Stock Out</span>
                    <h2 class="text-gray-800 font-bold text-sm tracking-wider">{{number_format($stockout)}} qty</h2>
                </div>
                <div class="p-4 cursor-pointer border">
                    <span class="text-xs text-gray-500 font-semibold">All Stock</span>
                    <h2 class="text-gray-800 font-bold text-sm tracking-wider">{{number_format($allstock)}} qty</h2>
                </div>
            </div>

            <canvas id="myChart"></canvas>

        </div>
        {{-- grafik  --}}
        <div class="col-span-3 bg-white p-6 rounded-xl border border-gray-50 flex flex-col space-y-6">
            <div class="flex justify-between items-center">
                <h2 class="text-sm text-gray-600 font-bold tracking-wide">Transaksi Trakhir Hari ini</h2>
                <a href="{{route('dashboard.transaction.index')}}"
                    class="px-4 py-2 text-xs bg-blue-100 text-blue-500 rounded uppercase tracking-wider font-semibold hover:bg-blue-300">More</a>
            </div>
            <ul class="divide-y-2 divide-gray-100 overflow-x-auto w-full">
                @forelse ($transactiontodays as $item)
                <li class="py-3 flex justify-between text-sm text-gray-500 font-semibold">
                    <p class="px-4 font-semibold">Today</p>
                    <p class="px-4 text-gray-600">{{$item->user->name}}</p>
                    <p class="px-4 tracking-wider">{{$item->payment}}</p>
                    <p class="px-4 text-blue-600">{{$item->status}}</p>
                    <p class="md:text-base text-gray-800 flex items-center gap-2">
                        {{$item->tgl}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </p>
                </li>
                @empty
                <li class="py-3 flex justify-between text-sm text-gray-500 font-semibold">
                    <p class="px-4 font-semibold">data tidak ada..</p>

                </li>
                @endforelse


            </ul>
        </div>
    </div>
    <!-- End Third Row -->
</div>
{{-- product  --}}
<section class="d-flex flex-column gap-4">
    <div class="d-flex justify-content-between align-items-center gap-3">
        <h4 class="title-section-content">Exclusive Product Dari Dewata</h4>
        <a href="#" class="btn-link">Tampilkan Semua Product</a>

    </div>
    <div class="d-flex gap-4 flex-wrap">
        @forelse ($products as $item)
        <div class="product-card">
            <img src="{{ $item->galleries()->exists() ? ($item->galleries->first()->url) : 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mN88B8AAsUB4ZtvXtIAAAAASUVORK5CYII=' }}"
                alt="Nike Airforce" width="260" height="180" />
            <div class="product-detail pt-3">
                <div>
                    <p class="label-detail mb-1">{{$item->category->name}}</p>
                    <p class="title-detail">{{$item->name}}</p>
                </div>
                <form action="{{route('dashboard.product.gallery.index', $item->id)}}">
                    <button type="submit " class="btn btn-fav" aria-label="Button Favorite"
                        onclick="handleFavorite(this)">
                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" id="Layer_1" height="24"
                            viewBox="0 0 24 24" width="24" data-name="Layer 1">
                            <path stroke="currentColor" stroke-width="2"
                                d="m19 0h-6a5.006 5.006 0 0 0 -5 5v.1a5.009 5.009 0 0 0 -4 4.9v.1a5.009 5.009 0 0 0 -4 4.9v4a5.006 5.006 0 0 0 5 5h6a5.006 5.006 0 0 0 5-5v-.1a5.009 5.009 0 0 0 4-4.9v-.1a5.009 5.009 0 0 0 4-4.9v-4a5.006 5.006 0 0 0 -5-5zm-17 15a3 3 0 0 1 3-3h6a2.988 2.988 0 0 1 2.638 1.6l-3.455 3.463-.475-.479a1.992 1.992 0 0 0 -2.708-.111l-4.621 3.96a2.96 2.96 0 0 1 -.379-1.433zm12 4a3 3 0 0 1 -3 3h-6a2.971 2.971 0 0 1 -1.118-.221l4.406-3.779.476.481a2 2 0 0 0 2.828 0l2.408-2.413zm4-5a3 3 0 0 1 -2 2.816v-1.816a5.006 5.006 0 0 0 -5-5h-5a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3zm4-5a3 3 0 0 1 -2 2.816v-1.816a5.006 5.006 0 0 0 -5-5h-5a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3zm-18 6a1 1 0 1 1 1 1 1 1 0 0 1 -1-1z" />
                        </svg>
                    </button>
                </form>

            </div>
            <div class="product-detail pt-4">
                <div>
                    <p class="label-detail mb-1">Stok: {{number_format($item->stock)}}</p>
                    <p class="price-detail">Rp {{number_format($item->price)}}</p>
                </div>
                <form action="{{route('dashboard.product.edit', $item->id)}}">
                    <button type="submit" class="buy-product button btn-rounded" onclick="handleBuy(this)">
                        Edit Produk
                    </button>
                </form>

            </div>
        </div>
        @empty

        @endforelse

    </div>
</section>

{{-- Category  --}}
<section class="d-flex flex-column gap-4 mb-5">
    <h4 class="title-section-content">Pesanan Terbaru</h4>
    <div class="d-flex gap-4 flex-wrap">
        @forelse ($transactions as $item)
        <div class="store-card ">
            <img src="{{asset('./admin/assets/images/dewatalogo.png')}}" alt="Adidas Store" width="70" height="70" />
            <div class="store-logo-wrapper">
                <div class="store-logo-circle">
                    <img src="{{$item->user->profile_photo_url}}" alt="Adidas Logo" class="store-logo rounded-full" />
                </div>
            </div>
            <div class="store-name">
                <div class="">
                    <p class="title-store text-xs">
                        {{$item->address}}
                        <span><img src="{{asset('./admin/assets/icons/ic_badge.svg')}}" alt="Icon Badge" /></span>
                    </p>
                    <p class="username-store">@ {{$item->user->name}}</p>
                </div>
                <div class="d-flex gap-2 align-items-start">
                    <a href="{{route('dashboard.transaction.show',$item->id)}}">
                        <button class="button btn-follow active rounded-pill">
                            Show
                        </button>
                    </a>

                </div>
            </div>
            <div class="store-detail">
                <div class="section-detail">
                    <h6>Rp.{{number_format($item->total_price)}}</h6>
                    <p>Total Harga</p>
                </div>
                <div class="vertical-line"></div>
                <div class="section-detail">
                    <h6>{{$item->payment}}</h6>
                    <p>Pembayaran</p>
                </div>
                <div class="vertical-line"></div>
                <div class="section-detail">
                    <h6>{{$item->status}}</h6>
                    <p>Status Pemesanan</p>
                </div>
            </div>
            <div class="store-detail">
                <div class="section-detail">
                    <a
                        href="{{ route('dashboard.transaction.changeStatus', ['id' => $item->id, 'status' => 'SHIPPED']) }}">
                        <button class="button btn-follow active rounded-pill">
                            Shipped
                        </button>
                    </a>

                </div>
                <div class="vertical-line"></div>
                <div class="section-detail">
                    <a
                        href="{{ route('dashboard.transaction.changeStatus', ['id' => $item->id, 'status' => 'ONBOARDING']) }}">
                        <button class="button btn-follow active rounded-pill">
                            Boarding
                        </button>
                    </a>

                </div>
                <div class="vertical-line"></div>
                <div class="section-detail">
                    <a
                        href="{{ route('dashboard.transaction.changeStatus', ['id' => $item->id, 'status' => 'SUCCESS']) }}">
                        <button class="button btn-follow active rounded-pill">
                            Success
                        </button>
                    </a>

                </div>
            </div>
        </div>

        @empty
        Data Tidak ada.
        @endforelse
    </div>
</section>


<script>
    ctx = document.getElementById('myChart').getContext('2d');

    data = {
        labels: [
            @foreach($products as $item)
            '{{$item->name}}',
            @endforeach
        ],

        datasets: [{
            label: 'Total Expenses',
            data: [
                @foreach($products as $item)
                '{{$item->stock}}',
                @endforeach
            ],
            backgroundColor: [
                '#3B82F6',
                '#10B981',
                '#6366F1',
                '#F59E0B'
            ]
        }]
    };

    config = {
        type: 'polarArea',
        data: data,
        options: {
            plugins: {
                legend: {
                    position: 'bottom',
                },
            }
        }
    };

    chart = new Chart(ctx, config);

</script>

@endsection
