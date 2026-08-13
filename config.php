<?php
/**
 * Konfigurasi Villa — EDIT nilai asli sebelum deploy ke live.
 * Semua output di-render via htmlspecialchars()/esc_attr()/json_encode() (anti-XSS).
 */
$site = array(
    'name'        => 'Villa [NAMA]',                       // contoh: Villa Batu Permai
    'tagline'     => 'Surga tenang di kaki gunung, Kota Batu',
    'description' => 'Villa [NAMA] Kota Batu — penginapan nyaman dengan view gunung, ' .
                     'kolam renang, WiFi cepat. Mulai Rp 750.000/malam. Booking via WhatsApp!',
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
        'assets/img/gallery-1.jpg',
        'assets/img/gallery-2.jpg',
        'assets/img/gallery-3.jpg',
        'assets/img/gallery-4.jpg',
        'assets/img/gallery-5.jpg',
        'assets/img/gallery-6.jpg',
    ),
    'testimonials' => array(
        array('name' => '[Nama Tamu]', 'text' => '[Testimoni tamu puas terhadap villa Anda.]'),
        array('name' => '[Nama Tamu]', 'text' => '[Testimoni tamu puas terhadap villa Anda.]'),
        array('name' => '[Nama Tamu]', 'text' => '[Testimoni tamu puas terhadap villa Anda.]'),
    ),
);

// Turunan
$site['wa_link'] = 'https://wa.me/' . preg_replace('/[^0-9]/', '', $site['wa']);
$site['canonical'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://')
    . ($_SERVER['HTTP_HOST'] ?? 'villa.batuteknologi.web.id') . '/';
$site['og_image'] = $site['canonical'] . 'og-image.png';
