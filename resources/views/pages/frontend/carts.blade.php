@extends('layouts.frontend')
@section('user-content')
<section class="bg-gray-100 py-8 px-4">
    <div class="container mx-auto">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('index')}}">Home</a>
                &raquo
                <a href="#" aria-label="current-page">Shopping Cart</a>

        </ul>
    </div>
</section>
<!-- END: BREADCRUMB -->

<!-- START: COMPLETE YOUR ROOM -->
<section class="md:py-16" style="
				background-image: linear-gradient(
					to bottom,
					rgb(233, 233, 233),
					rgb(248, 248, 248)
				);">
    <div class="container mx-auto px-4">
        <div class="flex -mx-4 flex-wrap">
            <div class="w-full px-4 mb-4 md:w-8/12 md:mb-0" id="shopping-cart">
                <div class="flex flex-start mb-4 mt-8 pb-3 border-b border-gray-200 md:border-b-0">
                    <h3 class="text-2xl">Shopping Cart</h3>
                </div>

                <div class="border-b border-gray-200 mb-4 hidden md:block">
                    <div class="flex flex-start items-center pb-2 -mx-4">
                        <div class="px-4 flex-none">
                            <div class="" style="width: 90px">
                                <h6>Photo</h6>
                            </div>
                        </div>
                        <div class="px-4 w-5/12">
                            <div class="">
                                <h6>Product</h6>
                            </div>
                        </div>
                        <div class="px-4 w-5/12">
                            <div class="">
                                <h6>Quantity</h6>
                            </div>
                        </div>
                        <div class="px-4 w-5/12">
                            <div class="">
                                <h6>Price</h6>
                            </div>
                        </div>
                        <div class="px-4 w-2/12">
                            <div class="text-center">
                                <h6>Action</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <p id="cart-empty" class="hidden text-center py-8">
                    Ooops... Cart is empty
                    <a href="details.html" class="underline">Shop Now</a>
                </p>

                <!-- START: ROW 1 -->
                @forelse ($carts as $item)
                <div class="flex flex-start flex-wrap items-center mb-4 -mx-4" data-row="1">
                    <div class="px-4 flex-none">
                        <div class="" style="width: 90px; height: 90px">
                            <img src="{{ $item->product->galleries()->exists() ?($item->product->galleries->first()->url) : 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mN88B8AAsUB4ZtvXtIAAAAASUVORK5CYII=' }}"
                                alt="chair-1" class="object-cover rounded-xl w-full h-full" />
                        </div>
                    </div>
                    <div class="px-4 w-auto flex-1 md:w-5/12">
                        <div class="">
                            <h6 class="font-semibold text-lg md:text-xl leading-8">
                                {{ $item->product->name }}
                            </h6>
                            <span class="text-sm md:text-lg">{{$item->product->category->name}}</span>
                            <h6 class="font-semibold text-base md:text-lg block md:hidden">
                                IDR {{ number_format($item->product->price) }}
                            </h6>
                        </div>
                    </div>
                    <div class="px-4 w-auto flex-none md:flex-1 md:w-5/12 hidden md:block">
                        <div class="">
                            <h6 class="font-semibold text-lg">Quantity {{ number_format($item->quantity) }}</h6>
                        </div>
                    </div>
                    <div class="px-4 w-auto flex-none md:flex-1 md:w-5/12 hidden md:block">
                        <div class="">
                            <h6 class="font-semibold text-lg">IDR
                                {{ number_format($item->product->price * $item->quantity) }}</h6>
                        </div>
                    </div>
                    <div class="px-4 w-2/12">
                        <div class="text-center">
                            <form action="{{ route('cart-delete', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 border-none focus:outline-none px-3 py-1">
                                    X
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @empty
                <p id="cart-empty" class="text-center py-8">
                    Ooops... Pesanan anda tidak ada
                    <a href="{{ route('index') }}" class="underline">Shop Now</a>
                </p>
                @endforelse

                <!-- END: ROW 1 -->
                <div class="2xl:container 2xl:mx-auto py-14 px-4 md:px-6 xl:px-20 bg-white rounded-xl ">
                    <div
                        class="flex flex-col xl:flex-row justify-center items-center space-y-10 xl:space-y-0 xl:space-x-8">

                        <div class="flex justify-center flex-col items-start w-full lg:w-9/12 xl:w-full">
                            <h3
                                class="text-3xl xl:text-4xl dark:text-white font-semibold leading-7 xl:leading-9 w-full md:text-left text-gray-800">
                                Your Order Summary on Dewata Vape Store
                            </h3>
                            <p class="text-base leading-none dark:text-white mt-4 text-gray-800">Paid using Debit card
                                ending with
                                <span class="font-semibold">Your Account</span>
                            </p>

                            <div class="flex  flex-col justify-start items-start mt-8 xl:mt-10 space-y-10 w-full">
                                <div class="flex flex-col space-y-4 w-full">
                                    <div
                                        class="flex justify-center items-center w-full space-y-4 flex-col border-gray-200 border-b pb-4">
                                        <div class="flex justify-between w-full pb-2">
                                            <p class="text-base dark:text-white leading-4 text-gray-800">Subtotal</p>
                                            <p class="text-base dark:text-gray-300 leading-4 text-gray-600">
                                                Rp.{{number_format($subtotal)}}
                                            </p>
                                        </div>
                                        <div class="flex justify-between w-full pb-2">
                                            <p class="text-base dark:text-white leading-4 text-gray-800">Total Item</p>
                                            <p class="text-base dark:text-gray-300 leading-4 text-gray-600">
                                                {{number_format($totalItem)}} Items
                                            </p>
                                        </div>
                                        <div class="flex justify-between w-full pb-2">
                                            <p class="text-base dark:text-white leading-4 text-gray-800">Total Quantity
                                            </p>
                                            <p class="text-base dark:text-gray-300 leading-4 text-gray-600">
                                                {{number_format($totalQuantity)}} Items
                                            </p>
                                        </div>
                                        <div class="flex justify-between w-full ">
                                            <p class="text-base dark:text-white leading-4 text-gray-800">Shipping</p>
                                            <p class="text-base dark:text-gray-300 leading-4 text-gray-600">Rp.10.000
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <p class="text-base dark:text-white font-semibold leading-4 text-gray-800">
                                            Total</p>
                                        <p class="text-base dark:text-gray-300 font-semibold leading-4 text-gray-600">
                                            Rp.{{number_format($subtotal + 10000)}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: ROW 1 -->
            </div>
            <div class="w-full md:px-4 md:w-4/12" id="shipping-detail">
                <div class="bg-gray-100 px-4 py-6 md:p-8 md:rounded-3xl">
                    <form action="{{ route('checkout') }}" method="POST">
                        @csrf
                        <div class="flex flex-start mb-6">
                            <h3 class="text-2xl">Shipping Details</h3>
                        </div>

                        <div class="flex flex-col mb-4">
                            <label for="complete-name" class="text-sm mb-2">Complete Name</label>
                            <input data-input type="text" id="complete-name" value="{{Auth::user()->name}}"
                                class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none"
                                placeholder="Input your name" />
                        </div>

                        <div class="flex flex-col mb-4">
                            <label for="email" class="text-sm mb-2">Email Address</label>
                            <input data-input type="email" id="email" value="{{Auth::user()->email}}"
                                class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none"
                                placeholder="Input your email address" />
                        </div>

                        <div class="flex flex-col mb-4">
                            <label for="address" class="text-sm mb-2">Address</label>
                            <input data-input type="text" id="address" name="address"
                                class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none"
                                placeholder="Input your address" />
                        </div>

                        <div class="flex flex-col mb-4">
                            <label for="phone-number" class="text-sm mb-2">Phone Number</label>
                            <input data-input type="tel" id="phone-number" name="phone"
                                class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none"
                                placeholder="Input your phone number" />
                        </div>
                        {{-- <div class="flex flex-col mb-4">
                            <label for="phone-number" class="text-sm mb-2">Pembayaran</label>
                            <select name="payment"
                                class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none">
                                <option value="TRANSFER"
                                    class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none">
                                    TRANSFER
                                </option>
                                <option value="COD"
                                    class="border-gray-200 border rounded-lg px-4 py-2 bg-white text-sm focus:border-blue-200 focus:outline-none">
                                    COD
                                </option>
                            </select>
                        </div>  --}}
                        <div class="flex flex-col mb-4 rounded">
                            <!-- Tabs -->
                            <label for="phone-number" class="text-sm ">Pembayaran</label>

                            <ul id="tabs" class="inline-flex w-full px-1 pt-2 justify-center ">
                                <li
                                    class="px-4 py-2 -mb-px font-semibold text-gray-800 border-b-2 border-blue-800 rounded-t opacity-50">
                                    <a id="default-tab" href="#first">BCA
                                    </a>


                                </li>
                                <li
                                    class="px-4 py-2 -mb-px font-semibold text-gray-800 border-b-2 border-blue-800 rounded-t opacity-50 items-center">
                                    <a id="default-tab" href="#second">BRI</a>


                                </li>
                                <li
                                    class="px-4 py-2 -mb-px font-semibold text-gray-800 border-b-2 border-blue-800 rounded-t opacity-50">
                                    <a id="default-tab" href="#third">MANDIRI</a>

                                </li>
                                <li
                                    class="px-4 py-2 -mb-px font-semibold text-gray-800 border-b-2 border-blue-800 rounded-t opacity-50">
                                    <a id="default-tab" href="#fourth">QRIS</a>

                                </li>
                                <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50">
                                    <a href="#five">COD</a>


                                </li>

                            </ul>

                            <!-- Tab Contents -->
                            <div id="tab-contents">
                                <div id="first" class="p-4">
                                    <div class="max-w-md w-full h-full mx-auto z-10 bg-blue-900 rounded-3xl">
                                        <div class="flex flex-col">
                                            <div class="bg-white relative drop-shadow-2xl  rounded-3xl p-4 m-4">
                                                <div class="flex-none sm:flex">
                                                    <div class=" relative h-32 w-32   sm:mb-0 mb-3 hidden">
                                                        <img src="https://tailwindcomponents.com/storage/avatars/njkIbPhyZCftc4g9XbMWwVsa7aGVPajYLRXhEeoo.jpg"
                                                            alt="aji" class=" w-32 h-32 object-cover rounded-2xl">
                                                        <a href="#"
                                                            class="absolute -right-2 bottom-2   -ml-3  text-white p-1 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div class="flex-auto justify-evenly">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center  my-1">
                                                                <span class="mr-3 rounded-full bg-white w-8 h-8">
                                                                    <img src="https://w7.pngwing.com/pngs/31/475/png-transparent-asia-bank-bca-central-indonesian-banks-in-indonesia-logo-badge-icon-thumbnail.png"
                                                                        class="h-8 p-1">
                                                                </span>
                                                                <h2 class="font-medium">Bank Central Asia</h2>
                                                            </div>
                                                            <div class="ml-auto text-blue-800">A380</div>
                                                        </div>
                                                        <div class=" border-dashed border-b-2 my-5"></div>
                                                        <div class="flex items-center">
                                                            <div class="flex flex-col">
                                                                <div class="flex-auto text-xs text-gray-400 my-1">
                                                                    <span class="mr-1 ">MO</span><span>19 22</span>
                                                                </div>
                                                                <div
                                                                    class="w-full flex-none text-lg text-blue-800 font-bold leading-none">
                                                                    IND</div>
                                                                <div class="text-xs">Jambi</div>

                                                            </div>
                                                            <div class="flex flex-col mx-auto">
                                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/799px-Bank_Central_Asia.svg.png"
                                                                    class="w-20 p-1">

                                                            </div>
                                                            <div class="flex flex-col ">
                                                                <div class="flex-auto text-xs text-gray-400 my-1">
                                                                    <span class="mr-1">MO</span><span>19 22</span>
                                                                </div>
                                                                <div
                                                                    class="w-full flex-none text-lg text-blue-800 font-bold leading-none">
                                                                    IND</div>
                                                                <div class="text-xs">Jakarta</div>

                                                            </div>
                                                        </div>
                                                        <div class=" border-dashed border-b-2 my-5 pt-5">
                                                            <div
                                                                class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2">
                                                            </div>
                                                            <div
                                                                class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2">
                                                            </div>
                                                        </div>
                                                        <div class="flex items-center mb-5 p-5 text-sm">
                                                            <div class="flex flex-col">
                                                                <span class="text-sm">Nama</span>
                                                                <div class="font-semibold">Raffi Fardani</div>

                                                            </div>
                                                            <div class="flex flex-col ml-auto">
                                                                <span class="text-sm">No rek</span>
                                                                <div class="font-semibold">1892313221</div>

                                                            </div>
                                                        </div>
                                                        <div class="flex items-center mb-4 p-5 text-sm">
                                                            <div class="flex flex-col">
                                                                <span class="text-sm">Nama</span>
                                                                <div class="font-semibold">Dewata Store Jambi</div>

                                                            </div>
                                                            <div class="flex flex-col ml-auto">
                                                                <span class="text-sm">No rek</span>
                                                                <div class="font-semibold">180233142</div>

                                                            </div>
                                                        </div>

                                                        <div class=" border-dashed border-b-2 my-5 pt-5">
                                                            <div
                                                                class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2">
                                                            </div>
                                                            <div
                                                                class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2">
                                                            </div>
                                                        </div>
                                                        <div class="flex items-center px-5 pt-3 text-sm">
                                                            <div class="flex flex-col">
                                                                <span class="">Pengirim</span>
                                                                <div class="font-semibold">{{Auth::user()->name}}</div>

                                                            </div>
                                                            <div class="flex flex-col mx-auto">
                                                                <span class="">Type</span>
                                                                <div class="font-semibold">Transfer</div>

                                                            </div>
                                                            <div class="flex flex-col">
                                                                <span class="">Hari</span>
                                                                <div class="font-semibold">{{$date}}</div>

                                                            </div>
                                                        </div>
                                                        <div class="flex flex-col py-5  justify-center text-sm ">
                                                            <h6 class="font-bold text-center">Transfer Pass
                                                                <input type="radio" name="payment" value="TRANSFER-BCA">
                                                            </h6>

                                                            <div
                                                                class="barcode h-14 w-0 inline-block mt-4 relative left-auto">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="second" class="p-4">
                                    <div class="max-w-md w-full h-full mx-auto z-10 bg-blue-900 rounded-3xl">
                                        <div class="flex flex-col">
                                            <div class="bg-white relative drop-shadow-2xl  rounded-3xl p-4 m-4">
                                                <div class="flex-none sm:flex">
                                                    <div class=" relative h-32 w-32   sm:mb-0 mb-3 hidden">
                                                        <img src="https://tailwindcomponents.com/storage/avatars/njkIbPhyZCftc4g9XbMWwVsa7aGVPajYLRXhEeoo.jpg"
                                                            alt="aji" class=" w-32 h-32 object-cover rounded-2xl">
                                                        <a href="#"
                                                            class="absolute -right-2 bottom-2   -ml-3  text-white p-1 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div class="flex-auto justify-evenly">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center  my-1">
                                                                <span class="mr-3 rounded-full bg-white w-8 h-8">
                                                                    <img src="https://www.academicindonesia.com/wp-content/uploads/2020/03/logo-BRI.png"
                                                                        class="h-8 p-1">
                                                                </span>
                                                                <h2 class="font-medium">Bank Rakyat Indonesia</h2>
                                                            </div>
                                                            <div class="ml-auto text-blue-800">A380</div>
                                                        </div>
                                                        <div class=" border-dashed border-b-2 my-5"></div>
                                                        <div class="flex items-center">
                                                            <div class="flex flex-col">
                                                                <div class="flex-auto text-xs text-gray-400 my-1">
                                                                    <span class="mr-1 ">MO</span><span>19 22</span>
                                                                </div>
                                                                <div
                                                                    class="w-full flex-none text-lg text-blue-800 font-bold leading-none">
                                                                    IND</div>
                                                                <div class="text-xs">Jambi</div>

                                                            </div>
                                                            <div class="flex flex-col mx-auto">
                                                                <img src="https://www.academicindonesia.com/wp-content/uploads/2020/03/logo-BRI.png"
                                                                    class="w-20 p-1 rounded-xl">

                                                            </div>
                                                            <div class="flex flex-col ">
                                                                <div class="flex-auto text-xs text-gray-400 my-1">
                                                                    <span class="mr-1">MO</span><span>19 22</span>
                                                                </div>
                                                                <div
                                                                    class="w-full flex-none text-lg text-blue-800 font-bold leading-none">
                                                                    IND</div>
                                                                <div class="text-xs">Jakarta</div>

                                                            </div>
                                                        </div>
                                                        <div class=" border-dashed border-b-2 my-5 pt-5">
                                                            <div
                                                                class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2">
                                                            </div>
                                                            <div
                                                                class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2">
                                                            </div>
                                                        </div>
                                                        <div class="flex items-center mb-5 p-5 text-sm">
                                                            <div class="flex flex-col">
                                                                <span class="text-sm">Nama</span>
                                                                <div class="font-semibold">Raffi Fardani</div>

                                                            </div>
                                                            <div class="flex flex-col ml-auto">
                                                                <span class="text-sm">No rek</span>
                                                                <div class="font-semibold">1892313221</div>

                                                            </div>
                                                        </div>
                                                        <div class="flex items-center mb-4 p-5 text-sm">
                                                            <div class="flex flex-col">
                                                                <span class="text-sm">Nama</span>
                                                                <div class="font-semibold">Dewata Store Jambi</div>

                                                            </div>
                                                            <div class="flex flex-col ml-auto">
                                                                <span class="text-sm">No rek</span>
                                                                <div class="font-semibold">180233142</div>

                                                            </div>
                                                        </div>

                                                        <div class=" border-dashed border-b-2 my-5 pt-5">
                                                            <div
                                                                class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2">
                                                            </div>
                                                            <div
                                                                class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2">
                                                            </div>
                                                        </div>
                                                        <div class="flex items-center px-5 pt-3 text-sm">
                                                            <div class="flex flex-col">
                                                                <span class="">Pengirim</span>
                                                                <div class="font-semibold">{{Auth::user()->name}}</div>

                                                            </div>
                                                            <div class="flex flex-col mx-auto">
                                                                <span class="">Type</span>
                                                                <div class="font-semibold">Transfer</div>

                                                            </div>
                                                            <div class="flex flex-col">
                                                                <span class="">Hari</span>
                                                                <div class="font-semibold">{{$date}}</div>

                                                            </div>
                                                        </div>
                                                        <div class="flex flex-col py-5  justify-center text-sm ">
                                                            <h6 class="font-bold text-center">Transfer Pass
                                                                <input type="radio" name="payment" value="TRANSFER-BRI">
                                                            </h6>

                                                            <div
                                                                class="barcode h-14 w-0 inline-block mt-4 relative left-auto">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="third" class="p-4">
                                    <div class="max-w-md w-full h-full mx-auto z-10 bg-blue-900 rounded-3xl">
                                        <div class="flex flex-col">
                                            <div class="bg-white relative drop-shadow-2xl  rounded-3xl p-4 m-4">
                                                <div class="flex-none sm:flex">
                                                    <div class=" relative h-32 w-32   sm:mb-0 mb-3 hidden">
                                                        <img src="https://tailwindcomponents.com/storage/avatars/njkIbPhyZCftc4g9XbMWwVsa7aGVPajYLRXhEeoo.jpg"
                                                            alt="aji" class=" w-32 h-32 object-cover rounded-2xl">
                                                        <a href="#"
                                                            class="absolute -right-2 bottom-2   -ml-3  text-white p-1 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div class="flex-auto justify-evenly">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center  my-1">
                                                                <span class="mr-3 rounded-full bg-white w-8 h-8">
                                                                    <img src="https://banner2.cleanpng.com/20180622/ww/kisspng-bank-mandiri-bank-syariah-mandiri-logo-mandiri-5b2c8fd8c4de47.1933465215296470648064.jpg"
                                                                        class="h-8 p-1">
                                                                </span>
                                                                <h2 class="font-medium">Bank Mandiri</h2>
                                                            </div>
                                                            <div class="ml-auto text-blue-800">A380</div>
                                                        </div>
                                                        <div class=" border-dashed border-b-2 my-5"></div>
                                                        <div class="flex items-center">
                                                            <div class="flex flex-col">
                                                                <div class="flex-auto text-xs text-gray-400 my-1">
                                                                    <span class="mr-1 ">MO</span><span>19 22</span>
                                                                </div>
                                                                <div
                                                                    class="w-full flex-none text-lg text-blue-800 font-bold leading-none">
                                                                    IND</div>
                                                                <div class="text-xs">Jambi</div>

                                                            </div>
                                                            <div class="flex flex-col mx-auto">
                                                                <img src="https://logos-download.com/wp-content/uploads/2016/06/Mandiri_logo.png"
                                                                    class="w-20 p-1 ">

                                                            </div>
                                                            <div class="flex flex-col ">
                                                                <div class="flex-auto text-xs text-gray-400 my-1">
                                                                    <span class="mr-1">MO</span><span>19 22</span>
                                                                </div>
                                                                <div
                                                                    class="w-full flex-none text-lg text-blue-800 font-bold leading-none">
                                                                    IND</div>
                                                                <div class="text-xs">Jakarta</div>

                                                            </div>
                                                        </div>
                                                        <div class=" border-dashed border-b-2 my-5 pt-5">
                                                            <div
                                                                class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2">
                                                            </div>
                                                            <div
                                                                class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2">
                                                            </div>
                                                        </div>
                                                        <div class="flex items-center mb-5 p-5 text-sm">
                                                            <div class="flex flex-col">
                                                                <span class="text-sm">Nama</span>
                                                                <div class="font-semibold">Raffi Fardani</div>

                                                            </div>
                                                            <div class="flex flex-col ml-auto">
                                                                <span class="text-sm">No rek</span>
                                                                <div class="font-semibold">1892313221</div>

                                                            </div>
                                                        </div>
                                                        <div class="flex items-center mb-4 p-5 text-sm">
                                                            <div class="flex flex-col">
                                                                <span class="text-sm">Nama</span>
                                                                <div class="font-semibold">Dewata Store Jambi</div>

                                                            </div>
                                                            <div class="flex flex-col ml-auto">
                                                                <span class="text-sm">No rek</span>
                                                                <div class="font-semibold">180233142</div>

                                                            </div>
                                                        </div>

                                                        <div class=" border-dashed border-b-2 my-5 pt-5">
                                                            <div
                                                                class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2">
                                                            </div>
                                                            <div
                                                                class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2">
                                                            </div>
                                                        </div>
                                                        <div class="flex items-center px-5 pt-3 text-sm">
                                                            <div class="flex flex-col">
                                                                <span class="">Pengirim</span>
                                                                <div class="font-semibold">{{Auth::user()->name}}</div>

                                                            </div>
                                                            <div class="flex flex-col mx-auto">
                                                                <span class="">Type</span>
                                                                <div class="font-semibold">Transfer</div>

                                                            </div>
                                                            <div class="flex flex-col">
                                                                <span class="">Hari</span>
                                                                <div class="font-semibold">{{$date}}</div>

                                                            </div>
                                                        </div>

                                                        <div class="flex flex-col py-5  justify-center text-sm ">
                                                            <h6 class="font-bold text-center">
                                                                Transfer Pass
                                                                <input type="radio" name="payment"
                                                                    value="TRANSFER-MANDIRI">
                                                            </h6>


                                                            <div
                                                                class="barcode h-14 w-0 inline-block mt-4 relative left-auto">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="fourth" class="p-4">
                                    <div class="max-w-md w-full h-full mx-auto z-10 bg-blue-900 rounded-3xl">
                                        <div class="flex flex-col">
                                            <div class="bg-white relative drop-shadow-2xl  rounded-3xl p-4 m-4">
                                                <div class="flex-none sm:flex">
                                                    <div class=" relative h-32 w-32   sm:mb-0 mb-3 hidden">
                                                        <img src="https://tailwindcomponents.com/storage/avatars/njkIbPhyZCftc4g9XbMWwVsa7aGVPajYLRXhEeoo.jpg"
                                                            alt="aji" class=" w-32 h-32 object-cover rounded-2xl">
                                                        <a href="#"
                                                            class="absolute -right-2 bottom-2   -ml-3  text-white p-1 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div class="flex-auto justify-evenly">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center  my-1">
                                                                <span class="mr-3 rounded-full bg-white w-8 h-8">
                                                                    <img src="https://www.bca.co.id/-/media/images/bisnis/produk/merchant-bca/menu-qris.png"
                                                                        class="h-8 p-1">
                                                                </span>
                                                                <h2 class="font-medium">QRIS</h2>
                                                            </div>
                                                            <div class="ml-auto text-blue-800">A380</div>
                                                        </div>
                                                        <div class=" border-dashed border-b-2 my-5"></div>
                                                        <div class="flex items-center">
                                                            <div class="flex flex-col">
                                                                <div class="flex-auto text-xs text-gray-400 my-1">
                                                                    <span class="mr-1 ">MO</span><span>19 22</span>
                                                                </div>
                                                                <div
                                                                    class="w-full flex-none text-lg text-blue-800 font-bold leading-none">
                                                                    IND</div>
                                                                <div class="text-xs">Jambi</div>

                                                            </div>
                                                            <div class="flex flex-col mx-auto">
                                                                <img src="https://1.bp.blogspot.com/-_aXTEL0Y66A/YI5zRDoUvnI/AAAAAAAAE4U/X9Z0En02MtQbVkYEiTPIDjOF9aSalKtagCLcBGAsYHQ/s1600/Logo%2BQRIS.png"
                                                                    class="w-32 p-1 rounded-xl">

                                                            </div>
                                                            <div class="flex flex-col ">
                                                                <div class="flex-auto text-xs text-gray-400 my-1">
                                                                    <span class="mr-1">MO</span><span>19 22</span>
                                                                </div>
                                                                <div
                                                                    class="w-full flex-none text-lg text-blue-800 font-bold leading-none">
                                                                    IND</div>
                                                                <div class="text-xs">Jakarta</div>

                                                            </div>
                                                        </div>
                                                        <div class=" border-dashed border-b-2 my-5 pt-5">
                                                            <div
                                                                class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2">
                                                            </div>
                                                            <div
                                                                class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2">
                                                            </div>
                                                        </div>
                                                        <div class="flex items-center mb-5 p-5 text-sm">
                                                            <div class="flex flex-col">
                                                                <img src="http://assets.kompasiana.com/statics/crawl/555dd0b50423bdca548b4567.png"
                                                                    alt="">

                                                            </div>

                                                        </div>


                                                        <div class=" border-dashed border-b-2 my-5 pt-5">
                                                            <div
                                                                class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2">
                                                            </div>
                                                            <div
                                                                class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2">
                                                            </div>
                                                        </div>
                                                        <div class="flex items-center px-5 pt-3 text-sm">
                                                            <div class="flex flex-col">
                                                                <span class="">Pengirim</span>
                                                                <div class="font-semibold">{{Auth::user()->name}}</div>

                                                            </div>
                                                            <div class="flex flex-col mx-auto">
                                                                <span class="">Type</span>
                                                                <div class="font-semibold">Transfer</div>

                                                            </div>
                                                            <div class="flex flex-col">
                                                                <span class="">Hari</span>
                                                                <div class="font-semibold">{{$date}}</div>

                                                            </div>
                                                        </div>
                                                        <div class="flex flex-col py-5  justify-center text-sm ">
                                                            <h6 class="font-bold text-center">
                                                                Qris Pass
                                                                <input type="radio" name="payment"
                                                                    value="TRANSFER-QRIS">
                                                            </h6>


                                                            <div
                                                                class="barcode h-14 w-0 inline-block mt-4 relative left-auto">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="five" class="p-4">
                                    <div class="max-w-md w-full h-full mx-auto z-10 bg-blue-900 rounded-3xl">
                                        <div class="flex flex-col">
                                            <div class="bg-white relative drop-shadow-2xl  rounded-3xl p-4 m-4">
                                                <div class="flex-none sm:flex">
                                                    <div class=" relative h-32 w-32   sm:mb-0 mb-3 hidden">
                                                        <img src="https://tailwindcomponents.com/storage/avatars/njkIbPhyZCftc4g9XbMWwVsa7aGVPajYLRXhEeoo.jpg"
                                                            alt="aji" class=" w-32 h-32 object-cover rounded-2xl">
                                                        <a href="#"
                                                            class="absolute -right-2 bottom-2   -ml-3  text-white p-1 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" class="h-4 w-4">
                                                                <path
                                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div class="flex-auto justify-evenly">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center  my-1">
                                                                <span class="mr-3 rounded-full bg-white w-8 h-8">
                                                                    <img src="{{asset('./admin/assets/images/dewatalogo.PNG')}}"
                                                                        class="h-8 p-1">
                                                                </span>
                                                                <h2 class="font-medium">Dewata
                                                                    Store Location</h2>
                                                            </div>
                                                            <div class="ml-auto text-blue-800">
                                                                A380</div>
                                                        </div>
                                                        <div class=" border-dashed border-b-2 my-5">
                                                        </div>
                                                        <div class="flex items-center">
                                                            <div class="flex flex-col">
                                                                <div class="flex-auto text-xs text-gray-400 my-1">
                                                                    <span class="mr-1 ">MO</span><span>19
                                                                        22</span>
                                                                </div>
                                                                <div
                                                                    class="w-full flex-none text-lg text-blue-800 font-bold leading-none">
                                                                    IND</div>
                                                                <div class="text-xs">Jambi</div>

                                                            </div>
                                                            <div class="flex flex-col mx-auto">
                                                                <img src="{{asset('./admin/assets/images/dewatalogo.PNG')}}"
                                                                    class="w-20 p-1">

                                                            </div>
                                                            <div class="flex flex-col ">
                                                                <div class="flex-auto text-xs text-gray-400 my-1">
                                                                    <span class="mr-1">MO</span><span>19
                                                                        22</span>
                                                                </div>
                                                                <div
                                                                    class="w-full flex-none text-lg text-blue-800 font-bold leading-none">
                                                                    IND</div>
                                                                <div class="text-xs">Jakarta
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class=" border-dashed border-b-2 my-5 pt-5">
                                                            <div
                                                                class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2">
                                                            </div>
                                                            <div
                                                                class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2">
                                                            </div>
                                                        </div>
                                                        <div class="flex items-center mb-5 p-5 text-sm">
                                                            <div class="flex flex-col">
                                                                <div class="mapouter">
                                                                    <div class="gmap_canvas">
                                                                        <iframe width="270" height="250"
                                                                            id="gmap_canvas"
                                                                            src="https://maps.google.com/maps?q=Dewata%20Vape%20Store%20Jambi&t=&z=15&ie=UTF8&iwloc=&output=embed"
                                                                            frameborder="0" scrolling="no"
                                                                            marginheight="0" marginwidth="0"></iframe><a
                                                                            href="https://fmovies-online.net"></a><br>
                                                                        <style>
                                                                            .mapouter {
                                                                                position: relative;
                                                                                text-align: right;
                                                                                height: 250px;
                                                                                width: 270px;
                                                                            }

                                                                        </style><a
                                                                            href="https://www.embedgooglemap.net">google
                                                                            maps website
                                                                            embed</a>
                                                                        <style>
                                                                            .gmap_canvas {
                                                                                overflow: hidden;
                                                                                background: none !important;
                                                                                height: 250px;
                                                                                width: 270px;
                                                                            }

                                                                        </style>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class=" border-dashed border-b-2 my-5 pt-5">
                                                            <div
                                                                class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2">
                                                            </div>
                                                            <div
                                                                class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2">
                                                            </div>
                                                        </div>
                                                        <div class="flex items-center px-5 pt-3 text-sm">
                                                            <div class="flex flex-col">
                                                                <span class="">Pengunjung</span>
                                                                <div class="font-semibold">
                                                                    {{Auth::user()->name}}</div>

                                                            </div>
                                                            <div class="flex flex-col mx-auto">
                                                                <span class="">Type</span>
                                                                <div class="font-semibold">Cod
                                                                </div>

                                                            </div>
                                                            <div class="flex flex-col">
                                                                <span class="">Hari</span>
                                                                <div class="font-semibold">
                                                                    {{$date}}</div>

                                                            </div>
                                                        </div>
                                                        <div class="flex flex-col py-5  justify-center text-sm ">
                                                            <h6 class="font-bold text-center">
                                                                Cod Pass
                                                                <input type="radio" name="payment" value="COD">
                                                            </h6>


                                                            <div
                                                                class="barcode h-14 w-0 inline-block mt-4 relative left-auto">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit"
                                class="bg-blue-400 text-white hover:bg-black hover:text-white focus:outline-none w-full py-3 rounded-full text-lg focus:text-black transition-all duration-200 px-6">
                                Checkout Now
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: COMPLETE YOUR ROOM -->
<script>
    let tabsContainer = document.querySelector("#tabs");

    let tabTogglers = tabsContainer.querySelectorAll("a");
    console.log(tabTogglers);

    tabTogglers.forEach(function (toggler) {
        toggler.addEventListener("click", function (e) {
            e.preventDefault();

            let tabName = this.getAttribute("href");

            let tabContents = document.querySelector("#tab-contents");

            for (let i = 0; i < tabContents.children.length; i++) {

                tabTogglers[i].parentElement.classList.remove("border-blue-800", "border-b", "-mb-px",
                    "opacity-100");
                tabContents.children[i].classList.remove("hidden");
                if ("#" + tabContents.children[i].id === tabName) {
                    continue;
                }
                tabContents.children[i].classList.add("hidden");

            }
            e.target.parentElement.classList.add("border-blue-800", "border-b-4", "-mb-px",
                "opacity-100");
        });
    });

    document.getElementById("default-tab").click();

</script>
<!-- START: ASIDE MENU -->

@endsection
