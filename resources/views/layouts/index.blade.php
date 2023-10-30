<html>
    <head>
        <title>Kasir</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    </head>
        <body>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container" style="background-color: rgb(112, 196, 205);">
                    <a class="navbar-brand" href="/dashboard"><b>MYKASIR</b></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false"
                    aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>
                
                <!--membuat menu--> 
                

                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('barang.index') }}">Barang</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('transaksi.index') }}">Transaksi</a>
                      </li>
                  </div>
                </nav>
                <div class="container">
                  @yield('konten')
                </div>
                
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>
</html>