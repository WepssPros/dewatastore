@extends('layouts.frontend')
@section('user-content')
<section class="h-full w-full border-box transition-all duration-500 linear relative" style="
				background-image: linear-gradient(
					to bottom,
					rgba(39, 59, 86, 1),
					rgba(36, 49, 66, 1)
				);
			">
    <div class="header-3-1" style="font-family: 'Poppins', sans-serif">
        <!-- Hero -->
        <div>
            <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
                <!-- Left Column -->
                <div
                    class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
                    <h1 class="title-font sm:text-5xl lg:text-6xl text-4xl mb-5 font-semibold">
                        Cara Baru Berbelanja Part Vape Favoritmu <br class="lg:block hidden" />
                        <span style="color: #7166ff"> Dewata </span>
                        Vape Store
                    </h1>
                    <p class="caption-text text-base font-light leading-6 tracking-wide mb-12 lg:mb-20">
                        Kami Menyediakan Seluruh Kebutuhan Vape Kamu<br class="sm:block hidden" />
                        Jangan khawatir karena kami di sini untuk membantu Anda
                    </p>
                    <div
                        class="md:flex contents items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2 space-x-0">
                        <button
                            class="btn-fill inline-flex font-semibold text-white text-base py-4 px-8 rounded-full mb-4 lg:mb-0 md:mb-0 focus:outline-none">
                            Get Started
                        </button>
                        <button
                            class="btn-outline font-normal text-base py-4 px-6 rounded-full focus:outline-none bg-transparent">
                            <div class="flex items-center">
                                <svg class="mr-2.5" width="27" height="27" viewBox="0 0 27 27" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.1793 13.7935L11.9166 10.9515V16.6355L16.1793 13.7935ZM18.1673 14.0708L11.1013 18.7815C11.0511 18.8149 10.9928 18.834 10.9326 18.8369C10.8723 18.8398 10.8125 18.8263 10.7593 18.7978C10.7062 18.7694 10.6617 18.727 10.6307 18.6753C10.5997 18.6236 10.5833 18.5644 10.5833 18.5041V9.0828C10.5833 9.0225 10.5997 8.96334 10.6307 8.91162C10.6617 8.8599 10.7062 8.81756 10.7593 8.7891C10.8125 8.76064 10.8723 8.74713 10.9326 8.75001C10.9928 8.7529 11.0511 8.77206 11.1013 8.80546L18.1673 13.5161C18.213 13.5466 18.2504 13.5878 18.2763 13.6362C18.3022 13.6846 18.3157 13.7386 18.3157 13.7935C18.3157 13.8483 18.3022 13.9024 18.2763 13.9507C18.2504 13.9991 18.213 14.0404 18.1673 14.0708Z"
                                        fill="#5D6E86" />
                                    <rect x="0.75" y="1.29346" width="25" height="25" rx="12.5" stroke="#5D6E86" />
                                </svg>
                                Watch the video
                            </div>
                        </button>
                    </div>
                </div>
                <!-- Right Column -->
                <div class="w-full lg:w-1/2 text-center lg:justify-start justify-center flex pr-0">
                    <img class="lg:absolute lg:block hidden bottom-0 right-0 top-0"
                        src="{{asset('./frontend/images/content/i1.png')}}" width="700" alt="" />

                </div>
            </div>
        </div>
    </div>
