@include('layout.header')
    <h3>Detail Categories</h3>
    <a href="{{route('buku.create')}}" class="tombol">Create</a>
    <table>
        <tbody>
            <tr>
                <td width ="100px">Judul Buku:</td>
                <td width="2px">:</td>
                <td>{{$buku->judul}}</td>
            </tr>
            <tr>
                <td width ="100px">Pengarang Buku:</td>
                <td width="2px">:</td>
                <td>{{$buku->pengarang}}</td>
            </tr>
            <tr>
                <td width ="100px">Tahun Terbit:</td>
                <td width="2px">:</td>
                <td>{{$buku->tahun_terbit}}</td>
            </tr>
            <tr>
                <td width ="100px">Penerbit:</td>
                <td width="2px">:</td>
                <td>{{$buku->penerbit->nama_penerbit}}</td>
            </tr>
            <tr>
                <td width ="100px">Kategori:</td>
                <td width="2px">:</td>
                <td>{{$buku->kategori->nama_kategori}}</td>
            </tr>
        </tbody>
    </table>
@include('layout.footer')
