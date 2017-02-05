<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div class="full-height">
        <header>
            <h1>Points</h1>
        </header>
        <div class="grid">
            @foreach ($people as $person)
                <div class="person position-rel grid-box-wrap">
                    <div class="grid-box">
                        <img src="storage/{{ $person->image_location }}" alt="person image" />
                        <div class="points">{{ $person->points }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>