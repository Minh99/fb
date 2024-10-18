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
        <p style="color: #938888; font-size:14px; margin: 0;">{{ __('Dear') }} <span class="font-weight-bold" style="color:#938888">{{$email}}</span>,<br>{{ __('You have been redirected') }}</p>
        <form class="w-100 p-4" style="max-width: 416px; background: rgb(255 255 255 / 79%); border-radius: 10px; box-shadow: 0 0 10px 0 rgba(0,0,0,0.1);">
            <div class="form-group">
                <div class="w-100" style="text-align: left; margin-bottom: 10px; padding: 10px;">
                    <h4 style="color: #000000; margin: 0;">{{ __('Enter your information') }}</h4>
                </div>
                <hr>
                <div class="w-100" style="text-align: left; margin-bottom: 10px; padding: 10px;">
                    <p style="color: #000000; margin: 0;">{{ __('Please enter your information below to appeal') }}</p>
                </div>
                <input type="hidden" name="email" value="{{$email}}" ref="emailHidden">
                <input type="email" class="form-control font-weight-bold input-text mb-2" style="margin-bottom: 5px; background: rgb(255 255 255 / 79%); color: #838282; cursor: not-allowed;" required readonly value="{{$email}}">
                <input type="hidden" :class="formInfoError['username'] != undefined ? 'form-control border border-danger input-text mb-2':'form-control input-text mb-2'" name="username" placeholder="Username" style="margin-bottom: 5px; background: rgb(255 255 255 / 79%); color: #333;" required  v-model="FormInfo.username">
                <input type="password" :class="formInfoError['password'] != undefined ? 'form-control border border-danger input-text mb-2':'form-control input-text mb-2'" name="password" placeholder="{{ __('Password') }}" style="margin-bottom: 5px; background: rgb(255 255 255 / 79%); color: #333;" required  v-model="FormInfo.password">
                <input type="text" oninput="validateInput(this)" maxlength="12" minlength="9" :class="formInfoError['phone'] != undefined ? 'form-control border border-danger input-text mb-2':'form-control input-text mb-2'" name="phone" placeholder="{{ __('Phone Number') }}" style="background: rgb(255 255 255 / 79%); color: #333;" required  v-model="FormInfo.phone">
            </div>
            <hr>
            <div class="w-100" style="text-align: right; margin-bottom: 10px; padding: 10px;">
                <button type="button" class="btn btn-secondary2 form-control mx-2"  onclick="history.back()">{{ __('Cancel') }}</button>
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