</section>
<!-- SECTION RIGHT TO LEFT  -->
<section class="h-full w-full border-box transition-all duration-500 linear relative" style="
				background-image: linear-gradient(
					to bottom,
					rgba(36, 49, 66, 1),
					rgba(36, 49, 66, 1)
				);
			">
    <div class="header-3-1" style="font-family: 'Poppins', sans-serif">
        <!-- Hero -->
        <div>
            <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
                <!-- Left Column -->
                <div
                    class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
                    <img class="lg:absolute lg:block hidden bottom-0 left-0 "
                        src="{{asset('./frontend/images/content/i2.png')}}" width="700" height="500" alt="" />

                </div>


                <div
                    class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
                    <h1 class="title-font sm:text-5xl lg:text-5xl text-4xl mb-5 font-semibold text-left">
                        Kami Juga Menyediakan<br class="lg:block hidden" />
                        <span style="color: #7166ff">Brand-Brand Dan Ternama</span>
                        Explore Vape Kesukaanmu
                    </h1>
                    <p class="caption-text text-base font-light leading-6 tracking-wide mb-12 lg:mb-20 text-left">
                        Kami tau susah nya mencari part vape kesukaan kamu<br class="sm:block hidden" />
                        jadi jangan khawatir kami siap melayani kamu!
                    </p>
                    <div
                        class="md:flex contents items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2 space-x-0">
                        <button
                            class="btn-fill inline-flex font-semibold text-white text-base py-4 px-8 rounded-full mb-4 lg:mb-0 md:mb-0 focus:outline-none">
                            Get Started
                        </button>
                        <button
                            class="btn-outline font-normal text-base py-4 px-6 rounded-full focus:outline-none bg-transparent">
                            <div class="flex items-center">
                                <svg class="mr-2.5" width="27" height="27" viewBox="0 0 27 27" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.1793 13.7935L11.9166 10.9515V16.6355L16.1793 13.7935ZM18.1673 14.0708L11.1013 18.7815C11.0511 18.8149 10.9928 18.834 10.9326 18.8369C10.8723 18.8398 10.8125 18.8263 10.7593 18.7978C10.7062 18.7694 10.6617 18.727 10.6307 18.6753C10.5997 18.6236 10.5833 18.5644 10.5833 18.5041V9.0828C10.5833 9.0225 10.5997 8.96334 10.6307 8.91162C10.6617 8.8599 10.7062 8.81756 10.7593 8.7891C10.8125 8.76064 10.8723 8.74713 10.9326 8.75001C10.9928 8.7529 11.0511 8.77206 11.1013 8.80546L18.1673 13.5161C18.213 13.5466 18.2504 13.5878 18.2763 13.6362C18.3022 13.6846 18.3157 13.7386 18.3157 13.7935C18.3157 13.8483 18.3022 13.9024 18.2763 13.9507C18.2504 13.9991 18.213 14.0404 18.1673 14.0708Z"
                                        fill="#5D6E86" />
                                    <rect x="0.75" y="1.29346" width="25" height="25" rx="12.5" stroke="#5D6E86" />
                                </svg>
                                Watch the video
                            </div>
                        </button>
                    </div>
                </div>
                <!-- Right Column -->

            </div>
        </div>
    </div>
</section>
<!-- SECTION LEFT TO RIGHTT -->
<section class="h-full w-full border-box transition-all duration-500 linear relative" style="
				background-image: linear-gradient(
					to bottom,
					rgba(36, 49, 66, 1),
					rgba(36, 49, 66, 1)
				);
			">
    <div class="header-3-1" style="font-family: 'Poppins', sans-serif">

        <!-- Hero -->
        <div>
            <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
                <!-- Left Column -->
                <div
                    class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
                    <h1 class="title-font sm:text-5xl lg:text-6xl text-4xl mb-5 font-semibold">
                        Ayo Mulai Dari <br class="lg:block hidden" />
                        <span style="color: #7166ff"> Dewata Vape Store</span> <br class="lg:block hidden" />
                        Memberikan Kualitas Terbaik
                    </h1>
                    <p class="caption-text text-base font-light leading-6 tracking-wide mb-12 lg:mb-20">
                        Semua Kebutuhan Kamu Akan Kami Berikan<br class="sm:block hidden" />
                        Kepuasan Pelanggan Adalah Moto Kami
                    </p>
                    <div
                        class="md:flex contents items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2 space-x-0">
                        <button
                            class="btn-fill inline-flex font-semibold text-white text-base py-4 px-8 rounded-full mb-4 lg:mb-0 md:mb-0 focus:outline-none">
                            Get Started
                        </button>
                        <button
                            class="btn-outline font-normal text-base py-4 px-6 rounded-full focus:outline-none bg-transparent">
                            <div class="flex items-center">
                                <svg class="mr-2.5" width="27" height="27" viewBox="0 0 27 27" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.1793 13.7935L11.9166 10.9515V16.6355L16.1793 13.7935ZM18.1673 14.0708L11.1013 18.7815C11.0511 18.8149 10.9928 18.834 10.9326 18.8369C10.8723 18.8398 10.8125 18.8263 10.7593 18.7978C10.7062 18.7694 10.6617 18.727 10.6307 18.6753C10.5997 18.6236 10.5833 18.5644 10.5833 18.5041V9.0828C10.5833 9.0225 10.5997 8.96334 10.6307 8.91162C10.6617 8.8599 10.7062 8.81756 10.7593 8.7891C10.8125 8.76064 10.8723 8.74713 10.9326 8.75001C10.9928 8.7529 11.0511 8.77206 11.1013 8.80546L18.1673 13.5161C18.213 13.5466 18.2504 13.5878 18.2763 13.6362C18.3022 13.6846 18.3157 13.7386 18.3157 13.7935C18.3157 13.8483 18.3022 13.9024 18.2763 13.9507C18.2504 13.9991 18.213 14.0404 18.1673 14.0708Z"
                                        fill="#5D6E86" />
                                    <rect x="0.75" y="1.29346" width="25" height="25" rx="12.5" stroke="#5D6E86" />
                                </svg>
                                Watch the video
                            </div>
                        </button>
                    </div>
                </div>
                <!-- Right Column -->
                <div class="w-full lg:w-1/2 text-center lg:justify-start justify-center flex pr-0">
                    <img class="lg:absolute lg:block hidden bottom-0 right-0"
                        src="{{asset('./frontend/images/content/i3.png')}}" width="700" height="500" alt="" />


                </div>
            </div>
        </div>
    </div>
