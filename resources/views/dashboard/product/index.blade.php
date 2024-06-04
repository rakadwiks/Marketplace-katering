@extends('layouts.master-dashboard')
@section('title')
Dashboard
@endsection
@section('content')
<section class="dashboard">
    <section class="header">
        <div class="container">
            <div class="d-flex">
                <div class="col-lg-3 col-md-4">
                    <a href="{{ route('product.create') }}" class="btn btn-primary mb-3">+ Produk </a>
                </div>
            </div>
        </div>
    </section>
    <section class="product mt-5 mb-5 ">
        <div class="d-flex justify-content-center pt-5 mb-2">
        </div>
        @foreach ($product as $s)

        <div class="d-flex flex-wrap justify-content-center">
            <div class="flex-shrink-0 ms-1">
                <div class="card  mt-3 mb-3" style="width: 18rem;">
                    <img src="{{asset('./img/content/1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $s->name}}</h5>
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

        @endforeach
    </section>

</section>

@endsection