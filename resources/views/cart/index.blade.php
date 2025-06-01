@extends('layouts.app')

@section('title', 'تفاصيل القطعة')

@section('content')


<section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">

            <div class="row">

              <div class="col-lg-7">
                <h5 class="mb-3"><a href="{{ url()->previous() }}" class="text-body"><i
                      class="fas fa-long-arrow-alt-left me-2"></i>متابعة التسوق</a></h5>
                <hr>

                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    <p class="mb-1">سلة التسوق</p>
                    <p class="mb-0">لديك {{ $cartItems->count() }} منتجات في سلة المشتريات</p>
                  </div>
                  <div>
                    <p class="mb-0"><span class="text-muted">ترتيب حسب:</span> <a href="#!"
                        class="text-body">السعر <i class="fas fa-angle-down mt-1"></i></a></p>
                  </div>
                </div>

                {{-- Loop through cart items --}}
                @foreach ($cartItems as $item)
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-row align-items-center">
                        <div>
                          <img
                            src="{{ asset('storage/' . $item->product->image)  ?? 'https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp' }}"
                            class="img-fluid rounded-3" alt="{{ $item->product->name }}" style="width: 65px;">
                        </div>
                        <div class="ms-3">
                          <h5>{{ $item->product->name }}</h5>
                          <p class="small mb-0">{{ $item->product->description ?? '' }}</p>
                        </div>
                      </div>
                      <div class="d-flex flex-row align-items-center">
                        <div style="width: 50px;">
                          <h5 class="fw-normal mb-0">{{ $item->quantity }}</h5>
                        </div>
                        <div style="width: 80px;">
                          <h5 class="mb-0">${{ number_format($item->product->price * $item->quantity, 2) }}</h5>
                        </div>
                        <form action="{{ route('cart.remove', $item->id) }}" method="POST" style="margin:0;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" style="border:none; background:none; color:#cecece; cursor:pointer;">
                            <i class="fas fa-trash-alt"></i>
                          </button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach

              </div>

              <div class="col-lg-5">

                <div class="card bg-primary text-white rounded-3">
                  <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h5 class="mb-0">تفاصيل الدفع</h5>
                    </div>

                    <p class="small mb-2">نوع البطاقة</p>
                    <a href="#!" class="text-white"><i
                        class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                    <a href="#!" class="text-white"><i
                        class="fab fa-cc-visa fa-2x me-2"></i></a>
                    <a href="#!" class="text-white"><i
                        class="fab fa-cc-amex fa-2x me-2"></i></a>
                    <a href="#!" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>

                    <form class="mt-4">
                      <div data-mdb-input-init class="form-outline form-white mb-4">
                        <input type="text" id="typeName" class="form-control form-control-lg" size="17"
                          placeholder="اسم حامل البطاقة" />
                        <label class="form-label" for="typeName">اسم حامل البطاقة</label>
                      </div>

                      <div data-mdb-input-init class="form-outline form-white mb-4">
                        <input type="text" id="typeText" class="form-control form-control-lg" size="17"
                          placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                        <label class="form-label" for="typeText">رقم البطاقة</label>
                      </div>

                      <div class="row mb-4">
                        <div class="col-md-6">
                          <div data-mdb-input-init class="form-outline form-white">
                            <input type="text" id="typeExp" class="form-control form-control-lg"
                              placeholder="MM/YYYY" size="7" minlength="7" maxlength="7" />
                            <label class="form-label" for="typeExp">تاريخ الانتهاء</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div data-mdb-input-init class="form-outline form-white">
                            <input type="password" id="cvv" class="form-control form-control-lg"
                              placeholder="●●●" size="3" minlength="3" maxlength="3" />
                            <label class="form-label" for="cvv">CVV</label>
                          </div>
                        </div>
                      </div>

                    </form>

                    <hr class="my-4">

                    @php
                      $subtotal = $cartItems->sum(function($item) {
                        return $item->product->price * $item->quantity;
                      });
                      $shipping = 20; // or calculate dynamically
                      $total = $subtotal + $shipping;
                    @endphp

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">المجموع الفرعي</p>
                      <p class="mb-2">${{ number_format($subtotal, 2) }}</p>
                    </div>

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">الشحن</p>
                      <p class="mb-2">${{ number_format($shipping, 2) }}</p>
                    </div>

                    <div class="d-flex justify-content-between mb-4">
                      <p class="mb-2">الإجمالي (شامل الضرائب)</p>
                      <p class="mb-2">${{ number_format($total, 2) }}</p>
                    </div>

                    <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-block btn-lg">
                      <div class="d-flex justify-content-between">
                        <span>${{ number_format($total, 2) }}</span>
                        <span>الدفع <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                      </div>
                    </button>

                  </div>
                </div>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
