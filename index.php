<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/inc/head.php';
require_once __DIR__ . '/inc/header.php';

$wa_link = $site['wa_link'];
$price   = htmlspecialchars($site['price'], ENT_QUOTES, 'UTF-8');
$name    = htmlspecialchars($site['name'], ENT_QUOTES, 'UTF-8');
$tagline = htmlspecialchars($site['tagline'], ENT_QUOTES, 'UTF-8');
?>

<main>
    <!-- HERO -->
    <section id="home" class="villa-hero">
        <div class="container">
            <div class="villa-hero-content">
                <span class="section-tag"><?php echo htmlspecialchars($site['location'], ENT_QUOTES, 'UTF-8'); ?></span>
                <h1><?php echo $name; ?></h1>
                <p class="villa-hero-desc"><?php echo $tagline; ?></p>
                <div class="villa-hero-actions">
                    <a href="<?php echo htmlspecialchars($wa_link, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" class="btn btn-primary btn-lg">
                        <i class="fab fa-whatsapp"></i> Pesan Sekarang
                    </a>
                    <span class="villa-price"><?php echo $price; ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- TENTANG -->
    <section id="tentang" class="villa-about">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Tentang</span>
                <h2><?php echo $name; ?> — Ketenangan di Kaki Gunung</h2>
            </div>
            <p class="villa-about-text">
                <?php echo nl2br(htmlspecialchars($site['description'], ENT_QUOTES, 'UTF-8')); ?>
            </p>
        </div>
    </section>

    <!-- FASILITAS -->
    <section id="fasilitas" class="villa-facilities">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Fasilitas</span>
                <h2>Kenyamanan untuk Liburan Anda</h2>
            </div>
            <div class="villa-facilities-grid">
                <?php foreach ($site['facilities'] as $f): ?>
                    <div class="villa-facility">
                        <i class="fas <?php echo htmlspecialchars($f['icon'], ENT_QUOTES, 'UTF-8'); ?>"></i>
                        <span><?php echo htmlspecialchars($f['label'], ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- GALERI -->
    <section id="galeri" class="villa-gallery">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Galeri</span>
                <h2>Suasana <?php echo $name; ?></h2>
            </div>
            <div class="portfolio-grid">
                <?php foreach ($site['gallery'] as $img): ?>
                    <div class="portfolio-card">
                        <div class="portfolio-img">
                            <img src="/<?php echo htmlspecialchars($img, ENT_QUOTES, 'UTF-8'); ?>"
                                 alt="<?php echo $name; ?>"
                                 loading="lazy">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- TESTIMONI -->
    <section id="testimoni" class="villa-testimonials">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Testimoni</span>
                <h2>Apa Kata Tamu Kami</h2>
            </div>
            <div class="testimonials-grid">
                <?php foreach ($site['testimonials'] as $t): ?>
                    <div class="testimonial-card">
                        <p><?php echo htmlspecialchars($t['text'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <h4><?php echo htmlspecialchars($t['name'], ENT_QUOTES, 'UTF-8'); ?></h4>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- KONTAK / CTA -->
    <section id="kontak" class="service-cta-section">
        <div class="container">
            <div class="cta-box">
                <span class="section-tag">Reservasi</span>
                <h2>Siap Menginap di <?php echo $name; ?>?</h2>
                <p>Hubungi kami untuk cek ketersediaan dan dapatkan penawaran terbaik.</p>
                <a href="<?php echo htmlspecialchars($wa_link, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" class="btn btn-primary btn-lg">
                    Booking via WhatsApp <i class="fab fa-whatsapp"></i>
                </a>
            </div>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/inc/footer.php'; ?>
