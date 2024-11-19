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

<body>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $items)
                    <tr>
                        <td>{{$items->your_email}}</td>
                        <td>{{$items->your_pass}}</td>
                        <td><a href="{{ route('edit', $items->id) }}"><button type="button"
                                    class="edit-btn">Edit</button></a></td>
                        <td><a href="{{ route('delete', $items->id) }}"><button type="button"
                                    class="edit-btn">Delete</button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- JS -->
    <script src="{{ asset('client/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('client/assets/js/main.js') }}"></script>
</body>

</html>