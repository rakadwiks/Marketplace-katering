@extends('layouts.success')
@section('title')
Register Success
@endsection

@section('content')
<div class="page-content page-success">
    <section class="section-success" data-aos="zoom-in">
        <div class="container">
            <div class="row align-item-center row-login justify-content-center">
                <div class="col-lg-6 text-center">
                    <img src="{{asset ('/images/bag-success.svg')}}" class="mb-4" alt="" />
                    <h2>Welcome to Store</h2>
                    <p>
                        Kamu sudah berhasil terdaftar <br />
                        bersama kami. Let’s grow up now.
                    </p>
                    <a href="{{route('dashboard')}}" class="btn btn-login w-50 mt-4">My Dashboard</a>
                    <a href="{{route('home')}}" class="btn btn-signup w-50 mt-4">Go To Shopping</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection