@extends('layouts.app')

@section('title')
    store
@endsection

@section('content')
    <section class="p-5">
        <div class="container">

            {{-- 🔍 شريط البحث والفلاتر والسلة --}}
            <div class="row mb-4">
                <div class="col-md-3 mb-2">
                    {{-- زر السلة --}}
                    <a href="{{ route('cart.index') }}" class="btn btn-outline-primary w-100 fw-bold">
                        <i class="bi bi-cart"></i>
                    </a>
                </div>
                <div class="col-md-6 mb-2">
                    {{-- نموذج البحث --}}
                    <form action="{{ route('products.search') }}" method="GET">
                        <div class="input-group">
                            <input type="text" name="query" class="form-control" placeholder="ابحث عن منتج...">
                            <button type="submit" class="btn btn-primary">بحث</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 mb-2">
                    {{-- فلتر بالحالة --}}
                    <form action="{{ route('products.filter') }}" method="GET">
                        <select name="condition" class="form-select" onchange="this.form.submit()">
                            <option value="">كل الحالات</option>
                            <option value="جديد">جديد</option>
                            <option value="مستعمل">مستعمل</option>
                        </select>
                    </form>
                </div>
            </div>

            {{-- عرض المنتجات --}}
            @if($products->isEmpty())
                <p class="text-center fs-4 fw-bold text-muted">لا توجد منتجات .</p>
            @else
                <div class="row g-4">
                    @foreach($products as $product)
                        <div class="col-lg-3 col-md-6">
                            <div class="card text-center shadow-sm">
                                @if($product->condition == 'جديد')
                                    <span class="badge bg-success position-absolute top-0 start-0 m-2 px-3 py-2 fs-5">جديد</span>
                                @elseif($product->condition == 'مستعمل')
                                    <span
                                        class="badge bg-warning text-dark position-absolute top-0 start-0 m-2 px-3 py-2 fs-5">مستعمل</span>
                                @endif

                                <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top"
                                    alt="{{ $product->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="fw-bold text-primary">&#x20AA;{{ $product->price }}</p>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <a href="{{ route('user.profile', $product->user_id) }}" class="text-decoration-none">
                                            {{ $product->user->name ?? 'مستخدم غير معروف' }}
                                        </a>
                                        <i class="bi bi-person-circle text-primary fs-5 px-2"></i>
                                    </div>
                                    <div class="mt-3">
                                        @auth
                                            <form action="{{ route('cart.add', $product->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                <button type="submit" class="btn btn-info text-white fw-bold px-2 py-1 rounded-2">
                                                    إضافة إلى السلة
                                                </button>
                                            </form>
                                        @else
                                            <a href="{{ route('auth.login') }}" class="btn btn-warning fw-bold px-2 py-1 rounded-2">
                                                إضافة إلى السلة
                                            </a>
                                        @endauth
                                        <a href="{{ route('electronics.show', $product->id) }}"
                                            class="btn btn-primary text-white fw-bold px-2 py-1 rounded-2">التفاصيل</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </section>
@endsection