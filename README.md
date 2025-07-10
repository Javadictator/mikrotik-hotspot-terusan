# 🔌 WiFi Voucher System dengan Pembayaran Tripay

Sistem ini memungkinkan pengguna membeli voucher akses WiFi melalui metode pembayaran digital yang difasilitasi oleh Tripay. Sistem mengintegrasikan frontend responsif, backend API, dan manajemen hotspot MikroTik.

## 🚀 Fitur
- Pembelian voucher WiFi dengan berbagai nominal
- Pembayaran otomatis via Tripay (QRIS, e-wallet, transfer bank, dll)
- Penerbitan voucher otomatis setelah pembayaran
- Integrasi dengan MikroTik Hotspot API
- Callback handler untuk memverifikasi transaksi

## 🧰 Teknologi yang Digunakan
- Backend: Node.js / PHP / Python (pilih sesuai preferensi)
- Frontend: HTML, Bootstrap/Tailwind
- API Pembayaran: [Tripay](https://tripay.co.id)
- MikroTik: API / Script scheduler untuk generate user

## 📋 Task & Progres Proyek
Proyek ini menggunakan [GitHub Projects](https://github.com/Javadictator/mikrotik-hotspot-terusan/projects/1) untuk tracking fitur dan pengembangan.  
Setiap commit yang terkait task akan diberi referensi seperti `(#3)` agar terhubung otomatis ke kartu project.

### 🔨 Status Fitur
- [x] Link pembayaran Tripay (`create_payment_link.php`)
- [x] UI portal hotspot (`portal.html`)
- [ ] Callback handler Tripay (`webhook.php`)
- [ ] Auto-generasi user MikroTik setelah pembayaran
- [ ] Dokumentasi lengkap alur sistem
