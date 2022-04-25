<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Laravel 8 URL Shortener</title>
</head>
<body>
<div class="container my-5">
    <div class="row">
        <h1 class="my-2 fs-4 fw-bold text-center">Laravel Scrapper</h1>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Scrapped Key</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($crawledData[0] as $key => $item)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td class="url">{{ $item }}</td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
