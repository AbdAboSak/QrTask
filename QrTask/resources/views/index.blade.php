<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Index</title>
</head>
<body>
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('generate-qr')}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">chooce number Of QR Code u need</label>
                    <input type='number' name="numberQr" class="form-control" required=""></input>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Prefix qr code </label>
                    <input type='text' name="prefix" class="form-control" required=""></input>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">chooce Color of QR CODE </label>
                    <input type="color" id="" name="color" class="" required="">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
