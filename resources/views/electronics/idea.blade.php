
@extends('layouts.app')
@section('title')
project idea
@endsection


@section('content')
@section('cssFile')
    <link rel="stylesheet" href="{{ asset('css/idea.css') }}">
@endsection
    <section>
       <div class="container">
        <div class="row gap-4 projects justify-content-center py-5">
            <!-- Project 1 -->
            <div class="col-lg-4 col-md-6 rounded-2 bg-white p-3 cards">
                <h2 class="fs-3 fw-bold mb-3 pt-0">مساعد المنزل الذكي</h2>
                <p class="fs-5 text-secondary">يتيح لك هذا المشروع التحكم في الأجهزة المنزلية عن بعد باستخدام هاتفك أو الأوامر الصوتية.</p>
                <h3 class="fs-5 pt-3 text-primary-emphasis">اقتراحات للقطع المطلوبة</h3>
                <div class="container">
                    <div class="row gap-3">
                    <div class="col-lg-5 col-md-6  border border-secondary text-center p-2 rounded-2 ">
                        <img src="{{ asset('image/arduinowithcam.png') }}" alt="ESP32-CAM">
                        <p>ESP32-CAM</p>
                    </div>
                    <div class="col-lg-5 col-md-6  border border-secondary text-center p-2 rounded-2 ">
                        <img src="{{ asset('image/lcd.png') }}" alt="LCD Screen">
                        <p>LCD Screen 16×2</p>
                    </div>
                    <div class="col-lg-5 col-md-6  border border-secondary text-center p-2 rounded-2 ">
                        <img src="{{ asset('image//ةخفهخى.حىل.jpg') }}" alt="Motion Sensor">
                        <p>Motion Sensor</p>
                    </div>
                    <div class="col-lg-5 col-md-6 border border-secondary text-center p-2 rounded-2 ">
                        <img src="{{ asset('image/arduino.png') }}" alt="Arduino">
                        <p>Arduino</p>
                    </div>
                </div></div>
                
            </div>

            <!-- Project 2 -->
            <div class="col-lg-4 col-md-6 rounded-2 bg-white p-3 cards">
                <h2 class="fs-3 fw-bold mb-3 pt-0">نظام مراقبة الصحة البشرية</h2>
                <p  class="fs-5 text-secondary">يقوم هذا النظام بمراقبة معايير الصحة البشرية مثل ضغط الدم ومعدل ضربات القلب ومستوى الأكسجين في الدم.</p>
                <h3 class="fs-5 pt-3 text-primary-emphasis">اقتراحات للقطع المطلوبة</h3>
                <div class="container"><div class="row gap-3">
                    <div class="col-lg-5 col-md-6 border border-secondary text-center p-2 rounded-2 ">
                        <img src="{{ asset('image/arduino.png') }}" alt="Arduino">
                        <p>Arduino</p>
                    </div>
                    <div class="col-lg-5 col-md-6  border border-secondary text-center p-2 rounded-2 ">
                        <img src="{{ asset('image/a4988.jpg') }}" alt="ESP32-CAM">
                        <p>A4988 Driver</p>
                    </div>
                    <div class="col-lg-5 col-md-6  border border-secondary text-center p-2 rounded-2 ">
                        <img src="{{ asset('image/lcd.png') }}" alt="LCD Screen">
                        <p>LCD Screen 16×2</p>
                    </div>
                </div></div>
            </div>
        </div>
       </div>
    </section>

 
@endsection