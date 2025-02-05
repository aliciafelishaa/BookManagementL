@include('layout.header')
    <h3>Books</h3>
    <a href="{{route('buku.create')}}" class="tombol">Create</a>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Kategori</th>
                <th>Penerbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buku as $key => $r)
            <tr>
                <td>{{$key +1}}</td>
                <td>{{$r->judul}}</td>
                <td>{{$r->pengarang}}</td>
                <td>{{$r->tahun_terbit}}</td>
                <td>{{$r->kategori->nama_kategori}}</td>
                <td>{{$r->penerbit->nama_penerbit}}</td>
                <td>
                    <form action="{{route('buku.destroy', $r->id)}}" method="POST">
                        <a href="{{route('buku.show', $r->id)}}" class="tombol">Detail</a>
                        <a href="{{route('buku.edit', $r->id)}}" class="tombol">Edit</a>

                        <button type="submit" class="tombol" >Delete</button>
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@include('layout.footer')
