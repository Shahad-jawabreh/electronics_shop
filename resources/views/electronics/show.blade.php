@extends('layouts.app')

@section('title', 'تفاصيل القطعة')

@section('content')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h3>تفاصيل القطعة</h3>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="{{ asset('storage/' . $electronic->image) }}" alt="صورة القطعة" class="img-fluid rounded" style="max-height: 300px;">
                    </div>

                    <h4 class="mb-3">اسم القطعة: <span class="text-muted">{{ $electronic->name }}</span></h4>
                    <p><strong>السعر:</strong> ₪{{ $electronic->price }}</p>
                    <p><strong>الكمية المتوفرة:</strong> {{ $electronic->quantity }}</p>
                    <p><strong>الحالة:</strong> {{ $electronic->condition }}</p>

                    <a href="{{ route('electronics.index') }}" class="btn btn-secondary mt-4">العودة للقائمة</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
