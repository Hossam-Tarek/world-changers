<x-website.layouts.master>
    <x-slot name="styles">
    </x-slot>

    <section class="login-form after-navbar-section py-5">
        <div class="container">
            <header class="main-header">
                <span></span>
                <h2>مرحبا بك</h2>
            </header>
        </div>

        <div class="row justify-content-center w-100 mx-0 px-0">
            <div class="container"></div>
            <div class="col-md-5">
                <figure class="d-flex align-items-center justify-content-center h-100">
                    <img src="{{ asset('assets/images/flower.jpg') }}" alt="contact-us" />
                </figure>
            </div>
            <div class="col-md-5 login-form">
                <form class="needs-validation" novalidate>
                    <x-form.input class="mb-2" name="email" place-holder="البريد الإلكتروني" required>البريد الإلكتروني <span class="red">*</span></x-form.input>

                    <x-form.input type="password" class="register__file mb-2" name="email" place-holder="ينصح باستخدام أكثر من 6 حروف وأرقام ورموز" required>كلمة المرور <span class="red">*</span></x-form.input>

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="col-lg-4">
                            <div class="checkbox row">
                                <label>
                                    <input type="checkbox" class="mx-2" name="remember"/>
                                    تذكرني
                                </label>
                            </div>
                        </div>
                        @if (Route::has('password.request'))
                            <div class="col-lg-5 forget-password">
                                <!-- Button trigger modal -->
                                <p type="button" class="btn-forget text-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <a href="{{ route('password.request') }}">نسيت كلمة المرور</a>
                                </p>
                            </div>
                        @endif
                    </div>

                    <button type="submit" class="btn w-full">
                        دخول
                        <img src="{{ asset('assets/images/home/arrow-left.svg') }}" alt="arrow"/>
                    </button>
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

