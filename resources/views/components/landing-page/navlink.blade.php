<ul
    class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:items-center md:p-0 bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
    <li>
        <a href="/" class="nav-link">Beranda</a>
    </li>
    <li>
        <a href="#about" class="nav-link">Tentang
            Kami</a>
    </li>
    <li>
        <a href="#article" class="nav-link">Artikel</a>
    </li>
    <li>
        <a href="#gallery" class="nav-link">Galeri</a>
    </li>
    <li>
        <a href="#contact" class="nav-link">Pojok Curhat</a>
    </li>
    <li>
        @include('components/daftar-komunitas-modal')
    </li>
    <li>
        <x-toggle-mode
            class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 h-10 w-10 bg-white dark:bg-gray-800 mx-4 mt-2 md:m-0" />
    </li>
    <li>
        <button onclick="toggleZoom()">
            <x-cached-image imagePath="img/zoom.png" style='width: 15px;' />
        </button>
    </li>
</ul>
<script>
    function toggleZoom() {
        const article = document.getElementById('articleContainer')
        if (document.body.style.zoom !== "100%") {
            document.body.style.zoom = "100%";
            if (article) {
                article.classList.add('xl:grid-cols-2')
                article.classList.remove('md:grid-cols-1')
            }
        } else {
            document.body.style.zoom = "125%";
            if (article) {
                article.classList.add('md:grid-cols-1')
                article.classList.remove('xl:grid-cols-2')
            }
        }
    }
</script>
