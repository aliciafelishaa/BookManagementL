@include('layout.header')
    <h3>Edit Categories</h3>
    {{-- <form action="{{ route('Kategori.update'$kategori->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Nama Kategori:</label>
            <input type="text" name="nama_kategori" value="{{ old('nama_kategori', $kategori->nama_kategori) }}">
        </div>
        <button type="submit" class="tombol">Update</button>
    </form> --}}

    <form action="{{ route('Kategori.update2', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Nama Kategori:</label>
            <input type="text" name="nama_kategori" value="{{ old('nama_kategori', $kategori->nama_kategori) }}">
        </div>
        <button type="submit" class="tombol">Update</button>
    </form>

@include('layout.footer')
