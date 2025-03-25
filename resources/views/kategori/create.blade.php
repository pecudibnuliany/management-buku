@include('layout.header')

<h3>Buat Kategori</h3>
<form action="{{ route('kategori.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="">Nama Kategori:</label>
        <input type="text" nama="nama_kategori" id="" placeholder="Nama Kategori">
    </div>
    <button type="submit" class="tombol">Submit</button>
</form>

@include('layout.footer')
