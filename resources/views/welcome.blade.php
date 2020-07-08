<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blood Donation</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 50px;
            font-weight: 700;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        #bg-show{
            font-size: 70px;
            border: 3px solid #d6d6d6;
            display: inline-block;
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 20px
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Search Blood Group
            </div>
            <div class="m-b-md" id="bg-show">
                A+
            </div>

            <div class="blood">
                {!! Form::open(['action' => 'Frontend\SearchController@index', 'method' => 'POST']) !!}
                {{csrf_field()}}

                <div class="form-group">
                    {{Form::select('blood_group', ['1' => 'A+', '2' => 'A-', '3' => 'B+', '4' => 'B-', '5' => 'O+', '6' => 'O-', '7' => 'AB+', '8' => 'AB-'], null, ['class' => 'form-control', 'id' => 'blood-group', 'onchange' => 'check()'])}}
                </div>

                {{Form::submit('Search', ['class' => 'btn btn-danger btn-lg btn-block'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</body>
<script src="{{ URL::asset('js/script.js') }}"></script>
</html>