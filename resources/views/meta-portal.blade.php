@extends('master')
@section('style')
    <style>
        .container-fluid{
            
        }
        .box-portal-top{
            background: transparent;
            width: 100%;
            min-height: 51vh;
            z-index: 20;
            text-align: center;
            font-family: Optimistic Display Bold, system-ui, sans-serif !important;
            padding-top: 50px;
        }
        .box-portal-mid{
            width: 100%;
            text-align: center;
            font-family: 'PT Sans', sans-serif;
            padding-top: 50px;
            padding-bottom: 50px;
            background: transparent;
        }
        .box-portal-bot{
            width: 100%;
            z-index: 20;
            font-family: 'PT Sans', sans-serif;
            padding: 30px;
            color: #2B2B2B;
            font-size: 16px;
            background: transparent;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid box-portal-top d-flex flex-column align-items-center" style="gap: 40px;">
        <img src="{{asset('image/ehe.png')}}" alt="" width="180">
        <p style="color: #7e7979; font-size:14px;">{{ __('We received complaints that your account violates our community guidelines.')}}. <br>{{ __('If you think this is wrong') }}</p>
        <a class="w-100" href="{{route("index.meta.portal.username")}}"><button type="button" class="btn btn-primary" style="max-width: 316px; width: -webkit-fill-available;">{{ __('Continue') }}</button></a>
    </div>
    <div class="container-fluid box-portal-mid d-flex flex-column align-items-center" style="gap: 40px;">
        {{-- <img src="{{asset('image/ehe.png')}}" alt="" width="180"> --}}
        <p style="color: #7e7979; font-size:14px;">{{ __('To protect our community') }}<br>{{ __("That's why we may have contacted you") }}</p>
    </div>
@endsection
