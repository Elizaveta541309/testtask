<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <title>Города</title>
</head>
<body>
<div class="container form-center">
    <div class="row">
        <div class="col-4 offset-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ url('setCity') }}">
                @csrf
                <div class="form-group">
                    <input class="style-cities" name="name" placeholder="Название города" required>
                    <button type="submit" class="button button1">Добавить</button>
                </div>
            </form>
            <table class="table table-hover table-bordered">
                <thead class="table-light">
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Город</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($cities as $city)
                <tr>
                    <th scope="row">{{$city->id}}</th>
                    <td>{{$city->name}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

