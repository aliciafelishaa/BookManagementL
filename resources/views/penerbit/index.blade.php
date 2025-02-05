@include('layout.header')
    <h3>Penerbit</h3>
    <a href="{{route('penerbit.create')}}" class="tombol">Create</a>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Penerbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penerbit as $key => $r)
            <tr>
                <td>{{$key +1}}</td>
                <td>{{$r->nama_penerbit}}</td>
                <td>
                    <form action="{{route('penerbit.destroy', $r->id)}}" method="POST">
                        <a href="{{route('penerbit.show', $r->id)}}" class="tombol">Detail</a>
                        <a href="{{route('penerbit.edit', $r->id)}}" class="tombol">Edit</a>

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
