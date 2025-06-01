@extends('layouts.app')

@section('title', 'AI Project Analyzer')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<section class="container">
    <div class="p-5 text-center">
        <h1>AI Project Analyzer</h1>
        <p class="fs-3">أدخل فكرة مشروعك ودع الذكاء الاصطناعي يقوم بتحليل مستوى الصعوبة والمكونات المطلوبة.</p>
    </div>

    <div class="row gap-3 p-5">
        <div class="col-lg-5">
            <img src="{{ asset('image/chat.png') }}" alt="chatGPT" class="w-100">
        </div>
        <div class="col-lg-6 text-end">
            <textarea placeholder="اشرح فكرة مشروعك هنا" class="form-control fs-4 text-end" id="projectIdea" rows="6"></textarea>
            <div class="mt-3">
                <button id="analyzeBtn" class="btn btn-success mb-3 fs-5">تحليل</button>
            </div>
            <div id="result" class="mt-3 text-start">
                <h2 class="fs-3">تحليل المشروع</h2>
                <pre id="analysisText" style="white-space: pre-wrap;"></pre>
            </div>
        </div>
    </div>
</section>

<script>
document.getElementById('analyzeBtn').addEventListener('click', async () => {
    const idea = document.getElementById('projectIdea').value.trim();
    if (!idea) {
        alert('يرجى إدخال فكرة المشروع.');
        return;
    }

    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    try {
        const response = await fetch('{{ route("gpt.analyze") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': token,
                'Accept': 'application/json'
            },
            body: JSON.stringify({ productName: idea })
        });

        if (!response.ok) {
            throw new Error('Network response was not ok');
        }

        const data = await response.json();

        // عرض النص الموجود في خاصية text من الرد
        document.getElementById('analysisText').textContent = data.text || 'لا يوجد تحليل.';
    } catch (error) {
        alert('حدث خطأ أثناء التحليل: ' + error.message);
    }
});
</script>
@endsection
