@extends('layouts.app')

@section('title')
 تسجيل حساب
@endsection

@section('content')

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-8">
        <div class="card shadow-lg">
            <div class="card-body text-end">
                <h2 class="mb-4">إنشاء حساب جديد</h2>
                @if ($errors->any())
                    <div style="color:red;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('signup.store') }}" method="POST">
                    @csrf 
                    <div class="mb-3">
                        <label for="username" class="form-label">اسم المستخدم</label>
                        <input type="text" id="username" name="username" value="{{ old('username') }}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">البريد الإلكتروني</label>
                        <input type="email" id="email" value="{{ old('email') }}" name="email" class="form-control" required>
                    </div>
 <div class="mb-3">
        <label for="phone" class="form-label">رقم الهاتف</label>
        <input type="text" id="phone" name="phone" value="{{ old('phone') }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">العنوان</label>
        <select id="address" name="address" class="form-control" required>
            <option value="">-- اختر العنوان --</option>
            <option value="القدس" {{ old('address') == 'القدس' ? 'selected' : '' }}>القدس</option>
            <option value="نابلس" {{ old('address') == 'نابلس' ? 'selected' : '' }}>نابلس</option>
            <option value="رام الله" {{ old('address') == 'رام الله' ? 'selected' : '' }}>رام الله</option>
            <option value="الخليل" {{ old('address') == 'الخليل' ? 'selected' : '' }}>الخليل</option>
            <option value="بيت لحم" {{ old('address') == 'بيت لحم' ? 'selected' : '' }}>بيت لحم</option>
            <option value="طولكرم" {{ old('address') == 'طولكرم' ? 'selected' : '' }}>طولكرم</option>
            <option value="قلقيلية" {{ old('address') == 'قلقيلية' ? 'selected' : '' }}>قلقيلية</option>
            <option value="جنين" {{ old('address') == 'جنين' ? 'selected' : '' }}>جنين</option>
            <option value="سلفيت" {{ old('address') == 'سلفيت' ? 'selected' : '' }}>سلفيت</option>
            <option value="أريحا" {{ old('address') == 'أريحا' ? 'selected' : '' }}>أريحا</option>
            <option value="غزة" {{ old('address') == 'غزة' ? 'selected' : '' }}>غزة</option>
        </select>
    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">كلمة المرور</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="confirm-password" class="form-label">تأكيد كلمة المرور</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                        </div>

                    <button type="submit" class="btn btn-primary w-100">إنشاء حساب</button>
                </form>

                <p class="mt-3">هل لديك حساب؟ <a href="login.html">تسجيل الدخول</a></p>
            </div>
        </div>
    </div>
</div>
@endsection