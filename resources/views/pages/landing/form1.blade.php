@extends('layouts.landing.main')

@section('container')

<div role="main" class="main">
    <div class="shape-divider shape-divider-bottom" style="height: 120px;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 2000 245"
            preserveAspectRatio="xMinYMin">
            <path fill="#FFF" opacity="0.5" d="M2028.47,246.15v-39.09C1945.6,199.68,1869.96,195.8,1803,194c-71.99-1.93-137.53-4.37-225,1
                c-88.04,5.4-120.19,13.36-233,19c-55.14,2.76-102.19,5-165,3c-37.5-1.2-102.55-4.6-200-19c-89.42-13.21-145.61-26.73-276-57
                C520.19,98.33,428.29,76.99,402,72C243.75,41.93,118.41,28.67,37,22c-26.77-2.19-49.49-3.73-66.33-4.77v229.03h2057.82
                C2028.48,246.22,2028.47,246.19,2028.47,246.15z" />
            <path fill="#FFF" d="M1816,212c-58.78-4.11-116.63-8.07-195-9c-43.43-0.51-105.81-1.13-187,4c-33.73,2.13-29.27,2.64-127,10
                c-86.52,6.52-110.13,7.64-137,8c-11.31,0.15-53.81,0.58-110-3c-54.49-3.47-108.08-9.83-185-23c-69.21-11.85-114.89-21.96-202-41
                c-262.93-57.46-291.75-62.62-318-67C229.24,70,155.97,65.58,121,64C60.05,61.24,8.67,62.27-28.77,63.95v187.41H2028V232
            C1943.49,221.98,1871.42,215.88,1816,212z" />
        </svg>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4 class="mb-3 text-center">Silahkan Isi data dibawah ini, atau <a href="/login">Login</a> terlebih
                    dahulu</h4>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <form action="/form_daftar/{{ $id_kode }}/create/store" method="POST" class="needs-validation" enctype="multipart/form-data">
                                @csrf
                                    <div class="row">
                                        <div class="form-group col">
                                            <label class="form-label">Nama</label>
                                            <input type="text" name="name" value="{{ old('name') }}"
                                                class="form-control form-control-lg" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label class="form-label">Username</label>
                                            <input type="text" name="username" value="{{ old('username') }}"
                                                class="form-control form-control-lg" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label class="form-label">E-mail Address</label>
                                            <input type="text" name="email" value="{{ old('email') }}"
                                                class="form-control form-control-lg" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label class="form-label">No WhatsApp</label>
                                            <input type="number" name="no_hp" value="{{ old('no_hp') }}"
                                                class="form-control form-control-lg" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label class="form-label">Password</label>
                                            <input type="password" name="password" value="{{ old('password') }}"
                                                class="form-control form-control-lg" required>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label class="form-label">Re-enter Password</label>
                                            <input type="password" name="password_confirmation" value="{{ old('password') }}"
                                                class="form-control form-control-lg" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-9">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="terms" class="custom-control-input"
                                                    id="terms" required>
                                                <label class="custom-control-label text-2" for="terms">I have
                                                    read and agree to the <a href="#">terms of
                                                        service</a></label>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-3">
                                                <button type="submit" value="Submit" class="btn btn-primary btn-modern float-end">
                                                    Simpan dan Lanjut
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
    </div>
</div>

<footer id="footer" class="mt-0">
    <div class="container my-4">
        <div class="row py-5">
            <div class="col-lg-2 align-self-center mb-5 mb-lg-0">
                <a href="demo-seo.html">
                    <img src="{{ asset('frontend/img/1.png')}}" class="img-fluid" alt="Demo SEO" width="130" />
                </a>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h4 class="font-weight-normal text-color-light text-5 ls-0 mb-4">Contact Details</h4>
                <ul class="list list-unstyled">
                    <li class="d-flex align-items-baseline"><i class="fab fa-whatsapp text-color-primary me-3"></i>
                        <div><a href="https://api.whatsapp.com/send?phone=62895380000239&text=Bismillah, Mohon Maaf, Izin bertanya apakah Apakah benar ini kontak WA dari ITSAFQU?"
                                target="_blank">(+62) 895-3800-00239 (Akh Lutfi)</a></div>
                    </li>
                    <li class="d-flex align-items-baseline"><i class="far fa-envelope text-color-primary me-3"></i>
                        <div><a href="mailto:itsafqubuntal27@gmail.com">itsafqubuntal27@gmail.com</a></div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
                <h4 class="font-weight-normal text-color-light text-5 ls-0 mb-4">Navigations</h4>
                <ul class="list list-unstyled">
                    <li class="mb-1">
                        <a class="link-hover-style-1 active" data-hash data-hash-offset="95" href="#home">Home</a>
                    </li>
                    <li class="mb-1">
                        <a class="link-hover-style-1" data-hash data-hash-offset="95" href="#about">Tentang
                            Kami</a>
                    </li>
                    <li class="mb-1">
                        <a class="link-hover-style-1" data-hash data-hash-offset="95" href="#solutions">Kenapa
                            Digital?</a>
                    </li>
                    <li class="mb-1">
                        <a class="link-hover-style-1" data-hash data-hash-offset="95" href="#pricing">Produk</a>
                    </li>
                    <li class="mb-1">
                        <a class="link-hover-style-1" data-hash data-hash-offset="95" href="#reviews">Testimoni</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2">
                <h4 class="font-weight-normal text-color-light text-5 ls-0 mb-4">Channel</h4>
                <ul class="footer-social-icons social-icons social-icons-clean social-icons-icon-light">
                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank"
                            title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank"
                            title="Twitter"><i class="fab fa-instagram text-2"></i></a></li>
                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank"
                            title="Linkedin"><i class="fab fa-youtube text-2"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright footer-copyright-style-2">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col-auto w-100 text-align">
                    <p>ITSAFQU © Copyright 2021. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection