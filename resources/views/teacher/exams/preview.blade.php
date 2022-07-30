<x-teacher.layouts.master>
    <x-slot name="styles">
        @if ($examLanguage == 'ltr')
        <link rel="stylesheet" href="{{ asset('assets/css/main-en.css') }}">
        @endif
        <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.svg') }}" />
    </x-slot>
       <!-- start questions page -->
  <section class="after-navbar-section">
    <div class="container">
      <!-- start head -->
      <section class="bg-white pt-5  questions__head mb-0 pb-0 sticky-top">
        <header>
          <div class="d-flex justify-content-between">
            <h2 class="text-start mt-5">{{ $exam->title }}</h2>
            <h3 class="mt-5">
              <strong>{{ $exam->teacher->name }}</strong> -
              {{ ArabicDate($exam->created_at) }}
          </h3>
          </div>
        </header>
        <div class="sticky-top questions__head bg-white ">
          <div class="d-flex align-items-center justify-content-between mb-2">
            <div class="text-start justify-slef-center time">
                {{ $examTime }}:00
            </div>
            <div class="d-flex">
              <button class="reset-btn voice">
                <i id="sound-btn" class="fas fa-volume-up"></i>
              </button>
              <button class="reset-btn lgoin-challange">
                اشترك في المسابقة الآن
              </button>
            </div>
          </div>
          <div class="my-progress-bar">
            <div class="my-progress my-progress-equ" style="width: 0"></div>
          </div>
          <p class="questions__numbers">
            لقد قمت بالإجابة عن
            <strong class="total-resolve">0</strong>
            من
            <strong class="total-qu">20</strong>
            سؤال
          </p>
        </div>
      </section>

      <!-- end head -->
      <!-- start items -->
      @foreach ($exam->mainQuestions as $mainQuestion)

      <div class="bg-white p-4 border shadow mb-4">
          @if ($mainQuestion->title)
              <h5>{{ $mainQuestion->title }}</h5>
          @endif
          @if ($mainQuestion->body)
              <p>{{ $mainQuestion->body }}</p>
          @endif
          @if ($mainQuestion->image)
                <img style="max-height: 100px" src="{{ asset($mainQuestion->image) }}" alt="">
          @endif
    </div>
      <section class="questions__items">
        <form action="">
        @foreach ( $mainQuestion->questions as $key => $minorQuestion )
        <!-- start question-item -->
        <div class="questions-item">
          <h5>{{ $key+1 }}</h5>
          @if ($minorQuestion->body)
                <p>{{ $minorQuestion->body }}</p>
         @endif
         @if ($minorQuestion->image)
                <img style="max-height: 100px" src="{{ asset($minorQuestion->image) }}" alt="">
         @endif
          <div class="sel-form">
            @foreach ($minorQuestion->answers as $keyAnswer=>$answer)
            <div class="radio-input-field">
              <input type="radio" value="{{ $keyAnswer+1 }}" name="question{{ $key }}" id="check{{ $keyAnswer+1 }}" />
              <label class="radio-input-label" for="check{{ $keyAnswer+1 }}">
                <span class="number">{{ $keyAnswer+1 }}</span>
                @if ($answer->body)
                    <span class="answer">{{ $answer->body }}</span>
                @endif
                @if ($answer->image)
                    <img style="max-height: 100px" src="{{ asset($answer->image) }}" alt="">
                @endif
              </label>
            </div>
            @endforeach
          </div>
          <div class="questions-item__footer d-flex justify-content-end mt-2">
            <button type="button" class="reset-btn" data-bs-toggle="tooltip" data-bs-placement="top"
              title="أضف إلي حافظتي">
              <i class="fas fa-plus-circle icon green-c"></i>
            </button>
            <button type="button" class="reset-btn"  data-bs-toggle="modal" data-bs-target="#exampleModal">
              <i class="fas fa-exclamation-circle icon red-c"></i>
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content" style="max-width: 350px; margin: auto; padding: 9px;">
                  <div class="modal-header pb-0 d-block">
                      <button
                      style="
                        position: absolute;
                          top: 12px;
                          left: 5px;
                          background-color: #ffc1c7cc;
                          background-image: none;
                          color: #000;
                          opacity: 1;
                          display: inline-flex;
                          align-items: center;
                          justify-content: center;
                      "
                       type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                       <i class="fas fa-times"></i>
                      </button>

                      <h6 class="text-center w-100" id="exampleModalLabel">سبب الإبلاغ</h6>
                      <div>
                        <textarea class="form-control" name="" id="" cols="30" rows="4"></textarea>
                        <!-- <input type="text" class="form-control"> -->
                      </div>
                  </div>
                  <div class="modal-footer text-center justify-content-center">
                    <div class="w-100">
                      <button type="submit" class="submit_btn w-100">
                          إرسال
                          <img
                              src="assets/images/home/arrow-left.svg"
                              alt="send"
                          />
                      </button>
                  </div>
                  </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end question-item -->
        @endforeach
      </form>
        <!-- end question-item -->
      </section>
      <!-- end items -->
      @endforeach
      <!-- start button -->
      <footer class="d-flex justify-content-center questions-page__footer my-2">
        <button class="reset-btn send">
          <i class="fas fa-file-import"></i>
          إرسال الإجابات
        </button>
        <button class="reset-btn add-to-yours">
          <i class="fas fa-paste"></i>
          أضف إلي حافظتي
        </button>

      </footer>
      <!-- end button -->
    </div>
  </section>
  <div class="lead text-center mt-4 pt-2 footer-p">
    <div class="container border-top fs-5">
      <span>   تشكر إدارة الموقع الأستاذ/ </span>
      <a href="" > <strong class="fs-4" style="color: #00bcd5;">محمود مجاهد</strong>  </a>
      <div>
       على مجهوداته في إثراء الطلاب بالمزيد من العلم وتدعوكم للتواصل معه
      </div>
    </div>
  </div>
  <x-slot name="scripts">

    </x-slot>
</x-teacher.layouts.master>
