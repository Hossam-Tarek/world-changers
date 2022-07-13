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

                <form action="{{ route('teacher.password.email') }}" method="POST" class="needs-validation" novalidate>
                    @csrf

                    <div class="mb-4 text-sm text-gray-600">
                        {{ __('teacher.forget_desc') }}
                    </div>

                    <x-form.input class="mb-2" name="email" :label="false" place-holder="البريد الإلكتروني" required>البريد الإلكتروني <span class="red">*</span></x-form.input>

                    <button type="submit" class="btn w-full">
                        {{ __('teacher.reset_password') }}
                    </button>
                </form>
            </div>

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

