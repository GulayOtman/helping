@extends('layouts.authentication')
@section('title', 'Giriş Yap')


@section('content')
    <div class="login login-3 login-signin-on d-flex flex-row-fluid" id="kt_login">
				<div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url({{ asset('assets/media/bg/bg-1.jpg') }});">
					<div class="login-form text-center text-white p-7 position-relative overflow-hidden">
						<!--begin::Login Header-->
						<div class="d-flex flex-center mb-15">
							<a href="#">
								<img src="{{ asset('assets/media/logos/logo-letter-9.png') }}" class="max-h-100px" alt="" />
							</a>
						</div>
						<!--end::Login Header-->
						<!--begin::Login Sign in form-->
						<div class="login-signin">
							<div class="mb-20">
								<h3>Giriş Yapın</h3>
								<p class="opacity-60 font-weight-bold">Hesabınıza giriş yapmak için bilgilerinizi girin:</p>
							</div>
							<form action="{{ route('login') }}" method="post" class="form" id="kt_login_signin_form">
                                @csrf
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" type="text" placeholder="E-posta Adresiniz" name="email" autocomplete="off" required />
								</div>
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" type="password" placeholder="Şifreniz" name="password" required />
								</div>
								<div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8">
									<label class="checkbox checkbox-outline checkbox-white text-white m-0">
									<input type="checkbox" name="remember" />Beni Hatırla
									<span></span></label>
									<a href="javascript:;" id="kt_login_forgot" class="text-white font-weight-bold">Şifrenizi mi Unuttunuz ?</a>
								</div>
								<div class="form-group text-center mt-10">
									<button id="kt_login_signin_submit" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3">Giriş Yap</button>
								</div>
							</form>
							<div class="mt-10">
								<span class="opacity-70 mr-4">Henüz bir hesabınız yok mu?</span>
								<a href="javascript:;" id="kt_login_signup" class="text-white font-weight-bold">Kayıt Ol</a>
							</div>
						</div>
						<!--end::Login Sign in form-->
						<!--begin::Login Sign up form-->
						<div class="login-signup">
							<div class="mb-20">
								<h3>Kayıt Ol</h3>
								<p class="opacity-60">Hesabınızı oluşturmak için bilgilerinizi girin</p>
							</div>
							<form class="form text-center" id="kt_login_signup_form">
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" type="text" placeholder="Ad Soyad" name="fullname" required />
								</div>
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" type="text" placeholder="E-posta Adresi" name="email" autocomplete="off" required />
								</div>
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" type="password" placeholder="Şifre" name="password" required />
								</div>
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" type="password" placeholder="Şifre Tekrarı" name="cpassword" required />
								</div>
								<div class="form-group text-left px-8">
									<label class="checkbox checkbox-outline checkbox-white text-white m-0">
									<a href="#" class="text-white font-weight-bold">Hüküm ve Koşulları</a>
									<input type="checkbox" name="agree" required />Kabul Ediyorum.
									<span></span></label>
									<div class="form-text text-muted text-center"></div>
								</div>
								<div class="form-group">
									<button id="kt_login_signup_submit" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3 m-2">Kayıt Ol</button>
									<button id="kt_login_signup_cancel" class="btn btn-pill btn-outline-white font-weight-bold opacity-70 px-15 py-3 m-2">İptal</button>
								</div>
							</form>
						</div>
						<!--end::Login Sign up form-->
						<!--begin::Login forgot password form-->
						<div class="login-forgot">
							<div class="mb-20">
								<h3>Şifrenizi mi Unuttunuz ?</h3>
								<p class="opacity-60">Şifrenizi sıfırlamak için e-Posta adresinizi girin</p>
							</div>
							<form class="form" id="kt_login_forgot_form">
								<div class="form-group mb-10">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" type="text" placeholder="E-posta Adresiniz" name="email" autocomplete="off" required />
								</div>
								<div class="form-group">
									<button id="kt_login_forgot_submit" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3 m-2">Sıfırla</button>
									<button id="kt_login_forgot_cancel" class="btn btn-pill btn-outline-white font-weight-bold opacity-70 px-15 py-3 m-2">İptal</button>
								</div>
							</form>
						</div>
						<!--end::Login forgot password form-->
					</div>
				</div>
			</div>
@stop

@section('page-styles')

@stop

@section('page-script')

    <script>

        $(".onlynumber").keypress(function (e) {
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                return false;
            }
        });

    </script>

    <script>

        $(document).ready(function () {
            var _login = $('#kt_login');

            var _showForm = function(form) {
                var cls = 'login-' + form + '-on';
                var myform = 'kt_login_' + form + '_form';

                _login.removeClass('login-forgot-on');
                _login.removeClass('login-signin-on');
                _login.removeClass('login-signup-on');

                _login.addClass(cls);

                KTUtil.animateClass(KTUtil.getById(myform), 'animate__animated animate__backInUp');
            }

            $('#kt_login_forgot').on('click', function (e) {
                e.preventDefault();
                _showForm('forgot');
            });

            // Handle signup
            $('#kt_login_signup').on('click', function (e) {
                e.preventDefault();
                _showForm('signup');
            });

            $('#kt_login_signup_cancel').on('click', function (e) {
                e.preventDefault();

                _showForm('signin');
            });

            $('#kt_login_forgot_cancel').on('click', function (e) {
                e.preventDefault();

                _showForm('signin');
            });

            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-center",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "3000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            @if(session()->has('success'))
            toastr.success("{{ session()->get('success') }}");
            @endif

            @if(count($errors->all()) > 0)
            toastr.warning("{{ $errors->first() }}");
            @endif


            @if(session()->has('reset_pass'))
            $("#res_suc").click();
            @endif
        });
    </script>

@stop
