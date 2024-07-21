<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cheatsheet Preview PW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/preview-style.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div>
                <img src="img/buku.png" alt="">
                <span>BukaCatatan</span>
            </div>
            <div>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
            <div>
                <button class="btn btn-outline-warning" type="submit">Logout</button>
            </div>

        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- konten -->
    <div class="container">

        <div class="konten mt-5 text-center">
            <div>
                <h2>Selamat datang, Terima kasih Telah Login</h2>
            </div>
            <div class="pw p-3 border border-warning rounded d-inline-block">
                <img src="img/pw.png" alt="">
                <span>Pemrograman WEB</span>
            </div>
        </div>

        <div class="text">
            <h3>Catatan Berdasarkan Kategori</h3>
            <h5>ALL Cheatsheet</h5>
            <div class="preview m-5 p-5 border border-warning rounded">
            @foreach ($previewpw as $pw)
                <div class="title d-flex justify-content-between"> 
                    <h3>{{ $pw->title }}</h3> 
                    <div>   
                        <a href="">
                            <img src="img/edit.png" alt="">
                        </a>
                        <a href="">
                            <img src="img/delete.png" alt="">
                        </a>
                        
                    </div>              
                </div>
                <p>di buat pada <span>{{ $pw->published_at }}</span></p>
                <hr>
                <div class="catatan">
                    <p>{{ $pw->content }}</p>
                </div>
                <hr><br><br><br><br>
            @endforeach

            </div>
            <a class="btn" href="preview-pw/create">
                <span>Tambah Catatan Baru</span>
                <img src="img/tambah.png" alt="">
            </a>
        </div>
        

        <!-- footer -->
        <div class="footer text-center">
            <h2>Cheatsheet 2024</h2>
            <p class="text-warning">Semua Materi diambil dari Modul yang sudah kami rangkum</p>
            <p>@cheatsheet.2024</p>
        </div>
    <!-- akhir footer -->

    </div>
    <!-- akhir konten -->






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>