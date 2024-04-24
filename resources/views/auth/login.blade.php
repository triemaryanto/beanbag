<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.depan.head')
</head>

<body>
    <!-- Start Header Area -->
    @include('layouts.depan.header')
    <!-- End Header Area -->
    <main>
        <!-- Start Breadcrumb Area -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrapper">
                            <nav>
                                <ul class="breadcrumb">
                                    <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                                    <li class="active">Login &amp; Register</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Area -->
        <!-- Start Cart Area -->
        <section class="login_register-area pb-30 pt-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="block-title mb-30">
                            <h5>Create an account</h5>
                        </div>
                        <div class="register-form mb-30">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-element">
                                            <label for="name">Your Name <span class="required">*</span></label>
                                            <input id="name" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-element">
                                            <label for="email">Your Email <span class="required">*</span></label>
                                            <input id="email" type="email" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-element">
                                            <label for="pass">Password</label>
                                            <input id="pass" type="password">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-element">
                                            <label for="pass2">Retype Password</label>
                                            <input id="pass2" type="password" required="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-element">
                                            <input type="submit" value="Sign Up" class="btn">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="block-title mb-30">
                            <h5>Already registered?</h5>
                            <x-validation-errors class="mb-4" />

                        </div>
                        <div class="login-form mb-30">
                            <form method="POST" {{ route('login') }}>
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-element">
                                            <label for="email">Email Address <span class="required">*</span></label>
                                            <input id="email" type="email" name="email" :value="old('email')"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-element">
                                            <label for="password">Password</label>
                                            <input id="password" type="password" name="password" required="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-element mb-20">
                                            <input type="submit" value="Sign in" class="btn">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <a href="#">Forgot your password?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Cart Area -->

        <!-- Start Brand Area -->
        <section class="brand-area gray-bg pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="brand-carousel owl-carousel">
                            <div class="single-brand-item">
                                <a href="#"><img src="{{ asset('goetze/') }}/assets/img/brand/1.jpg"
                                        alt=""></a>
                            </div>
                            <div class="single-brand-item">
                                <a href="#"><img src="{{ asset('goetze/') }}/assets/img/brand/2.jpg"
                                        alt=""></a>
                            </div>
                            <div class="single-brand-item">
                                <a href="#"><img src="{{ asset('goetze/') }}/assets/img/brand/3.jpg"
                                        alt=""></a>
                            </div>
                            <div class="single-brand-item">
                                <a href="#"><img src="{{ asset('goetze/') }}/assets/img/brand/4.jpg"
                                        alt=""></a>
                            </div>
                            <div class="single-brand-item">
                                <a href="#"><img src="{{ asset('goetze/') }}/assets/img/brand/5.jpg"
                                        alt=""></a>
                            </div>
                            <div class="single-brand-item">
                                <a href="#"><img src="{{ asset('goetze/') }}/assets/img/brand/6.jpg"
                                        alt=""></a>
                            </div>
                            <div class="single-brand-item">
                                <a href="#"><img src="{{ asset('goetze/') }}/assets/img/brand/7.jpg"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Brand Area -->
    </main>
    @include('layouts.depan.footer')

    @include('layouts.depan.script')
</body>

</html>
