<div class="open-nav-on-mobile">
    <i class="fas fa-solid fa-bars" style="color: #333"></i>
</div>
<div class="navigation" >
    <ul>
        <li class="item">
            <a href="{{ route('teacher.home') }}">
                <i class="fas fa-home icon"></i>
                <span class="title">صفحتي الرئيسية</span>
            </a>
        </li>
        <li class="item {{ \Illuminate\Support\Facades\Route::is('teacher.exams.create') ? 'active' : '' }}">
            <a href="{{ route('teacher.exams.create') }}">
                <i class="far fa-edit icon"></i>
                <span class="title">إنشاء امتحان</span>
            </a>
        </li>
        <li class="item ">
            <a href="">
                <i class="fas fa-user fa-solid icon"></i>
                <span class="title">الطلاب الذين يتابعونني</span>
            </a>
        </li>
        <li class="item {{ \Illuminate\Support\Facades\Route::is('teacher.profile.edit') ? 'active' : '' }}">
            <a href="{{ route('teacher.profile.edit') }}">
                <i class="fas fa-cog icon"></i>
                <span class="title">الإعدادات</span>
            </a>
        </li>
        <li class="item {{ \Illuminate\Support\Facades\Route::is('teacher.password.change') ? 'active' : '' }}">
            <a href="{{ route('teacher.password.change') }}">
                <i class="fas fa-key icon"></i>
                <span class="title">تغير كلمة المرور</span>
            </a>
        </li>
        <li class="item">
            <form method="POST" id="logout-form" action="{{ route('teacher.logout') }}">
                @csrf
            </form>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt icon"></i>
                <span class="title">الخروج</span>
            </a>
        </li>
    </ul>
</div>
