{{-- resources/views/blog/create.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Artikel</title>
    <link rel="stylesheet" href="{{ asset('blog/style.css') }}">
</head>
<body>
    <h1>Tambah Artikel Baru</h1>

    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Judul</label>
            <input type="text" name="title" required>
        </div>

        <div>
            <label>Author</label>
            <input type="text" name="author" required>
        </div>

        <div>
            <label>Tanggal</label>
            <input type="date" name="date" required>
        </div>

        <div>
            <label>Gambar</label>
            <input type="file" name="image" required>
        </div>

        <div>
            <label>Konten</label>
            <textarea name="content" rows="5" required></textarea>
        </div>

        <button type="submit">Simpan Artikel</button>
    </form>

    <a href="{{ route('admin.dashboard') }}">Kembali ke Dashboard</a>
</body>
</html>
