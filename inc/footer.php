<?php // Partial footer ?>
<footer class="site-footer">
    <div class="container footer-grid">
        <div>
            <h3><?php echo htmlspecialchars($site['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
            <p><?php echo htmlspecialchars($site['tagline'], ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
        <div>
            <h4>Kontak</h4>
            <p><a href="<?php echo htmlspecialchars($site['wa_link'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank">WhatsApp: <?php echo htmlspecialchars($site['wa'], ENT_QUOTES, 'UTF-8'); ?></a></p>
            <p><a href="mailto:<?php echo htmlspecialchars($site['email'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($site['email'], ENT_QUOTES, 'UTF-8'); ?></a></p>
            <p><?php echo htmlspecialchars($site['location'], ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
        <div>
            <h4>Tautan</h4>
            <p><a href="https://batuteknologi.web.id" target="_blank">BATU Teknologi</a></p>
            <p><a href="#kontak">Reservasi</a></p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($site['name'], ENT_QUOTES, 'UTF-8'); ?>. Dikelola oleh BATU Teknologi.</p>
    </div>
</footer>
<script>
document.getElementById('hamburger')?.addEventListener('click', function () {
    document.querySelector('#navLinks .nav-links')?.classList.toggle('open');
});
// Navbar solid on scroll
window.addEventListener('scroll', function () {
    document.getElementById('navbar')?.classList.toggle('scrolled', window.scrollY > 40);
});
</script>
</body>
</html>
