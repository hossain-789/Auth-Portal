<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr class="data_table_gap">
            <th>Your Email</th>
            <th>Your Pass</th>
        </tr>
        @foreach ($data as $items)
            <tr>
                <td>{{ $items->your_email }}</td>
                <td>{{ $items->your_pass }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>