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
        {{-- <img src="{{asset('image/ehe.png')}}" alt="" width="180"> --}}
        {{-- <p class="text-danger" style="font-size:14px; margin: 0;">Dear {{'@'.$username}},<br>Your Password is wrong. Please Try Again.</p> --}}
        {{-- <p class="font-weight-bold" style="color: red; font-size:14px; margin: 0;">{{ __('Dear') }} {{request()->query('email')}}</p> --}}
        <form class="" style="max-width: 700px; background: #ffffff; border-radius: 4px; box-shadow: 0 0 10px 0 rgba(0,0,0,0.1);">
            <div class="form-group">
                <div class="w-100" style="text-align: left; padding: 5px 20px;">
                    <h4 style="color: #000000; margin: 0; padding-top: 12px; font-size: 20px; font-weight: bold;">{{ __('Enter your password') }}</h4>
                </div>
                <hr style="margin: 4px 0px">
                <div style="padding: 10px 20px;">
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
                        <span class="d-flex align-items-center">
                            <span style="padding: 4px;">
                                {{ __("The password that you've entered doesn't match your account. Please try again.") }}
                            </span>
                        </span>
                    </p>
                </div>
                <div v-if="formPasswordError['message'] == undefined" class="w-100" style="text-align: left; margin-bottom: 5px; padding: 10px 20px;">
                    <p style="color: #1b1b1b; margin: 0; font-size: 14px">{{ __('Your Password was wrong. Please Try Again.') }}</p>
                </div>
                <input type="hidden" name="email" value="{{request()->query('email')}}">
                <div class="row g-3 align-items-center py-2" >
                    <div class="col-3 text-right">
                      <label for="input-mail" class="col-form-label text-secondary">{{ __('Email')}}</label>
                    </div>
                    <div class="col-8">
                        <input id="input-mail" type="text" class="form-control input-text2 text-secondary" name="username" placeholder="Username" style="margin-bottom: 2px; background:  rgb(255 255 255 / 79%); color: #747272; cursor: not-allowed;" required readonly value="{{request()->query('email')}}">
                    </div>
                </div>
                <div class="row g-3 align-items-center" >
                    <div class="col-3 text-right">
                      <label for="input-pass" class="col-form-label text-secondary">{{ __('Password')}}</label>
                    </div>
                    <div class="col-8">
                        <input id="input-pass" type="password" :class="formPasswordError['code'] != undefined ? 'form-control border border-danger input-text2 ':'form-control input-text2 '" name="password" placeholder="{{ __('Password') }}" style="margin-bottom: 5px; background:  rgb(255 255 255 / 79%); color: #333;" required v-model="FormPassword.password">
                    </div>
                </div>
                <hr>
                <div class="w-100" style="text-align: right; margin-bottom: 10px; padding: 10px 20px;">
                    <button type="button" class="btn btn-primary2 form-control" @click="enterPassword('{{ request()->query('id') }}')">{{ __('Login') }}</button>
                </div>
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
