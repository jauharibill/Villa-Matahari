<?php
/**
 * Konfigurasi Villa — EDIT nilai asli sebelum deploy ke live.
 * Semua output di-render via htmlspecialchars()/esc_attr()/json_encode() (anti-XSS).
 */
$site = array(
    'name'        => 'Villa Matahari',
    'tagline'     => 'Rumah nyaman untuk menginap, di kaki Gunung Arjuno Kota Batu',
    'description' => 'Villa Matahari Kota Batu — penginapan nyaman dengan view gunung, ' .
                     'kolam renang, WiFi cepat, dan suasana yang tenang seperti rumah sendiri. ' .
                     'Mulai Rp 750.000/malam. Booking via WhatsApp!',
    'location'    => 'Kota Batu, Jawa Timur',
    'wa'          => '6282245088948',                      // 62xxx tanpa +
    'email'       => 'villa@batuteknologi.web.id',
    'price'       => 'Mulai Rp 750.000 / malam',
    'facilities'  => array(
        array('icon' => 'fa-swimming-pool', 'label' => 'Kolam Renang'),
        array('icon' => 'fa-wifi',          'label' => 'WiFi Cepat'),
        array('icon' => 'fa-mountain',      'label' => 'View Gunung'),
        array('icon' => 'fa-car',           'label' => 'Area Parkir Luas'),
        array('icon' => 'fa-utensils',      'label' => 'Dapur Lengkap'),
        array('icon' => 'fa-snowflake',     'label' => 'AC & Air Panas'),
        array('icon' => 'fa-tv',            'label' => 'Smart TV'),
        array('icon' => 'fa-couch',         'label' => 'Ruang Keluarga'),
    ),
    // Isi dengan path gambar di /assets/img/ (Human tambahkan file aslinya)
    'gallery'     => array(
        array('src' => 'assets/img/gallery-1.jpg', 'alt' => 'Kolam renang dengan view pegunungan'),
        array('src' => 'assets/img/gallery-2.jpg', 'alt' => 'Kolam renang villa yang tenang'),
        array('src' => 'assets/img/gallery-3.jpg', 'alt' => 'Pemandangan gunung saat senja'),
        array('src' => 'assets/img/gallery-4.jpg', 'alt' => 'Ruang keluarga yang hangat dan modern'),
        array('src' => 'assets/img/gallery-5.jpg', 'alt' => 'Kamar tidur yang bersih dan nyaman'),
        array('src' => 'assets/img/gallery-6.jpg', 'alt' => 'Ruang santai untuk bersantai'),
    ),
    // Testimoni netral (placeholder) — ganti dengan data asli dari pemilik nanti.
    'testimonials' => array(
        array('name' => 'Tamu', 'text' => 'Menginap di sini terasa seperti di rumah sendiri: nyaman, bersih, dan pemandangan yang menenangkan.'),
        array('name' => 'Tamu', 'text' => 'Suasana tenang di kaki gunung dengan fasilitas lengkap. Cocok untuk liburan keluarga.'),
        array('name' => 'Tamu', 'text' => 'Pengalaman menginap yang menyenangkan. Tempat yang sempurna untuk sekadar bersantai.'),
    ),
);

// Turunan
$site['wa_link'] = 'https://wa.me/' . preg_replace('/[^0-9]/', '', $site['wa']);
$site['canonical'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://')
    . ($_SERVER['HTTP_HOST'] ?? 'villa.batuteknologi.web.id') . '/';
$site['og_image'] = $site['canonical'] . 'og-image.png';
