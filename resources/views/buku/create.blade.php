@include('layout.header')

<h3> Tambah Data Buku</h3>
<form action="{{ route('buku.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="">Judul Buku:</label>
        <input type="text" name="judul" id="" placeholder="Judul Buku">
    </div>
    <div class="form-group">
        <label for="">Pengarang:</label>
        <input type="text" name="pengarang" id="" placeholder="Pengarang">
    </div>
    <div class="form-group">
        <label for="">Tahun Terbit:</label>
        <input type="text" name="tahun_terbit" id="" placeholder="Tahun Terbit">
    </div>
    <div class="form-group">
        <label for="">Kategori:</label>
        <select name="kategori_id">
            @foreach($kategori as $k)
                <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Penerbit:</label>
        <select name="penerbit_id">
            @foreach($penerbit as $p)
                <option value="{{ $p->id }}">{{ $p->nama_penerbit }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="tombol">Submit</button>
</form>

@include('layout.footer')
