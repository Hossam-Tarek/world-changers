<x-teacher.layouts.master>
    <x-slot name="styles">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    </x-slot>

    <section class="after-navbar-section subjects-section">
        <div class="container">
            <section class="sec subjects-section mb-3">
                <h2 class="text-center shadow p-3 sm-fnn" style="text-align: center;color: #00838d; font-family: 'DroidArabicKufiRegular';">
                    مَا أَشْرَقَتْ فِي اَلْكَوْنِ أَيُّ حَضَارَةٍ إِلَّا وَكَانَتْ مِنْ
                    ضِيَاءِ مُعَلِّمٍ
                </h2>
                <div class="container">
                    <div class="slider-wrapper">
                        <div class="slider">
                            <!-- start card -->
                            <div class="subject">
                                <div class="subject__card">
                                    <figure>
                                        <img src="{{ asset('assets/images/teach1.jpg') }}" alt="" />
                                        <p></p>
                                    </figure>
                                </div>
                            </div>

                            <div class="subject">
                                <div class="subject__card">
                                    <figure>
                                        <img src="{{ asset('assets/images/teach2.jpg') }}" alt="" />
                                    </figure>
                                </div>
                            </div>
                            <div class="subject">
                                <div class="subject__card">
                                    <figure>
                                        <img src="{{ asset('assets/images/teach3.jpg') }}" alt="" />
                                    </figure>
                                </div>
                            </div>
                            <div class="subject">
                                <div class="subject__card">
                                    <figure>
                                        <img src="{{ asset('assets/images/teach4.jpg') }}" alt="" />
                                    </figure>
                                </div>
                            </div>
                            <div class="subject">
                                <div class="subject__card">
                                    <figure>
                                        <img src="{{ asset('assets/images/teach1.jpg') }}" alt="" />
                                    </figure>
                                </div>
                            </div>

                            <div class="subject">
                                <div class="subject__card">
                                    <figure>
                                        <img src="{{ asset('assets/images/teach2.jpg') }}" alt="" />
                                    </figure>
                                </div>
                            </div>

                            <div class="subject">
                                <div class="subject__card">
                                    <figure>
                                        <img src="{{ asset('assets/images/teach3.jpg') }}" alt="" />
                                    </figure>
                                </div>
                            </div>

                            <div class="subject">
                                <div class="subject__card">
                                    <figure>
                                        <img src="{{ asset('assets/images/teach4.jpg') }}" alt="" />
                                    </figure>
                                </div>
                            </div>

                            <div class="subject">
                                <div class="subject__card">
                                    <figure>
                                        <img src="{{ asset('assets/images/teach1.jpg') }}" alt="" />
                                    </figure>
                                </div>
                            </div>

                            <div class="subject">
                                <div class="subject__card">
                                    <figure>
                                        <img src="{{ asset('assets/images/teach2.jpg') }}" alt="" />
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="teacher-profile-right border-0 teacher-profile-right2" style="
                height: auto;
                background-color: transparent;
                border: 0 !important;
                box-shadow: none !important;
              ">
                        <div class="subject-overview__teacher text-center">
                            <div class="teacher d-block">
                                <div>
                                    <div>
                                        <img style="width: 10rem; border: 1px solid #ddd; height: 10rem; margin-bottom: 10px; border-radius: 50%; margin-left: 0;" src="{{ asset('assets/images/teach2.jpg') }}" alt="">
                                    </div>
                                    <div
                                        class="d-flex justify-content-center align-items-center">
                                        <h5 class="me-2">
                                            الأستاذ/أحمد محمود
                                            <i class="_icon fal fa-heart fas fs-4"></i>
                                        </h5>
                                    </div>

                                    <h6><b>0123456789</b></h6>
                                    <!-- <p>مدرس مادة الرياضيات باللغة العربية</p> -->
                                </div>
                            </div>
                            <ul class="teacher-icons px-0">
                                <li class="zoom">
                                    <button style="min-width: 100px" class="btn btn-primary" onClick="onClick()">
                                        <i class="fa-solid fa-user-plus"></i>
                                        <a id="clicks" class="text-white">0</a>
                                    </button>
                                </li>
                                <li class="zoom">
                                    <button style="min-width: 100px" class="btn btn-danger">
                                        <i class="fas fa-question-circle"></i>
                                        <span>2000</span>
                                    </button>
                                </li>
                            </ul>
                        </div>

                        <ul class="main-section__items">
                            <li class="item">
                                <i class="fas fa-book zoom"></i>
                                <span class="teacher__p">
                                    مادة الفيزياء باللغة العربية – الصف الثالث الثانوي العام
                                </span>
                            </li>
                            <li class="item">
                                <i class="fas fa-map-marker-alt zoom"></i>
                                <span class="teacher__p"> القاهرة-القاهرة الجديدة </span>
                            </li>
                            <li class="item">
                                <i class="fas fa-building zoom"></i>
                                <span class="teacher__p"> سنتر مكة -سنتر بسملة </span>
                            </li>
                            <li class="item">
                                <i class="fa-solid fa-phone-flip"></i>
                                <span class="teacher__p"> أرقام الهاتف </span>
                            </li>
                            <li class="item">
                                <i class="fa-solid fa-calendar"></i>
                                <span class="teacher__p"> تاريخ التسجيل في الموقع </span>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <i class="far fa-envelope zoom"></i>
                                    <span class="teacher__p">
                                        المواقع الإلكترونية الخاصة بالمعلم
                                        <br />
                                        <small>www.test.com</small>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <!--start teacher-profile-->
            <section class="section teacher-profile">
                <div class="container">
                    <div class="row w-100 mx-0 px-0">
                        <div class="col-md-6 teacher-profile-right">
                            <div class="subject-overview__teacher">
                                <h3 class="mt-3">نبذة تعريفية</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <iframe
                                class="video"
                                src="https://www.youtube.com/embed/IUTGFQpKaPU"
                                title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                </div>
            </section>

            <section class="container">
                <div class="row w-100 mx-0 px-2 pb-2 pt-3 shadow border">
                    <div class="col-md-6 d-flex align-items-center" style="color: #f38761">
                        <div class="w-100">
                            <h6 class="fw-bold d-flex align-items-center justify-content-between">
                                <span>إجمالى عدد الأسئلة</span>
                                <span>10550</span>
                            </h6>
                            <h6 class="fw-bold d-flex align-items-center justify-content-between" style="color: #60c5a8">
                                <span>إجمالى عدد مرات الإجابة عن أسئلتي</span>
                                <span>10550</span>
                            </h6>
                            <h6 class="fw-bold d-flex align-items-center justify-content-between" style="color: #2196f3">
                                <span>عدد الطلاب المستفيدين من أسئلتى</span>
                                <span>8516</span>
                            </h6>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-wrap">
                        <div style="max-width: 176px; margin-right: auto">
                            <h6>المواد</h6>
                            <div>
                                <label class="check-container" checked="checked">
                                    <span>رياضة</span>
                                    <input type="checkbox" />
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <label class="check-container"
                            >English
                                <input type="checkbox" />
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-container"
                            >علوم
                                <input type="checkbox" />
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div style="max-width: 176px; margin-right: auto">
                            <h6>الصف</h6>
                            <div>
                                <label class="check-container">
                                    <span>الصف الاول الثانوى</span>
                                    <input type="checkbox" />
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <label class="check-container"
                                >الصف الثانى الثانوى
                                <input type="checkbox" />
                                <span class="checkmark"></span>
                            </label>
                            <label class="check-container"
                                >الصف الثالث الثانوى
                                <input type="checkbox" checked="checked" />
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </section>
            <!--end teacher-profile-->
            <!-- Start repeated-questions -->
            <section class="sec repeat-questions">
                <div class="container">

                    <div class="row w-100 mx-0 px-0">
                        <div class="col-md-12">
                            <h5 class="mb-3">الصف الثالث الثانوى</h5>
                            <h6 class="mb-3" style="color: #60c5a8">اللغه العربية</h6>
                            <div class="repeat-questions__accordion">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header shadow p-2" id="flush-headingOne">
                                            <button class="accordion-button collapsed parent" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                                مادة الرياضيات
                                            </button>
                                        </h2>
                                        <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                                    aria-expanded="true" aria-controls="collapseOne">
                                                                الوحدة الأولي
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <li class="mb-2">
                                                                        <span>الاختبار الأول</span>
                                                                        <div>
                                                                            <div class="d-flex align-items-center justify-content-between">
                                                                                <div class="f-10 d-flex text-white" style="width: 250px; height: 16px; border-radius: 3px; overflow: hidden; ">
                                                                                    <div class="text-center h-100" style="
                                                background-color: rgb(
                                                  57,
                                                  179,
                                                  57
                                                );
                                                width: 50%;
                                              ">
                                                                                        50%
                                                                                    </div>
                                                                                    <div class="text-center h-100" style="
                                                background-color: rgb(
                                                  255 88 88
                                                );
                                                width: 50%;
                                              ">
                                                                                        50%
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex">
                                                                                    <!-- <span class="fw-bold py-2 me-2" style="color: rgb(12 185 0);">
                                                                                    أجاب عليه 50  طالب
                                                                                  </span> -->

                                                                                    <button type="button" class="reset-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color: rgb(12 185 0);">
                                                                                        أجاب عنه 50 طالب
                                                                                    </button>
                                                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                        <div class="modal-dialog modal-dialog-centered" style="max-width: 1000px;">
                                                                                            <div class="modal-content" style="
                                                    margin: auto;
                                                    padding: 9px;
                                                  ">
                                                                                                <div class="modal-header pb-0 d-block">
                                                                                                    <button style="position: absolute;top: 12px;left: 12px;background-color: #ffc1c7cc;background-image: none;color: #000;opacity: 1;display: inline-flex;align-items: center;justify-content: center;"
                                                                                                        type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                                                        <i class="fas fa-times"></i>
                                                                                                    </button>

                                                                                                    <h6 class="text-center w-100" id="exampleModalLabel">
                                                                                                        أجاب عنه 50 طالب
                                                                                                    </h6>
                                                                                                    <div style="max-width: 200px;" class="mb-2">
                                                                                                        <input type="text" class="form-control" placeholder="البحث عن كلمة" id="">
                                                                                                    </div>
                                                                                                    <div>
                                                                                                        <div class="col-md-12">
                                                                                                            <table class="table table-striped table-bordered">
                                                                                                                <thead>
                                                                                                                <tr style="color: #fff; background-color: #00bcd5;">
                                                                                                                    <th> صورة</th>
                                                                                                                    <th> اسم الطالب</th>
                                                                                                                    <th>المحافظة</th>
                                                                                                                    <th>المركز / المنطقة</th>
                                                                                                                    <th> الدراسة باللغة </th>
                                                                                                                    <th> الشعبة</th>
                                                                                                                    <th> تاريخ اجتياز الاختبار</th>
                                                                                                                    <th>النسبة المئوية فى الإختبار</th>
                                                                                                                </tr>
                                                                                                                </thead>
                                                                                                                <tbody>
                                                                                                                <tr>
                                                                                                                    <td></td>
                                                                                                                    <td> محمد محمود</td>
                                                                                                                    <td>القاهرة</td>
                                                                                                                    <td>المقطم</td>
                                                                                                                    <td></td>
                                                                                                                    <td></td>
                                                                                                                    <td>20</td>
                                                                                                                    <td>1 يناير 2022</td>
                                                                                                                </tr>

                                                                                                                </tbody>
                                                                                                            </table>
                                                                                                        </div>
                                                                                                        <!-- <input type="text" class="form-control"> -->
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- <div
                                                                                                  class="modal-footer text-center justify-content-center"
                                                                                                >
                                                                                                  <div class="w-100">

                                                                                                  </div> -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                    <span>
                                              <div class="dropdown">
                                                <button
                                                    class="px-0 btn dropdown-toggle"
                                                    type="button"
                                                    id="dropdownMenuButton1"
                                                    data-bs-toggle="dropdown"
                                                    aria-expanded="false"
                                                >
                                                  <i
                                                      class="fas fa-ellipsis-v text-dark"
                                                  ></i>
                                                </button>
                                                <ul
                                                    class="dd-ff dropdown-menu"
                                                    aria-labelledby="dropdownMenuButton1"
                                                >
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                    >تعديل</a
                                                    >
                                                  </li>
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModa50"
                                                    >حذف</a
                                                    >
                                                  </li>
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModa50-han"
                                                    >الموافقة على نشر الاختبار</a
                                                    >
                                                  </li>
                                                </ul>
                                                <div
                                                    class="modal fade"
                                                    id="exampleModa50"
                                                    tabindex="-1"
                                                    aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true"
                                                >
                                                  <div
                                                      class="modal-dialog modal-dialog-centered"
                                                      style="max-width: 350px;"

                                                  >
                                                    <div
                                                        class="modal-content"
                                                        style="

                                                        margin: auto;
                                                        padding: 9px;
                                                      "
                                                    >

                                                      <div
                                                          class="modal-header pb-2 pt-2"
                                                      >

                                                        <h4
                                                            class="text-center w-100 fw-bold"
                                                            id="exampleModalLabel"
                                                        >

                                                          حذف الإختبار
                                                        </h4>

                                                      </div>
                                                      <div>
                                                        <input type="checkbox">
                                                        <label for="">نعم، أريد أن أحذف هذا الاختبار</label>
                                                      </div>
                                                      <div
                                                          class="modal-footer text-center justify-content-center"
                                                      >
                                                        <button
                                                            type="button"
                                                            style="
                                                            background-color: #dc3545;
                                                          "
                                                            data-bs-dismiss="modal"
                                                            class="btn btn-sm btn-danger delete_question custom-file-container__image-clear"
                                                        >
                                                          نعم
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="btn btn-sm btn-success custom-file-container__image-clear"
                                                            data-bs-dismiss="modal"
                                                        >
                                                          لا
                                                        </button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div
                                                    class="modal fade"
                                                    id="exampleModa50-han"
                                                    tabindex="-1"
                                                    aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true"
                                                >
                                                  <div
                                                      class="modal-dialog modal-dialog-centered"
                                                      style="max-width: 400px;"

                                                  >
                                                    <div
                                                        class="modal-content"
                                                        style="

                                                        margin: auto;
                                                        padding: 9px;
                                                      "
                                                    >

                                                     <h5 class="text-success text-center p-5 fw-bold"> تمت الموافقة على نشر الإختبار</h5>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="mb-2">
                                                                        <span>الاختبار الأول</span>
                                                                        <div>
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between"
                                                                            >
                                                                                <div
                                                                                    class="f-10 d-flex text-white"
                                                                                    style="
                                              width: 250px;
                                              height: 16px;
                                              border-radius: 3px;
                                              overflow: hidden;
                                            "
                                                                                >
                                                                                    <div
                                                                                        class="text-center h-100"
                                                                                        style="
                                                background-color: rgb(
                                                  57,
                                                  179,
                                                  57
                                                );
                                                width: 80%;
                                              "
                                                                                    >
                                                                                        80%
                                                                                    </div>
                                                                                    <div
                                                                                        class="text-center h-100"
                                                                                        style="
                                                background-color: rgb(
                                                  255 88 88
                                                );
                                                width: 20%;
                                              "
                                                                                    >
                                                                                        20%
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex">
                                                                                    <!-- <span class="fw-bold py-2 me-2" style="color: rgb(12 185 0);">
                                                                                    أجاب عليه 50  طالب
                                                                                    </span> -->

                                                                                    <button
                                                                                        type="button"
                                                                                        class="reset-btn"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#exampleModal"
                                                                                        style="color: rgb(12 185 0);"
                                                                                    >
                                                                                        أجاب عنه 50 طالب
                                                                                    </button>



                                                                                    <span>
                                              <div class="dropdown">
                                                <button
                                                    class="px-0 btn dropdown-toggle"
                                                    type="button"
                                                    id="dropdownMenuButton1"
                                                    data-bs-toggle="dropdown"
                                                    aria-expanded="false"
                                                >
                                                  <i
                                                      class="fas fa-ellipsis-v text-dark"
                                                  ></i>
                                                </button>
                                                <ul
                                                    class="dd-ff dropdown-menu"
                                                    aria-labelledby="dropdownMenuButton1"
                                                >
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                    >تعديل</a
                                                    >
                                                  </li>
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModa50"
                                                    >حذف</a
                                                    >
                                                  </li>
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModa50-han"
                                                    >الموافقة على نشر الاختبار</a
                                                    >
                                                  </li>
                                                </ul>


                                              </div>
                                            </span>
                                                                                </div>

                                                                            </div>
                                                                    </li>
                                                                    <li class="mb-2">
                                                                        <span>الاختبار الأول</span>
                                                                        <div>
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between"
                                                                            >
                                                                                <div
                                                                                    class="f-10 d-flex text-white"
                                                                                    style="
                                              width: 250px;
                                              height: 16px;
                                              border-radius: 3px;
                                              overflow: hidden;
                                            "
                                                                                >
                                                                                    <div
                                                                                        class="text-center h-100"
                                                                                        style="
                                                background-color: rgb(
                                                  57,
                                                  179,
                                                  57
                                                );
                                                width: 80%;
                                              "
                                                                                    >
                                                                                        80%
                                                                                    </div>
                                                                                    <div
                                                                                        class="text-center h-100"
                                                                                        style="
                                                background-color: rgb(
                                                  255 88 88
                                                );
                                                width: 20%;
                                              "
                                                                                    >
                                                                                        20%
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex">
                                                                                    <!-- <span class="fw-bold py-2 me-2" style="color: rgb(12 185 0);">
                                                                                    أجاب عليه 50  طالب
                                                                                  </span> -->

                                                                                    <button
                                                                                        type="button"
                                                                                        class="reset-btn"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#exampleModal"
                                                                                        style="color: rgb(12 185 0);"
                                                                                    >
                                                                                        أجاب عنه 50 طالب
                                                                                    </button>
                                                                                    <div
                                                                                        class="modal fade ddd"
                                                                                        id="exampleModal"
                                                                                        tabindex="-1"
                                                                                        aria-labelledby="exampleModalLabel"
                                                                                        aria-hidden="true"
                                                                                    >

                                                                                    </div>


                                                                                    <span>
                                              <div class="dropdown">
                                                <button
                                                    class="px-0 btn dropdown-toggle"
                                                    type="button"
                                                    id="dropdownMenuButton1"
                                                    data-bs-toggle="dropdown"
                                                    aria-expanded="false"
                                                >
                                                  <i
                                                      class="fas fa-ellipsis-v text-dark"
                                                  ></i>
                                                </button>
                                                <ul
                                                    class="dd-ff dropdown-menu"
                                                    aria-labelledby="dropdownMenuButton1"
                                                >
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                    >تعديل</a
                                                    >
                                                  </li>
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModa50"
                                                    >حذف</a
                                                    >
                                                  </li>
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModa50-han"
                                                    >الموافقة على نشر الاختبار</a
                                                    >
                                                  </li>
                                                </ul>

                                              </div>
                                            </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="mb-2">
                                                                        <span>الاختبار الأول</span>
                                                                        <div>
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between"
                                                                            >
                                                                                <div
                                                                                    class="f-10 d-flex text-white"
                                                                                    style="
                                              width: 250px;
                                              height: 16px;
                                              border-radius: 3px;
                                              overflow: hidden;
                                            "
                                                                                >
                                                                                    <div
                                                                                        class="text-center h-100"
                                                                                        style="
                                                background-color: rgb(
                                                  57,
                                                  179,
                                                  57
                                                );
                                                width: 80%;
                                              "
                                                                                    >
                                                                                        80%
                                                                                    </div>
                                                                                    <div
                                                                                        class="text-center h-100"
                                                                                        style="
                                                background-color: rgb(
                                                  255 88 88
                                                );
                                                width: 20%;
                                              "
                                                                                    >
                                                                                        20%
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex">
                                                                                    <!-- <span class="fw-bold py-2 me-2" style="color: rgb(12 185 0);">
                                                                                    أجاب عليه 50  طالب
                                                                                  </span> -->

                                                                                    <button
                                                                                        type="button"
                                                                                        class="reset-btn"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#exampleModal"
                                                                                        style="color: rgb(12 185 0);"
                                                                                    >
                                                                                        أجاب عنه 50 طالب
                                                                                    </button>


                                                                                    <span>
                                              <div class="dropdown">
                                                <button
                                                    class="px-0 btn dropdown-toggle"
                                                    type="button"
                                                    id="dropdownMenuButton1"
                                                    data-bs-toggle="dropdown"
                                                    aria-expanded="false"
                                                >
                                                  <i
                                                      class="fas fa-ellipsis-v text-dark"
                                                  ></i>
                                                </button>
                                                <ul
                                                    class="dd-ff dropdown-menu"
                                                    aria-labelledby="dropdownMenuButton1"
                                                >
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                    >تعديل</a
                                                    >
                                                  </li>
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModa50"
                                                    >حذف</a
                                                    >
                                                  </li>
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModa50-han"
                                                    >الموافقة على نشر الاختبار</a
                                                    >
                                                  </li>
                                                </ul>

                                              </div>
                                            </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingTwo">
                                                            <button
                                                                class="accordion-button collapsed"
                                                                type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwo"
                                                                aria-expanded="false"
                                                                aria-controls="collapseTwo"
                                                            >
                                                                الوحدة الثانية
                                                            </button>
                                                        </h2>
                                                        <div
                                                            id="collapseTwo"
                                                            class="accordion-collapse collapse"
                                                            aria-labelledby="headingTwo"
                                                            data-bs-parent="#accordionExample"
                                                        >
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <li class="mb-2">
                                                                        <span>الاختبار الأول</span>
                                                                        <div>
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between"
                                                                            >
                                                                                <div
                                                                                    class="f-10 d-flex text-white"
                                                                                    style="
                                              width: 250px;
                                              height: 16px;
                                              border-radius: 3px;
                                              overflow: hidden;
                                            "
                                                                                >
                                                                                    <div
                                                                                        class="text-center h-100"
                                                                                        style="
                                                background-color: rgb(
                                                  57,
                                                  179,
                                                  57
                                                );
                                                width: 80%;
                                              "
                                                                                    >
                                                                                        80%
                                                                                    </div>
                                                                                    <div
                                                                                        class="text-center h-100"
                                                                                        style="
                                                background-color: rgb(
                                                  255 88 88
                                                );
                                                width: 20%;
                                              "
                                                                                    >
                                                                                        20%
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex">


                                                                                    <button
                                                                                        type="button"
                                                                                        class="reset-btn"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#exampleModal"
                                                                                        style="color: rgb(12 185 0);"
                                                                                    >
                                                                                        أجاب عنه 50 طالب
                                                                                    </button>



                                                                                    <span>
                                              <div class="dropdown">
                                                <button
                                                    class="px-0 btn dropdown-toggle"
                                                    type="button"
                                                    id="dropdownMenuButton1"
                                                    data-bs-toggle="dropdown"
                                                    aria-expanded="false"
                                                >
                                                  <i
                                                      class="fas fa-ellipsis-v text-dark"
                                                  ></i>
                                                </button>
                                                <ul
                                                    class="dd-ff dropdown-menu"
                                                    aria-labelledby="dropdownMenuButton1"
                                                >
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                    >تعديل</a
                                                    >
                                                  </li>
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModa50"
                                                    >حذف</a
                                                    >
                                                  </li>
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModa50-han"
                                                    >الموافقة على نشر الاختبار</a
                                                    >
                                                  </li>
                                                </ul>

                                              </div>
                                            </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="mb-2">
                                                                        <span>الاختبار الأول</span>
                                                                        <div>
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between"
                                                                            >
                                                                                <div
                                                                                    class="f-10 d-flex text-white"
                                                                                    style="
                                              width: 250px;
                                              height: 16px;
                                              border-radius: 3px;
                                              overflow: hidden;
                                            "
                                                                                >
                                                                                    <div
                                                                                        class="text-center h-100"
                                                                                        style="
                                                background-color: rgb(
                                                  57,
                                                  179,
                                                  57
                                                );
                                                width: 80%;
                                              "
                                                                                    >
                                                                                        80%
                                                                                    </div>
                                                                                    <div
                                                                                        class="text-center h-100"
                                                                                        style="
                                                background-color: rgb(
                                                  255 88 88
                                                );
                                                width: 20%;
                                              "
                                                                                    >
                                                                                        20%
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex">
                                                                                    <!-- <span class="fw-bold py-2 me-2" style="color: rgb(12 185 0);">
                                                                                    أجاب عليه 50  طالب
                                                                                  </span> -->

                                                                                    <button
                                                                                        type="button"
                                                                                        class="reset-btn"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#exampleModal"
                                                                                        style="color: rgb(12 185 0);"
                                                                                    >
                                                                                        أجاب عنه 50 طالب
                                                                                    </button>



                                                                                    <span>
                                              <div class="dropdown">
                                                <button
                                                    class="px-0 btn dropdown-toggle"
                                                    type="button"
                                                    id="dropdownMenuButton1"
                                                    data-bs-toggle="dropdown"
                                                    aria-expanded="false"
                                                >
                                                  <i
                                                      class="fas fa-ellipsis-v text-dark"
                                                  ></i>
                                                </button>
                                                <ul
                                                    class="dd-ff dropdown-menu"
                                                    aria-labelledby="dropdownMenuButton1"
                                                >
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                    >تعديل</a
                                                    >
                                                  </li>
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModa50"
                                                    >حذف</a
                                                    >
                                                  </li>
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModa50-han"
                                                    >الموافقة على نشر الاختبار</a
                                                    >
                                                  </li>
                                                </ul>

                                              </div>
                                            </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="mb-2">
                                                                        <span>الاختبار الأول</span>
                                                                        <div>
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between"
                                                                            >
                                                                                <div
                                                                                    class="f-10 d-flex text-white"
                                                                                    style="
                                              width: 250px;
                                              height: 16px;
                                              border-radius: 3px;
                                              overflow: hidden;
                                            "
                                                                                >
                                                                                    <div
                                                                                        class="text-center h-100"
                                                                                        style="
                                                background-color: rgb(
                                                  57,
                                                  179,
                                                  57
                                                );
                                                width: 80%;
                                              "
                                                                                    >
                                                                                        80%
                                                                                    </div>
                                                                                    <div
                                                                                        class="text-center h-100"
                                                                                        style="
                                                background-color: rgb(
                                                  255 88 88
                                                );
                                                width: 20%;
                                              "
                                                                                    >
                                                                                        20%
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex">
                                                                                    <!-- <span class="fw-bold py-2 me-2" style="color: rgb(12 185 0);">
                                                                                    أجاب عليه 50  طالب
                                                                                  </span> -->

                                                                                    <button
                                                                                        type="button"
                                                                                        class="reset-btn"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#exampleModal"
                                                                                        style="color: rgb(12 185 0);"
                                                                                    >
                                                                                        أجاب عنه 50 طالب
                                                                                    </button>



                                                                                    <span>
                                              <div class="dropdown">
                                                <button
                                                    class="px-0 btn dropdown-toggle"
                                                    type="button"
                                                    id="dropdownMenuButton1"
                                                    data-bs-toggle="dropdown"
                                                    aria-expanded="false"
                                                >
                                                  <i
                                                      class="fas fa-ellipsis-v text-dark"
                                                  ></i>
                                                </button>
                                                <ul
                                                    class="dd-ff dropdown-menu"
                                                    aria-labelledby="dropdownMenuButton1"
                                                >
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                    >تعديل</a
                                                    >
                                                  </li>
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModa50"
                                                    >حذف</a
                                                    >
                                                  </li>
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModa50-han"
                                                    >الموافقة على نشر الاختبار</a
                                                    >
                                                  </li>
                                                </ul>

                                              </div>
                                            </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="mb-2">
                                                                        <span>الاختبار الأول</span>
                                                                        <div>
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between"
                                                                            >
                                                                                <div
                                                                                    class="f-10 d-flex text-white"
                                                                                    style="
                                              width: 250px;
                                              height: 16px;
                                              border-radius: 3px;
                                              overflow: hidden;
                                            "
                                                                                >
                                                                                    <div
                                                                                        class="text-center h-100"
                                                                                        style="
                                                background-color: rgb(
                                                  57,
                                                  179,
                                                  57
                                                );
                                                width: 80%;
                                              "
                                                                                    >
                                                                                        80%
                                                                                    </div>
                                                                                    <div
                                                                                        class="text-center h-100"
                                                                                        style="
                                                background-color: rgb(
                                                  255 88 88
                                                );
                                                width: 20%;
                                              "
                                                                                    >
                                                                                        20%
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex">
                                                                                    <!-- <span class="fw-bold py-2 me-2" style="color: rgb(12 185 0);">
                                                                                    أجاب عليه 50  طالب
                                                                                  </span> -->

                                                                                    <button
                                                                                        type="button"
                                                                                        class="reset-btn"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#exampleModal"
                                                                                        style="color: rgb(12 185 0);"
                                                                                    >
                                                                                        أجاب عنه 50 طالب
                                                                                    </button>



                                                                                    <span>
                                              <div class="dropdown">
                                                <button
                                                    class="px-0 btn dropdown-toggle"
                                                    type="button"
                                                    id="dropdownMenuButton1"
                                                    data-bs-toggle="dropdown"
                                                    aria-expanded="false"
                                                >
                                                  <i
                                                      class="fas fa-ellipsis-v text-dark"
                                                  ></i>
                                                </button>
                                                <ul
                                                    class="dd-ff dropdown-menu"
                                                    aria-labelledby="dropdownMenuButton1"
                                                >
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                    >تعديل</a
                                                    >
                                                  </li>
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModa50"
                                                    >حذف</a
                                                    >
                                                  </li>
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModa50-han"
                                                    >الموافقة على نشر الاختبار</a
                                                    >
                                                  </li>
                                                </ul>

                                              </div>
                                            </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                الوحدة الثالثة
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <ul>
                                                                    <li class="mb-2">
                                                                        <span>الاختبار الأول</span>
                                                                        <div>
                                                                            <div class="d-flex align-items-center justify-content-between">
                                                                                <div class="f-10 d-flex text-white" style="
                                              width: 250px;
                                              height: 16px;
                                              border-radius: 3px;
                                              overflow: hidden;
                                            ">
                                                                                    <div class="text-center h-100" style="
                                                background-color: rgb(
                                                  57,
                                                  179,
                                                  57
                                                );
                                                width: 80%;
                                              ">
                                                                                        80%
                                                                                    </div>
                                                                                    <div class="text-center h-100" style="
                                                background-color: rgb(
                                                  255 88 88
                                                );
                                                width: 20%;
                                              ">
                                                                                        20%
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex">
                                                                                    <!-- <span class="fw-bold py-2 me-2" style="color: rgb(12 185 0);">
                                                                                    أجاب عليه 50  طالب
                                                                                  </span> -->
                                                                                    <button type="button" class="reset-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color: rgb(12 185 0);">
                                                                                        أجاب عنه 50 طالب
                                                                                    </button>

                                                                                    <span>
                                                                                        <div class="dropdown">
                                                                                        <button class="px-0 btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                          <i class="fas fa-ellipsis-v text-dark"></i>
                                                                                        </button>
                                                                                        <ul class="dd-ff dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                                          <li>
                                                                                            <a class="dropdown-item" href="#">تعديل</a>
                                                                                          </li>
                                                                                          <li>
                                                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModa50">حذف</a>
                                                                                          </li>
                                                                                          <li>
                                                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModa50-han">الموافقة على نشر الاختبار</a>
                                                                                          </li>
                                                                                        </ul>

                                                                                      </div>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="mb-2">
                                                                        <span>الاختبار الأول</span>
                                                                        <div>
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between"
                                                                            >
                                                                                <div
                                                                                    class="f-10 d-flex text-white"
                                                                                    style="
                                              width: 250px;
                                              height: 16px;
                                              border-radius: 3px;
                                              overflow: hidden;
                                            "
                                                                                >
                                                                                    <div
                                                                                        class="text-center h-100"
                                                                                        style="
                                                background-color: rgb(
                                                  57,
                                                  179,
                                                  57
                                                );
                                                width: 80%;
                                              "
                                                                                    >
                                                                                        80%
                                                                                    </div>
                                                                                    <div
                                                                                        class="text-center h-100"
                                                                                        style="
                                                background-color: rgb(
                                                  255 88 88
                                                );
                                                width: 20%;
                                              "
                                                                                    >
                                                                                        20%
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex">
                                                                                    <!-- <span class="fw-bold py-2 me-2" style="color: rgb(12 185 0);">
                                                                                    أجاب عليه 50  طالب
                                                                                  </span> -->

                                                                                    <button
                                                                                        type="button"
                                                                                        class="reset-btn"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#exampleModal"
                                                                                        style="color: rgb(12 185 0);"
                                                                                    >
                                                                                        أجاب عنه 50 طالب
                                                                                    </button>



                                                                                    <span>
                                              <div class="dropdown">
                                                <button
                                                    class="px-0 btn dropdown-toggle"
                                                    type="button"
                                                    id="dropdownMenuButton1"
                                                    data-bs-toggle="dropdown"
                                                    aria-expanded="false"
                                                >
                                                  <i
                                                      class="fas fa-ellipsis-v text-dark"
                                                  ></i>
                                                </button>
                                                <ul
                                                    class="dd-ff dropdown-menu"
                                                    aria-labelledby="dropdownMenuButton1"
                                                >
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                    >تعديل</a
                                                    >
                                                  </li>
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModa50"
                                                    >حذف</a
                                                    >
                                                  </li>
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModa50-han"
                                                    >الموافقة على نشر الاختبار</a
                                                    >
                                                  </li>
                                                </ul>

                                              </div>
                                            </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="mb-2">
                                                                        <span>الاختبار الأول</span>
                                                                        <div>
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between"
                                                                            >
                                                                                <div
                                                                                    class="f-10 d-flex text-white"
                                                                                    style="
                                              width: 250px;
                                              height: 16px;
                                              border-radius: 3px;
                                              overflow: hidden;
                                            "
                                                                                >
                                                                                    <div
                                                                                        class="text-center h-100"
                                                                                        style="
                                                background-color: rgb(
                                                  57,
                                                  179,
                                                  57
                                                );
                                                width: 80%;
                                              "
                                                                                    >
                                                                                        80%
                                                                                    </div>
                                                                                    <div
                                                                                        class="text-center h-100"
                                                                                        style="
                                                background-color: rgb(
                                                  255 88 88
                                                );
                                                width: 20%;
                                              "
                                                                                    >
                                                                                        20%
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex">
                                                                                    <!-- <span class="fw-bold py-2 me-2" style="color: rgb(12 185 0);">
                                                                                    أجاب عليه 50  طالب
                                                                                  </span> -->

                                                                                    <button
                                                                                        type="button"
                                                                                        class="reset-btn"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#exampleModal"
                                                                                        style="color: rgb(12 185 0);"
                                                                                    >
                                                                                        أجاب عنه 50 طالب
                                                                                    </button>



                                                                                    <span>
                                              <div class="dropdown">
                                                <button
                                                    class="px-0 btn dropdown-toggle"
                                                    type="button"
                                                    id="dropdownMenuButton1"
                                                    data-bs-toggle="dropdown"
                                                    aria-expanded="false"
                                                >
                                                  <i
                                                      class="fas fa-ellipsis-v text-dark"
                                                  ></i>
                                                </button>
                                                <ul
                                                    class="dd-ff dropdown-menu"
                                                    aria-labelledby="dropdownMenuButton1"
                                                >
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                    >تعديل</a
                                                    >
                                                  </li>
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModa510"
                                                    >حذف</a
                                                    >
                                                  </li>
                                                </ul>
                                                <div
                                                    class="modal fade"
                                                    id="exampleModa510"
                                                    tabindex="-1"
                                                    aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true"
                                                >

                                                </div>
                                              </div>
                                            </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="mb-2">
                                                                        <span>الاختبار الأول</span>
                                                                        <div>
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-between"
                                                                            >
                                                                                <div
                                                                                    class="f-10 d-flex text-white"
                                                                                    style="
                                              width: 250px;
                                              height: 16px;
                                              border-radius: 3px;
                                              overflow: hidden;
                                            "
                                                                                >
                                                                                    <div
                                                                                        class="text-center h-100"
                                                                                        style="
                                                background-color: rgb(
                                                  57,
                                                  179,
                                                  57
                                                );
                                                width: 80%;
                                              "
                                                                                    >
                                                                                        80%
                                                                                    </div>
                                                                                    <div
                                                                                        class="text-center h-100"
                                                                                        style="
                                                background-color: rgb(
                                                  255 88 88
                                                );
                                                width: 20%;
                                              "
                                                                                    >
                                                                                        20%
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-flex">
                                                                                    <!-- <span class="fw-bold py-2 me-2" style="color: rgb(12 185 0);">
                                                                                    أجاب عليه 50  طالب
                                                                                  </span> -->

                                                                                    <button
                                                                                        type="button"
                                                                                        class="reset-btn"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#exampleModal"
                                                                                        style="color: rgb(12 185 0);"
                                                                                    >
                                                                                        أجاب عنه 50 طالب
                                                                                    </button>



                                                                                    <span>
                                              <div class="dropdown">
                                                <button
                                                    class="px-0 btn dropdown-toggle"
                                                    type="button"
                                                    id="dropdownMenuButton1"
                                                    data-bs-toggle="dropdown"
                                                    aria-expanded="false"
                                                >
                                                  <i
                                                      class="fas fa-ellipsis-v text-dark"
                                                  ></i>
                                                </button>
                                                <ul
                                                    class="dd-ff dropdown-menu"
                                                    aria-labelledby="dropdownMenuButton1"
                                                >
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                    >تعديل</a
                                                    >
                                                  </li>
                                                  <li>
                                                    <a
                                                        class="dropdown-item"
                                                        href="#"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModa511"
                                                    >حذف</a
                                                    >
                                                  </li>
                                                </ul>
                                                <div
                                                    class="modal fade"
                                                    id="exampleModa511"
                                                    tabindex="-1"
                                                    aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true"
                                                >

                                                </div>
                                              </div>
                                            </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End repeated-questions -->
        </div>
    </section>
</x-teacher.layouts.master>
