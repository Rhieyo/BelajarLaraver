<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogs</title>
</head>
<body>
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
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->created_at}}</td>
                        <td>
                            <a href="#">Delete</a>
                            <a href="#">Update</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>