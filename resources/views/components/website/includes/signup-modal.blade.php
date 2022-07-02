  <!-- Start Modal Free -->
  <div
  class="modal fade create-modal"
  id="signUpChoiseModal"
  tabindex="-1"
  aria-labelledby="signUpChoiseModal"
  aria-hidden="true"
>
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header">
              <h2>إنشاء حساب جديد</h2>
              <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
              ></button>
          </div>
          <div class="modal-body">
              <div class="bg__popUp__content">
                  <a href="{{ route('teacher.register') }}">
                      <button class="bg__popUp__item">المعلم</button>
                  </a>
                  <a href="{{ route('register') }}">
                      <button class="bg__popUp__item student">
                          الطالب
                      </button>
                  </a>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- End Modal Free -->
