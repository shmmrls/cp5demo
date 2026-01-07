<!-- resources/views/artist/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artists List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Artists</h1>

        <a href="{{ url('/artists/create') }}" class="btn btn-primary mb-3">Add New Artist</a>

        @if (count($artists) > 0)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Country</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($artists as $artist)
                        <tr>
                            <td>{{ $artist->name }}</td>
                            <td>{{ $artist->country }}</td>
                            <td>
                                @if($artist->img_path)
                                    <img src="{{ asset($artist->img_path) }}" alt="{{ $artist->name }}" width="100">
                                @else
                                    No Image
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No artists found.</p>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>