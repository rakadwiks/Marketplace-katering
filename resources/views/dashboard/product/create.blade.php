@extends('layouts.master-dashboard')
@section('title')
Dashboard Produk
@endsection
@section('content')
<section class="dashboard">
    <div class="container">
        <div class="dashboard-heading">
            <h5 class="dashboard-title">Product</h5>
            <p class="dashboard-subtitle">Create New Product</p>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $e)
                        <li> {{ $e }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="card">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('product.index') }}" class="text-right"> <button
                                    class="btn btn-sm btn-primary mx-4 mt-3">
                                    Kembali
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Product</label>
                                        <input type="text" class="form-control" name="name" required />
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Harga Product</label>
                                        <input type="number" class="form-control" name="price" required />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Deskripsi Product</label>
                                        <textarea name="description" id="editor"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-right">
                                    <button type="submit" class="btn btn-success px-5">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>
@endsection