@extends('blog.layouts.master')

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

<style>
/* 🌞 LIGHT MODE */
.contact-section {
    padding: 80px 10%;
    background-color: #f4f4f4;
    color: #333;
    text-align: center;
    transition: background-color 0.4s, color 0.4s;
}

.contact-section h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
}

.contact-section .subtitle {
    color: #777;
    margin-bottom: 40px;
    font-size: 1.1rem;
}

.contact-container {
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
    justify-content: center;
    margin-top: 20px;
}

.contact-info, .contact-form {
    flex: 1;
    min-width: 300px;
    max-width: 500px;
    text-align: left;
    background: #fff;
    padding: 25px;
    border-radius: 16px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: background-color 0.4s, box-shadow 0.4s;
}

.contact-info h3,
.contact-form h3 {
    margin-bottom: 15px;
    color: #00bcd4;
}

.contact-form form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 1rem;
    transition: border-color 0.3s, background-color 0.3s, color 0.3s;
}

.contact-form input:focus,
.contact-form textarea:focus {
    border-color: #00bcd4;
    outline: none;
}

.contact-form button.cta-btn {
    background-color: #00bcd4;
    color: #fff;
    padding: 12px 25px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
    transition: background-color 0.3s;
}

.contact-form button.cta-btn:hover {
    background-color: #0095b6;
}

/* 🌙 DARK MODE (warna DONGKER) */
body.dark-mode .contact-section {
    background-color: #0b1a33; /* biru dongker tua */
    color: #e0e6f1;
}

body.dark-mode .contact-info,
body.dark-mode .contact-form {
    background-color: #13294b; /* biru dongker medium */
    box-shadow: 0 4px 10px rgba(0,0,0,0.5);
}

body.dark-mode .contact-form input,
body.dark-mode .contact-form textarea {
    background-color: #1c3666; /* sedikit lebih terang dari bg utama */
    color: #e0e6f1;
    border: 1px solid #335c8f;
}

body.dark-mode .contact-form input:focus,
body.dark-mode .contact-form textarea:focus {
    border-color: #00bcd4;
}

body.dark-mode .contact-form button.cta-btn {
    background-color: #00bcd4;
    color: #fff;
}

body.dark-mode .contact-form button.cta-btn:hover {
    background-color: #0095b6;
}
</style>
@endsection
