@extends('layouts.frontend')
@section('user-content')
<div class="2xl:container 2xl:mx-auto bg-white rounded-xl py-10 px-10">
    <div class="bg-gray-50 dark:bg-gray-900 text-center lg:py-10 md:py-8 py-6">
        <p
            class="w-10/12 mx-auto md:w-full font-semibold lg:text-4xl text-3xl lg:leading-9 md:leading-7 dark:text-white leading-9 text-center text-gray-800">
            DewataVape Collection</p>
    </div>
    <div class="py-6 lg:px-20 md:px-6 px-4">
        <p class="font-normal text-sm leading-3 text-gray-600 dark:text-gray-300">Home / Shop by Category / Vape</p>
        <hr class="w-full bg-gray-200 my-6" />
        <div
            class="grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 lg:gap-y-12 lg:gap-x-8 sm:gap-y-10 sm:gap-x-6 gap-y-6 lg:mt-12 mt-10">
            @forelse ($products as $item)
            <div>
                <div class="relative group">
                    <div
                        class="flex justify-center items-center opacity-0 bg-gradient-to-t from-gray-800 via-gray-800 to-opacity-30 group-hover:opacity-50 absolute top-0 left-0 h-full w-full">
                    </div>
                    <img class="w-full"
                        src="{{ $item->galleries()->exists() ? ($item->galleries->first()->url) : 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mN88B8AAsUB4ZtvXtIAAAAASUVORK5CYII=' }}"
                        alt="A girl wearing dark blue suit and posing" />
                    <div class="absolute bottom-0 p-8 w-full opacity-0 group-hover:opacity-100">

                        <form action="{{route('cart-add', $item->id)}}" method="POST">
                            @csrf
                            <input type="text" value="1" name="quantity" hidden>
                            <button
                                class="dark:bg-gray-800 dark:text-gray-300 font-medium text-base leading-4 text-gray-800 bg-white py-3 w-full">
                                Add to cart
                            </button>
                        </form>
                        <form action="{{route('details', $item->slug)}}" method="GET">
                            @csrf
                            <button
                                class="bg-transparent font-medium text-base leading-4 border-2 border-white py-3 w-full mt-2 text-white">
                                Quick
                                View
                            </button>
                        </form>

                    </div>
                </div>
                <p class="font-normal dark:text-white text-xl leading-5 text-gray-800 md:mt-6 mt-4">
                    {{$item->name}}
                </p>
                <p class="font-semibold dark:text-gray-300 text-xl leading-5 text-gray-800 mt-4">
                    {{number_format($item->price)}}</p>
                <p class="font-normal dark:text-gray-300 text-base leading-4 text-gray-600 mt-4">
                    Category {{$item->category->name}}</p>
                <p class="font-normal dark:text-gray-300 text-base leading-4 text-gray-600 mt-4">
                    Stock {{$item->stock}}</p>
            </div>
            @empty
            Product Tidak ada
            @endforelse
        </div>

        <div class="flex justify-center items-center">
            <button
                class="hover:bg-gray-700 dark:text-gray-300 focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 bg-gray-800 py-5 md:px-16 md:w-auto w-full lg:mt-28 md:mt-12 mt-10 text-white font-medium text-base leading-4">Load
                More</button>
        </div>
    </div>
</div>
@endsection
