<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog - Update</title>
</head>
<body>
    <div>
        <a href="/">Back</a>
    </div>
    <div>
        <form action="/update/{{$data->id}}" method="POST">
            <input type="hidden" name="_method" value="PATCH">
            @csrf
            <div>
                <label for="">Title</label>
            </div>
            <div>
                <input name="title" type="text" value="{{$data->title}}">
            </div>
            <div>
                <label for="">Description</label>
            </div>
            <div>
                <textarea name="description" id="" cols="30" rows="5">{{$data->description}}</textarea>
            </div>
            <div>
                <button type="submit">Save And Change</button>
            </div>
        </form>
    </div>
</body>
</html>