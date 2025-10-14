
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - My Website</title>
    <link rel="stylesheet" href="{{ asset('blog/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">MyWebsite</div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#article">Article</a></li>
                <li><a href="#about-us">About Us</a></li>
            </ul>
        </nav>
        <button id="dark-mode-toggle">🌙</button>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Home Section -->
        <section id="home" class="hero">
            <h1>Selamat Datang di Website Kami</h1>
            <p>Temukan berbagai artikel menarik dan informasi bermanfaat di sini.</p>
            <a href="{{ route('blog.create') }}" class="cta-btn">Tambah Artikel</a>
        </section>

        <!-- Article Section -->
        <section id="article" class="latest-articles">
            <h2>Artikel Terbaru</h2>
            <div id="articles-container" class="articles-container">

                @foreach($blogs as $blog)
                <div class="article-card">
                    <h3>{{ $blog->title }}</h3>
                    <p>{{ Str::limit($blog->content, 120) }}</p>

                    <div class="btn-group">
                        <a href="{{ route('blog.edit', $blog->id) }}" class="btn-edit">Edit</a>

                        <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete">Hapus</button>
                        </form>
                    </div>
                </div>
                @endforeach

            </div>
        </section>

        <!-- About Us Section -->
        <section id="about-us" class="about-section">
            <h2>Tentang Kami</h2>
            <p>
                Kami adalah tim pengembang muda yang bersemangat untuk menghadirkan informasi menarik, 
                edukatif, dan inspiratif untuk semua pembaca.
            </p>
        </section>
    </main>

    <!-- Footer -->
    @include('blog.footer')

    <script src="{{ asset('script.js') }}"></script>
</body>
</html>
