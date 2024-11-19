<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign Up Form by Colorlib</title>

        <!-- Font Icon -->
        <link rel="stylesheet"
            href="{{ asset('client/assets/fonts/material-icon/css/material-design-iconic-font.min.css') }}">
        <!-- Main css -->
        <link rel="stylesheet" href="{{ asset('client/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('client/assets/css/style.css.map') }}">
    </head>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
    </style>

    <body>
        <div class="form-container">
            <form action="{{ route('update', $data->id) }}" method="POST">
                @csrf
                <h2>Udpate</h2>
                <div class="form-row">
                    <input type="email" value="{{$data->your_email}}" id="email" name="your_email"
                        placeholder="Enter your email" required>
                </div>
                <div>
                    <input type="text" value="{{$data->your_pass}}" id="password" name="your_pass"
                        placeholder="Enter your password" required>
                </div>
                <div class="form-row" style="margin-top: 15px;">
                    <button type="submit" class="submit-btn" style="margin-left: -2px">Update</button>
                </div>
            </form>
        </div>

        <!-- JS -->
        <script src="{{ asset('client/assets/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('client/assets/js/main.js') }}"></script>
    </body>

    </html>

</body>

</html>