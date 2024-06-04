@extends('layouts.auth.auth')

@section('content')
<div class="page-content page-auth" id="register">
    <div class="section-store-auth" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center justify-content-center row-login">
                <div class="col-lg-6">
                    <div class="card card-login">
                        <div class=" card-body">
                            <h3 class="text-center mb-4 mt-2"><b>Memulai untuk jual beli, </b> <br /> dengan cara
                                terbaru</h3>
                            <form class="mt-3" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row ">
                                    <div class=" col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input v-model="name" id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input v-model="email" @change="checkEmail()" id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                :class="{ 'is-invalid': this.email_unavailable }" name="email"
                                                value="{{ old('email') }}" required autocomplete="email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Konfirmasi Password</label>
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-12 ">
                                        <div class=" form-group ">
                                            <label>Store</label>
                                            <p class=" text-muted">
                                                Apakah anda juga ingin membuka toko?
                                            </p>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" name="is_store_open"
                                                    id="openStoreTrue" v-model="is_store_open" :value="true" />
                                                <label for="openStoreTrue" class="custom-control-label">
                                                    Iya, boleh
                                                </label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" name="is_store_open"
                                                    id="openStoreFalse" v-model="is_store_open" :value="false" />
                                                <label for="openStoreFalse" class="custom-control-label">
                                                    Enggak, makasih
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <button type="submit" class="btn btn-login btn-block mt-4"
                                            :disabled="this.email_unavailable">
                                            Register
                                        </button>

                                        <a href="{{ route('login') }}" class="btn btn-signup btn-block mt-2">
                                            Back to Log In
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group " v-if="is_store_open">
                                            <label>Nama Toko</label>
                                            <input v-model="store_name" id="store_name" type="text"
                                                class="form-control @error('store_name') is-invalid @enderror"
                                                name="store_name" value="{{ old('store_name') }}" required
                                                autocomplete="store_name" autofocus>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-12">
                                        <div class="form-group" v-if="is_store_open">
                                            <label>Kategori</label>
                                            <select name="category" class="form-control">
                                                <option value="">Pilih</option>
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('after-script')
<script src="{{asset('/vendor/vue/vue.js')}}"></script>
<!-- vue Toasted -->
<script src="https://unpkg.com/vue-toasted"></script>
<!-- axio Toasted -->
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    Vue.use(Toasted);
    var register = new Vue({
        el: "#register",
        mounted() {
            AOS.init();
        },
        methods: {
            checkEmail: function () {
                let self = this;
                axios.get('{{ route('register-check') }}', {
                    params: {
                        email: this.email
                    }
                })
                    .then(function (response) {
                        if (response.data == 'Available') {
                            self.$toasted.show(
                                "Email anda tersedia! Silahkan lanjut langkah selanjutnya!", {
                                position: "top-center",
                                className: "rounded",
                                duration: 4000,
                            }
                            );
                            self.email_unavailable = false;
                        } else {
                            self.$toasted.error(
                                "Maaf, tampaknya email sudah terdaftar pada sistem kami.", {
                                position: "top-center",
                                className: "rounded",
                                duration: 4000,
                            }
                            );
                            self.email_unavailable = true;
                        }
                        // handle success
                        console.log(response.data);
                    })
            }
        },
        data() {
            return {
                name: "",
                email: "",
                is_store_open: false,
                store_name: "",
                email_unavailable: false
            }
        },
    });
</script>
@endpush