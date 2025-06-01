@extends('layouts.app')

@section('title')
 اضافة قطقة جديدة
@endsection

@section('content')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h2 class="text-center mb-4">إضافة قطعة جديدة</h2>
                    <form method="POST" action="{{ route('electronics.store') }}" enctype="multipart/form-data">
                    @csrf    
                    <div class="mb-3">
                            <label for="name" class="form-label">اسم القطعة:</label>
                            <input type="text" id="name" value="{{ old('name') }}" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">السعر (₪):</label>
                            <input type="number" id="price" name="price" value="'{{ old('price') }}" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="quantity" class="form-label">الكمية:</label>
                            <input type="number" id="quantity" value="{{ old('quantity') }}" name="quantity" class="form-control" required min="1">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">حالة القطعة:</label>
                            <div class="d-flex gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="new" name="condition" value="جديد" checked>
                                    <label class="form-check-label" for="new">جديد</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="used" name="condition" value="مستعمل">
                                    <label class="form-check-label" for="used">مستعمل</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">تحميل صورة:</label>
                            <input type="file" id="image" name="image" class="form-control" accept="image/*" required>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <button type="submit" class="btn btn-primary w-100"> إضافة القطعة</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection