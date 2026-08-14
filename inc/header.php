<?php // Partial nav ?>
<nav id="navbar">
    <div class="container nav-container">
        <a href="/" class="logo">
            <span class="logo-icon"><i class="fa-solid fa-sun"></i></span>
            <span class="logo-text"><?php echo htmlspecialchars($site['name'], ENT_QUOTES, 'UTF-8'); ?></span>
        </a>
        <div class="nav-links-wrap" id="navLinks">
            <ul class="nav-links">
                <li><a href="#home" class="active">Beranda</a></li>
                <li><a href="#tentang">Tentang</a></li>
                <li><a href="#fasilitas">Fasilitas</a></li>
                <li><a href="#galeri">Galeri</a></li>
                <li><a href="#testimoni">Testimoni</a></li>
                <li><a href="#kontak">Kontak</a></li>
                <li><a href="<?php echo htmlspecialchars($site['wa_link'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" class="nav-cta">Booking</a></li>
            </ul>
        </div>
        <button class="hamburger" id="hamburger" aria-label="Menu"><span></span><span></span><span></span></button>
    </div>
</nav>
