<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">

  <!-- bootstrap icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- icon for browser -->
  <link rel="icon" href="{{ asset('image/motherboard.png') }}">

  <!-- css file -->
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">


  <!-- fonts Lateef -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;700&family=Lateef:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">

  @yield('cssFile')

</head>
<style>
  body {
    direction: rtl;
    font-weight: 600;
    font-size: x-large;
    font-family: "Lateef", serif;
  }

  ul li {
    font-size: x-large;
  }

  .accordion-button {
    font-size: x-large;
  }
</style>

<body>



  <nav class="navbar navbar-expand-lg bg-body-tertiary py-3 z-2 w-100">
    <div class="container-fluid">
      <div class="navbar-brand fs-4">
        <span class="fw-bold text-color">متجر إلكترونيات</span>
        <img src="{{ asset('image/motherboard.png') }}" alt="circuit-board" />
      </div>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
        <ul class="navbar-nav fs-5 fw-bold">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">الصفحة الرئيسية</a>
          </li>

          <li class="nav-item">
            <a class="nav-link px-3" href="{{ route('electronics.index') }}">المتجر</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="{{ route('electronics.idea') }}">افكار للمشاريع</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="{{ route('electronics.create') }}">رفع القطعه للبيع</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="{{route('electronics.analysis')}}">تحليل مشروعك</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="{{ route('welcome') }}#contact">تواصل معنا</a>
          </li>


        </ul>
        <div class="user-auth d-flex">
          @auth
        <span class="p-2 text-color fs-5 fw-bold mx-1">
       <a class="text-color" href="{{ route('user.profile',Auth::user()->id) }}">{{ Auth::user()->name }}</a>
        </span>
        <form action="{{route('auth.logout')}}" method="POST">
        @CSRF
        <button class="nav-links rounded-2 p-2 ms-3 text-color fs-5 fw-bold" href="{{ route('auth.logout') }}">تسجيل
          الخروج</button>
        </form>
      @else
        <a class="nav-links rounded-2 mx-2 p-1 text-color fs-5 fw-bold" href="{{ route('auth.login') }}">تسجيل
        الدخول</a>
        <a class="nav-links rounded-2 mx-2 p-1  ms-3 text-color fs-5 fw-bold" href="{{ route('auth.signup') }}">إنشاء
        حساب</a>
      @endauth
        </div>

      </div>
    </div>
  </nav>
  @yield('content')


  <footer class="footer text-end w-100 py-3 bg-color overflow-hidden">
    <div class="row d-flex g-3 p-5 justify-content-between">
      <div class="col-lg-3 col-md-6">
        <h4 class="text-white fw-bold fs-5">معلومات</h4>

        <ul class="links mb-3 ">
          <li><a href="#">من نحن</a></li>
          <li><a href="#">الخدمات</a></li>
          <li><a href="#">سياسة الشراء</a></li>
          <li><a href="#">شروط الاستخدام</a></li>
          <li><a href="#">تواصل معنا</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6">
        <h4 class="text-white fw-bold fs-5">استكشف</h4>
        <ul class="links mb-3 ">
          <li><a href="#">تحليل المشاريع</a></li>
          <li><a href="#">مشاريع إلكترونية جاهزة</a></li>
          <li><a href="#">أحدث القطع</a></li>
          <li><a href="#">العروض المميزة</a></li>
          <li><a href="#">دورات تعليمية</a></li>
          <li><a href="addproduct.html">رفع منتج للبيع</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6">
        <h4 class="text-white fw-bold fs-5">القوانين</h4>
        <ul class="links mb-3 ">
          <li><a href="Privacy.html">سياسة الخصوصية</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6">
        <h4 class="text-white fw-bold fs-5">تواصل معنا</h4>

        <div class="icons d-flex mt-3 gap-4 justify-content-end">
          <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-linkedin"></i>
          <i class="fa-brands fa-github"></i>
        </div>
      </div>
    </div>
    <span class="d-inline-block w-100 text-center">Copyright &#169; 2025 . All Right Reserved</span>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.js"></script>
</body>

</html>