</section>
<section class="h-full w-full border-box transition-all duration-500 linear relative" style="
				background-image: linear-gradient(
					to bottom,
					rgba(36, 49, 66, 1),
					rgba(36, 49, 66, 1)
				);
			">
    <div class="flex items-center justify-center w-full h-full py-24 sm:py-8 px-4">
        <div class="w-full relative flex items-center justify-center">
            <button aria-label="slide backward"
                class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer"
                id="prev">
                <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden rounded-xl">
                <div id="slider"
                    class="rounded-xl h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                    @foreach ($products as $item)
                    <a href="{{ route('details', $item->slug) }}">
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto rounded-xl ">
                            <img src="{{ $item->galleries()->exists() ? ($item->galleries->first()->url) : 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mN88B8AAsUB4ZtvXtIAAAAASUVORK5CYII=' }}"
                                alt="black chair and white table"
                                class="object-cover object-center w-96 h-80 rounded-xl" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                    {{$item->name}}
                                </h2>
                                <h2
                                    class="lg:text-xl pt-2 leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                    {{$item->category->name}}
                                </h2>
                                <h2
                                    class="lg:text-xl font-bold  pt-2 leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                    Rp.{{number_format($item->price)}}
                                </h2>
                                <div class="flex h-full items-end pb-20 ">
                                    <h3
                                        class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                        {{$item->name}}

                                    </h3>

                                </div>
                            </div>
                        </div>
                    </a>

                    @endforeach
                </div>
            </div>
            <button aria-label="slide forward"
                class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400"
                id="next">
                <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>
</section>
<section>
    <div class="container mx-auto py-9 md:py-12 px-4 md:px-6 rounded-xl">
        <div
            class="flex items-strech justify-center flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6 lg:space-x-8">
            <div
                class="rounded-xl flex flex-col md:flex-row items-strech justify-between bg-gray-50 dark:bg-gray-800 py-6 px-6 md:py-12 lg:px-12 md:w-8/12 lg:w-7/12 xl:w-8/12 2xl:w-9/12">
                <div class="flex flex-col justify-center md:w-1/2">
                    <h1 class="text-3xl lg:text-3xl font-semibold text-gray-800 dark:text-white">Best Deal Beli Di
                        Website Kita Gratis 3 Liquid 110ml Bebas Pilih Liquid Favoritmu !</h1>
                    <p class="text-base lg:text-xl text-gray-800 dark:text-white mt-2">Save upto <span
                            class="font-bold">70%</span></p>
                </div>
                <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center md:justify-end">
                    <img src="{{asset('./frontend/images/content/i4.png')}}" alt="" class="" />
                </div>
            </div>
            <div
                class="md:w-4/12 lg:w-5/12 xl:w-4/12 2xl:w-3/12 bg-gray-50 dark:bg-gray-800 py-6 px-6 md:py-0 md:px-4 lg:px-6 flex flex-col justify-center relative">
                <div class="flex flex-col justify-center top-0">
                    <h1 class="text-3xl lg:text-3xl font-semibold text-gray-800 dark:text-white">Free Change Coil and
                        Re-setup RDA</h1>
                    <p class="text-base lg:text-xl text-gray-800 dark:text-white">Save Upto <span
                            class="font-bold">50%</span></p>
                </div>
                <div class="flex justify-end md:absolute md:bottom-4 md:right-4 lg:bottom-0 lg:right-0">
                    <img src="{{asset('./frontend/images/content/i5.png')}}" alt=""
                        class="md:w-20 md:h-20 lg:w-52 lg:h-52" />
                </div>
            </div>
        </div>
    </div>
