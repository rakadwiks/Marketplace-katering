<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>Verifikasi E-mail</title>
    <!-- style -->
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>

<body>
    <!-- navbar -->

    <nav class="navbar navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
        <div class="container justify-content-center">
            <div class="row">
                <div class="img-brand">
                    <img src="{{ asset('/images/RDKS.svg') }}" alt="Logo" /> | <span style="font-size: 14px">Verify
                        Your Email Address</span>
                </div>
            </div>
        </div>
    </nav>
    <!-- Page Content -->
    <div class="page-content page-home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="col-lg-12 text-center">
                        <img src="{{asset ('/images/bag-success.svg')}}" class="mb-4" alt="" />
                    </div>
                    <div class="card text-center">
                        <div class="card-body">
                            @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                            @endif

                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }},
                            <form class="mt-3" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-sm align-baseline">{{ __('Resend')
                                    }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    @include('includes.footer')
</body>
<!-- script -->
@stack('before-script')

@include('includes.script')

@stack('after-script')

</html>