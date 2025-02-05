@include('layout.header')
    <h3>Categories</h3>
    <a href="{{route('Kategori.create')}}" class="tombol">Create</a>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategori as $key => $r)
            <tr>
                <td>{{$key +1}}</td>
                <td>{{$r->nama_kategori}}</td>
                <td>
                    <form action="{{route('Kategori.destroy', $r->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{route('Kategori.show', $r->id)}}" class="tombol">Detail</a>
                        <a href="{{route('Kategori.edit', $r->id)}}" class="tombol">Edit</a>

                        <button type="submit" class="tombol" >Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@include('layout.footer')
