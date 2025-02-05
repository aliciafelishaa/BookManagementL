@include('layout.header')
    <h3>Detail Categories</h3>
    <a href="{{route('kategori.create')}}" class="tombol">Create</a>
    <table>

        <tbody>
            <tr>
                <td width ="100px">Nama Kategori:</td>
                <td width="2px">:</td>
                <td>{{$kategori->nama_kategori}}</td>
            </tr>

        </tbody>
    </table>
@include('layout.footer')
