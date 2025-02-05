@include('layout.header')
    <h3>Make Categories</h3>
    <form action="{{route('penerbit.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Nama Penerbit:</label>
            <input type="text" name="nama_penerbit" id="" placeholder="Masukkan nama penerbit">
        </div>
        <button type="submit" class="tombol">Submit</button>
    </form>


@include('layout.footer')
