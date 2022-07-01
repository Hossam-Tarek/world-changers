 <!-- start navbar -->
 <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
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
        <div
            class="collapse navbar-collapse"
            id="navbarSupportedContent"
        >
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">الرئيسية</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">من نحن</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('teachers') }}">
                        المعلمون
                    </a>
                </li>
                <li class="nav-item mx-1">
                    <a
                        class="nav-link"
                        href="{{ route('register') }}"
                        id="btn__popUp"
                        data-bs-target="#choiseModal"
                        data-bs-toggle="modal"
                    >
                        إنشاء حساب
                    </a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link" href="{{ route('login') }}">
                        تسجيل دخول
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto nav-right">
                <button class="btn-subscribe btn">
                    <a href="{{ route('compition.subscribe') }}">اشترك في المسابقة</a>
                </button>
                <button type="button" class="btn-subscribe__now btn">
                    <a href="{{ route('subscribe') }}">اشترك الآن</a>
                </button>
            </ul>
        </div>
    </div>
</nav>
<!-- end navbar -->
