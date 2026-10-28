<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <title>Digital Library - Daftar Penerbit dan Supplier</title>
    @vite(['resources/css/style.css'])
  </head>
  <body>
    <header>
      <h1>Digital Library</h1>
    </header>
    <main>
      <section>
        <h2>Daftar Penerbit &amp; Supplier</h2>
        <ul>
          <li>Nusantara Media</li>
          <li>Cakrawala Pustaka</li>
          <li>Lentera Ilmu</li>
        </ul>
        <p class="tengah"><a href="{{ route("detail") }}" class="tombol">Lihat Semua Detail</a></p>
      </section>
    </main>
    <form action="{{ url('/logout') }}" method="POST">
      @csrf
      <p class="tengah">
        <button type="submit" class="tombol">Logout</button>
      </p>
    </form>
    <footer>
      <h3>Identitas Mahasiswa</h3>
      <p>Nama : Akila Hirza</p>
      <p>NIM : 102022530071</p>
      <p>Kelas : SI4906</p>
      <p>Kelompok : Kelompok 1</p>
      <p>Modul : Penerbit &amp; Supplier</p>
    </footer>
  </body>
</html>
