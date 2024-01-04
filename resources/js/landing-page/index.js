// Ambil semua tautan dalam navigasi
const navLinks = document.querySelectorAll('.nav-link');

// Fungsi untuk menandai tautan aktif
function markActiveLink() {
    // Hapus kelas 'active' dari semua tautan terlebih dahulu
    navLinks.forEach((link) => {
        link.classList.remove('active');
    });

    // Loop melalui semua tautan
    navLinks.forEach((link) => {
        const targetId = link.getAttribute('href').substring(1); // Hapus karakter "#" dari href
        const targetElement = document.getElementById(targetId);
        if (isElementInViewport(targetElement)) {
            link.classList.add('active'); // Tambahkan kelas aktif
        }
    });
}

// Fungsi untuk memeriksa apakah elemen dalam viewport
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    const scrollPadding = 73; // Padding scroll yang diinginkan

    return rect.top <= scrollPadding && rect.bottom >= scrollPadding;
}

// Panggil fungsi saat halaman dimuat dan saat ada perubahan hash
window.addEventListener('load', markActiveLink);
window.addEventListener('scroll', markActiveLink);

// Panggil fungsi untuk membuat animasi perubahan otimatis pada jumbotron
document.addEventListener('DOMContentLoaded', function () {
    const TIMER = 7000; // Nilai konstan untuk interval waktu animasi dalam milisecond (ms)
    const images = document.querySelectorAll('.bg-image');
    let currentImageIndex = 0;

    function fadeInNextImage() {
        const nextImageIndex = (currentImageIndex + 1) % images.length;
        images[currentImageIndex].style.opacity = 0;
        images[nextImageIndex].style.opacity = 1;
        currentImageIndex = nextImageIndex;
        setTimeout(fadeInNextImage, TIMER); // Ganti gambar setiap sesuai nilai interval waktu animasi
    }

    // Mulai animasi dengan mengatur opacity gambar pertama menjadi 1
    // images[currentImageIndex].style.opacity = 1;

    // Panggil fungsi untuk mengganti gambar secara otomatis
    setTimeout(fadeInNextImage, TIMER);
});
