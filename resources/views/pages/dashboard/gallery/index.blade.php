@extends('layouts.admin')
@section('admin-content')

<div class="d-flex justify-content-between align-items-center gap-3">
    <h4 class="title-section-content">Exclusive Product Dari Dewata</h4>
    <a href="{{ route('dashboard.product.gallery.create', $product->id) }}" class="btn-link">
        + Tambah Gallery Product
    </a>

</div>
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    Product &raquo; {{ $product->name }} &raquo; Gallery
</h2>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <table class="items-center bg-transparent w-full border-collapse cell-border " id="crudTable">
                    <thead>
                        <tr>
                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                #
                            </th>
                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                Photo
                            </th>
                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                Featured
                            </th>
                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                Action
                            </th>

                        </tr>
                    </thead>

                    <tbody class="text-center">
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
                data: 'id',
                name: 'id',
                width: '5%'
            },
            {
                data: 'url',
                name: 'url'
            },
            {
                data: 'is_featured',
                name: 'is_featured'
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
