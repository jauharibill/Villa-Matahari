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
// Smooth scroll for in-page nav links with fixed-navbar offset
document.querySelectorAll('.nav-links a[href^="#"]').forEach(function (a) {
    a.addEventListener('click', function (e) {
        var id = this.getAttribute('href');
        if (id.length < 2) return;
        var target = document.querySelector(id);
        if (!target) return;
        e.preventDefault();
        var navH = document.getElementById('navbar') ? document.getElementById('navbar').offsetHeight : 0;
        var y = target.getBoundingClientRect().top + window.pageYOffset - navH - 10;
        window.scrollTo({ top: y, behavior: 'smooth' });
        // close mobile menu if open
        document.querySelector('#navLinks .nav-links')?.classList.remove('open');
    });
});
window.addEventListener('scroll', function () {
    document.getElementById('navbar')?.classList.toggle('scrolled', window.scrollY > 40);
});
</script>
</body>
</html>
