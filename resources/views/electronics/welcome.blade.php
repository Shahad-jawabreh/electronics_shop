@extends('layouts.app')

@section('title')
   متجر الكترونيات
@endsection

@section('content')


<header>
  <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
    <div class="carousel-inner">
      <div class="carousel-item">
        <div class="row">
          <div class="col-md-6 secondary-color-bg p-0 d-flex justify-content-center align-items-center ">
            <div class="header-content ps-5">
          
        <p class="fs-2 w-75">"قدّم لنا فكرتك، وسنزوّدك بالمكونات اللازمة ونحدد مستوى صعوبتها."
        </p>
          </div>
          </div>
          <div class="col-md-6 p-0">
            <img src="{{ asset('image/arduino.jpg') }}" alt="kanab 1 " class="img-fluid w-100"/>
          </div>

         </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-md-6 secondary-color-bg p-0 d-flex justify-content-center align-items-center ">
            <div class="header-content ps-5">
              <p class="fs-2 w-75">هل ترغب في بدء مشروع ولكنك تواجه صعوبة في اختيار الفكرة؟ الحل لدينا!            </p>
           
          </div>
          </div>
          <div class="col-md-6 p-0">
            <img src="{{asset('image/back.png')}}" alt="kanab 1 " class="img-fluid"/>
          </div>

         </div>
      </div>
      <div class="carousel-item active">
        <div class="row">
          <div class="col-md-6 secondary-color-bg p-0 d-flex justify-content-center align-items-center ">
            <div class="header-content ps-5">
              <h1 class="animantion fs-1">مرحبًا بك في متجر الإلكترونيات</h1>
              <p class="fs-1 w-75">أفضل منصة لبيع وشراء القطع الإلكترونية بسهولة وأمان</p>
          </div>
          </div>
          <div class="col-md-6 p-0">
            <img src="{{ asset('image/harrison-broadbent-VOz0gV9HC0I-unsplash.jpg') }}" alt="kanab 1 " class="img-fluid"/>
          </div>

         </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</header>


<section class="services pb-5">
  <h2>الخدمات والمميزات <i class="bi bi-cloud-check"></i> </h2>
  <div class="container">
    <div class="row gap-4 text-center justify-content-center">
      <div class="col-lg-3 col-md-5 card ">
        <img src="{{ asset('image/chat.png') }}" alt="chatGPT" class="card-img-top">
        <div class="card-body d-flex  flex-column fs-5">
          <h3  class="card-title fw-bold text-color"> تحليل الذكاء الاصطناعي</h3>
          <p class="card-text">أدخل فكرة مشروعك وسيتولى نظامنا الذكي تحليلها واقتراح القطع الإلكترونية المناسبة لك</p>
          <a href="/chatGPT.html" target="_blank" class="btn btn-primary bg-color fw-bold">المزيد</a>
        </div>
      </div>
      <div class="col-lg-3 col-md-5 card" >
        <img src="{{ asset('image/s.png') }}" alt="idea" class="card-img-top">
        <div class="card-body  d-flex  flex-column fs-5">
          <h3  class="card-title fw-bold text-color"> مشاريع وأفكار جاهزة</h3>
          <p class="card-text">مجموعة متنوعة من المشاريع الإلكترونية مع الأكواد والشرح التفصيلي.</p>
          <a href="./projectIdea.html" target="_blank" class="btn btn-primary bg-color fw-bold">المزيد</a>
        </div>
      </div>
      <div class="col-lg-3 col-md-5 card" >
        <img   src="{{ asset('image/sell.png') }}" alt="sell" class="card-img-top">
        <div class="card-body d-flex  flex-column fs-5">
          <h3  class="card-title  fw-bold text-color"> بيع وإدارة المنتجات</h3>
          <p class="card-text">أضف قطعك الإلكترونية التي ترغب في بيعها، وقم بتعديلها أو تحديثها بسهولة في أي وقت</p>
          <a href="./addproduct.html" target="_blank" class="btn btn-primary bg-color fw-bold">المزيد</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact fs-4 py-5" id="contact">
  <h2><i class="bi bi-send px-2"></i>تواصل معنا  </h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
            <video autoplay loop muted playsinline class="background-video" style="width: 100%;">
                <source src="{{ asset('image/uu.mp4') }}" type="video/mp4">
              </video>
              
        </div>
        <div class="col-lg-5 text-end ">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">الايميل</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class=" mb-3">
              <textarea placeholder="محتوى الرسالة" class="form-control fs-4 text-end" id="exampleFormControlTextarea1" rows="6"></textarea>
            </div>
            <div class="mb-3">
              <label for="country">مكان السكن</label>
              <select id="country" name="country" class="form-control" >
                <option value="nablus">نابلس</option>
                <option value="ramllah">رام الله</option>
                <option value="qalqila">قلقيلية</option>
                <option value="jenin">جنين</option>
                <option value="tulkarm">طولكرم</option>
                <option value="tubas">طوباس</option>
                <option value="hebron">الخليل</option>
                <option value="jareco">اريحا</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary bg-color fw-bold">ارسال</button>
          </form>
        </div>
        
      </div>
    </div>
</section>

<section class="faq py-5 bg-light">
  <div class="container w-50">
    <h2 class="text-center mb-4"> الأسئلة الشائعة</h2>
    <div class="accordion" id="faqAccordion">
      
      <!-- Question 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
            <i class="bi bi-question-circle me-2"></i> كيف يمكنني التسجيل في الموقع؟
          </button>
        </h2>
        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            يمكنك التسجيل عبر النقر على زر "إنشاء حساب جديد" في صفحة تسجيل الدخول وملء البيانات المطلوبة.
          </div>
        </div>
      </div>

      <!-- Question 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
            <i class="bi bi-lock me-2"></i> هل بياناتي الشخصية آمنة؟
          </button>
        </h2>
        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            نعم، نحن نستخدم أحدث تقنيات التشفير لحماية بيانات المستخدمين وتأمين المعلومات الشخصية.
          </div>
        </div>
      </div>

      <!-- Question 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
            <i class="bi bi-credit-card me-2"></i> ما هي طرق الدفع المتاحة؟
          </button>
        </h2>
        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            نقبل الدفع عبر البطاقات الائتمانية، PayPal، والحوالات البنكية.
          </div>
        </div>
      </div>

      <!-- Question 4 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
            <i class="bi bi-truck me-2"></i> متى سيتم توصيل طلبي؟
          </button>
        </h2>
        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            يعتمد وقت التوصيل على موقعك. عادةً يتم الشحن خلال 3-5 أيام عمل داخل الدولة و7-14 يومًا دوليًا.
          </div>
        </div>
      </div>

      <!-- Question 5 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
            <i class="bi bi-arrow-clockwise me-2"></i> هل يمكنني إرجاع المنتج إذا لم يكن مناسبًا؟
          </button>
        </h2>
        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            نعم، يمكنك إرجاع المنتج خلال 14 يومًا من استلامه بشرط أن يكون بحالته الأصلية.
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection