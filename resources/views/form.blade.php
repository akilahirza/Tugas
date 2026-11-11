<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @if ($data)
    <title>Edit Supplier - Digital Library</title>
    @else
    <title>Tambah Supplier - Digital Library</title>
    @endif

    @vite(['resources/css/style.css'])
</head>

<body>

    <header>
        <h1>Digital Library</h1>
      <h5>{{ Auth::user()->name }} | {{ Auth::user()->role }}</h5>
    </header>

    <main>

        <section>

            @if ($data)
            <h2>Edit Supplier</h2>
            @else
            <h2>Tambah Supplier</h2>
            @endif
            <div class="kotak">
                <form action="{{ $data->exists ? route('updateSupplier', $data->id_supplier) : route('tambahSupplier') }}" method="POST">
                    @csrf
                    @if($data->exists)
                        @method('PUT')
                    @endif
                    <label for="nama_supplier">
                        Nama Supplier
                    </label>

                    <br>

                    <input
                        type="text"
                        id="nama_supplier"
                        name="nama_supplier"
                        placeholder="Masukkan nama supplier"
                        required
                        value="{{ $data->nama_supplier }}"
                    >
                    <br><br>
                    <label for="no_telp">
                        Nomor Telepon
                    </label>

                    <br>

                    <input
                        type="text"
                        id="no_telp"
                        name="no_telp"
                        placeholder="Contoh: 0812-0000-0001"
                        required
                        value="{{ $data->no_telp }}"
                    >

                    <br><br>

                    <label for="alamat">
                        Alamat
                    </label>

                    <br>

                    <textarea
                        id="alamat"
                        name="alamat"
                        placeholder="Masukkan alamat supplier"
                        rows="4"
                        required
                    >{{ $data->alamat }}</textarea>

                    <br><br>
                    <label for="wilayah_asal">
                        Wilayah Asal
                    </label>

                    <br>

                    <input
                        type="text"
                        id="wilayah_asal"
                        name="wilayah_asal"
                        placeholder="Contoh: Jawa Barat"
                        required
                        value="{{ $data->wilayah_asal }}"
                    >

                    <br><br>

                    <button type="submit">
                        Simpan Supplier
                    </button>

                    <a href="{{ url("/detail") }}">
                        Kembali
                    </a>

                </form>

            </div>

        </section>

    </main>

</body>

</html>