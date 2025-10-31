// Tambahkan kode ini ke dalam bagian <script> Anda
document.addEventListener('DOMContentLoaded', () => {
    // ... (Kode carousel handler Anda yang sudah ada di sini) ...

    // JavaScript untuk Tahun Saat Ini
    const currentYearElement = document.getElementById('current-year');
    if (currentYearElement) {
        const currentYear = new Date().getFullYear();
        currentYearElement.textContent = currentYear;
    }
});

// 1. Dapatkan tanggal dan waktu saat ini
const today = new Date();

// 2. Opsi untuk format tanggal (hanya bulan dan tahun)
const options = { 
    year: 'numeric', // Ambil tahun dalam format angka (misalnya: 2025)
    month: 'long'    // Ambil bulan dalam format nama panjang (misalnya: Oktober)
};

// 3. Format tanggal ke string dengan bahasa Indonesia (id-ID)
// Hasilnya akan menjadi: "Oktober 2025"
const formattedDate = today.toLocaleDateString('id-ID', options);

// 4. Dapatkan elemen <span> berdasarkan ID
const monthYearElement = document.getElementById('month-year');

// 5. Masukkan tanggal yang sudah diformat ke dalam elemen <span>
if (monthYearElement) {
    monthYearElement.textContent = formattedDate;
}