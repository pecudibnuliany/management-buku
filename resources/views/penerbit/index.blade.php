@include('layout.header')

        <h3>Penerbit</h3>
        <a href="{{ route('penerbit.create') }}" class="tombol">Tambah</a>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allPenerbit as $key=> $r)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $r -> nama_penerbit }}</td>
                        <td>
                            <form action="{{ route('penerbit.destroy', $r->id) }}" method="post">
                                <a href="{{ route('penerbit.show', $r->id) }}" class="tombol">Detail</a>
                                <a href="{{ route('penerbit.edit', $r->id) }}" class="tombol">Ubah</a>
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
