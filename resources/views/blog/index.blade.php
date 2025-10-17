@extends('blog.layouts.master')

@section('title', 'Home - My Website')

@section('content')
<section id="home" class="hero">
    <h1>Selamat Datang di Website Kami</h1>
    <p>Temukan berbagai artikel menarik dan informasi bermanfaat di sini.</p>
    <a href="#article" class="cta-btn">Jelajahi Sekarang</a>
</section>

<section id="article" class="latest-articles">
    <h2>Artikel Terbaru</h2>
    <div class="articles-container">
        @foreach ($blogs as $blog)
            <div class="article">
                <img src="{{ asset('images/' . $blog->image) }}" alt="{{ $blog->title }}">
                <h3>{{ $blog->title }}</h3>
                <p class="author">{{ $blog->author }} | {{ $blog->date }}</p>
                <p>{{ Str::limit($blog->content, 100) }}</p>
                <p class="full-content" style="display:none;">{{ $blog->content }}</p>
                <a href="#" class="read-more">Read More</a>
            </div>
        @endforeach
    </div>
</section>

<div id="article-modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <img id="modal-image" src="" alt="Article Image">
        <h3 id="modal-title"></h3>
        <p id="modal-author"></p>
        <p id="modal-content"></p>
    </div>
</div>

<section id="about-us" class="about-section">
    <h2>Tentang Kami</h2>
    <p>
        Kami adalah tim pengembang muda yang bersemangat untuk menghadirkan informasi menarik, 
        edukatif, dan inspiratif untuk semua pembaca.
    </p>
</section>
@endsection
