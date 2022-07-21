<nav class="navbar navbar-expand-lg navbar-light" >
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/images/home/logo.png') }}" class="img-fluid" />
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/">الرئيسية</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">من نحن</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto nav-right">
                <!-- <button class="btn follow" style="color: black;"> -->
                <!-- <i class="_icon fal fa-heart fas"></i> -->
                <!-- متابعة
              </button> -->
                <div class="dropdown">
                    <button
                        class="bg-transparent p-0 user-drop border-0 dropdown-toggle"
                        type="button"
                        id="dropdownMenuButton1"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <figure>
                            <a href="./teacher-profile.html" style="cursor: pointer">
                                <img class="teacher-image" src="{{ empty(auth('teacher')->user()->image_url) ? asset('assets/images/person.jpg') : asset(auth('teacher')->user()->image_url) }}" alt="teacher-figure"/>
                            </a>
                        </figure>
                    </button>
                    <!-- <ul class="dropdown-menu" style="left: 0;right: auto;" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item down-prof mb-1" href="#">الملف الشخصى</a></li>
                    <li><a class="dropdown-item down-prof" href="#">تسجيل الخروج</a></li>
                  </ul> -->
                </div>
            </ul>
        </div>
    </div>
</nav>
