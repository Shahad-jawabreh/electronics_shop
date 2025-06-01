@extends('layouts.app')

@section('title')
 تسجيل دخول
@endsection

@section('content')


<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-4">
        <div class="card shadow-lg">
            <div class="card-body text-end">
                <!-- زر الرجوع -->
                <a href="#" class="btn btn-outline-secondary btn-sm float-start" onclick="history.back()">
                    <i class="bi bi-arrow-right"></i>
                </a>
                <h2 class="mb-4 text-center text-primary fw-bold">تسجيل الدخول</h2>
                
                <form action="{{ route('auth.login') }}" method="POST" >
                    @CSRF
                    <div class="form-floating mb-3">
                        <input type="email" id="email" name="email" class="form-control" required placeholder="البريد الإلكتروني">
                        <label for="email">البريد الإلكتروني</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" id="password" name="password" class="form-control" required placeholder="كلمة المرور">
                        <label for="password">كلمة المرور</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 fw-bold">
                        <i class="bi bi-box-arrow-in-right"></i> تسجيل الدخول
                    </button>
                </form>

                <p class="mt-3 text-center">ليس لديك حساب؟ <a href="signup.html" class="fw-bold text-decoration-none">إنشاء حساب جديد</a></p>
            </div>
        </div>
    </div>
</div>
@endsection