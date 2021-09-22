<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogs</title>
</head>
<body>
    @if(session()->has("alert"))
    <h3>{{session()->get('alert')}}</h3>
    @endif
    <div>
        <a href="/create">Add New Blog</a>
    </div>
    <div>
        <table>
            <thead>
                <th>No</th>
                <th>Title</th>
                <th>Created At</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($data as $key => $item)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td><a href="/show/{{ $item->id }}"> {{ $item->title }} </a></td>
                        <td>{{ $item->created_at}}</td>
                        <td>
                            <a href="/delete/{{ $item->id }}">Delete</a>
                            <a href="/update/{{ $item->id}}">Update</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>