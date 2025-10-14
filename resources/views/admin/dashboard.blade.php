<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - CRUD Blog</title>
    <link rel="stylesheet" href="{{ asset('blog/style.css') }}">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f5f5f5;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        .logout-btn, .add-btn {
            padding: 8px 15px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            color: white;
        }
        .logout-btn {
            background-color: #e74c3c;
        }
        .add-btn {
            background-color: #2ecc71;
            text-decoration: none;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #3498db;
            color: white;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
        .actions a {
            margin-right: 8px;
            text-decoration: none;
            color: #2980b9;
        }
        .actions form {
            display: inline;
        }
        .actions button {
            background: none;
            border: none;
            color: #e74c3c;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="top-bar">
        <h1>Dashboard Admin</h1>
        <div>
            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                @csrf
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </div>
    </div>

    <div class="content">
        <a href="{{ route('blog.create') }}" class="add-btn">+ Tambah Artikel</a>
        <br><br>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Author</th>
                    <th>Tanggal</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $index => $blog)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->author }}</td>
                        <td>{{ $blog->date }}</td>
                        <td>
                            <img src="{{ asset('images/' . $blog->image) }}" alt="{{ $blog->title }}" width="80">
                        </td>
                        <td class="actions">
                            <a href="{{ route('blog.edit', $blog->id) }}">Edit</a>
                            <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
