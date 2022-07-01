     <x-website.layouts.master>
   <!--start home bg-->
   <!--start home bg-->
   <section class="home-bg-items">
       <div class="container">
           <div class="home-bg pt-3">
               <figure class="">
                   <img src="{{ asset('assets/images/home/bg.png') }}" alt="" />
               </figure>
           </div>
       </div>
   </section>
   <!--end home bg-->
   <!--end home bg-->
   <!--start  school__classes-->
   <section class="school__classes padding-y">
       <div class="container">
           <div class="school__classes__items row justify-content-center">
               <div class="col-lg-3 col-md-6">
                   <div class="school__classes__item color-1">
                       <h3 class="mt-2">الصف الثالث الثانوي العام</h3>
                       <p>الشعبة العلمية - علوم</p>
                       <div class="go-corner color-1" href="#">
                           <div class="go-arrow">→</div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6">
                   <div class="school__classes__item color-1">
                       <h3 class="mt-2">الصف الثالث الثانوي العام</h3>
                       <p>الشعبة العلمية - رياضيات</p>
                       <div class="go-corner color-1" href="#">
                           <div class="go-arrow">→</div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6">
                   <div class="school__classes__item col mg color-1">
                       <h3 class="mt-2">الصف الثالث الثانوي العام</h3>
                       <p>الشعبة الأدبية</p>
                       <div class="go-corner color-1" href="#">
                           <div class="go-arrow">→</div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="school__classes__items row justify-content-center">
               <div class="col-lg-3 col-md-6">
                   <div class="school__classes__item color-2">
                       <h3 class="mt-2">الصف الثاني الثانوي العام</h3>
                       <p>الشعبة العلمية </p>
                       <div class="go-corner color-2" href="#">
                           <div class="go-arrow">→</div>
                       </div>
                   </div>
               </div>

               <div class="col-lg-3 col-md-6">
                   <div class="school__classes__item mg color-2">
                       <h3 class="mt-2">الصف الثاني الثانوي العام</h3>
                       <p>الشعبة الأدبية</p>
                       <div class="go-corner color-2" href="#">
                           <div class="go-arrow">→</div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="school__classes__items row justify-content-center">
               <div class="col-lg-3 col-md-6">
                   <div class="school__classes__item color-3">
                       <h3 class="mt-2">الصف الأول الثانوي العام</h3>
                       <div class="go-corner color-3" href="#">
                           <div class="go-arrow">→</div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>

   <!--end school__classes-->

   <section class="site-free text-center">
       <a class="btn-use-free" style="color: #03a9f4" href="{{ route('use.free') }}">
           " يحق استخدام الموقع مجانا طوال العام لمن أحد والديه متوفي عند الله، و للطلاب ذوي الهمم، والطلاب الذين أحد والديهم من ذوي الهمم، والطلاب الخمسة الأوائل في كل مدرسة في مصر"
       </a>
   </section>
   <section class="text-center padd-y">
       <a href="contact.html" class="{{ route('contact') }}">تواصل معنا</a>
   </section>
   <!-- <div class="lead text-center mt-4 pt-2 footer-p">
       <div class="container border-top">
        <span> تشكر إدارة الموقع </span>
        <a href="" > <strong style="color: #106cbc;">محمود مجاهد</strong>  </a>
        <div>
         على مجهوداته في إثراء الطلاب بالمزيد من العلم وتدعوكم للتواصل معه
        </div>
       </div>
     </div> -->
    </x-website.layouts.master>
