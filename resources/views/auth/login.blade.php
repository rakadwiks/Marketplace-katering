@extends("layouts.auth.auth")

@section("content")
<div class="page-content page-auth">
    <div class="section-store-auth" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center justify-content-center row-login">
                <div class="col-lg-4">
                    <div class="card card-login">
                        <div class="card-body">
                            <h4 class="text-center mb-4"><b>Belanja kebutuhan utama, </b> menjadi lebih mudah</h4>
                            <form method="POST" action="{{ route(" login") }}" class="mt-3">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input id="email" type="email" class="form-control @error(" email") is-invalid
                                        @enderror" name="email" value="{{ old(" email") }}" required
                                        autocomplete="email" autofocus>
                                    @error("email")
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control @error(" password")
                                        is-invalid @enderror" name="password" required autocomplete="current-password"
                                        class="form-control">
                                    @error("password")
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-login btn-block mt-4">Log In
                                </button>
                                <a href="{{ route(" register") }}" class="btn btn-signup btn-block mt-4">Register</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection