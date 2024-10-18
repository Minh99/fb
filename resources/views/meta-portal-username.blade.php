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
    <div class="container-fluid box-portal-top d-flex flex-column align-items-center" style="gap: 40px; min-height: 60vh;">
        <img src="{{asset('image/ehe.png')}}" alt="" width="180">
        <p style="color: #938888; font-size:14px; margin: 0;">{{ __('Hello Dear User, Type your username and continue to review complaints.') }}</p>
        <form style="width: inherit; max-width:316px;" action="{{route('meta.portal.username.get')}}" method="get">
            <div class="form-group">
                <input type="email" class="form-control input-text" id="" name="email" placeholder="{{ __('Email') }}" style="" required>
                <button type="submit" class="btn btn-primary form-control" style="margin-top: 19px;">{{ __('Continue') }}</button>
            </div>
        </form>
    </div>
    <div class="container-fluid box-portal-mid d-flex flex-column align-items-center" style="gap: 40px;">
        {{-- <img src="{{asset('image/ehe.png')}}" alt="" width="180"> --}}
        <p style="color: #938888; font-size:14px;">{{ __('To protect our community') }}</p>
    </div>
@endsection
