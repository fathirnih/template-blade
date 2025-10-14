{{-- resources/views/blog/edit.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Artikel</title>
    <link rel="stylesheet" href="{{ asset('blog/style.css') }}">
</head>
<body>
    <h1>Edit Artikel</h1>

    <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label>Judul</label>
            <input type="text" name="title" value="{{ $blog->title }}" required>
        </div>

        <div>
            <label>Author</label>
            <input type="text" name="author" value="{{ $blog->author }}" required>
        </div>

        <div>
            <label>Tanggal</label>
            <input type="date" name="date" value="{{ $blog->date }}" required>
        </div>

        <div>
            <label>Gambar Saat Ini</label><br>
            <img src="{{ asset('images/' . $blog->image) }}" alt="{{ $blog->title }}" width="120"><br>
            <label>Ganti Gambar</label>
            <input type="file" name="image">
        </div>

        <div>
            <label>Konten</label>
            <textarea name="content" rows="5" required>{{ $blog->content }}</textarea>
        </div>

        <button type="submit">Perbarui Artikel</button>
    </form>

    <a href="{{ route('admin.dashboard') }}">Kembali ke Dashboard</a>
</body>
</html>
