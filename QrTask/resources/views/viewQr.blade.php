<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        svg {
            padding: 10px;
            margin: 10px;
        }

        .export {
            margin-right: 0;
            margin-top: 0;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        {{$a = 2}}
        <a href="{{route('export-pdf', $a)}}"> ddd </a>
        </form>
        @foreach($qrCodes as  $qrcode)
            <div>
                {{$qrcode}}
            </div>
        @endforeach
    </div>
    <a href="/" style="margin:10px ;background-color:{{$color}}" class="btn btn-primary form-control">Go Back </a>
</div>

</body>
</html>
