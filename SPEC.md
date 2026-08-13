# PM Spec — Redesign Landing Page: Villa Matahari

**Status:** Draft (PM stage, dev-team-pipeline)
**Brand name (final):** Villa Matahari (replaces [NAMA_VILLA])

## Summary
Redesign landing page Villa Matahari agar lebih elegan dan memancarkan kesan
"rumah yang nyaman untuk menginap".

## Acceptance Criteria
- [ ] Brand name [NAMA_VILLA] → "Villa Matahari" di: config.php (site name),
      header logo text, footer, hero h1, seo title/og.
- [ ] Visual lebih elegan: hero gradient lembut, spacing luas, shadow halus,
      radius konsisten, tipografi JetBrains Mono rapi.
- [ ] Tetap light mode + hijau brand (#059669 / #10b981 / #047857) — jangan
      keluar styleguide (styleguide.batuteknologi.web.id).
- [ ] Galeri: bila assets/img/gallery-*.jpg belum ada, gunakan CSS placeholder
      elegan (bukan teks [NAMA_VILLA] mentah).
- [ ] Testimoni: tetap PLACEHOLDER elegan & netral (bukan data palsu).
- [ ] Tidak ada konten karangan (nama tamu asli, nomor WA, email) — placeholder netral.
- [ ] Verifikasi via browser screenshot (light mode, hijau aksen, teks terbaca, logo hitam).
- [ ] Tidak ada DB write/migration.

## Out-of-scope
- Pengisian data asli (foto, testimoni, kontak) — menunggu Bill.
- Perubahan backend/config selain nama brand.

## Risks
- Over-styling boleh asal tetap dalam palet hijau/putih/ink.
