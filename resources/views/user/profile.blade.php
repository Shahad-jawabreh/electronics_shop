
@extends('layouts.app')

@section('title')
   صفحة الشخصية
@endsection

@section('content')

<style>
    
.container {
    font-size: large;
    width: 80%;
    margin: 20px auto;
    background: white;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    text-align: left;
}

.owner-profile {
    text-align: center;
    margin-bottom: 20px;
}

.owner-profile img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    border: 3px solid #007BFF;
}

.projects {
    display: flex;
    justify-content: end;
    flex-wrap: wrap;
}

.project-card {
    width: 45%;
    background: #00535530;
    padding: 15px;
    margin: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    text-align: center;
}
.project-card  a{
    text-decoration: none;
    color:  #040c14;
    background:   #007bff8c;
    padding: 11px;
    border-radius: 5px;
    margin-left: 34px;
}

.project-card  a:hover {
    background:  #062f5a25;
}
.project-card img {
    width: 100%;
    border-radius: 8px;
}

button {
    background-color: #007BFF;
    color: white;
    border: none;
    padding: 10px 15px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 10px;
}

button:hover {
    background-color: #0056b3;
}

footer {
    background-color: #222;
    color: white;
    padding: 10px;
    margin-top: 20px;
}

</style>
    <section class="container">
      <div class="owner-profile">
        <img src="{{ asset('image/user.png') }}" alt="صورة المالك" />
        <h2 id="owner-name">{{$user->name}}</h2>
        <p>
            <a href="mailto:{{ $user->email }}" id="owner-email"
            >{{$user->email}}</a
          >
          
          
        </p>
        <p><strong>الهاتف:</strong> <span id="owner-phone">{{ $user->phone }}</span></p>
        <p>
          <strong>الموقع:</strong>
          <span id="owner-location"> {{ $user->address }}  </span>
        </p>
      </div>
    </section>
    @endsection