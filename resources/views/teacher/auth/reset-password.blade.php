{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('teacher.password.update') }}">
{{--            @csrf--}}

{{--            <!-- Password Reset Token -->--}}
{{--            <input type="hidden" name="token" value="{{ $request->route('token') }}">--}}

{{--            <!-- Email Address -->--}}
{{--            <div>--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />--}}
{{--            </div>--}}

{{--            <!-- Confirm Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--                <x-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                                    type="password"--}}
{{--                                    name="password_confirmation" required />--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <x-button>--}}
{{--                    {{ __('Reset Password') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}

<x-website.layouts.master>
    <x-slot name="styles">
    </x-slot>

    <section class="login-form after-navbar-section py-5">
        <div class="container">
            <header class="main-header">
                <span></span>
                <h2>اعادة تعيين كلمة المرور</h2>
            </header>
        </div>

        <div class="row justify-content-center w-100 mx-0 px-0">
            <div class="container"></div>
            <div class="col-md-5">
                <figure class="d-flex align-items-center justify-content-center h-100">
                    <img src="{{ asset('assets/images/flower.jpg') }}" alt="contact-us" />
                </figure>
            </div>


            <div class="col-md-5 login-form my-auto">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('teacher.password.update') }}" class="needs-validation" novalidate>
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <x-form.input class="mb-2" name="email" place-holder="البريد الإلكتروني" required>البريد الإلكتروني <span class="red">*</span></x-form.input>
                    <x-form.input type="password" class="mb-2" name="password" place-holder="الرقم السري" required>الرقم السري <span class="red">*</span></x-form.input>
                    <x-form.input type="password" class="mb-2" name="password_confirmation" place-holder="تأكيد الرقم السري" required>تأكيد الرقم السري <span class="red">*</span></x-form.input>

                    <div class="flex items-center justify-end mt-4">
                        <x-button>
                            {{ __('teacher.reset_password') }}
                        </x-button>
                    </div>
                </form>
            </div>
            <!-- Modal -->

        </div>
    </section>

    <x-slot name="scripts">
        <script>
            $(document).ready(function () {
                $(document).click(function (event) {
                    var clickover = $(event.target);
                    var _opened = $(".navbar-collapse").hasClass("show");
                    if (_opened === true && !clickover.hasClass("navbar-toggler")) {
                        $("button.navbar-toggler").click();
                    }
                });
            });
        </script>
    </x-slot>
</x-website.layouts.master>


