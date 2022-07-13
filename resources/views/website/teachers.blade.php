<x-website.layouts.master>

<!--start search-->
<div class="container after-navbar-section">

    <!--end search-->
    <!--start filter-->
    <div class="filter-sec padding-y">
        <i class="fas fa-filter"></i>

        <span>استخدم الفلتر</span>
    </div>
    <div class="row horizontal-row justify-content-between ">
        <div class=" mt-2 pe-3 py-3 col-lg-3 col-sm-12 position-relative">
          <div class="position-relative w-100">
            <div class="h_sidebar">
                <div class="h_subsidebar">
                    <div class="row horizontal-row search__container" id="search">
                        <form
                            id="search-form"
                            action=""
                            method="POST"
                            enctype="multipart/form-data"
                        >
                            <div class="form-group search-box col-xs-9">
                                <input
                                    class="form-control"
                                    type="text"
                                    placeholder=" ابحث / اسم المعلم"

                                    />
                                {{-- <img
                                    class="search-icon"
                                    src="{{ asset('/assets/images/search.svg"') }}
                                    alt="show-password"
                                /> --}}

                            </div>
                        </form>
                    </div>
                    <div  id="filter">
                        <form class="filter-hidden hidden">
                            <div class="radio-select">
                                <div class="filter-icon d-flex align-items-center">
                                    <i class="fad fa-sort-alt"></i>
                                    <label class="choose-label">
                                        ترتيب عرض المعلمون
                                    </label>
                                </div>

                                <div>
                                    <input
                                        type="radio"
                                        id="follow"
                                        name="teacher-study"
                                        value="المعلمون الأكثر متابعه"
                                    />
                                    <label style="cursor: pointer;" for="follow" class="radio-label">
                                        المعلمون الأكثر متابعة
                                    </label>
                                </div>

                                <div>
                                    <input
                                        type="radio"
                                        id="dewey"
                                        name="teacher-study"
                                        value="dewey"
                                        checked
                                        id="more_active"
                                    />
                                    <label style="cursor: pointer;"  for="dewey" class="radio-label">
                                        المعلمون الأكتر نشاطا
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="filter-icon d-flex align-items-center">
                                    <i class="fas fa-bookmark"></i>
                                    <label class="choose-label">
                                        التدريس باللغة
                                    </label>
                                </div>

                                <select
                                    data-filter="lang"
                                    class="filter-lang filter"
                                >

                                    <option value="">عرض الكل</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="filter-icon d-flex align-items-center">
                                    <i class="fas fa-bookmark"></i>
                                    <label class="choose-label">اختر المادة</label>
                                </div>

                                <select
                                    data-filter="subject"
                                    class="filter-subject filter"
                                >

                                    <option value="">عرض الكل</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="filter-icon d-flex align-items-center">
                                    <i class="fas fa-user-graduate"></i>
                                    <label class="choose-label">اختر الصف</label>
                                </div>
                                <select
                                    data-filter="grade"
                                    class="filter-grade select filter"
                                >

                                    <option value="">عرض الكل</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="filter-icon d-flex align-items-center">
                                    <i class="fad fa-landmark"></i>
                                    <label class="choose-label">
                                        اختر المحافظة
                                    </label>
                                </div>
                                <select
                                    data-filter="area"
                                    class="filter-area filter"
                                >

                                    <option value="">عرض الكل</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="filter-icon d-flex align-items-center">
                                    <i class="far fa-building"></i>
                                    <label class="choose-label">
                                        اختر المنطقة/المركز
                                    </label>
                                </div>
                                <select
                                    data-filter="place"
                                    class="filter-place filter"
                                >

                                    <option value="">عرض الكل</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="filter-icon d-flex align-items-center">
                                    <i class="far fa-building"></i>
                                    <label class="choose-label">
                                        اختر المدرسة/ المركز التعليمي
                                    </label>
                                </div>
                                <select
                                    data-filter="center"
                                    class="filter-center filter"
                                >

                                    <option value="">عرض الكل</option>
                                </select>
                            </div>
                            <div>
                                <button class="search-filter-btn">
                                    <i class="fas fa-solid fa-search text-white"></i>
                                    بحث
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
           </div>
          </div>

        </div>
        <!--end filter-->
        <!--start teachers-->
        <input id="teachersData" type="hidden" value="{{json_encode($teachers)}}">
        <div class=" mt-5 row horizontal-row justify-content-center col-lg-9 col-sm-12" id="teachers">
      </div>

        <!--end teachers-->
    </div>
</div>
<x-slot name="scripts">
    <script src="{{ asset('assets/js/teachers.js') }}"></script>
    <script src="{{ asset('assets/js/selectize.min.js') }}"></script>
    <script>
        (function() {
            $("select").selectize({
                maxItems: null,
            });
        })();
    </script>
</x-slot>
</x-website.layouts.master>
