@extends('layouts.admin')
@section('admin-content')
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    Transaction &raquo; #{{ $transaction->id }} {{ $transaction->name }}
</h2>



<div aria-label="form" tabindex="0" class="focus:outline-none xl:w-10/12 w-full px-8 bg-white py-3 pb-2">
    <div class="bg-gray-100 py-12 flex flex-wrap items-center justify-center">
        @if($transaction->status == "PENDING")
        <div class="w-52 h-16 relative md:mt-0 mt-4">
            <img src="https://i.ibb.co/DwNs7zG/Steps.png" alt="step1" class="w-full h-full" />
            <div class="absolute w-full flex flex-col px-6 items-center justify-center inset-0 m-0">
                <p tabindex="0" class="focus:outline-none w-full text-sm font-medium leading-4 text-white">Pending</p>
                <p tabindex="0" class="focus:outline-none w-full text-xs mt-1 leading-none text-white">
                    Pesanan Sedang Disiapkan.
                </p>
            </div>
        </div>
        <div class="w-52 h-16 relative md:mt-0 mt-4">
            <img src="https://i.ibb.co/wNZ4nzy/Steps2.png" alt="step2" class="w-full h-full" />
            <div class="absolute w-full flex flex-col px-6 items-center justify-center inset-0 m-0">
                <p tabindex="0" class="focus:outline-none w-full text-sm font-medium leading-4 text-indigo-800">
                    Shipped</p>
                <p tabindex="0" class="focus:outline-none w-full text-xs mt-1 leading-none text-indigo-800">
                    Pesanan Sudah Diproses sedang di kemas
                </p>
            </div>
        </div>
        <div class="w-52 h-16 relative md:mt-0 mt-4">
            <img src="https://i.ibb.co/c2k4Gbr/Steps3.png" alt="step3" class="w-full h-full" />
            <div class="absolute w-full flex flex-col px-6 items-center justify-center inset-0 m-0">
                <p tabindex="0" class="focus:outline-none w-full text-sm font-medium leading-4 text-gray-700">
                    Onboarding</p>
                <p tabindex="0" class="focus:outline-none w-full text-xs mt-1 leading-none text-gray-500">
                    Pesanan Sedang Diantarkan Kelokasi
                </p>
            </div>
        </div>
        <div class="w-52 h-16 relative lg:mt-0 mt-4">
            <img src="https://i.ibb.co/XCdjrhm/Steps4.png" alt="step4" class="w-full h-full" />
            <div class="absolute w-full flex flex-col px-6 items-center justify-center inset-0 m-0">
                <p tabindex="0" class="focus:outline-none w-full text-sm font-medium leading-4 text-gray-700">
                    Success</p>
                <p tabindex="0" class="focus:outline-none w-full text-xs mt-1 leading-none text-gray-500">
                    Pesanan Telah Diterima.
                </p>
            </div>
        </div>
        @elseif($transaction->status == "SHIPPED")
        <div class="w-52 h-16 relative md:mt-0 mt-4">
            <img src="https://i.ibb.co/DwNs7zG/Steps.png" alt="step1" class="w-full h-full" />
            <div class="absolute w-full flex flex-col px-6 items-center justify-center inset-0 m-0">
                <p tabindex="0" class="focus:outline-none w-full text-sm font-medium leading-4 text-white">Pending</p>
                <p tabindex="0" class="focus:outline-none w-full text-xs mt-1 leading-none text-white">
                    Pesanan Sedang Disiapkan.
                </p>
            </div>
        </div>
        <div class="w-52 h-16 relative md:mt-0 mt-4">
            <img src="https://i.ibb.co/DwNs7zG/Steps.png" alt="step1" class="w-full h-full" />
            <div class="absolute w-full flex flex-col px-6 items-center justify-center inset-0 m-0">
                <p tabindex="0" class="focus:outline-none w-full text-sm font-medium leading-4 text-white">Shipped</p>
                <p tabindex="0" class="focus:outline-none w-full text-xs mt-1 leading-none text-white">
                    Pesanan Sudah Diproses sedang di kemas
                </p>
            </div>
        </div>

        <div class="w-52 h-16 relative md:mt-0 mt-4">
            <img src="https://i.ibb.co/wNZ4nzy/Steps2.png" alt="step2" class="w-full h-full" />
            <div class="absolute w-full flex flex-col px-6 items-center justify-center inset-0 m-0">
                <p tabindex="0" class="focus:outline-none w-full text-sm font-medium leading-4 text-indigo-800">
                    Onboarding</p>
                <p tabindex="0" class="focus:outline-none w-full text-xs mt-1 leading-none text-indigo-800">
                    Pesanan Sedang Diantarkan Kelokasi
                </p>
            </div>
        </div>
        <div class="w-52 h-16 relative lg:mt-0 mt-4">
            <img src="https://i.ibb.co/XCdjrhm/Steps4.png" alt="step4" class="w-full h-full" />
            <div class="absolute w-full flex flex-col px-6 items-center justify-center inset-0 m-0">
                <p tabindex="0" class="focus:outline-none w-full text-sm font-medium leading-4 text-gray-700">
                    Success</p>
                <p tabindex="0" class="focus:outline-none w-full text-xs mt-1 leading-none text-gray-500">
                    Pesanan Telah Diterima.
                </p>
            </div>
        </div>
        @elseif($transaction->status == "ONBOARDING")
        <div class="w-52 h-16 relative md:mt-0 mt-4">
            <img src="https://i.ibb.co/DwNs7zG/Steps.png" alt="step1" class="w-full h-full" />
            <div class="absolute w-full flex flex-col px-6 items-center justify-center inset-0 m-0">
                <p tabindex="0" class="focus:outline-none w-full text-sm font-medium leading-4 text-white">Pending</p>
                <p tabindex="0" class="focus:outline-none w-full text-xs mt-1 leading-none text-white">
                    Pesanan Sedang Disiapkan.
                </p>
            </div>
        </div>
        <div class="w-52 h-16 relative md:mt-0 mt-4">
            <img src="https://i.ibb.co/DwNs7zG/Steps.png" alt="step1" class="w-full h-full" />
            <div class="absolute w-full flex flex-col px-6 items-center justify-center inset-0 m-0">
                <p tabindex="0" class="focus:outline-none w-full text-sm font-medium leading-4 text-white">Shipped</p>
                <p tabindex="0" class="focus:outline-none w-full text-xs mt-1 leading-none text-white">
                    Pesanan Sudah Diproses sedang di kemas
                </p>
            </div>
        </div>
        <div class="w-52 h-16 relative md:mt-0 mt-4">
            <img src="https://i.ibb.co/DwNs7zG/Steps.png" alt="step1" class="w-full h-full" />
            <div class="absolute w-full flex flex-col px-6 items-center justify-center inset-0 m-0">
                <p tabindex="0" class="focus:outline-none w-full text-sm font-medium leading-4 text-white">Onboarding
                </p>
                <p tabindex="0" class="focus:outline-none w-full text-xs mt-1 leading-none text-white">
                    Pesanan Sedang Diantarkan Kelokasi
                </p>
            </div>
        </div>
        <div class="w-52 h-16 relative lg:mt-0 mt-4">
            <img src="https://i.ibb.co/wNZ4nzy/Steps2.png" alt="step2" class="w-full h-full" />
            <div class="absolute w-full flex flex-col px-6 items-center justify-center inset-0 m-0">
                <p tabindex="0" class="focus:outline-none w-full text-sm font-medium leading-4 text-indigo-800">
                    Success</p>
                <p tabindex="0" class="focus:outline-none w-full text-xs mt-1 leading-none text-indigo-800">
                    Pesanan Telah Diterima.
                </p>
            </div>
        </div>
        @elseif($transaction->status == "SUCCESS")
        <div class="w-52 h-16 relative md:mt-0 mt-4">
            <img src="https://i.ibb.co/DwNs7zG/Steps.png" alt="step1" class="w-full h-full" />
            <div class="absolute w-full flex flex-col px-6 items-center justify-center inset-0 m-0">
                <p tabindex="0" class="focus:outline-none w-full text-sm font-medium leading-4 text-white">Pending</p>
                <p tabindex="0" class="focus:outline-none w-full text-xs mt-1 leading-none text-white">
                    Pesanan Sedang Disiapkan.
                </p>
            </div>
        </div>
        <div class="w-52 h-16 relative md:mt-0 mt-4">
            <img src="https://i.ibb.co/DwNs7zG/Steps.png" alt="step1" class="w-full h-full" />
            <div class="absolute w-full flex flex-col px-6 items-center justify-center inset-0 m-0">
                <p tabindex="0" class="focus:outline-none w-full text-sm font-medium leading-4 text-white">Shipped</p>
                <p tabindex="0" class="focus:outline-none w-full text-xs mt-1 leading-none text-white">
                    Pesanan Sudah Diproses sedang di kemas
                </p>
            </div>
        </div>
        <div class="w-52 h-16 relative md:mt-0 mt-4">
            <img src="https://i.ibb.co/DwNs7zG/Steps.png" alt="step1" class="w-full h-full" />
            <div class="absolute w-full flex flex-col px-6 items-center justify-center inset-0 m-0">
                <p tabindex="0" class="focus:outline-none w-full text-sm font-medium leading-4 text-white">Onboarding
                </p>
                <p tabindex="0" class="focus:outline-none w-full text-xs mt-1 leading-none text-white">
                    Pesanan Sedang Diantarkan Kelokasi
                </p>
            </div>
        </div>
        <div class="w-52 h-16 relative lg:mt-0 mt-4">
            <img src="https://i.ibb.co/XCdjrhm/Steps4.png" alt="step4" class="w-full h-full" />
            <div
                class="absolute w-full flex flex-col px-6 items-center justify-center inset-0 m-0 bg-green-500 rounded-xl">
                <p tabindex="0" class="focus:outline-none w-full text-sm font-medium leading-4 text-white">
                    Success</p>
                <p tabindex="0" class="focus:outline-none w-full text-xs mt-1 leading-none text-white">
                    Pesanan Telah Diterima.
                </p>
            </div>
        </div>
        @endif
    </div>
    <div class="xl:px-24">
        <div class="px-5 py-4 bg-gray-100 rounded-lg flex items-center justify-between mt-7">
            <div class="flex items-center">
                <div tabindex="0" class="focus:outline-none flex-shrink-0">
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/form_layout_wizard2-svg1.svg" alt="lock">
                </div>

                <p tabindex="0" class="focus:outline-none text-xs text-gray-800 pl-3">Kami mengambil masalah privasi
                    dengan serius. Anda dapat yakin bahwa data pribadi Anda terlindungi dengan aman.</p>
            </div>
            <button aria-label="Close this banner"
                class="md:block hidden focus:outline-none focus:ring-2 focus:ring-gray-700 rounded">
                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/form_layout_wizard2-svg2.svg" alt="cross">
            </button>
        </div>
        <div class="mt-16 lg:flex justify-between border-b border-gray-200 pb-16">
            <div class="w-80">
                <div class="flex items-center">
                    <h1 tabindex="0" class="focus:outline-none text-xl font-medium pr-2 leading-5 text-gray-800">
                        Informasi Pribadi
                    </h1>
                </div>
                <p tabindex="0" class="focus:outline-none mt-4 text-sm leading-5 text-gray-600">Informasi berikut adalah
                    data yang sesuai dengan pemesanan yang dilakukan oleh pelanggan kami</p>
            </div>
            <div>
                <div class="md:flex items-center lg:ml-24 lg:mt-0 mt-4">
                    <div class="md:w-64 ">
                        <label class="text-sm leading-none text-gray-800" id="firstName">Nama</label>
                        <input type="name" disabled tabindex="0" value="{{$transaction->user->name}}"
                            class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                            aria-labelledby="firstName" placeholder="John" />
                    </div>
                    <div class="md:w-64 md:ml-12  ">
                        <label class="text-sm leading-none text-gray-800" id="lastName">Email</label>
                        <input type="name" disabled tabindex="0" value="{{$transaction->user->email}}"
                            class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                            aria-labelledby="lastName" placeholder="Doe" />
                    </div>
                </div>
                <div class="md:flex items-center lg:ml-24 lg:mt-0 mt-4">
                    <div class="md:w-full ">
                        <label class="text-sm leading-none text-gray-800" id="firstName">Alamat</label>
                        <textarea type="name" disabled tabindex="0"
                            class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                            aria-labelledby="firstName" placeholder="John" />{{$transaction->address}} </textarea>
                    </div>
                </div>

            </div>

        </div>
        <div class="mt-16 lg:flex justify-between border-b border-gray-200 pb-16 mb-4">
            <div class="w-80">
                <div class="flex items-center">
                    <h1 tabindex="0" class="focus:outline-none text-xl font-medium pr-2 leading-5 text-gray-800">
                        Billing Details
                    </h1>
                </div>
                <p tabindex="0" class="focus:outline-none mt-4 text-sm leading-5 text-gray-600">Informasi Pembayaran ini
                    sudah termasuk pajak, dan shipping dari Dewata Vape Store Jambi.</p>
            </div>
            <div>
                <div class="md:flex items-center lg:ml-24 lg:mt-0 mt-4">
                    <div class="md:w-64 ">
                        <label class="text-sm leading-none text-gray-800" id="firstName">Pembayaran</label>
                        <input type="name" disabled tabindex="0" value="{{$transaction->payment}}"
                            class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                            aria-labelledby="firstName" placeholder="John" />
                    </div>
                    <div class="md:w-64 md:ml-12  ">
                        <label class="text-sm leading-none text-gray-800" id="lastName">Shipping Price</label>
                        <input type="name" disabled tabindex="0"
                            value="Rp.{{number_format($transaction->shipping_price)}}"
                            class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                            aria-labelledby="lastName" placeholder="Doe" />
                    </div>
                </div>
                <div class="md:flex items-center lg:ml-24 lg:mt-0 mt-4">
                    <div class="md:w-64 ">
                        <label class="text-sm leading-none text-gray-800" id="firstName">Status</label>
                        <input type="name" disabled tabindex="0" value="{{$transaction->status}}"
                            class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                            aria-labelledby="firstName" placeholder="John" />
                    </div>
                    <div class="md:w-64 md:ml-12  ">
                        <label class="text-sm leading-none text-gray-800" id="lastName">Total Pembayaran</label>
                        <input type="name" disabled tabindex="0" value="Rp.{{number_format($transaction->total_price)}}"
                            class="w-full p-3 mt-3 bg-gray-100 border rounded border-gray-200 focus:outline-none focus:border-gray-600 text-sm font-medium leading-none text-gray-800"
                            aria-labelledby="lastName" placeholder="Doe" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2 class="font-semibold text-lg text-gray-800 leading-tight mb-5">Transaction Items</h2>
    <div class="d-flex gap-4 flex-wrap px-12">
        @foreach ($transactionitems as $item)
        <div class="product-card">
            <img src="{{ $item->product->galleries()->exists() ? ($item->product->galleries->first()->url) : 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mN88B8AAsUB4ZtvXtIAAAAASUVORK5CYII=' }}"
                alt="Nike Airforce" width="260" height="180" />
            <div class="product-detail pt-3">
                <div>
                    <p class="label-detail mb-1">{{$item->product->category->name}}</p>
                    <p class="title-detail">{{$item->product->name}}</p>
                </div>
                <button class="btn btn-fav" aria-label="Button Favorite" onclick="handleFavorite(this)">
                    <svg fill="currentColor">
                        <path
                            d="M11.5909 6.09528L12.1213 6.6256L12.6516 6.09528C14.4453 4.30157 17.3535 4.30157 19.1472 6.0953C20.941 7.88902 20.941 10.7972 19.1473 12.591L12.2207 19.5176C12.1658 19.5725 12.0768 19.5725 12.022 19.5176L5.10555 12.6012L5.10485 12.6005L5.0953 12.591C5.09519 12.5909 5.09508 12.5907 5.09497 12.5906C3.30157 10.7969 3.30168 7.88891 5.0953 6.0953C6.88902 4.30158 9.79721 4.30157 11.5909 6.09528Z"
                            stroke="currentColor" stroke-width="2" />
                    </svg>
                </button>
            </div>
            <div class="product-detail pt-4">
                <div>
                    <p class="label-detail mb-1">Qauntity :{{$item->quantity}}:</p>
                    <p class="price-detail">Rp.{{number_format($item->product->price)}}</p>
                </div>

            </div>
        </div>
        @endforeach
    </div>


</div>


<script>
    // AJAX DataTable
    var datatable = $('#crudTable').DataTable({
        ajax: {
            url: '{!! url()->current() !!}',
        },
        columns: [{
                data: 'id',
                name: 'id',
                width: '5%'
            },
            {
                data: 'product.name',
                name: 'product.name'
            },
            {
                data: 'product.price',
                name: 'product.price'
            },
            {
                data: 'quantity',
                name: 'quantity'
            },
        ],
    });

</script>

@endsection
