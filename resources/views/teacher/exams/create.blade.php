<x-teacher.layouts.master>
    <x-slot name="styles">
        <link rel="stylesheet" class="selectedLangDir" />
        <livewire:styles/>
    </x-slot>


    <div class="page-content after-navbar-section">
        <section class="sec questions">

            <div class="container">
                <header class="main-header">
                    <span></span>
                    <h2>إنشاء امتحان جديد</h2>
                </header>
            <form action="{{ route('teacher.exams.store') }}" method="POST" class="needs-validation" action="" enctype="multipart/form-data" novalidate>
                    @csrf
                <div class="questions">
                    <livewire:teacher.make-exam-select class="row w-100 mx-0 px-0"/>

                    <hr class="mt-4 mb-3" />
                    <!-- start main question -->
                    <div class="questions__main row">
                        <header class="main-header sub-header">
                            <x-form.input class="w-100" type="text" name="mainQuestions[0][title]" :label="false" style="background-color: #03a9f491;border-color: #03a9f491;" input-class="question-input" place-holder="عنوان  السؤال الرئيسي ان وجد"/>
                        </header>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                    <i class="fas fa-edit"></i>
                                    إضافة قطعة أو وثيقة
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                    <i class="far fa-images"></i>
                                    إضافة صورة
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="question__field mt-3">
                                    <label class="mb-2">
                                        <i
                                            class="fas fa-plus-circle"
                                            style="color: #03a9f4"
                                        ></i>
                                        إضافة قطعة أو وثيقة
                                    </label>
                                    <x-form.textarea :label="false" name="mainQuestions[0][text]" input-class="form-control" place-holder="هذا الحقل نستخدمه فقط في حالة وجود قطعة أو وثيقة عليها عدد من الأسئلة الفرعية الخاصة بها والمرتبطين جميعا بها... "/>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="question__field mt-3">
                                    <div class="custom-file-container" data-upload-id="myUniqueUploadId">
                                        <label for="file-upload-for-label-click1" class="w-100 mb-2">
                                            <div class="d-flex justify-content-between">
                                                <div style="cursor: pointer">
                                                    <i class="fas fa-plus-circle" style="color: #03a9f4;"></i>
                                                    إضافة صورة
                                                </div>
                                                <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">
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
                                                name="mainQuestions[0][image]"
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
                                        <x-form.textarea :label="false" name="mainQuestions[0][minor][0][title]" input-class="form-control" place-holder="نرجو اضافة السؤال هنا "/>
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
                                                    name="mainQuestions[0][minor][0][image]"
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
                                        name="mainQuestions[0][minor][0][checked]"
                                        value="0"
                                        id="flexRadioDefault1"
                                        checked
                                    />
                                    <label
                                        style="min-width:90%"
                                        class="answer form-check-label radio-label"
                                        for="flexRadioDefault1"
                                    >
                                        <input name="mainQuestions[0][minor][0][answer][0][answer]" required type="text" class="w-100" placeholder=" الإجابة الأولى" style="border: 0;background-color:transparent">
                                        <div class="invalid-feedback  mt-1">هذا الحقل مطلوب </div>
                                    </label>
                                    <div class="position-relative d-inline-block">
                                        <input name="mainQuestions[0][minor][0][answer][0][image]" type="file" style="width: 30px;position:absolute;opacity: 0;cursor: pointer;" class="ms-3">
                                        <img class="ms-3" style="width: 30px;" src="{{ asset('assets/images/flowe.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="mainQuestions[0][minor][0][checked]"
                                        value="1"
                                        id="flexRadioDefault2"
                                    />
                                    <label
                                        style="min-width:90%"
                                        class="answer form-check-label radio-label"
                                        for="flexRadioDefault2"
                                    >
                                        <input name="mainQuestions[0][minor][0][answer][1][answer]" required type="text" class="w-100" placeholder=" الإجابة الثانية" style="border: 0;background-color:transparent">
                                        <div class="invalid-feedback  mt-1">هذا الحقل مطلوب </div>
                                    </label>
                                    <div class="position-relative d-inline-block">
                                        <input name="mainQuestions[0][minor][0][answer][1][image]" type="file" style="width: 30px;position:absolute;opacity: 0;cursor: pointer;" class="ms-3">
                                        <img class="ms-3" style="width: 30px;" src="{{ asset('assets/images/flowe.jpg') }}" alt="">
                                    </div>

                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="mainQuestions[0][minor][0][checked]"
                                        value="2"
                                        id="flexRadioDefault3"
                                    />
                                    <label
                                        style="min-width:90%"
                                        class="answer form-check-label radio-label"
                                        for="flexRadioDefault3"
                                    >
                                        <input name="mainQuestions[0][minor][0][answer][2][answer]" required type="text" class="w-100" placeholder=" الإجابة الثالثة" style="border: 0;background-color:transparent">
                                        <div class="invalid-feedback  mt-1">هذا الحقل مطلوب </div>
                                    </label>
                                    <div class="position-relative d-inline-block">
                                        <input name="mainQuestions[0][minor][0][answer][2][image]" type="file" style="width: 30px;position:absolute;opacity: 0;cursor: pointer;" class="ms-3">
                                        <img class="ms-3" style="width: 30px;" src="{{ asset('assets/images/flowe.jpg') }}" alt="">
                                    </div>

                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="mainQuestions[0][minor][0][checked]"
                                        value="3"
                                        id="flexRadioDefault4"
                                    />
                                    <label
                                        style="min-width:90%"
                                        class="answer form-check-label radio-label"
                                        for="flexRadioDefault4"
                                        >
                                        <input name="mainQuestions[0][minor][0][answer][3][answer]"  required type="text" class="w-100" placeholder=" الإجابة الرابعة" style="border: 0;background-color:transparent">
                                        <div class="invalid-feedback  mt-1">هذا الحقل مطلوب </div>
                                    </label>
                                    <div class="position-relative d-inline-block">
                                        <input name="mainQuestions[0][minor][0][answer][3][image]" type="file" style="width: 30px;position:absolute;opacity: 0;cursor: pointer;" class="ms-3">
                                        <img class="ms-3" style="width: 30px;" src="{{ asset('assets/images/flowe.jpg') }}" alt="">
                                    </div>

                                </div>
                            </div>
                            <div class="question__field mt-3">
                                <a
                                    class="btn btn-success mb-2"
                                    for="add-note"
                                    style="background-color: #18b26a; border-color: #18b26a;">

                                    إضافة طريقة الحل
                            </a>
                                <textarea
                                    id="add-note"
                                    class="form-control"
                                    placeholder="من فضلك أدخل طريقة الحل"
                                    name="mainQuestions[0][minor][0][answerway][text]"
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
                                                    name="mainQuestions[0][minor][0][answerway][image]"
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
                            <div class="btn__wrapper border-bottom pb-4">
                                <a class="add-minor btn btn__add-sec ms-2" data-main="0" data-minor="0">
                                    إضافة سؤال فرعي
                                </a>
                            </div>
                            <div id="sec-question0"></div>
                        </div>
                    </div>

                    <div id="main-question"></div>
                    <div class="btn__wrapper text-end my-3">
                        <a
                            class="btn btn__add-main"
                            id="add-main-question"
                        >
                            إضافة سؤال رئيسي
                    </a>
                    </div>
                    <div class="questions__btns-wrapper d-block text-center">
                        <p>
                            <a href="#">أستاذنا الكريم: إذا أحببتم إضافة اسم درس أو أي تعديل أو مقترح، يسعدنا استقبال رسائلكم في صفحة تواصل معنا</a>
                        </p>
                        <input name="preview" type="hidden" id="preview" value="">
                        <button
                            name="action"
                            type="submit"
                            value="preview"
                            class="btn btn-view mb-2"
                            style="background-color: #ffec00; color: #405d74;">
                            مشاهدة الاختبار قبل النشر
                        </button>
                        <br>
                        <button class="btn btn-public"
                               name="action"
                                type="submit"
                                value="submit"
                                style="background-color: #0b8bd087; color: black; text-shadow: 1px 1px #988f14;">
                            اضغط هنا لنشر الاختبار
                        </button>
                    </div>
                </div>
            </form>
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
            let mainKey = 1;


            $(document).on("click", ".btn__add-main", function () {
                main++;
                mainKey++;
                let main_template = `
      <div class="main-question-new mt-4">
            <div class="questions__main row">
              <header class="main-header sub-header">
                <x-form.input class="w-100" type="text" name="mainQuestions[${mainKey}][title]" :label="false" style="background-color: #03a9f491;border-color: #03a9f491;" input-class="question-input" place-holder="عنوان  السؤال الرئيسي ان وجد"/>
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
                    <x-form.textarea :label="false" name="mainQuestions[${mainKey}][text]" input-class="form-control" place-holder="هذا الحقل نستخدمه فقط في حالة وجود قطعة أو وثيقة عليها عدد من الأسئلة الفرعية الخاصة بها والمرتبطين جميعا بها... "/>
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
                          name="mainQuestions[${mainKey}][image]"
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
                      <x-form.textarea :label="false" name="mainQuestions[${mainKey}][minor][0][title]" input-class="form-control" place-holder="نرجو اضافة السؤال هنا "/>
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
                            name ="mainQuestions[${mainKey}][minor][0][image]"
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
                      name="mainQuestions[${mainKey}][minor][0][checked]"
                      id="flexRadioDefault1"
                      value= "0"
                    />
                    <label
                        style="min-width:90%"
                        class="answer form-check-label radio-label"
                        for=""
                        >
                        <input name="mainQuestions[${mainKey}][minor][0][answer][0][answer]"  required type="text" class="w-100" placeholder=" الإجابة الأولى" style="border: 0;background-color:transparent">
                        <div class="invalid-feedback  mt-1">هذا الحقل مطلوب </div>
                    </label>
                    <div class="position-relative d-inline-block">
                        <input name="mainQuestions[${mainKey}][minor][0][answer][0][image]" type="file" style="width: 30px;position:absolute;opacity: 0;cursor: pointer;" class="ms-3">
                        <img class="ms-3" style="width: 30px;" src="{{ asset('assets/images/flowe.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="mainQuestions[${mainKey}][minor][0][checked]"
                      id="flexRadioDefault2${main}"
                      value="1"
                    />
                    <label
                        style="min-width:90%"
                        class="answer form-check-label radio-label"
                        for=""
                        >
                        <input name="mainQuestions[${mainKey}][minor][0][answer][1][answer]"  required type="text" class="w-100" placeholder=" الإجابة الثانية" style="border: 0;background-color:transparent">
                        <div class="invalid-feedback  mt-1">هذا الحقل مطلوب </div>
                    </label>
                    <div class="position-relative d-inline-block">
                        <input name="mainQuestions[${mainKey}][minor][0][answer][1][image]" type="file" style="width: 30px;position:absolute;opacity: 0;cursor: pointer;" class="ms-3">
                        <img class="ms-3" style="width: 30px;" src="{{ asset('assets/images/flowe.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="mainQuestions[${mainKey}][minor][0][checked]"
                      id="flexRadioDefault3${main}"
                      value="2"
                    />
                    <label
                        style="min-width:90%"
                        class="answer form-check-label radio-label"
                        for=""
                        >
                        <input name="mainQuestions[${mainKey}][minor][0][answer][2][answer]"  required type="text" class="w-100" placeholder=" الإجابة الثالثة" style="border: 0;background-color:transparent">
                        <div class="invalid-feedback  mt-1">هذا الحقل مطلوب </div>
                    </label>
                    <div class="position-relative d-inline-block">
                        <input name="mainQuestions[${mainKey}][minor][0][answer][2][image]" type="file" style="width: 30px;position:absolute;opacity: 0;cursor: pointer;" class="ms-3">
                        <img class="ms-3" style="width: 30px;" src="{{ asset('assets/images/flowe.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="mainQuestions[${mainKey}][minor][0][checked]"
                      id="flexRadioDefault4${main}"
                      value ="3"
                    />
                    <label
                        style="min-width:90%"
                        class="answer form-check-label radio-label"
                        for=""
                        >
                        <input name="mainQuestions[${mainKey}][minor][0][answer][3][answer]"  required type="text" class="w-100" placeholder=" الإجابة الرابعة" style="border: 0;background-color:transparent">
                        <div class="invalid-feedback  mt-1">هذا الحقل مطلوب </div>
                    </label>
                    <div class="position-relative d-inline-block">
                        <input name="mainQuestions[${mainKey}][minor][0][answer][3][image]" type="file" style="width: 30px;position:absolute;opacity: 0;cursor: pointer;" class="ms-3">
                        <img class="ms-3" style="width: 30px;" src="{{ asset('assets/images/flowe.jpg') }}" alt="">
                    </div>
                  </div>
                </div>
                <div class="question__field mt-3">
                  <a class="btn btn-success mb-2" for="add-note${main}"
                  style="background-color: #18b26a; border-color: #18b26a;" >
                    إضافة طريقة الحل
                  </a>
                  <textarea
                    id="add-note${main}"
                    class="form-control"
                    placeholder="من فضلك أدخل طريقة الحل"
                    name="mainQuestions[${mainKey}][minor][0][answerway][text]"
                ></textarea>
                </div>
                <div class="btn__wrapper border-bottom pb-4">
                    <a class="add-minor btn btn__add-sec ms-2" data-main="${mainKey-1}" data-minor="0">
                        إضافة سؤال فرعي
                    </a>
                </div>
                <div id="sec-question${mainKey-1}"></div>
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

            $(document).on('click', '.add-minor', function(event) {
                let mainQuestionNumber = $(this).attr("data-main");
                let minorQuestionNumber = $(this).attr("data-minor");
                $(this).parent().remove();
                addSec(mainQuestionNumber, parseInt(minorQuestionNumber)+1);
            });

            function addSec(mainQuestion, minorQuestion) {
                let sec_template = `
      <div class="sec-question-new mt-4">
            <div class="questions__main row">
              <header class="main-header sub-header">
                <input
                                disabled
                                style="background-color: #fcebee;"
                                class="form-control question-input"
                                 type="text"
                                 placeholder="${minorQuestion+1}" />
              </header>
              <div class="question__parent">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link active"
                      id="home-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#sec-home${mainQuestion}"
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
                      data-bs-target="#sec-profile${mainQuestion}"
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
                    id="sec-home${mainQuestion}"
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
                      <x-form.textarea :label="false" name="mainQuestions[${mainQuestion}][minor][${minorQuestion}][title]" input-class="form-control" place-holder="نرجو اضافة السؤال هنا "/>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="sec-profile${mainQuestion}"
                    role="tabpanel"
                    aria-labelledby="profile-tab"
                  >
                    <div class="question__field mt-3">
                      <div
                        class="custom-file-container"
                        data-upload-id="sec-myUniqueUploadId${mainQuestion}"
                      >
                        <label
                          for="sec-file-upload-for-label-click${mainQuestion}"
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
                            id="sec-file-upload-for-label-click${mainQuestion}"
                            class="custom-file-container__custom-file__custom-file-input"
                            accept="application/pdf,image/*"
                            multiple
                            aria-label="Choose File"
                            name ="mainQuestions[${mainQuestion}][minor][${minorQuestion}][image]"
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
                      name="mainQuestions[${mainQuestion}][minor][${minorQuestion}][checked]"
                      id="flexRadioDefault1"
                      value= "0"
                    />
                    <label
                        style="min-width:90%"
                        class="answer form-check-label radio-label"
                        for=""
                        >
                        <input name="mainQuestions[${mainQuestion}][minor][${minorQuestion}][answer][0][answer]"  required type="text" class="w-100" placeholder=" الإجابة الأولى" style="border: 0;background-color:transparent">
                        <div class="invalid-feedback  mt-1">هذا الحقل مطلوب </div>
                    </label>
                    <div class="position-relative d-inline-block">
                        <input name="mainQuestions[${mainQuestion}][minor][${minorQuestion}][answer][0][image]" type="file" style="width: 30px;position:absolute;opacity: 0;cursor: pointer;" class="ms-3">
                        <img class="ms-3" style="width: 30px;" src="{{ asset('assets/images/flowe.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="mainQuestions[${mainQuestion}][minor][${minorQuestion}][checked]"
                      id="flexRadioDefault2${main}"
                      value="1"
                    />
                    <label
                        style="min-width:90%"
                        class="answer form-check-label radio-label"
                        for=""
                        >
                        <input name="mainQuestions[${mainQuestion}][minor][${minorQuestion}][answer][1][answer]"  required type="text" class="w-100" placeholder=" الإجابة الثانية" style="border: 0;background-color:transparent">
                        <div class="invalid-feedback  mt-1">هذا الحقل مطلوب </div>
                    </label>
                    <div class="position-relative d-inline-block">
                        <input name="mainQuestions[${mainQuestion}][minor][${minorQuestion}][answer][1][image]" type="file" style="width: 30px;position:absolute;opacity: 0;cursor: pointer;" class="ms-3">
                        <img class="ms-3" style="width: 30px;" src="{{ asset('assets/images/flowe.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="mainQuestions[${mainQuestion}][minor][${minorQuestion}][checked]"
                      id="flexRadioDefault3${main}"
                      value="2"
                    />
                    <label
                        style="min-width:90%"
                        class="answer form-check-label radio-label"
                        for=""
                        >
                        <input name="mainQuestions[${mainQuestion}][minor][${minorQuestion}][answer][2][answer]"  required type="text" class="w-100" placeholder=" الإجابة الثالثة" style="border: 0;background-color:transparent">
                        <div class="invalid-feedback  mt-1">هذا الحقل مطلوب </div>
                    </label>
                    <div class="position-relative d-inline-block">
                        <input name="mainQuestions[${mainQuestion}][minor][${minorQuestion}][answer][2][image]" type="file" style="width: 30px;position:absolute;opacity: 0;cursor: pointer;" class="ms-3">
                        <img class="ms-3" style="width: 30px;" src="{{ asset('assets/images/flowe.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="mainQuestions[${mainQuestion}][minor][${minorQuestion}][checked]"
                      id="flexRadioDefault4${main}"
                      value ="3"
                    />
                    <label
                        style="min-width:90%"
                        class="answer form-check-label radio-label"
                        for=""
                        >
                        <input name="mainQuestions[${mainQuestion}][minor][${minorQuestion}][answer][3][answer]"  required type="text" class="w-100" placeholder=" الإجابة الرابعة" style="border: 0;background-color:transparent">
                        <div class="invalid-feedback  mt-1">هذا الحقل مطلوب </div>
                    </label>
                    <div class="position-relative d-inline-block">
                        <input name="mainQuestions[${mainQuestion}][minor][${minorQuestion}][answer][3][image]" type="file" style="width: 30px;position:absolute;opacity: 0;cursor: pointer;" class="ms-3">
                        <img class="ms-3" style="width: 30px;" src="{{ asset('assets/images/flowe.jpg') }}" alt="">
                    </div>
                  </div>
                </div>
                <div class="question__field mt-3">
                  <a class="btn btn-success mb-2" for="add-note${main}"
                  style="background-color: #18b26a; border-color: #18b26a;" >
                    إضافة طريقة الحل
                  </a>
                  <textarea
                    id="add-note${main}"
                    class="form-control"
                    placeholder="من فضلك أدخل طريقة الحل"
                    name="mainQuestions[${mainQuestion}][minor][${minorQuestion}][answerway][text]"
                ></textarea>
                </div>
                <div class="btn__wrapper border-bottom pb-4">
                    <a class="add-minor btn btn__add-sec ms-2" data-main="${mainQuestion}" data-minor="${minorQuestion}">
                        إضافة سؤال فرعي
                    </a>
                </div>
                <div id="sec-question${mainQuestion}"></div>
              </div>
            </div>
        </div>
        `;

                $('#sec-question'+mainQuestion).append(sec_template);
                var upload = new FileUploadWithPreview(
                    `sec-myUniqueUploadId${mainQuestion}`
                );
    }
        </script>

        <livewire:scripts/>
    </x-slot>
</x-teacher.layouts.master>
