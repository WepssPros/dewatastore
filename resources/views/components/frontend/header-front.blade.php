<div class="d-flex justify-content-end m-4 d-block d-lg-none">
    <button data-bs-dismiss="offcanvas" data-bs-target=".sidebar" class="btn p-0 border-0 fs-4"
        aria-label="Button Close">
        <i class="fas fa-close"></i>
    </button>
</div>
<div class="logo-brand mt-lg-5">
    <img src="{{asset('./admin/assets/images/dewatalogo.PNG')}}" alt="Logo Shoso" width="52" height="50" />
    <div>
        <h6 class="title-store">Dewata Store</h6>
        <p class="tagline-store">Halo {{Auth::user()->name}}</p>
    </div>
</div>
