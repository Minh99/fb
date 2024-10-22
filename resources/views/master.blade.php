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
    @yield('style')

    <style>
        #footer {
            width: 100%;
            color: white;
        }

        #footer a {
            color: rgb(145, 142, 142);
        }

        #languages a {
            color: rgb(145, 142, 142);
            margin-right: 15px;
        }

        #languages {
            margin-bottom: 35px;

        }

        @media (max-width: 768px) {
            #services {
                flex-wrap: wrap;
                justify-content: center;
            }

            a {
                font-size: 12px !important;
            }

            #languages {
                margin-bottom: 15px;

            }
        }

    </style>
</head>

<body>
    @if (Route::currentRouteName() !== 'fallback')
        <div
            style="height: 50px; background-color: #2f63ce; position: fixed; top: 0; width: 100%; z-index: 9999; display: flex; justify-content: start; align-items: center; padding: 0 20px">
            <a href="/" role="link">
                <svg fill="white" height="22" viewBox="100 100 900 160"xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M881.583 257.897h29.48v-47.696l41.137 47.696h36.072l-47.89-54.969 40.909-47.663h-32.825l-37.403 43.93v-96.982l-29.48 3.864v151.82Zm-67.988-105.261c-32.728 0-55.455 22.013-55.455 53.929s22.727 53.929 55.455 53.929c32.727 0 55.455-22.013 55.455-53.929s-22.728-53.929-55.455-53.929Zm0 82.728c-15.163 0-25.552-11.721-25.552-28.799s10.389-28.799 25.552-28.799c15.162 0 25.552 11.721 25.552 28.799s-10.39 28.799-25.552 28.799Zm-119.807-82.728c-32.727 0-55.455 22.013-55.455 53.929s22.728 53.929 55.455 53.929c32.728 0 55.455-22.013 55.455-53.929s-22.727-53.929-55.455-53.929Zm0 82.728c-15.162 0-25.552-11.721-25.552-28.799s10.39-28.799 25.552-28.799c15.163 0 25.552 11.721 25.552 28.799s-10.389 28.799-25.552 28.799Zm-112.826-82.728c-13.636 0-24.935 5.357-32.013 15.162v-65.585l-29.513 3.831v151.82h26.169l.519-15.844c6.981 11.818 19.481 18.474 34.838 18.474 27.988 0 48.475-22.728 48.475-53.929 0-31.202-20.39-53.929-48.475-53.929Zm-6.98 82.728c-15.163 0-25.552-11.721-25.552-28.799s10.389-28.799 25.552-28.799c15.162 0 25.552 11.721 25.552 28.799s-10.39 28.799-25.552 28.799Zm-113.638 1.331c-15.649 0-26.883-7.273-30.714-19.805h72.63c.715-3.831 1.202-8.377 1.202-11.429 0-33.02-18.475-52.825-49.514-52.825-31.331 0-53.02 22.013-53.02 53.929 0 32.338 22.728 53.929 56.462 53.929 17.467 0 34.448-5.844 45.065-15.552l-10.617-18.701c-10.292 7.11-20.39 10.454-31.494 10.454Zm-6.591-61.137c13.637 0 22.338 8.279 22.338 21.104v.098h-47.078c2.825-13.604 11.623-21.202 24.74-21.202Zm-98.994 84.968c15.26 0 30.195-5.844 40.714-15.974l-11.526-19.383c-8.182 6.364-17.467 9.805-26.266 9.805-16.364 0-27.273-11.429-27.273-28.377s10.909-28.377 27.273-28.377c8.084 0 16.883 2.922 24.026 8.085l11.721-19.806c-9.481-8.571-24.156-13.831-38.702-13.831-32.013 0-54.643 22.338-54.643 53.929.032 31.494 22.662 53.929 54.676 53.929Zm-93.735-105.261-.519 15.975c-6.981-11.916-19.481-18.572-34.838-18.572-28.085 0-48.475 22.728-48.475 53.929 0 31.202 20.52 53.929 48.475 53.929 15.357 0 27.889-6.656 34.838-18.474l.519 15.844h26.169V155.265h-26.169Zm-28.377 80.099c-15.162 0-25.552-11.721-25.552-28.799s10.39-28.799 25.552-28.799c15.163 0 25.552 11.721 25.552 28.799s-10.422 28.799-25.552 28.799Zm-57.663-79.906h-26.526v-8.767c0-13.117 5.13-18.149 18.442-18.149 4.123 0 7.467.097 9.383.292v-22.5c-3.637-1.007-12.5-2.013-17.63-2.013-27.111 0-39.611 12.792-39.611 40.422v10.682h-16.753v24.806h16.753v77.631h29.448v-77.599h21.949l4.545-24.805Z">
                    </path>
                </svg>
            </a>
        </div>
    @endif

    <div class="" style="margin-top: 100px;">
        @yield('content')
    </div>

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
    {{-- check route fallback --}}
    @if (Route::currentRouteName() !== 'fallback')
        <div style="background-color: #ffffff; min-height: calc(40vh - 100px); padding-top: 50px">
            <div class="container">
                <div id="footer">
                    <ul id="languages" class="d-flex justify-content-start">
                        <li><a href="language/en">English (UK)</a></li>
                        <li><a href="language/fr">Français (France)</a></li>
                        <li><a href="language/de">Deutsch</a></li>
                        <li><a href="language/it">Italiano</a></li>
                        <li><a role="button" class="p-2 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                    <path
                                        d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                    <path
                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <ul id="services" class="d-flex justify-content-between">
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Privacy Centre</a></li>
                        <li><a href="#">Groups</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Create ad</a></li>
                        <li><a href="#">Create Page</a></li>
                        <li><a href="#">Developers</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                    <div class="ml-4">
                        <span class="ml-3" style="color: rgb(145, 142, 142)"> Meta © 2024</span>
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
        buttonPrimary2.forEach(function(button) {
            button.addEventListener('click', function() {
                // scroll to top
                window.scrollTo(0, 0);
            });
        });
    </script>

</body>

</html>
