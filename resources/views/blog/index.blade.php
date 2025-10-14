
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - My Website</title>
    <script src="{{ asset('blog/script.js') }}"></script>
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
            <div class="articles-container">
    @foreach ($blogs as $blog)
        <div class="article">
            <img src="{{ asset('images/' . $blog->image) }}" alt="{{ $blog->title }}">
            <h3>{{ $blog->title }}</h3>
            <p class="author">{{ $blog->author }} | {{ $blog->date }}</p>
            <p>{{ Str::limit($blog->content, 100) }}</p>

            <!-- Tambahkan konten penuh disembunyikan -->
            <p class="full-content" style="display:none;">{{ $blog->content }}</p>

            <a href="#" class="read-more">Read More</a>
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

    <script src="{{ asset('blog/script.js') }}"></script>
</body>
</html>
