{{-- resources/views/blog/create.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Artikel</title>
    <link rel="stylesheet" href="{{ asset('blog/style.css') }}">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f0f4f8;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 40px;
            color: #2c3e50;
        }

        form {
            max-width: 600px;
            background: #fff;
            padding: 30px 40px;
            margin: 40px auto;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }

        form div {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: #34495e;
        }

        input[type="text"],
        input[type="date"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 5px rgba(52,152,219,0.5);
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: #3498db;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #3498db;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #2980b9;
        }

        /* Responsive */
        @media (max-width: 640px) {
            form {
                padding: 20px;
                margin: 20px;
            }
        }
    </style>
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

    <div style="text-align:center;">
        <a href="{{ route('admin.dashboard') }}">Kembali ke Dashboard</a>
    </div>
</body>
</html>
