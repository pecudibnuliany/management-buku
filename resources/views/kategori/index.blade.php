@include('layout.header')

        <h3>Kategori</h3>
        <a href="{{ route('kategori.create') }}" class="tombol">Tambah</a>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allKategori as $key=> $r)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $r -> nama_kategori }}</td>
                        <td>
                            <form action="{{ route('kategori.destroy', $r->id) }}" method="post">
                                <a href="{{ route('kategori.show', $r->id) }}" class="tombol">Detail</a>
                                <a href="{{ route('kategori.edit', $r->id) }}" class="tombol">Ubah</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="tombol">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@include('layout.footer')
