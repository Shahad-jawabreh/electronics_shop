@extends('layouts.app')

@section('title')
تسجيل حساب
@endsection

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-8">
        <div class="card shadow-lg">
            <div class="card-body text-end">
                <h2 class="mb-4 text-center">إنشاء حساب جديد</h2>

                {{-- عرض الأخطاء --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- فورم التسجيل --}}
                <form action="{{ route('signup.store') }}" method="POST" novalidate>
                    @csrf

                    <div class="mb-3">
                        <label for="username" class="form-label">اسم المستخدم</label>
                        <input type="text" id="username" name="username" value="{{ old('username') }}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">البريد الإلكتروني</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">رقم الهاتف</label>
                        <input type="text" id="phone" name="phone" value="{{ old('phone') }}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">العنوان</label>
                        <select id="address" name="address" class="form-select" required>
                            <option value="">-- اختر العنوان --</option>
                            @foreach (['القدس', 'نابلس', 'رام الله', 'الخليل', 'بيت لحم', 'طولكرم', 'قلقيلية', 'جنين', 'سلفيت', 'أريحا', 'غزة'] as $city)
                                <option value="{{ $city }}" {{ old('address') == $city ? 'selected' : '' }}>{{ $city }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">كلمة المرور</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">تأكيد كلمة المرور</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">إنشاء حساب</button>
                </form>

                <p class="mt-3 text-center">
                    هل لديك حساب؟ 
                    <a href="{{ route('auth.login') }}">تسجيل الدخول</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
