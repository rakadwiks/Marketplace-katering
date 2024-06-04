@extends('layouts.master')
@section('title')
Belanja di Katering
@endsection
@section('content')
<section class="breadcrumb-section">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active" aria-current="page">Belanja</li>
            </ol>
        </nav>
    </div>
</section>

<section class="product mt-5 mb-5 ">
    <div class="d-flex justify-content-center pt-5 mb-2">
        <div class="col-lg-3 col-md-4">
            <form class="d-flex" role="search">
                <input class="form-control form-control-sm me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-sm btn-outline-orange" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="d-flex flex-wrap justify-content-center">
        <div class="flex-shrink-0 ms-1">
            <div class="card  mt-3 mb-3" style="width: 18rem;">
                <img src="{{asset('./img/content/1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sate Padang</h5>
                    <h5 class="card-total">Rp 20.000</h5>
                    <div class="d-flex">
                        <small class="text-muted  flex-shirnk-0"><span class="bi bi-geo-alt-fill">
                                Bogor</span></small>
                        <div class=" text-muted-border-right flex-shirnk-0 ms-1"></div>
                        <small class="text-muted flex-shirnk-0 ms-1"><span class="bi bi-shop">
                                Mamah Ina</span></small>
                    </div>
                    <p class="card-text" dir="auto">Sate Padang adalah variasi sate yang berasal dari Padang,
                        Sumatera
                        Barat,
                        Indonesia.
                    </p>
                    <a href="#" class="btn btn-fill">Pesan</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection