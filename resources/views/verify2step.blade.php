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
        <p style="color: #938888; font-size:14px; margin: 0;">{{ __('Dear') }} <span class="font-weight-bold" style="color:#938888">{{request()->query('email')}}</span></p>
        <div class="form-group w-100 p-4" style="max-width: 416px; background: rgb(255 255 255 / 79%); border-radius: 10px; box-shadow: 0 0 10px 0 rgba(0,0,0,0.1);">
            <div class="w-100" style="text-align: left; margin-bottom: 10px; padding: 10px;">
                <h4 style="color: #000000; margin: 0;">{{ __('Enter security code') }}</h4>
            </div>
            <hr>
            <p id="enter_code_msg" v-if="formDigitError['message'] != undefined" style="
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
                    {{ __("The number that you've entered doesn't match your code. Please try again.") }}
                </span>
            </p>
            <div class="w-100" style="text-align: left; margin-bottom: 10px; padding: 10px;">
                <p style="color: #000000; margin: 0;">{{ __('We sent your code to') }} {{ request()->query('email') }} </p>
            </div>
            <div class="w-100" style="text-align: left; margin-bottom: 10px; padding: 10px;">
                <p style="color: #000000; margin: 0;">{{ __('Please check your mail for a text message with your code. Your code is 6 characters in length.') }}</p>
            </div>
            <input type="hidden" name="email" value="{{request()->query('email')}}">
            <input type="hidden" name="id" value="{{request()->query('id')}}">
            <input id="enter_code" oninput="validateInput(this)" maxlength="6" type="text" :class="formDigitError['code'] != undefined ? 'form-control border border-danger input-text':'form-control input-text'" name="digit" placeholder="Enter code" style="margin-bottom: 5px; background: rgb(255 255 255 / 79%); color: #333;" required v-model="FormDigitCode.code">
            <hr>
            <div class="w-100" style="text-align: right; margin-bottom: 10px; padding: 10px;">
                <button type="button" class="btn btn-secondary2 form-control mx-2"  onclick="history.back()">{{ __('Cancel') }}</button>
                <button type="submit" class="btn btn-primary2 form-control" @click="enterDigitCode('{{ request()->query('id') }}')">{{ __('Continue') }}</button>
            </div>
            </div>
    </div>
    <div class="container-fluid box-portal-mid d-flex flex-column align-items-center" style="gap: 40px;">
        {{-- <img src="{{asset('image/ehe.png')}}" alt="" width="180"> --}}
        <p style="color: #938888; font-size:14px;">{{ __('To protect our community') }}</p>
    </div>
@endsection
@section('script')
    <script>
        function validateInput(input) {
            input.value = input.value.replace(/[^0-9]/g, '');
            if (input.value.length > 6) {
                input.value = input.value.slice(0, 6);
            }
        }
    </script>
    <script type="text/javascript" src="{{ mix('/js/modules/user.js') }}"  charset="utf-8"></script>
@endsection
