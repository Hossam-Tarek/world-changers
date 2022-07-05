<x-website.layouts.master>
    <x-slot name="styles">
        <livewire:styles/>
    </x-slot>

    <section class="sec register">
    <div class="container">
        <header class="main-header">
            <span></span>
            <h2>إنشاء حساب الطالب</h2>
        </header>
        <form action="{{ route('register') }}" method="POST" novalidate class="needs-validation" >
            @csrf
            <div class="">
                <div class="row w-100 mx-0 px-0">
                    <x-form.input name="name" class="col-md-6 mb-2" value="{{ old('name') }}" style="direction: rtl" place-holder="اسم الطالب الرباعي" required>
                        اسم الطالب الرباعي<span class="red">*</span>
                    </x-form.input>

                    <x-form.input type="email" name="email" class="col-md-6 mb-2" value="{{ old('email') }}" style="direction: rtl" place-holder="البريد الإلكتروني" required>
                        البريد الإلكتروني<span class="red">*</span>
                    </x-form.input>

                    <div class="col-md-6 mb-2">
                        <div class="mb-2">
                            <div class="add-phone-field">
                                <label for="phones">رقم هاتف الطالب <span class="red">*</span></label>
                                <i class="fas fa-plus-circle" style="color: #03a9f4"></i>
                            </div>
                            <input class="form-control" type="text" name="phones[]" id="phones" placeholder="رقم الهاتف" required/>
                            <div class="invalid-feedback"> هذا الحقل مطلوب</div>
                            <div class="phone-wrapper"></div>
                        </div>
                    </div>

                    <x-form.input name="parent_phone" class="col-md-6 mb-2" value="{{ old('parent_phone') }}" place-holder="رقم الهاتف" required>
                        رقم هاتف ولي أمر الطالب <span class="red">*</span>
                    </x-form.input>

                    <x-form.input type="password" name="password" class="col-md-6 mb-2" place-holder="كلمة المرور" required>
                        كلمة المرور<span class="red">*</span>
                    </x-form.input>

                    <x-form.input type="password" name="password_confirmation" class="col-md-6 mb-2" place-holder="تأكيد كلمة المرور" required>
                         تأكيد كلمة المرور<span class="red">*</span>
                    </x-form.input>

                    <livewire:admin.department-select group-class="col-md-6"/>

                    <div class="col-md-6 register__select mb-2">
                        <label for="study_language_id">الدراسة باللغة<span class="red">*</span></label>
                        <select class="form-control @error('study_language_id') is-invalid @enderror" name="study_language_id" id="study_language_id">
                            @foreach($languages as $language)
                                <option value="{{ $language->id }}">{{ $language->local_name }}</option>
                            @endforeach
                        </select>
                        @error('study_language_id')
                            <p class="help text-danger">{{ $errors->first('study_language_id') }}</p>
                        @enderror
                    </div>

                    <div class="col-md-6 register__select mb-2">
                        <label for="second_language_id">اللغة الأجنبية الثانية<span class="red">*</span></label>
                        <select class="form-control @error('second_language_id') is-invalid @enderror" name="second_language_id" id="second_language_id">
                            @foreach($languages->filter(fn($lang) => !in_array($lang->code, ['ar', 'en'])) as $language)
                                <option value="{{ $language->id }}">{{ $language->local_name }}</option>
                            @endforeach
                        </select>
                        @error('second_language_id')
                        <p class="help text-danger">{{ $errors->first('second_language_id') }}</p>
                        @enderror
                    </div>

                    <livewire:main.state-city-select group-class="col-md-6"/>

                    <x-form.input name="school" class="col-md-6 mb-2" value="{{ old('school') }}" style="direction: rtl" place-holder="المدرسة" required>
                        المدرسة<span class="red">*</span>
                    </x-form.input>

                    <x-form.input type="number" name="targeted_percentage" class="col-md-6 mb-2" value="{{ old('targeted_percentage') }}" style="direction: rtl" place-holder="النسبة المئوية المستهدفة" required>
                        النسبة المئوية المستهدفة<span class="red">*</span>
                    </x-form.input>

                    <x-form.input name="targeted_collage" class="col-md-6 mb-2" value="{{ old('targeted_collage') }}" style="direction: rtl" place-holder="الكلية المستهدفة" required>
                        الكلية المستهدفة<span class="red">*</span>
                    </x-form.input>


{{--                    <div class="col-md-6 mb-2">--}}
{{--                        <label  for="subscribe" title="في حالة عدم إدخال كود الاشتراك، يمكنكم استخدام الموقع لمدة 24 ساعة"> كود الاشتراك <br> <span style="font-size:14px" class="text-success" >(في حالة عدم إدخال كود الاشتراك، يمكنكم استخدام الموقع مجانا لمدة 24 ساعة)</span></label>--}}

{{--                        <input--}}
{{--                            type="text"--}}
{{--                            class="form-control"--}}
{{--                            placeholder="أدخل كود الاشتراك"--}}
{{--                            name="subscribe"--}}
{{--                            id="subscribe"--}}
{{--                        />--}}

{{--                    </div>--}}

                    <div class="col-md-12">
                        <p class="text-danger" style="margin-top: -10px;">
{{--                            <a class="btn-use-free" style="color: #03a9f4" href="use-free.html">--}}
{{--                                " يحق استخدام الموقع مجانا طوال العام لمن أحد والديه متوفي عند الله، و للطلاب ذوي الهمم، والطلاب الذين أحد والديهم من ذوي الهمم، والطلاب الخمسة الأوائل في كل مدرسة في مصر."                                    </a>--}}
                        <div>
                            <input type="checkbox" style="width: 19px; margin: 0 0 0 5px; height: 19px; vertical-align: sub;" required>
                            <span class="text-danger">قبل إدخال كود الاشتراك، نرجو من الطالب التأكد أولا من توفر المحتوى العلمي الذي يرضيه في موقعنا. </span>
                            <div class="invalid-feedback" style="margin-top: 0px">  هذا الحقل مطلوب </div>

                        </div>
                        </p>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn w-full">
                إنشاء حسابي
                <img src="{{ asset('assets/images/home/arrow-left.svg') }}" alt="" />
            </button>
        </form>
    </div>
    </section>

    <x-slot name="scripts">
        <script>
            (function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll(".needs-validation");
                // Loop over them and prevent submission
                Array.prototype.slice.call(forms).forEach(function (form) {
                    form.addEventListener(
                        "submit",
                        function (event) {
                            if (!form.checkValidity()) {
                                event.preventDefault();
                                event.stopPropagation();
                            }

                            form.classList.add("was-validated");
                        },
                        false
                    );
                });

                $(".add-phone-field").click(function () {
                    let template = `<div class="row phone-field-wrapper">
                      <div class="col-9">
                        <input
                          class="form-control"
                          type="text"
                          name="phones[]"
                          placeholder="رقم الهاتف"
                        />
                      </div>
                      <div class="col-3">
                        <button
                          id="remove-phone-field"
                          class="add-field remove d-flex align-items-center remove-phone-field"
                          type="button"
                        >
                          <i class="far fa-trash-alt" style="font-size: 1.25rem; margin-bottom:1rem"></i>
                        </button>
                      </div>
                    </div>`;

                    $(".phone-wrapper").append(template);
                });
                $(document).on("click", ".remove-phone-field", function () {
                    $(this).closest(".phone-field-wrapper").remove();
                });

                $(document).on("click", ".remove-phone-field", function () {
                    $(this).closest(".phone-field-wrapper").remove();
                });
            })();
        </script>

        <livewire:scripts/>
    </x-slot>
</x-website.layouts.master>
