@include('layout.header')
    <h3>Detail Categories</h3>
    <a href="{{route('penerbit.create')}}" class="tombol">Create</a>
    <table>

        <tbody>
            <tr>
                <td width ="100px">Nama Penerbit:</td>
                <td width="2px">:</td>
                <td>{{$penerbit->nama_penerbit}}</td>
            </tr>

        </tbody>
    </table>
@include('layout.footer')
