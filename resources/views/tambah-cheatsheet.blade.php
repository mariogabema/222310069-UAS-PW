<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/tambah-style.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    <title>Tambah Cheatsheet</title>
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h3 class="title mt-5 p-3 border border-warning rounded d-inline-block">Tambah Cheatsheet</h3>
        </div>

        <div class="content border border-warning rounded mt-3">
            <form method="post" action="/preview-pw">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title Cheatsheet</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Category</label>
                    <select class="form-select" name="Category_id">
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <input id="body" type="hidden" name="body">
                    <trix-editor input="body"></trix-editor>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Cheatsheet</button>
            </form>
        </div>

        <!-- footer -->
        <div class="footer text-center">
            <h2>Cheatsheet 2024</h2>
            <p class="text-warning">Semua Materi diambil dari Modul yang sudah kami rangkum</p>
            <p>@cheatsheet.2024</p>
        </div>
        <!-- akhir footer -->

        
    </div>
    
    
</body>
</html>