@extends('layouts.master')
@section('title')
Marketplace Katering
@endsection
@section('content')
<section class="header">
    <div class="d-flex justify-content-center">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{asset('/img/Header/3.jpg')}}" class="w-100 d-block" alt="First slide" />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Title</h3>
                        <p>Description</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/img/Header/3.jpg')}}" class="w-100 d-block" alt="Second slide" />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Title</h3>
                        <p>Description</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<section class="product mt-5 mb-5">
    <div class="d-flex justify-content-center pt-2 mb-2">
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