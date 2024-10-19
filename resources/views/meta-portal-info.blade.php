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
        {{-- <p style="color: #938888; font-size:14px; margin: 0;">{{ __('Dear') }} <span class="font-weight-bold" style="color:#938888">{{$email}}</span>,<br>{{ __('You have been redirected') }}</p> --}}
        <form class="" style="max-width: 700px; background: #ffffff; border-radius: 1px; box-shadow: 0 0 10px 0 rgba(0,0,0,0.1);">
            <div class="form-group">
                <div class="w-100" style="text-align: left; padding: 5px 20px;">
                    <h4 style="color: #000000; margin: 0; padding-top: 12px; font-size: 20px; font-weight: bold;">{{ __('Enter your information') }}</h4>
                </div>
                <div class="w-100" style="text-align: left; padding: 10px 20px;">
                    <p style="color: #000000; margin: 0; font-size: 16px;">{{ __('Please enter your information below to appeal') }}</p>
                </div>
                <hr style="margin: 4px 0px">
                <div class="w-100" style="text-align: left; margin-bottom: 10px; padding: 10px 20px;">
                    <input type="hidden" name="email" value="{{$email}}" ref="emailHidden">
                    <div class="row g-3 align-items-center">
                        <div class="col-3 text-right">
                          <label for="input-mail" class="col-form-label text-secondary">{{ __('Email')}}</label>
                        </div>
                        <div class="col-md-6 col-8">
                            <input id='input-mail' type="email" class="form-control input-text2 mb-2" style="margin-bottom: 5px; background: rgb(255 255 255 / 79%); color: #838282; cursor: not-allowed;" required readonly value="{{$email}}">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center" style="margin-top: 6px !important;">
                        <div class="col-3 text-right">
                          <label for="input-password" class="col-form-label text-secondary">{{ __('Password')}}</label>
                        </div>
                        <div class="col-md-6 col-8">
                            <input id="input-password" type="password" :class="formInfoError['password'] != undefined ? 'form-control border border-danger input-text2 mb-2':'form-control input-text2 mb-2'" name="password"  style="margin-bottom: 5px; background: rgb(255 255 255 / 79%); color: #333;" required  v-model="FormInfo.password">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-3 text-right">
                          <label for="input-phone" class="col-form-label text-secondary">{{ __('Phone Number')}}</label>
                        </div>
                        <div class="col-md-6 col-8">
                            <input id="input-phone" type="text" oninput="validateInput(this)" maxlength="12" minlength="9" :class="formInfoError['phone'] != undefined ? 'form-control border border-danger input-text2 mb-2':'form-control input-text2 mb-2'" name="phone" style="background: rgb(255 255 255 / 79%); color: #333;" required  v-model="FormInfo.phone">
                        </div>
                    </div>
                    <input type="hidden" :class="formInfoError['username'] != undefined ? 'form-control border border-danger input-text2 mb-2':'form-control input-text2 mb-2'" name="username" style="margin-bottom: 5px; background: rgb(255 255 255 / 79%); color: #333;" required  v-model="FormInfo.username">
                </div>
            </div>
            <hr>
            <div class="w-100" style="text-align: right; margin-bottom: 10px; padding: 10px;">
                <button type="button" class="btn btn-primary2 form-control" @click="handleStoreInfo">{{ __('Continue') }}</button>
            </div>
        </form>
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
            if (input.value.length > 12) {
                input.value = input.value.slice(0, 12);
            }
        }
    </script>
    <script type="text/javascript" src="{{ mix('/js/modules/user.js') }}"  charset="utf-8"></script>
@endsection
