<x-teacher.layouts.master>
    <x-slot name="styles">
        <livewire:styles/>
    </x-slot>

    <section class="sec register">
        <div class="container">
            <header class="main-header">
                <span></span>
                <h2>تحديث بيانات المعلم</h2>
            </header>

            <form action="{{ route('teacher.profile.update') }}" method="POST" class="needs-validation" action="" enctype="multipart/form-data" novalidate>
                @csrf

                <div class="row w-100 mx-0 px-0">
                    <x-form.input name="name" class="col-md-6" value="{{ $teacher->name }}" style="direction: rtl" place-holder="اسم المعلم" required>
                        اسم المعلم<span class="red">*</span>
                    </x-form.input>

                    <div class="col-md-6 mb-2">
                        <div class="mb-2">
                            <div id="add-phone-field" class="add-phone-field">
                                <label for="phones">رقم هاتف المعلم <span class="red">*</span></label>
                                <i class="fas fa-plus-circle" style="color: #03a9f4"></i>
                            </div>
                            <input class="form-control" type="text" name="phones[]" value="{{ $teacher->phones->first()->number ?? '' }}" id="phones" placeholder="رقم الهاتف" required/>
                            <div class="invalid-feedback"> هذا الحقل مطلوب</div>
                            <div id="phone-wrapper" class="phone-wrapper">
                                @foreach($teacher->phones->forget(0) as $phone)
                                    <div class="row phone-field-wrapper">
                                        <div class="col-11">
                                            <input class="form-control" type="text" name="phones[]" value="{{ $phone->number }}" placeholder="رقم الهاتف"/>
                                        </div>
                                        <div class="col-1">
                                            <button id="remove-phone-field" class="add-field remove d-flex align-items-center" type="button">
                                                <i class="far fa-trash-alt" style="font-size: 1.25rem; margin-bottom:1rem"></i>
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <x-form.input type="email" name="email" class="col-md-6 mb-2" value="{{ $teacher->email }}" style="direction: rtl" place-holder="البريد الإلكتروني" disabled>
                        البريد الإلكتروني
                    </x-form.input>

                    <x-form.input name="school" class="col-md-6 mb-2" value="{{ $teacher->school }}" style="direction: rtl" place-holder="المدرسة" required>
                        المدرسة /المركز التعليمي<span class="red">*</span>
                    </x-form.input>

                    <livewire:main.state-city-select group-class="col-md-6" :city="$teacher->city"/>

                    <x-form.textarea name="brief" rows="7" class="col-md-12 mb-2" value="{{ $teacher->brief }}" style="direction: rtl" place-holder="إضافة النبذة التعريفية هنا... ">
                        نبذة تعريفية
                    </x-form.textarea>

                    <div class="col-md-6">
                        <div class="mb-3">

                            <div
                                class="custom-file-container"
                                data-upload-id="myUniqueUploadId2"
                            >

                                <label
                                    for="file-upload-for-label-click2"
                                    class="w-100 mb-2"
                                >
                                    <div
                                        class="d-flex justify-content-between"
                                    >
                                        <div style="cursor: pointer" class="add-teacher-file">
                                            <i class="fas fa-plus-circle" style="color: #03a9f4"></i>
                                            إضافة صورة شخصية للمعلم
                                        </div>
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal33" title="Clear Image">
                                            <i class="fas fa-trash-alt" style="color: #f44336"></i>
                                        </a>
                                        <div class="modal fade" id="exampleModal33" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content" style="max-width: 329px; margin: auto; padding: 9px;">
                                                    <div class="modal-header pb-0">
                                                        <h6 class="text-center w-100" id="exampleModalLabel">هل تريد حذف جميع المرفقات؟    </h6>
                                                    </div>

                                                    <div class="modal-footer text-center justify-content-center">
                                                        <button
                                                            type="button"
                                                            style="background-color: #dc3545;"
                                                            data-bs-dismiss="modal"
                                                            class="btn btn-sm btn-danger custom-file-container__image-clear" >
                                                            نعم
                                                        </button>
                                                        <button type="button"
                                                                class="btn btn-sm btn-secondary "
                                                                data-bs-dismiss="modal">لا</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                                <label
                                    style="display: none"
                                    class="custom-file-container__custom-file"
                                >
                                    <input
                                        type="file"
                                        id="file-upload-for-label-click2"
                                        class="custom-file-container__custom-file__custom-file-input"
                                        accept="image/*"
                                        aria-label="Choose File"
                                        name = "image"
                                    />
                                    <input
                                        type="hidden"
                                        name="MAX_FILE_SIZE"
                                        value="10485760"
                                    />
                                    <span
                                        class="custom-file-container__custom-file__custom-file-control"
                                    ></span>
                                </label>
                                <div class="invalid-feedback  mt-0">
                                    هذا الحقل يجب أن يحتوي على صور
                                </div>
                                <div
                                    class="custom-file-container__image-preview"
                                    style="height: 150px; margin: 0"
                                ></div>
                                <div class="my-2">
                                    <img class="rounded mx-1" height="80px" src="{{ $teacher->image_url }}"/>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">

                            <div
                                class="custom-file-container multiple"
                                data-upload-id="myUniqueUploadId3"
                            >

                                <label
                                    for="file-upload-for-label-click1"
                                    class="w-100 mb-2"
                                >
                                    <div
                                        class="d-flex justify-content-between"
                                    >
                                        <div style="cursor: pointer" class="add-teacher-file">
                                            <i
                                                class="fas fa-plus-circle"
                                                style="color: #03a9f4"
                                            ></i>
                                            إضافة مجموعة من الصور الخاصة بالمعلم
                                        </div>
                                        <a
                                            href="javascript:void(0)"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal22"

                                            title="Clear Image"
                                        >
                                            <i
                                                class="fas fa-trash-alt"
                                                style="color: #f44336"
                                            ></i>
                                        </a>
                                        <div class="modal fade" id="exampleModal22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content" style="max-width: 329px; margin: auto; padding: 9px;">
                                                    <div class="modal-header pb-0">
                                                        <h6 class="text-center w-100" id="exampleModalLabel">هل تريد حذف جميع المرفقات؟    </h6>
                                                    </div>
                                                    <div class="modal-footer text-center justify-content-center">
                                                        <button
                                                            type="button"
                                                            style="background-color: #dc3545;"
                                                            data-bs-dismiss="modal"
                                                            class="btn btn-sm btn-danger custom-file-container__image-clear" >
                                                            نعم
                                                        </button>
                                                        <button type="button"
                                                                class="btn btn-sm btn-secondary "
                                                                data-bs-dismiss="modal">لا</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                                <label
                                    style="display: none"
                                    class="custom-file-container__custom-file"
                                >
                                    <input
                                        type="file"
                                        id="file-upload-for-label-click1"
                                        class="custom-file-container__custom-file__custom-file-input"
                                        accept="image/*"
                                        multiple
                                        aria-label="Choose File"
                                        name = "images[]"
                                    />
                                    <input
                                        type="hidden"
                                        name="MAX_FILE_SIZE"
                                        value="10485760"
                                    />
                                    <span
                                        class="custom-file-container__custom-file__custom-file-control"
                                    ></span>
                                </label>
                                <div class="invalid-feedback  mt-0">
                                    هذا الحقل يجب أن يحتوي على صور
                                </div>
                                <div
                                    class="custom-file-container__image-preview"
                                    style="height: 150px; margin: 0"
                                ></div>
                            </div>
                            <div class="my-2">
                                @foreach($teacher->images as $img)
                                    <img class="rounded mx-1" height="80px" src="{{ asset($img->url) }}"/>
                                @endforeach
                            </div>
                        </div>

                    </div>

                    <x-form.input name="youtube" class="col-md-6 mb-2" value="{{ $teacher->youtube }}" style="direction: rtl" place-holder="إضافة رابط من اليوتيوب">
                        إضافة فيديو تعريفي
                    </x-form.input>

                    <div class="col-md-6">
                        <label for="teaching_language_id">التدريس باللغة <span class="red">*</span></label>
                        <select class="form-control @error('teaching_language_id') is-invalid @enderror" name="teaching_language_id" id="teaching_language_id">
                            @foreach($languages as $language)
                                <option value="{{ $language->id }}" {{ $teacher->teaching_language_id == $language->id ? 'selected' : '' }}>{{ $language->local_name }}</option>
                            @endforeach
                        </select>
                        @error('teaching_language_id')
                        <p class="help text-danger">{{ $errors->first('teaching_language_id') }}</p>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <div class="register__select mb-2">
                            <label for="subjects">المواد الدراسية <span class="red">*</span></label>

                            <select class="form-control multiple" name="subjects[]" multiple="multiple" id="subjects" required>
                                @foreach($subjects as $subject)
                                    <option value="{{ $subject->id }}"
                                        {{ isset($teacher->subjects) && in_array($subject->id, $teacher->subjects->pluck('id')->toArray()) ? 'selected' : '' }}
                                    >{{ $subject->year->name.' - '.$subject->name_ar }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback  mt-1">هذا الحقل مطلوب </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="register__select mb-2">
                            <label for="years">الصف الدراسي <span class="red">*</span></label>
                            <select
                                required
                                class="form-control multiple"
                                multiple="multiple"
                                name="years[]"
                                id="years"
                            >
                                @foreach($years as $year)
                                    <option value="{{ $year->id }}"
                                        {{ isset($teacher->years) && in_array($year->id, $teacher->years->pluck('id')->toArray()) ? 'selected' : '' }}
                                    >{{ $year->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback  mt-1">هذا الحقل مطلوب </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row d-flex mb-2">
                            <div class="add-teacher-file" id="add-field">
                                <label for="site">
                                    المواقع الإلكترونية الخاصة بالمعلم
                                </label>
                                <i class="fas fa-plus-circle" style="color: #03a9f4"></i>
                            </div>
                            <div id="website-fields">
                                <div class="d-flex justify-content-between field-wrapper">
                                    <input type="text" name="sites[]" id="site" value="{{ $teacher->sites->first()->site }}" class="form-control" placeholder="أضف موقعك الإلكتروني">
                                    {{-- <button id="btn-remove" class="add-field remove d-flex align-items-center" type="button">
                                        <i class="far fa-trash-alt"></i>
                                    </button> --}}
                                </div>
                                @foreach($teacher->sites->forget(0) as $site)
                                    <div class="d-flex justify-content-between field-wrapper">
                                        <input type="text" id="site" value="{{ $site->site }}" class="form-control" style="width: 95%" name="sites[]" placeholder="أضف موقعك الإلكتروني"/>
                                        <button id="btn-remove" class="add-field remove d-flex align-items-center" type="button">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn w-full">
                    تحديث
                    <img src="{{ asset('assets/images/home/arrow-left.svg') }}" alt="" />
                </button>
            </form>
        </div>
    </section>

    <x-slot name="scripts">
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
                "use strict";
                // $("select")
                $("#years").selectize({
                    maxItems: null,
                });
                $("#subjects").selectize({
                    maxItems: null,
                });
                var anotherUpload = new FileUploadWithPreview("myUniqueUploadId3");

                var anotherUpload = new FileUploadWithPreview("myUniqueUploadId2");

                $("#add-field").click(function () {
                    let template = `<div class="d-flex justify-content-between field-wrapper">
                <input
                  type="text"
                  id="site"
                  class="form-control"
                  style="width: 95%"
                  name="sites[]"
                  placeholder="أضف موقعك الإلكتروني"
                />
                <button
                  id="btn-remove"
                  class="add-field remove d-flex align-items-center"
                  type="button"
                >
                  <i class="far fa-trash-alt"></i>
                </button>
              </div>`;

                    $("#website-fields").append(template);
                });
                // field-wrapper
                $(document).on("click", "#btn-remove", function () {
                    $(this).closest(".field-wrapper").remove();
                });
                $("#add-phone-field").click(function () {
                    let template = `<div class="row phone-field-wrapper">
                    <div class="col-11">
                      <input
                        class="form-control"
                        type="text"
                        name="phones[]"
                        placeholder="رقم الهاتف"
                      />
                    </div>
                    <div class="col-1">
                      <button
                        id="remove-phone-field"
                        class="add-field remove d-flex align-items-center"
                        type="button"
                      >
                        <i class="far fa-trash-alt" style="font-size: 1.25rem; margin-bottom:1rem"></i>
                      </button>
                    </div>
                  </div>`;

                    $("#phone-wrapper").append(template);
                });
                // field-wrapper
                $(document).on("click", "#remove-phone-field", function () {
                    $(this).closest(".phone-field-wrapper").remove();
                });

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
            })();
        </script>

        <livewire:scripts/>
    </x-slot>
</x-teacher.layouts.master>
