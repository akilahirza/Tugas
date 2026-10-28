<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Penerbit dan Supplier - Digital Library</title>
    @vite(['resources/css/style.css'])
</head>
<body>
    <header>
        <h1>Digital Library</h1>
    </header>
    <main>
        <section>
            <h2>Detail Penerbit &amp; Supplier</h2>
            @foreach ($supplier as $data)
                <div class="kotak">
                    <h3>{{ $data->nama_supplier }}</h3>

                    <p>
                        No. Telepon :
                        {{ $data->no_telp }}
                    </p>

                    <p>
                        Alamat :
                        {{ $data->alamat }}
                    </p>

                    <p>
                        Wilayah Asal :
                        {{ $data->wilayah_asal }}
                    </p>
                    <div class="tombol-aksi-data">
                        <button class="edit"><a href="{{ route("form", $data->id_supplier) }}">Edit</a></button>
                        <form action="{{ route('hapusSupplier', $data->id_supplier) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="hapus">Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
            <p class="tengah"><a href="{{ url("/") }}" class="tombol">Kembali ke Daftar</a></p>
            <p class="tengah"><a href="{{ url("/form") }}" class="tombol">Tambah buku</a></p>
        </section>
    </main>
</body>
</html>
