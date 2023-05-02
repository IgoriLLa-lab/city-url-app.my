<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        table {
            width: 300px;
            border: 1px solid black;
            margin: auto;
        }
        td {
            text-align: center;
        }
    </style>
</head>
<body class="antialiased">

<table>
    <caption>Таблица городов</caption>
    <tr>
        <th>Название</th>
        <th>Ссылка</th>
    </tr>
    <tr>
        <tbody>
        @foreach($cities as $city)
            <tr>
                <td>{{$city->name}}</td>
                <td>
                    <a href="{{ url($city->slug) }}" @if ($city->slug === Request::segment(1)) style="font-weight:bold;" @endif>{{ $city->name }}</a>
                </td>
            </tr>
        @endforeach
        </tbody>
</table>

</body>
</html>
