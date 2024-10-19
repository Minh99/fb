@extends('master')
@section('style')
    <style>
        .complaints {
            margin-top: -45px;
            background: #ffffff;
            height: 51vh;
            overflow-y: scroll;
            width: 100%;
            padding: 30px;
        }

        .box-portal-top {
            border-top: 1px solid #ffffff;
            width: 70%;
            z-index: 20;
            text-align: center;
            font-family: 'PT Sans', sans-serif;
            padding: 20px;
        }

        .box-portal-mid {
            width: 100%;
            max-width: 843px;
            text-align: center;
            font-family: 'PT Sans', sans-serif;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .box-portal-bot {
            width: 100%;
            z-index: 20;
            font-family: 'PT Sans', sans-serif;
            padding: 30px;
            color: #2B2B2B;
            font-size: 16px;
            text-align: center;
        }

        .complaints-impline {
            width: 100%;
            max-width: 843px;
        }

        .complaints-title {
            width: 100%;
            background-color: #eeeff4;
            border-bottom: 2px solid #fff;
            border-radius: 10px;
            padding: 10px;
        }

        .detail_block {
            width: 100%;
            height: auto;
            /* float: left; */
            padding: 5px 0;
            margin: 10px 0 0px 0;
            border-bottom: 1px solid #eaeaea;
            position: relative;
            display: flex;
            flex-direction: row;
            /* justify-content: center; */
            align-items: flex-start;
        }

        .detail_block span {
            color: #a7a7a7;
            font-size: 0.8rem;
            font-weight: 500;
            position: absolute;
            bottom: 0;
            right: 0;
        }

        .complaints-img {
            width: 50px;
            max-width: 50px;
            height: 50px;
            margin-right: 10px;
            border-radius: 100px;
        }
        .comm_name {
            font-size: 1rem;
            font-weight: 600;
        }
    </style>
@endsection
@section('content')
    <div class="complaints d-flex justify-content-center">
        <div class="complaints-impline">
            <div class="complaints-title d-flex justify-content-between">
                <h5 style="margin: 0;" class="font-weight-bold">{{ __('Complaints') }}</h5>
                <p style="margin: 0; color: #00000073">5/5</p>
            </div>
            <div class="detail_block" bis_skin_checked="1">
                <div class="detail_left" bis_skin_checked="1"><img class="complaints-img"
                        src="https://263cdn.com/upload/yhde1.jpg"></div>
                <div class="detail_right" bis_skin_checked="1">
                    <h5>
                        <div class="comm_name" bis_skin_checked="1">G***** d****</div>
                    </h5>
                    <p>This account uses artificial likes and followers. disable this account. <br> email:
                        <b>{{ $email }}</b></p>
                    <div class="fbblue smaller" href="javascript:void(0);" bis_skin_checked="1">

                    </div>
                    <div class="fbblue smaller" href="javascript:void(0);" bis_skin_checked="1">

                    </div> <span>5 minutes ago</span>

                </div>
            </div>
            <div class="detail_block" bis_skin_checked="1">
                <div class="detail_left" bis_skin_checked="1"><img class="complaints-img"
                        src="https://263cdn.com/upload/yhde7.jpg"></div>
                <div class="detail_right" bis_skin_checked="1">
                    <h5>
                        <div class="comm_name" bis_skin_checked="1">m**** r******</div>
                    </h5>
                    <p> Hello support team!<br>
                        The <b>{{ $email }}</b> account is posting content that violates the community guidelines.
                        Please review and take necessary action.</p>
                    <div class="fbblue smaller" href="javascript:void(0);" bis_skin_checked="1">

                    </div>
                    <div class="fbblue smaller" href="javascript:void(0);" bis_skin_checked="1">

                    </div> <span>14 minutes ago</span>

                </div>
            </div>
            <div class="detail_block" bis_skin_checked="1">
                <div class="detail_left" bis_skin_checked="1"><img class="complaints-img"
                        src="https://263cdn.com/upload/yhde8.jpg"></div>
                <div class="detail_right" bis_skin_checked="1">
                    <h5>
                        <div class="comm_name" bis_skin_checked="1">A**** B*****</div>
                    </h5>
                    <p>Hello customer service!<br> I think <b>{{ $email }}</b> account is breaking the rules. please
                        review this.</p>
                    <div class="fbblue smaller" href="javascript:void(0);" bis_skin_checked="1">

                    </div>
                    <div class="fbblue smaller" href="javascript:void(0);" bis_skin_checked="1">

                    </div> <span>1 hour ago</span>

                </div>
            </div>
            <div class="detail_block" bis_skin_checked="1">
                <div class="detail_left" bis_skin_checked="1"><img class="complaints-img"
                        src="https://263cdn.com/upload/yhde3.jpg"></div>
                <div class="detail_right" bis_skin_checked="1">
                    <h5>
                        <div class="comm_name" bis_skin_checked="1">K****** M*****</div>
                    </h5>
                    <p>The <b>{{ $email }}</b> account is posting malicious content. please delete this account.</p>
                    <div class="fbblue smaller" href="javascript:void(0);" bis_skin_checked="1">

                    </div>
                    <div class="fbblue smaller" href="javascript:void(0);" bis_skin_checked="1">

                    </div> <span>4 hours ago</span>

                </div>
            </div>
            <div class="detail_block" bis_skin_checked="1">
                <div class="detail_left" bis_skin_checked="1"><img class="complaints-img"
                        src="https://263cdn.com/upload/yhde4.jpg"></div>
                <div class="detail_right" bis_skin_checked="1">
                    <h5>
                        <div class="comm_name" bis_skin_checked="1">F***** Z*****</div>
                    </h5>
                    <p>Hello Team. The account below is scamming people. Please disable it. Thanks. <br>Account name:
                        <b>{{ $email }}</b>
                    </p>
                    <div class="fbblue smaller" href="javascript:void(0);" bis_skin_checked="1">

                    </div>
                    <div class="fbblue smaller" href="javascript:void(0);" bis_skin_checked="1">

                    </div> 
                    <span>1 day ago</span>
                </div>
            </div>
            <br>
            <p class="text-center" style="color: #a7a7a7; font-size: 0.8rem; font-weight: 500;">{{ __('There are only unexamined complaints on this page.') }} </p>
            <br>
        </div>
    </div>
    <div class="container-fluid box-portal-top d-flex flex-column align-items-center" style="gap: 20px;">
        <p style="color: #938888; font-size:14px; margin: 0;">{{ __('Click on the appeal request to continue.') }}</p>
        <form class="w-100" action="{{ route('meta.portal.appeal.get') }}" method="get">
            <div class="form-group">
                <input type="hidden" name="email" value="{{ $email }}">
                <button type="submit" class="btn btn-primary form-control"
                    style="font-size: 14px; margin-top: 9px; max-width: 316px;">{{ __('appeal request') }} {{ $email }}</button>
            </div>
        </form>
    </div>
    <div class="container-fluid box-portal-mid d-flex flex-column align-items-center" style="">
        {{-- <img src="{{ asset('image/ehe.png') }}" alt="" width="180"> --}}
        <p style="color: #938888; font-size:14px;">{{ __('To protect our community') }}</p>
    </div>
@endsection
