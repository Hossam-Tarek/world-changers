     <x-website.layouts.master>
          <!-- start contact-us -->
    <section class="sec contact-us mb-4 border-bottom-0">
        <div class="container">
          <header class="main-header">
            <span></span>
            <h2>تواصل معنا</h2>
          </header>
          <p class="text">يسعدنا استقبال جميع نصائحكم ومقترحاتكم واستفساراتكم</p>

          <div class="row w-100 mx-0 px-0">
            <div class="col-md-6">
              <figure class="d-flex align-items-center h-100">
                <img
                  class=""
                  src="./assets/images/contact-us.png"
                  alt="contact-us"
                />
              </figure>
            </div>
            <div class="col-md-6">
              <form class="needs-validation" novalidate>
                <input
                  class="form-control"
                  type="text"
                  name="name"
                  placeholder="الاسم"
                />
                <input
                  class="form-control"
                  type="text"
                  name="phone"
                  placeholder="رقم الهاتف"
                />
                <input
                  class="form-control"
                  name="email"
                  placeholder="البريد الإلكتروني"
                />
                <textarea
                  class="form-control"
                  name="message"
                  placeholder="اكتبوا لنا رسالتكم ..."
                  rows="3"
                  required
                ></textarea>
                <div style="font-size: 17px; text-align: right; margin-top: -6px; margin-bottom: 10px;" class="invalid-feedback">هذا الحقل مطلوب</div>
                <div class="" style="font-size: 18px">
                  <div class="mb-3">
                    <div
                      class="custom-file-container multiple"
                      data-upload-id="myUniqueUploadId2"
                    >
                      <label
                        for="file-upload-for-label-click1"
                        class="w-100 mb-2"
                      >
                        <div class="d-flex justify-content-between">
                          <div style="cursor: pointer" class="add-teacher-file">
                            <i
                              class="fas fa-plus-circle"
                              style="color: #03a9f4"
                            ></i>
                            اختر الملف (يمكنك إضافة أكثر من صورة)
                          </div>
                          <a
                            href="javascript:void(0)"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal22"
                            title="Clear Image"
                          >
                            <i
                              class="fas fa-trash-alt"
                              style="color: #f44336"
                            ></i>
                          </a>
                          <div
                            class="modal fade"
                            id="exampleModal22"
                            tabindex="-1"
                            aria-labelledby="exampleModalLabel"
                            aria-hidden="true"
                          >
                            <div class="modal-dialog modal-dialog-centered">
                              <div
                                class="modal-content"
                                style="
                                  max-width: 329px;
                                  margin: auto;
                                  padding: 9px;
                                "
                              >
                                <div class="modal-header pb-0">
                                  <h6
                                    class="text-center w-100"
                                    id="exampleModalLabel"
                                  >
                                    هل تريد حذف جميع المرفقات؟
                                  </h6>
                                </div>
                                <div
                                  class="modal-footer text-center justify-content-center flex-nowrap "
                                >
                                  <button
                                    type="button"
                                    style="background-color: #dc3545"
                                    data-bs-dismiss="modal"
                                    class="btn btn-sm btn-danger custom-file-container__image-clear"
                                  >
                                    نعم
                                  </button>
                                  <button
                                    type="button"
                                    class="btn btn-sm btn-secondary"
                                    data-bs-dismiss="modal"
                                  >
                                    لا
                                  </button>
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

                <button type="submit" class="btn w-full">
                  إرسال
                  <img src="assets/images/home/arrow-left.svg" alt="" />
                </button>
              </form>
            </div>
          </div>
        </div>
      </section>
      <div class="border-top pt-3">
        <div
          class="container py-2 d-flex align-items-center justify-content-between"
        >
          <div>
            <a style="color: #000" href="tel:01148445994"> 01148445994 </a>
          </div>
          <div>
            <a class="fw-bold" href="https://worldchangerseg.com/">
              worldchangerseg.com
            </a>
          </div>
          <div>
            <a href="" style="font-size: 24px; color: #03a9f4">
              <i class="fab fa-facebook"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- end contact-us -->
    <x-slot name="scripts">
        <script src="{{ asset('assets/js/selectize.min.js') }}"></script>
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
              "use strict";
              $("select").selectize({
                maxItems: null,
              });
              var upload = new FileUploadWithPreview("myUniqueUploadId2");
              var anotherUpload = new FileUploadWithPreview("myUniqueUploadId2");

              $("#add-field").click(function () {
                let template = `<div class="d-flex justify-content-between field-wrapper">
                              <input
                                type="text"
                                id="site"
                                class="form-control"
                                style="width: 95%"
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
                                      name="phone"
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
    </x-slot>
    </x-website.layouts.master>
