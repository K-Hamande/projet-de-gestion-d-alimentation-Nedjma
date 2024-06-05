<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/jpg" href="images/alimentationNedjama.jpg">
    <title>Alimentation NEDJMA</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Source Sans Pro', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
        }

        .container-login {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            box-sizing: border-box;
        }

        .card {
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background-color: #fff;
            width: 100%;
        }

        .card-header-auth {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .card-body-auth {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-lg {
            font-size: 1.25rem;
            padding: 10px 20px;
        }

        .btn-info {
            background-color: #17a2b8;
            border: none;
            color: #fff;
            text-align: center;
            display: block;
            width: 100%;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            box-sizing: border-box;
            text-decoration: none; /* Remove underline from links */
        }

        .btn-info:hover {
            background-color: #138496;
        }

        .text-center {
            text-align: center;
        }

        .border-box {
            border: 1px solid #ddd;
        }
    </style>
</head>

<body>
<div class="container-login">
    <div class="card card-primary border-box">
        <div class="card-header card-header-auth">
            <h4 class="text-center">Page d'impression</h4>
        </div>
        <div class="card-body card-body-auth">
            <div class="form-group">
                <a href="{{ Route('generateForty', ['id' => $Values->id]) }}" class="btn btn-info btn-lg btn-block">Imprimer 40</a>
            </div>
            <div class="form-group">
                <a href="{{ Route('generateFiftySix', ['id' => $Values->id]) }}" class="btn btn-info btn-lg btn-block">Imprimer 56</a>
            </div>
            <div class="form-group">
                <a href="{{ Route('generateSixtyFive', ['id' => $Values->id]) }}" class="btn btn-info btn-lg btn-block">Imprimer 65</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
