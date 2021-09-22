<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog-Create</title>
</head>
<body>
    <div>
        <a href="/">Back</a>
    </div>
    <div>
        <h3>
            {{ $data->title }}
        </h3>
        
        <p>
            {{ $data->description }}
        </p>
    </div>
</body>
</html>