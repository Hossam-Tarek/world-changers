<div class="open-nav-on-mobile">
    <i class="fas fa-solid fa-bars" style="color: #333"></i>
</div>
<div class="navigation" >
    <ul>
        <li class="item">
            <a href="">
                <i class="fas fa-home icon"></i>
                <span class="title">صفحتي الرئيسية</span>
            </a>
        </li>
        <li class="item active">
            <a href="">
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
        <li class="item">
            <a href="">
                <i class="fas fa-cog icon"></i>
                <span class="title">الإعدادات</span>
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
