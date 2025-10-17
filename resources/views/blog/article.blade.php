@extends('blog.layouts.master')

@section('title', 'Artikel Terbaru')

@section('content')
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

        <div id="article-modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <img id="modal-image" src="" alt="Article Image">
    <h3 id="modal-title"></h3>
    <p id="modal-author"></p>
    <p id="modal-content"></p>
  </div>
</div>
@endsection
