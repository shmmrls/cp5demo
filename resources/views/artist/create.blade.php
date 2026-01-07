<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Artist</title>

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <h3 class="mb-4">Create Artist</h3>

            <form action="/artists" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Artist Name --}}
                <div class="mb-3">
                    <label class="form-label">Artist Name</label>
                    <input type="text" name="artist_name" class="form-control" required>
                </div>

                {{-- Country --}}
                <div class="mb-3">
                    <label class="form-label">Country</label>
                    <input type="text" name="country" class="form-control" required>
                </div>

                {{-- Image --}}
                <div class="mb-3">
                    <label class="form-label">Artist Image</label>
                    <input type="file" name="img_path" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">
                    Save Artist
                </button>
            </form>

        </div>
    </div>
</div>

</body>
</html>
