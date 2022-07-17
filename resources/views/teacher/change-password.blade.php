<x-teacher.layouts.master>
    <section class="sec register">
        <div class="container">
            <header class="main-header">
                <span></span>
                <h2>تغيير كلمة المرور</h2>
            </header>

            <form action="{{ route('teacher.password.change') }}" method="POST" class="needs-validation" novalidate>
                @csrf

                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 mx-0 px-0">

                        <x-form.input type="password" name="password" class="col-md-12 mb-2" place-holder="كلمة المرور" required>
                            كلمة المرور<span class="red">*</span>
                        </x-form.input>

                        <x-form.input type="password" name="new_password" class="col-md-12 mb-2" place-holder="كلمة المرور الجديدة" required>
                            كلمة المرور الجديدة<span class="red">*</span>
                        </x-form.input>

                        <x-form.input type="password" name="new_password_confirmation" class="col-md-12 mb-2" place-holder="تأكيد كلمة المرور" required>
                            تأكيد كلمة المرور<span class="red">*</span>
                        </x-form.input>
                        <button type="submit" class="btn w-full">
                            تغيير كلمة المرور
                            <img src="{{ asset('assets/images/home/arrow-left.svg') }}" alt="" />
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-teacher.layouts.master>
