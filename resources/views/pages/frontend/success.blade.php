@extends('layouts.frontend')
@section('user-content')
<!-- START: BREADCRUMB -->
<section class="bg-gray-100 py-8 px-4">
    <div class="container mx-auto">
        <ul class="breadcrumb">
            <a href="{{ route('index') }}">Home</a>
            &raquo
            <a href="#" aria-label="current-page">Success Checkout</a>
        </ul>
    </div>
</section>
<!-- END: BREADCRUMB -->

<!-- START: CONGRATS -->
<section class="bg-white">
    <div class="container mx-auto min-h-screen">
        <div class="flex flex-col items-center justify-center">
            <div class="w-full md:w-4/12 text-center">
                <img src="{{asset('./frontend/images/content/illustration-success.png')}}"
                    alt="congrats illustration" />
                <h2 class="text-3xl font-semibold mb-6">Ah yes it’s success!</h2>
                <p class="text-lg mb-12">
                    Pesanan Kamu Sedang Kami Siapkan Silahkan Tunggu
                </p>
                <a href="{{ route('index') }}"
                    class="text-white bg-blue-400 focus:outline-none w-full py-3 rounded-full text-lg focus:text-white transition-all duration-200 px-8 cursor-pointer">
                    Back to Shop
                </a>
            </div>
        </div>
    </div>
</section>
<!-- END: CONGRATS -->
@endsection