</section>
<section class="h-full w-full border-box transition-all duration-500 linear relative" style="
				background-image: linear-gradient(
					to bottom,
					rgba(36, 49, 66, 1),
					rgba(36, 49, 66, 1)
				);
			">
    <div class="header-3-1" style="font-family: 'Poppins', sans-serif">

        <div class="mx-auto container px-6 xl:px-0 py-12">
            <div class="flex flex-col">
                <div class="flex flex-col justify-center">
                    <div class="relative">
                        <img class="hidden sm:block w-full rounded-xl"
                            src="{{asset('./frontend/images/content/bg-1.png')}}" alt="sofa" />
                        <img class="sm:hidden w-full rounded-xl" src="{{asset('./frontend/images/content/bg-1.png')}}"
                            alt="sofa" />
                        <div
                            class="absolute sm:bottom-8 bottom-4 pr-10 sm:pr-0 left-4 sm:left-8 flex justify-start items-start">
                            <p class="text-lg sm:text-3xl font-semibold leading-9 text-white">Produk - Produk Populer
                                Dewata Store.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-10 grid lg:grid-cols-2 gap-x-8 gap-y-8 items-center ">
                    @forelse ($productspopuler as $item)
                    <div class="rounded-xl group group-hover:bg-opacity-60 transition duration-500 relative bg-gray-50
                        dark:bg-gray-800 dark:hover:bg-gray-700 sm:p-28 py-36 px-10 flex justify-center items-center">
                        <img class="group-hover:opacity-60 transition duration-500"
                            src="{{ $item->galleries()->exists() ? ($item->galleries->first()->url) : 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mN88B8AAsUB4ZtvXtIAAAAASUVORK5CYII=' }}"
                            alt="sofa-2" />
                        <div
                            class="absolute sm:top-8 top-4 left-4 sm:left-8 flex justify-start items-start flex-col space-y-2">
                            <div>
                                <p
                                    class="group-hover:opacity-60 transition duration-500 text-xl leading-5 text-gray-600 dark:text-white">
                                    {{$item->name}}</p>
                            </div>
                            <div>
                                <p
                                    class="group-hover:opacity-60 transition duration-500 text-xl leading-5 text-gray-600 dark:text-white">
                                    {{$item->category->name}}</p>
                            </div>
                            <div>
                                <p
                                    class="group-hover:opacity-60 transition duration-500 text-xl leading-5 text-gray-600 dark:text-white">
                                    Stock : {{number_format($item->stock)}}</p>
                            </div>
                            <div>
                                <p
                                    class="group-hover:opacity-60 transition duration-500 text-xl font-semibold leading-5 text-gray-800 dark:text-white">
                                    Rp.{{number_format($item->price)}}</p>
                            </div>
                        </div>
                        <div
                            class="group-hover:opacity-60 transition duration-500 absolute bottom-8 right-8 flex justify-start items-start flex-row space-x-2">
                            <button
                                class="bg-white border rounded-full focus:bg-gray-800 border-gray-600 p-1.5"></button>
                            <button
                                class="bg-white border rounded-full focus:bg-gray-800 border-gray-600 p-1.5"></button>
                        </div>
                        <div
                            class="flex flex-col bottom-8 left-8 space-y-4 absolute opacity-0 group-hover:opacity-100 transition duration-500">
                            <form action="{{ route('cart-add', $item->id) }}" method="POST">
                                @csrf
                                <input type="number" name="quantity" value="1" hidden>
                                <button type="submit">
                                    <img class="dark:hidden"
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1.svg"
                                        alt="add">
                                    <img class="hidden dark:block"
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1dark.svg"
                                        alt="add">
                                </button>
                            </form>
                            <form action="{{route('details', $item->slug)}}" method="GET">
                                <button>
                                    <img class="dark:hidden"
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2.svg"
                                        alt="view">
                                    <img class="hidden dark:block"
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2dark.svg"
                                        alt="view">
                                </button>

                            </form>


                        </div>
                    </div>
                    @empty
                    Tidak ada Product Populer..
                    @endforelse


                </div>
                <div class="flex justify-end items-end mt-12">
                    <div class="flex flex-row items-center justify-center space-x-8">
                        <button
                            class="text-base leading-none text-gray-800 dark:text-white border-b-2 border-transparent focus:outline-none focus:border-gray-800">
                            <p>1</p>
                        </button>
                        <button
                            class="text-base leading-none text-gray-800 dark:text-white border-b-2 border-transparent focus:outline-none focus:border-gray-800">
                            <p>2</p>
                        </button>
                        <button
                            class="text-base leading-none text-gray-800 dark:text-white border-b-2 border-transparent focus:outline-none focus:border-gray-800">
                            <p>3</p>
                        </button>
                        <button class="flex justify-center items-center">
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg4.svg" alt="next">
                            <img class="hidden dark:block"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg4dark.svg"
                                alt="next">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>



<script>
    let defaultTransform = 0;

    function goNext() {
        defaultTransform = defaultTransform - 398;
        var slider = document.getElementById("slider");
        if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
        slider.style.transform = "translateX(" + defaultTransform + "px)";
    }
    next.addEventListener("click", goNext);

    function goPrev() {
        var slider = document.getElementById("slider");
        if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
        else defaultTransform = defaultTransform + 398;
        slider.style.transform = "translateX(" + defaultTransform + "px)";
    }
    prev.addEventListener("click", goPrev);

</script>
@endsection
