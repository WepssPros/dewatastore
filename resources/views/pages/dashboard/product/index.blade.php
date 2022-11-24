@extends('layouts.admin')
@section('admin-content')
<div class="d-flex justify-content-between align-items-center gap-3">
    <h4 class="title-section-content">Exclusive Product Dari Dewata</h4>
    <a href="{{route('dashboard.product.create')}}" class="btn-link">+ Buat Product Baru</a>

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
                <button type="submit " class="btn btn-fav" aria-label="Button Favorite" onclick="handleFavorite(this)">
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
    Data Produk Tidak ada..
    @endforelse

</div>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <table class="items-left bg-transparent w-full border-collapse  display responsive nowrap cell-border "
                    id="crudTable">
                    <thead>
                        <tr>
                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                #
                            </th>
                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                Nama
                            </th>
                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                Kategori
                            </th>
                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                Deskripsi
                            </th>
                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                stock
                            </th>
                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                tags
                            </th>
                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                Price
                            </th>
                            <th
                                class="text-center px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold ">
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
                data: 'id',
                name: 'id',
                width: '5%'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'category.name',
                name: 'category.name'
            },
            {
                data: 'description',
                name: 'description',
                orderable: false,
                searchable: false,
            },
            {
                data: 'stock',
                name: 'stock',
            },
            {
                data: 'tags',
                name: 'tags',
                orderable: false,
                searchable: false,
            },
            {
                data: 'price',
                name: 'price',
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
