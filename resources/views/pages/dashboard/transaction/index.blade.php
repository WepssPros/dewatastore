@extends('layouts.admin')
@section('admin-content')
<div class="d-flex justify-content-between align-items-center gap-3">
    <h4 class="title-section-content">Exclusive Product Dari Dewata</h4>
    <a href="{{route('dashboard.product.create')}}" class="btn-link">+ Buat Product Baru</a>

</div>
<section class="d-flex flex-column gap-4 mb-2">
    <h4 class="title-section-content">Best Store In This Month</h4>
    <div class="d-flex gap-3 flex-wrap">
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
    {{ $transactions->onEachSide(10)->links() }}
</section>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <table class="items-center bg-transparent w-full border-collapse cell-border display responsive nowrap "
                    id="crudTable">
                    <thead>
                        <tr>
                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                No
                            </th>
                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                Nama Pelanggan
                            </th>
                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                Alamat Pelanggan
                            </th>
                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                Total Harga
                            </th>
                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                Pembayaran
                            </th>
                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                Status
                            </th>
                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                Action
                            </th>

                        </tr>
                    </thead>

                    <tbody class="text-left">
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
<script>
    const modalbg = document.getElementById('modal-bg');
    const modalSwitch = document.getElementById('modal-switch');
    const modalBox = document.getElementById('modal-box');
    const modalClose = document.getElementById('modal-close');
    modalbg.addEventListener("click", function () {
        modalBox.classList.add('hidden')
        modalbg.classList.add('hidden')
    });
    modalSwitch.addEventListener("click", function () {
        modalBox.classList.remove('hidden')
        modalbg.classList.remove('hidden')
    });
    modalClose.addEventListener("click", function () {
        modalBox.classList.remove('hidden')
        modalbg.classList.remove('hidden')
    });

</script>
<script>
    // AJAX DataTable
    var datatable = $('#crudTable').DataTable({
        ajax: {
            url: '{!! url()->current() !!}',
        },
        columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                width: '5%'
            },
            {
                data: 'user.name',
                name: 'user.name'
            },
            {
                data: 'address',
                name: 'address'
            },
            {
                data: 'total_price',
                name: 'total_price',
                orderable: false,
                searchable: false,
            },
            {
                data: 'payment',
                name: 'payment',
            },
            {
                data: 'status',
                name: 'status',
                orderable: false,
                searchable: false,
            },

            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false,
                width: '25%'
            },
        ],
    });

</script>
@endsection
