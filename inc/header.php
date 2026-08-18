<?php // Partial nav ?>
<nav id="navbar">
    <div class="container nav-container">
        <a href="/" class="logo">
            <span class="logo-icon">
                <svg viewBox="0 0 120 120" width="26" height="26" aria-hidden="true" focusable="false">
                    <circle cx="60" cy="74" r="27" fill="#059669"/>
                    <g fill="#059669">
                        <rect x="56.5" y="8" width="7" height="17" rx="3.5" transform="rotate(-90 60 74)"/>
                        <rect x="56.5" y="8" width="7" height="17" rx="3.5" transform="rotate(-67.5 60 74)"/>
                        <rect x="56.5" y="8" width="7" height="17" rx="3.5" transform="rotate(-45 60 74)"/>
                        <rect x="56.5" y="8" width="7" height="17" rx="3.5" transform="rotate(-22.5 60 74)"/>
                        <rect x="56.5" y="8" width="7" height="17" rx="3.5" transform="rotate(0 60 74)"/>
                        <rect x="56.5" y="8" width="7" height="17" rx="3.5" transform="rotate(22.5 60 74)"/>
                        <rect x="56.5" y="8" width="7" height="17" rx="3.5" transform="rotate(45 60 74)"/>
                        <rect x="56.5" y="8" width="7" height="17" rx="3.5" transform="rotate(67.5 60 74)"/>
                    </g>
                    <path d="M8 112 L60 44 L112 112 Z" fill="#0f172a"/>
                    <path d="M50.5 61 L60 44 L69.5 61 L65 61 L60 52.5 L55 61 Z" fill="#ffffff"/>
                </svg>
            </span>
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
