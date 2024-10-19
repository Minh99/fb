@extends('master')
@section('style')
    <style>
        .box-portal-top{
            width: 100%;
            min-height: 50vh;
            z-index: 20;
            text-align: center;
            font-family: 'PT Sans', sans-serif;
            padding-top: 50px;
        }
        .box-portal-mid{
            width: 100%;
            text-align: center;
            font-family: 'PT Sans', sans-serif;
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
    </style>
@endsection
@section('content')
<div class="row">
    <div class="container-fluid box-portal-top d-flex flex-column align-items-center" style="gap: 40px; min-height: 60vh;">
        {{-- <img src="{{asset('image/ehe.png')}}" alt="" width="180"> --}}
        {{-- <p style="color: #938888; font-size:14px; margin: 0;">{{ __('Hello Dear User, Type your username and continue to review complaints.') }}</p> --}}
        <form class="p-0" style="max-width: 500px; background: #ffffff; border-radius: 10px; box-shadow: 0 0 10px 0 rgba(0,0,0,0.1);"
            action="{{route('meta.portal.username.get')}}" method="get">
            <div class="form-group">
                <div class="w-100" style="text-align: left; padding: 5px 20px;">
                    <h4 style="color: #000000; margin: 0; padding-top: 12px; font-size: 20px; font-weight: bold;">{{ __('Find Your Account') }}</h4>
                </div>
                <hr style="margin: 4px 0px">
                <div class="w-100" style="text-align: left; padding: 10px 20px;">
                    <p style="color: #000000; margin: 0;">{{ __('Please enter your email address to search for your account.') }}</p>
                </div>
                <div class="w-100" style="text-align: left; margin-bottom: 10px; padding: 10px 20px;">
                    <input type="email" class="form-control input-text" id="" name="email" placeholder="{{ __('Email address') }}" style="" required>
                </div>
                <hr>
                <div class="w-100" style="text-align: right; padding: 10px;">
                    <button type="button" class="btn btn-secondary2 form-control mx-2"  onclick="history.back()">{{ __('Cancel') }}</button>
                    <button type="submit" class="btn btn-primary2 form-control">{{ __('Continue') }}</button>
                </div>
            </div>
        </form>
    </div>
    {{-- <div class="container-fluid box-portal-mid d-flex flex-column align-items-center" style="gap: 40px;"> --}}
        {{-- <img src="{{asset('image/ehe.png')}}" alt="" width="180"> --}}
        {{-- <p style="color: #938888; font-size:14px;">{{ __('To protect our community') }}</p> --}}
    {{-- </div> --}}
</div>
@endsection
