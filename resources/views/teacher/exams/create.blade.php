<x-teacher.layouts.master>
    <x-slot name="styles">
        <link rel="stylesheet" class="selectedLangDir" />
    </x-slot>


    <div class="page-content after-navbar-section">
        <section class="sec questions">
            <div class="container">
                <header class="main-header">
                    <span></span>
                    <h2>إنشاء امتحان جديد</h2>
                </header>
                <div class="questions">
                    <div class="row w-100 mx-0 px-0" >
                        <div class="col-md-4 mb-3">
                            <div class="question__field">
                                <label class="mb-2" for="language">
                                    التدريس باللغة <span class="red">*</span>
                                </label>
                                <select name="" id="language" class="form-control">
                                    @foreach($languages as $language)
                                        <option value="{{ $language->id }}">{{ $language->local_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="question__field">
                                <label class="mb-2" for="unit">
                                    المادة الدراسية<span class="red">*</span>
                                </label>
                                <select name="subject_id" id="subject_id" class="form-control">
                                    @foreach($subjects as $subject)
                                        <option value="{{ $subject->id }}">{{ $subject->year->name.' - '.$subject->name_ar }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="question__field exam-units">
                                <label class="mb-2" for="unit">
                                    اختر الوحدة
                                    <span class="red">*</span>
                                </label>
                                <select
                                    name=""
                                    id="unit"
                                    style="height: 38px;"
                                    class="form-control  p-0"
                                >
                                    <option value=""></option>
                                    <option value="first">
                                        الوحدة الأولي
                                    </option>
                                    <option value="second">
                                        الوحدة الثانية
                                    </option>
                                    <option value="third">
                                        الوحدة الثالثة
                                    </option>
                                    <option value="exam-op">
                                        امتحانات عامة
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 lesson-units">
                            <div class="question__field">
                                <label class="mb-2" for="lesson">
                                    اختر الدرس
                                    <span class="red">*</span>
                                </label>
                                <select
                                    name=""
                                    id="lesson"
                                    style="height: 38px;"
                                    class="form-control  p-0"
                                >
                                    <option value=""></option>
                                    <option value="first">
                                        الأولي
                                    </option>
                                    <option value="second">
                                        الثانية
                                    </option>
                                    <option value="third">
                                        الثالثة
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 exam-title d-none">
                            <div class="question__field">
                                <label class="mb-2" for="subject">
                                    عنوان محتوي الأمتحان
                                    <span class="red">*</span>
                                </label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="subject"
                                    placeholder="أكتب عنوان الأمتحان"
                                />
                            </div>
                        </div>
                    </div>
                    <hr class="mt-4 mb-3" />
                    <!-- start main question -->
                    <div class="questions__main row">
                        <header class="main-header sub-header">
                            <input style="background-color: #03a9f491;border-color: #03a9f491;"
                                   class="form-control question-input"
                                   type="text"
                                   placeholder="عنوان  السؤال الرئيسي ان وجد" />
                        </header>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link active"
                                    id="home-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#home"
                                    type="button"
                                    role="tab"
                                    aria-controls="home"
                                    aria-selected="true"
                                >
                                    <i class="fas fa-edit"></i>
                                    إضافة قطعة أو وثيقة
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link"
                                    id="profile-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#profile"
                                    type="button"
                                    role="tab"
                                    aria-controls="profile"
                                    aria-selected="false"
                                >
                                    <i class="far fa-images"></i>
                                    إضافة صورة
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div
                                class="tab-pane fade show active"
                                id="home"
                                role="tabpanel"
                                aria-labelledby="home-tab"
                            >
                                <div class="question__field mt-3">
                                    <label class="mb-2">
                                        <i
                                            class="fas fa-plus-circle"
                                            style="color: #03a9f4"
                                        ></i>
                                        إضافة قطعة أو وثيقة
                                    </label>
                                    <textarea
                                        name="question"
                                        class="form-control"
                                        placeholder="هذا الحقل نستخدمه فقط في حالة وجود قطعة أو وثيقة عليها عدد من الأسئلة الفرعية الخاصة بها والمرتبطين جميعا بها..."
                                    ></textarea>
                                </div>
                            </div>
                            <div
                                class="tab-pane fade"
                                id="profile"
                                role="tabpanel"
                                aria-labelledby="profile-tab"
                            >
                                <div class="question__field mt-3">
                                    <div
                                        class="custom-file-container"
                                        data-upload-id="myUniqueUploadId"
                                    >
                                        <label
                                            for="file-upload-for-label-click1"
                                            class="w-100 mb-2"
                                        >
                                            <div
                                                class="d-flex justify-content-between"
                                            >
                                                <div
                                                    style="cursor: pointer"
                                                >
                                                    <i
                                                        class="fas fa-plus-circle"
                                                        style="
                                                                color: #03a9f4;
                                                            "
                                                    ></i>
                                                    إضافة صورة
                                                </div>
                                                <a
                                                    href="javascript:void(0)"
                                                    class="custom-file-container__image-clear"
                                                    title="Clear Image"
                                                >
                                                    <i
                                                        class="fas fa-trash-alt"
                                                        style="
                                                                color: #f44336;
                                                            "
                                                    ></i>
                                                </a>
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
                                                accept="application/pdf,image/*"
                                                multiple
                                                aria-label="Choose File"
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
                                        <div
                                            class="custom-file-container__image-preview"
                                            style="height: 150px; margin: 0"
                                        ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <!-- start main question -->
                    <div class="questions__main row">
                        <header class="main-header sub-header">
                            <input
                                class="form-control question-input"
                                type="text"
                                disabled
                                style="background-color: #fcebee;"
                                placeholder="1" />
                        </header>
                        <div class="question__parent">
                            <ul
                                class="nav nav-tabs"
                                id="myTab"
                                role="tablist"
                            >
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link active"
                                        id="home-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#sec-home"
                                        type="button"
                                        role="tab"
                                        aria-controls="home"
                                        aria-selected="true"
                                    >
                                        <i class="fas fa-edit"></i>
                                        إضافة نص السؤال
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link"
                                        id="profile-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#sec-profile"
                                        type="button"
                                        role="tab"
                                        aria-controls="profile"
                                        aria-selected="false"
                                    >
                                        إضافة صورة
                                        <i class="far fa-images"></i>

                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div
                                    class="tab-pane fade show active"
                                    id="sec-home"
                                    role="tabpanel"
                                    aria-labelledby="home-tab"
                                >
                                    <div class="question__field mt-3">
                                        <label class="mb-2">
                                            <i
                                                class="fas fa-plus-circle"
                                                style="color: #03a9f4"
                                            ></i>
                                            إضافة نص السؤال
                                        </label>
                                        <textarea
                                            name="question"
                                            class="form-control"
                                            placeholder="نرجو اضافة السؤال هنا"
                                        ></textarea>
                                    </div>
                                </div>
                                <div
                                    class="tab-pane fade"
                                    id="sec-profile"
                                    role="tabpanel"
                                    aria-labelledby="profile-tab"
                                >
                                    <div class="question__field mt-3">
                                        <div
                                            class="custom-file-container"
                                            data-upload-id="sec-myUniqueUploadId"
                                        >
                                            <label
                                                for="file-upload-for-label-click2"
                                                class="w-100 mb-2"
                                            >
                                                <div
                                                    class="d-flex justify-content-between"
                                                >
                                                    <div
                                                        style="
                                                                cursor: pointer;
                                                            "
                                                    >
                                                        <i
                                                            class="fas fa-plus-circle"
                                                            style="
                                                                    color: #03a9f4;
                                                                "
                                                        ></i>
                                                        إضافة صورة
                                                    </div>
                                                    <a
                                                        href="javascript:void(0)"
                                                        class="custom-file-container__image-clear"
                                                        title="Clear Image"
                                                    >
                                                        <i
                                                            class="fas fa-trash-alt"
                                                            style="
                                                                    color: #f44336;
                                                                "
                                                        ></i>
                                                    </a>
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
                                                    accept="application/pdf,image/*"
                                                    multiple
                                                    aria-label="Choose File"
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
                                            <div
                                                class="custom-file-container__image-preview"
                                                style="
                                                        height: 150px;
                                                        margin: 0;
                                                    "
                                            ></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="question__field mt-3 answer_field">
                                <label class="mb-2" for="answer">
                                    <i
                                        class="far fa-check-square"
                                        style="color: #03a9f4"
                                    ></i>
                                    إضافة إجابة
                                </label>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="flexRadioDefault1"
                                    />
                                    <label
                                        style="min-width:90%"
                                        class="answer form-check-label radio-label"
                                        for="flexRadioDefault1"
                                    >
                                        <input required type="text" class="w-100" placeholder=" الإجابة الأولى" style="border: 0;background-color:transparent">
                                        <div class="invalid-feedback  mt-1">هذا الحقل مطلوب </div>
                                    </label>
                                    <div class="position-relative d-inline-block">
                                        <input type="file" style="width: 30px;position:absolute;opacity: 0;cursor: pointer;" class="ms-3">
                                        <img class="ms-3" style="width: 30px;" src="{{ asset('assets/images/flowe.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="flexRadioDefault2"
                                    />
                                    <label
                                        style="min-width:90%"
                                        class="answer form-check-label radio-label"
                                        for="flexRadioDefault2"
                                    >
                                        <input required type="text" class="w-100" placeholder=" الإجابة الثانية" style="border: 0;background-color:transparent">
                                        <div class="invalid-feedback  mt-1">هذا الحقل مطلوب </div>
                                    </label>
                                    <div class="position-relative d-inline-block">
                                        <input type="file" style="width: 30px;position:absolute;opacity: 0;cursor: pointer;" class="ms-3">
                                        <img class="ms-3" style="width: 30px;" src="{{ asset('assets/images/flowe.jpg') }}" alt="">
                                    </div>

                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="flexRadioDefault3"
                                    />
                                    <label
                                        style="min-width:90%"
                                        class="answer form-check-label radio-label"
                                        for="flexRadioDefault3"
                                    >
                                        <input required type="text" class="w-100" placeholder=" الإجابة الثالثة" style="border: 0;background-color:transparent">
                                        <div class="invalid-feedback  mt-1">هذا الحقل مطلوب </div>
                                    </label>
                                    <div class="position-relative d-inline-block">
                                        <input type="file" style="width: 30px;position:absolute;opacity: 0;cursor: pointer;" class="ms-3">
                                        <img class="ms-3" style="width: 30px;" src="{{ asset('assets/images/flowe.jpg') }}" alt="">
                                    </div>

                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="flexRadioDefault4"
                                    />
                                    <label
                                        style="min-width:90%"
                                        class="answer form-check-label radio-label"
                                        for="flexRadioDefault4"
                                    >
                                        <input required type="text" class="w-100" placeholder=" الإجابة الرابعة" style="border: 0;background-color:transparent">
                                        <div class="invalid-feedback  mt-1">هذا الحقل مطلوب </div>
                                    </label>
                                    <div class="position-relative d-inline-block">
                                        <input type="file" style="width: 30px;position:absolute;opacity: 0;cursor: pointer;" class="ms-3">
                                        <img class="ms-3" style="width: 30px;" src="{{ asset('assets/images/flowe.jpg') }}" alt="">
                                    </div>

                                </div>
                            </div>
                            <div class="question__field mt-3">
                                <button
                                    class="btn btn-success mb-2"
                                    for="add-note"
                                    style="background-color: #18b26a; border-color: #18b26a;">

                                    إضافة طريقة الحل
                                </button>
                                <textarea
                                    name="add-answer"
                                    id="add-note"
                                    class="form-control"
                                    placeholder="من فضلك أدخل طريقة الحل"
                                ></textarea>
                                <div
                                    class="tab-pane "
                                    id="profile"
                                    role="tabpanel"
                                    aria-labelledby="profile-tab"
                                >
                                    <div class="question__field mt-3">
                                        <div
                                            class="custom-file-container"
                                            data-upload-id="myUniqueUploadId2"
                                        >
                                            <label
                                                for="file-upload-for-label-click22"
                                                class="w-100 mb-2"
                                            >
                                                <div
                                                    class="d-flex justify-content-between"
                                                >
                                                    <div
                                                        style="cursor: pointer"
                                                    >
                                                        <i
                                                            class="fas fa-plus-circle"
                                                            style="
                                                                color: #03a9f4;
                                                            "
                                                        ></i>
                                                        إضافة صورة خاصة بطريقة الحل
                                                    </div>
                                                    <a
                                                        href="javascript:void(0)"
                                                        class="custom-file-container__image-clear"
                                                        title="Clear Image"
                                                    >
                                                        <i
                                                            class="fas fa-trash-alt"
                                                            style="
                                                                color: #f44336;
                                                            "
                                                        ></i>
                                                    </a>
                                                </div>
                                            </label>
                                            <label
                                                style="display: none"
                                                class="custom-file-container__custom-file"
                                            >
                                                <input
                                                    type="file"
                                                    id="file-upload-for-label-click22"
                                                    class="custom-file-container__custom-file__custom-file-input"
                                                    accept="application/pdf,image/*"
                                                    multiple
                                                    aria-label="Choose File"
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
                                            <div
                                                class="custom-file-container__image-preview"
                                                style="height: 150px; margin: 0"
                                            ></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="sec-question"></div>
                        </div>
                        <div class="btn__wrapper border-bottom pb-4">
                            <button class="btn btn__add-sec ms-2">
                                إضافة سؤال فرعي
                            </button>
                        </div>
                    </div>

                    <div id="main-question"></div>
                    <div class="btn__wrapper text-end my-3">
                        <button
                            class="btn btn__add-main"
                            id="add-main-question"
                        >
                            إضافة سؤال رئيسي
                        </button>
                    </div>
                    <div class="questions__btns-wrapper d-block text-center">
                        <p>
                            <a href="#">أستاذنا الكريم: إذا أحببتم إضافة اسم درس أو أي تعديل أو مقترح، يسعدنا استقبال رسائلكم في صفحة تواصل معنا</a>
                        </p>
                        <button
                            class="btn btn-view mb-2"
                            style="background-color: #ffec00; color: #405d74;">
                            مشاهدة الاختبار قبل النشر
                        </button>
                        <br>
                        <button class="btn btn-public"
                                style="background-color: #0b8bd087; color: black; text-shadow: 1px 1px #988f14;">
                            اضغط هنا لنشر الاختبار
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <x-slot name="scripts">
        <script>
            $(".selectCom").selectize({
                maxItems: null,
            });
        </script>
        <script src="{{ asset('assets/js/bootstrap-filestyle.min.js') }}"></script>
        <script src="{{ asset('assets/js/exam.js') }}"></script>
        <script>
            var upload = new FileUploadWithPreview("myUniqueUploadId2");
            var upload = new FileUploadWithPreview("myUniqueUploadId");
            var upload = new FileUploadWithPreview("sec-myUniqueUploadId");
            let main = 2;

            let sec_template = `
          <div class="questions__main row">
            <header class="main-header sub-header">
              <input
                                class="form-control question-input"
                                 type="text"
                                 placeholder="السؤال" />
            </header>
            <div class="col-md-6">
              <div class="question__field">
                <label class="mb-2" for="question">إضافة نص</label>
                <input
                  type="text"
                  class="form-control"
                  id="question"
                  placeholder="أضافة نص للسؤال"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="question__field">
                <label class="mb-2" for="question-file">إضافة صورة</label>
                <div class="add-image">
                  <input
                    id="imgInp"
                    accept="image/*"
                    type="file"
                    class="custom-file-input form-control"
                  />
                  <img
                    class="image-preview"
                    id="imagePreview"
                    src="#"
                    alt="your image"
                  />
                </div>
              </div>
            </div>
            <div class="question__field">
              <label class="mb-2" for="answer">إضافة إجابة</label>
              <select
                name="options"
                id="answers"
                class="form-control form-select"
              >
                <option value="first">الإجابة الأولى</option>
                <option value="second">الإجابةالثانية</option>
                <option value="third">الإجابة الثالثة</option>
                <option value="fourth">الإجابة الثالثة</option>
              </select>
            </div>
            <div class="question__field">
              <label class="mb-2" for="add-note">إضافة طريقة الحل</label>
              <textarea
                name="add-answer"
                id="add-note"
                class="form-control"
                placeholder="من فضلك أدخل طريقة الحل"
              ></textarea>
            </div>

            <div class="btn__wrapper">
              <button class="btn btn__add-sec">إضافة سؤال فرعي</button>
            </div>

          </div>
`;

            $(document).on("click", ".btn__add-main", function () {
                main++;
                let main_template = `
      <div class="main-question-new mt-4">
            <div class="questions__main row">
              <header class="main-header sub-header">
                <input
                      style="background-color: #03a9f491;border-color: #03a9f491;"
                      class="form-control question-input"
                        type="text"
                        placeholder="عنوان  السؤال الرئيسي ان وجد" />
              </header>
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link active"
                    id="home-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#home${main}"
                    type="button"
                    role="tab"
                    aria-controls="home"
                    aria-selected="true"
                  >
                    <i class="fas fa-edit"></i>
                    إضافة قطعة أو وثيقة
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link"
                    id="profile-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#profile${main}"
                    type="button"
                    role="tab"
                    aria-controls="profile"
                    aria-selected="false"
                  >
                    <i class="far fa-images"></i>
                    إضافة صورة
                  </button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div
                  class="tab-pane fade show active"
                  id="home${main}"
                  role="tabpanel"
                  aria-labelledby="home-tab"
                >
                  <div class="question__field mt-3">
                    <label class="mb-2">
                      <i class="fas fa-plus-circle" style="color: #03a9f4"></i>
                      إضافة قطعة أو وثيقة
                    </label>
                    <textarea
                      name="question"
                      class="form-control"
                      placeholder="هذا الحقل نستخدمه فقط في حالة وجود قطعة أو وثيقة عليها عدد من الأسئلة الفرعية الخاصة بها والمرتبطين جميعا بها..."
                    ></textarea>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="profile${main}"
                  role="tabpanel"
                  aria-labelledby="profile-tab"
                >
                  <div class="question__field mt-3">
                    <div
                      class="custom-file-container"
                      data-upload-id="myUniqueUploadId${main}"
                    >
                      <label
                        for="file-upload-for-label-click${main}"
                        class="w-100 mb-2"
                      >
                        <div class="d-flex justify-content-between">
                          <div style="cursor: pointer">
                            <i
                              class="fas fa-plus-circle"
                              style="color: #03a9f4"
                            ></i>
                            إضافة صورة
                          </div>
                          <a
                            href="javascript:void(0)"
                            class="custom-file-container__image-clear"
                            title="Clear Image"
                          >
                            <i
                              class="fas fa-trash-alt"
                              style="color: #f44336"
                            ></i>
                          </a>
                        </div>
                      </label>
                      <label
                        style="display: none"
                        class="custom-file-container__custom-file"
                      >
                        <input
                          type="file"
                          id="file-upload-for-label-click${main}"
                          class="custom-file-container__custom-file__custom-file-input"
                          accept="application/pdf,image/*"
                          multiple
                          aria-label="Choose File"
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
                      <div
                        class="custom-file-container__image-preview"
                        style="height: 150px; margin: 0"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr />
            <!-- start main question -->
            <div class="questions__main row">
              <header class="main-header sub-header">
                <input
                                class="form-control question-input"
                                 type="text"
                                 placeholder="السؤال" />
              </header>
              <div class="question__parent">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link active"
                      id="home-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#sec-home${main}"
                      type="button"
                      role="tab"
                      aria-controls="home"
                      aria-selected="true"
                    >
                      <i class="fas fa-edit"></i>
                      إضافة نص السؤال
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link"
                      id="profile-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#sec-profile${main}"
                      type="button"
                      role="tab"
                      aria-controls="profile"
                      aria-selected="false"
                    >
                      <i class="far fa-images"></i>
                      إضافة صورة
                    </button>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div
                    class="tab-pane fade show active"
                    id="sec-home${main}"
                    role="tabpanel"
                    aria-labelledby="home-tab"
                  >
                    <div class="question__field mt-3">
                      <label class="mb-2">
                        <i
                          class="fas fa-plus-circle"
                          style="color: #03a9f4"
                        ></i>
                        إضافة نص السؤال
                      </label>
                      <textarea
                        name="question"
                        class="form-control"
                        placeholder="نرجو إضافة السؤال هنا..."
                      ></textarea>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="sec-profile${main}"
                    role="tabpanel"
                    aria-labelledby="profile-tab"
                  >
                    <div class="question__field mt-3">
                      <div
                        class="custom-file-container"
                        data-upload-id="sec-myUniqueUploadId${main}"
                      >
                        <label
                          for="sec-file-upload-for-label-click${main}"
                          class="w-100 mb-2"
                        >
                          <div class="d-flex justify-content-between">
                            <div style="cursor: pointer">
                              <i
                                class="fas fa-plus-circle"
                                style="color: #03a9f4"
                              ></i>
                              إضافة صورة
                            </div>
                            <a
                              href="javascript:void(0)"
                              class="custom-file-container__image-clear"
                              title="Clear Image"
                            >
                              <i
                                class="fas fa-trash-alt"
                                style="color: #f44336"
                              ></i>
                            </a>
                          </div>
                        </label>
                        <label
                          style="display: none"
                          class="custom-file-container__custom-file"
                        >
                          <input
                            type="file"
                            id="sec-file-upload-for-label-click${main}"
                            class="custom-file-container__custom-file__custom-file-input"
                            accept="application/pdf,image/*"
                            multiple
                            aria-label="Choose File"
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
                        <div
                          class="custom-file-container__image-preview"
                          style="height: 150px; margin: 0"
                        ></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="question__field mt-3 answer_field">
                  <label class="mb-2" for="answer">
                    <i class="far fa-check-square" style="color: #03a9f4"></i>
                    إضافة إجابة
                  </label>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="flexRadioDefault"
                      id="flexRadioDefault1"
                    />
                    <label
                      class="form-check-label radio-label"
                      for="flexRadioDefault1${main}"
                    >
                      الإجابة الأولى
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="flexRadioDefault"
                      id="flexRadioDefault2${main}"
                    />
                    <label
                      class="form-check-label radio-label"
                      for="flexRadioDefault2${main}"
                    >
                      الإجابة الثانية
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="flexRadioDefault"
                      id="flexRadioDefault3${main}"
                    />
                    <label
                      class="form-check-label radio-label"
                      for="flexRadioDefault3${main}"
                    >
                      الإجابة الثالثة
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="flexRadioDefault"
                      id="flexRadioDefault4${main}"
                    />
                    <label
                      class="form-check-label radio-label"
                      for="flexRadioDefault4${main}"
                    >
                      الإجابة الرابعة
                    </label>
                  </div>
                </div>
                <div class="question__field mt-3">
                  <button class="btn btn-success mb-2" for="add-note${main}"
                  style="background-color: #18b26a; border-color: #18b26a;" >
                    إضافة طريقة الحل
                  </button>
                  <textarea
                    name="add-answer"
                    id="add-note${main}"
                    class="form-control"
                    placeholder="من فضلك أدخل طريقة الحل"
                  ></textarea>
                </div>
                <div id="sec-question"></div>
                <div class="btn__wrapper">
                    <button class="btn btn__add-sec ms-2">إضافة سؤال فرعي</button>
                </div>
              </div>
            </div>
</div>
        `;
                $("#main-question").append(main_template);

                var upload = new FileUploadWithPreview(
                    `myUniqueUploadId${main}`
                );
                var upload = new FileUploadWithPreview(
                    `sec-myUniqueUploadId${main}`
                );
            });

            $(document).on("click", ".btn__add-sec", function () {
                main++;
                let sec_template = `
      <div class="sec-question-new mt-4">
            <div class="questions__main row">
              <header class="main-header sub-header">
                <input
                                disabled
                                style="background-color: #fcebee;"
                                class="form-control question-input"
                                 type="text"
                                 placeholder="${main - 1}" />
              </header>
              <div class="question__parent">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link active"
                      id="home-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#sec-home${main}"
                      type="button"
                      role="tab"
                      aria-controls="home"
                      aria-selected="true"
                    >
                      <i class="fas fa-edit"></i>
                      إضافة نص السؤال
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link"
                      id="profile-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#sec-profile${main}"
                      type="button"
                      role="tab"
                      aria-controls="profile"
                      aria-selected="false"
                    >
                      <i class="far fa-images"></i>
                      إضافة صورة
                    </button>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div
                    class="tab-pane fade show active"
                    id="sec-home${main}"
                    role="tabpanel"
                    aria-labelledby="home-tab"
                  >
                    <div class="question__field mt-3">
                      <label class="mb-2">
                        <i
                          class="fas fa-plus-circle"
                          style="color: #03a9f4"
                        ></i>
                        إضافة نص السؤال
                      </label>
                      <textarea
                        name="question"
                        class="form-control"
                        placeholder="نرجو إضافة السؤال هنا..."
                      ></textarea>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="sec-profile${main}"
                    role="tabpanel"
                    aria-labelledby="profile-tab"
                  >
                    <div class="question__field mt-3">
                      <div
                        class="custom-file-container"
                        data-upload-id="sec-myUniqueUploadId${main}"
                      >
                        <label
                          for="sec-file-upload-for-label-click${main}"
                          class="w-100 mb-2"
                        >
                          <div class="d-flex justify-content-between">
                            <div style="cursor: pointer">
                              <i
                                class="fas fa-plus-circle"
                                style="color: #03a9f4"
                              ></i>
                              إضافة صورة
                            </div>
                            <a
                              href="javascript:void(0)"
                              class="custom-file-container__image-clear"
                              title="Clear Image"
                            >
                              <i
                                class="fas fa-trash-alt"
                                style="color: #f44336"
                              ></i>
                            </a>
                          </div>
                        </label>
                        <label
                          style="display: none"
                          class="custom-file-container__custom-file"
                        >
                          <input
                            type="file"
                            id="sec-file-upload-for-label-click${main}"
                            class="custom-file-container__custom-file__custom-file-input"
                            accept="application/pdf,image/*"
                            multiple
                            aria-label="Choose File"
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
                        <div
                          class="custom-file-container__image-preview"
                          style="height: 150px; margin: 0"
                        ></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="question__field mt-3 answer_field">
                  <label class="mb-2" for="answer">
                    <i class="far fa-check-square" style="color: #03a9f4"></i>
                    إضافة إجابة
                  </label>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="flexRadioDefault"
                      id="flexRadioDefault1"
                    />
                    <label
                      class="form-check-label radio-label"
                      for="flexRadioDefault1${main}"
                    >
                      الإجابة الأولى
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="flexRadioDefault"
                      id="flexRadioDefault2${main}"
                    />
                    <label
                      class="form-check-label radio-label"
                      for="flexRadioDefault2${main}"
                    >
                      الإجابة الثانية
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="flexRadioDefault"
                      id="flexRadioDefault3${main}"
                    />
                    <label
                      class="form-check-label radio-label"
                      for="flexRadioDefault3${main}"
                    >
                      الإجابة الثالثة
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="flexRadioDefault"
                      id="flexRadioDefault4${main}"
                    />
                    <label
                      class="form-check-label radio-label"
                      for="flexRadioDefault4${main}"
                    >
                      الإجابة الرابعة
                    </label>
                  </div>
                </div>
                <div class="question__field mt-3">
                  <button class="btn btn-success mb-2" for="add-note${main}"
                  style="background-color: #18b26a; border-color: #18b26a;" >
                    إضافة طريقة الحل
                  </button>
                  <textarea
                    name="add-answer"
                    id="add-note${main}"
                    class="form-control"
                    placeholder="من فضلك أدخل طريقة الحل"
                  ></textarea>
                </div>
                <div id="sec-question"></div>
              </div>
            </div>
        </div>
        `;
                $("#sec-question").append(sec_template);
                var upload = new FileUploadWithPreview(
                    `sec-myUniqueUploadId${main}`
                );
            });
        </script>
    </x-slot>
</x-teacher.layouts.master>