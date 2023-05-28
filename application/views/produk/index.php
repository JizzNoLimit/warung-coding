<main class="main">
    <span class="form__wraper"></span>
    <section class="form__produk">
        <div class="form__produk-title">Tambah Produk</div>
        <form action="">
            <div class="mb-2">
                <label for="nama" class="form-label">Produk</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama produk">
            </div>
            <div class="mb-2">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" placeholder="10000">
            </div>
            <div class="mb-2">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" placeholder="Gambar produk">
            </div>
            <div class="mb-2">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-select" id="kategori" aria-label="Default select example">
                    <option selected>Pilih kategori produk</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="stok" class="form-label">Stok</label>
                <input type="text" class="form-control" id="stok" placeholder="Jumlah produk">
            </div>
            <div class="mb-2">
                <label for="tgl_masuk" class="form-label">Tanggal Masuk</label>
                <input type="date" class="form-control" id="tgl_masuk" placeholder="Tanggal masuk produk">
            </div>
        </form>
    </section>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">Warung Coding</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Penjualan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Laporan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir navbar -->
    <div class="main__produk container">
        <section class="produk__head">
            <div class="d-flex justify-content-between">
                <h4>Produk Warung Coding</h4>
                <button class="btn btn-primary btn-sm btn-tambah">Tambah</button>
            </div>
            <hr>
        </section>
        <section class="table__produk">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Expired</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Stok Produk</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                    </tr>

                </tbody>
            </table>
        </section>
    </div>
</main>