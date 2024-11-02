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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    {{-- <link rel="stylesheet" href="{{ asset('css/master.style.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
   
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
    
    <div class="" style="
        background: rgb(240,211,234);
        background: linear-gradient(90deg, rgba(240,211,234,0.6142349498327759) 0%, rgba(186,240,251,0.5707566889632107) 51%, rgba(149,216,223,0.5506897993311037) 100%);
    ">
        @yield('content')
    </div>
    
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
</body>

</html>
