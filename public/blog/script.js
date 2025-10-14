document.addEventListener('DOMContentLoaded', () => {

    // ========== MODAL LOGIC ==========
    const modal = document.getElementById('article-modal');
    const closeBtn = document.querySelector('.close');
    const modalTitle = document.getElementById('modal-title');
    const modalAuthor = document.getElementById('modal-author');
    const modalContent = document.getElementById('modal-content');
    const modalImage = document.getElementById('modal-image');

    // Event listener untuk tombol "Read More"
    document.addEventListener('click', (e) => {
        if (e.target.classList.contains('read-more')) {
            e.preventDefault();

            // Ambil data langsung dari elemen HTML
            const articleElement = e.target.closest('.article');
            const title = articleElement.querySelector('h3').textContent;
            const author = articleElement.querySelector('.author').textContent;
            const content = articleElement.querySelector('.full-content').textContent;
            const image = articleElement.querySelector('img').getAttribute('src');

            // Isi modal
            modalTitle.textContent = title;
            modalAuthor.textContent = author;
            modalContent.textContent = content;
            modalImage.src = image;

            // Tampilkan modal
            modal.style.display = 'block';
        }
    });

    // Tutup modal
    if (closeBtn) {
        closeBtn.addEventListener('click', () => {
            modal.style.display = 'none';
        });
    }

    // Klik di luar modal untuk menutup
    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.style.display = 'none';
        }
    });

    // ========== DARK MODE ==========
    const darkModeToggle = document.getElementById('dark-mode-toggle');

    // Pastikan tombolnya ada
    if (darkModeToggle) {
        // Cek jika dark mode sudah disimpan di localStorage
        if (localStorage.getItem('darkMode') === 'enabled') {
            document.body.classList.add('dark-mode');
            darkModeToggle.textContent = '🌞';
        } else {
            document.body.classList.remove('dark-mode');
            darkModeToggle.textContent = '🌙';
        }

        // Tombol ganti mode
        darkModeToggle.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');

            if (document.body.classList.contains('dark-mode')) {
                localStorage.setItem('darkMode', 'enabled');
                darkModeToggle.textContent = '🌞';
            } else {
                localStorage.setItem('darkMode', 'disabled');
                darkModeToggle.textContent = '🌙';
            }
        });
    }
});
