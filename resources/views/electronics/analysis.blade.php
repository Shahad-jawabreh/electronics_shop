@extends('layouts.app')

@section('title')
analysis project
@endsection

@section('content')


    <section class="container">
        <div class="p-5 text-center">
        <h1>AI Project Analyzer</h1>
        <p class="fs-3">أدخل فكرة مشروعك ودع الذكاء الاصطناعي يقوم بتحليل مستوى الصعوبة والمكونات المطلوبة.</p>
        </div>
        <div class="row gap-3 p-5">
            <div class="col-lg-5">
                <img src="{{ asset('image/chat.png') }}" alt="chatGPT" class="w-100">
            </div>
            <div  class="col-lg-6 text-end ">
                <textarea placeholder="اشرح فكرة مشروعك هنا" class="form-control fs-4 text-end" id="exampleFormControlTextarea1" rows="6"></textarea>
                <div class="mt-3">
                    <button type="submit" class="btn btn-success mb-3 fs-5 ">تحليل </button>
                  </div>
            <div id="result mt-3">
                <h2 class="fs-3">تحليل المشروع</h2>
                <p><strong>:مستوى الصعوبة </strong> <span id="difficulty"></span></p>
                <h3> : المكونات المطلوبة</h3>
                <ul id="componentsList"></ul>
                </div>
                
            </div>
        </div>
    </section>

    @endsection