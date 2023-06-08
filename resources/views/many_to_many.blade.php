<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-6">
            <div class="table table-responsive">
                <table class="table table-bordered table-striped">
                    <h2>Many to Many Relation</h2>
                    <thead>
                        <tr>
                            <th>Post </th>
                            <th>Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $data)
                            <tr>
                                <td>{{ $data->title }}</td>
                                <td>
                                    @foreach ($data->post as $post)
                                    {{ $post->title }}
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
