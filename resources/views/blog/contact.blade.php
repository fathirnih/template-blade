@extends('blog.layout.master')

@section('title', 'Hubungi Kami')

@section('content')
<section class="contact-section">
    <h1>Hubungi Kami</h1>
    <p class="subtitle">Kami senang mendengar pendapat, kritik, dan saran dari Anda.</p>

    <div class="contact-container">
        <div class="contact-info">
            <h3>Informasi Kontak</h3>
            <p>📍 Alamat: Jl. Merdeka No. 45, Jakarta</p>
            <p>📞 Telepon: +62 812 3456 7890</p>
            <p>📧 Email: info@mywebsite.com</p>
            <p>🕒 Jam Operasional: Senin - Jumat (08:00 - 17:00)</p>
        </div>

        <div class="contact-form">
            <h3>Kirim Pesan</h3>
            <form action="#" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>
                </div>

                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
                </div>

                <div class="form-group">
                    <label for="message">Pesan</label>
                    <textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda..." required></textarea>
                </div>

                <button type="submit" class="cta-btn">Kirim Pesan</button>
            </form>
        </div>
    </div>
</section>
@endsection
