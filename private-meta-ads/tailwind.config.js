/** @type {import('tailwindcss').Config} */
module.exports = {
  // 1. Konfigurasi Content: Tentukan file mana saja yang menggunakan kelas Tailwind/DaisyUI
  content: [
    "./index.html", // Ambil dari index.html
    // Tambahkan file JS jika Anda memiliki skrip yang menghasilkan HTML atau menggunakan kelas Tailwind secara dinamis
    // "./public_html/assets/js/**/*.js", 
    "**/*.*.html",
    "/*/*.html",
    "/*/*/*.js",
    "/*/*/*.css",
  ],
  
  theme: {
    extend: {
      // 2. Deklarasi Warna Kustom Anda
      colors: {
        'primary-gold': '#D4AE4C',
        'secondary-gold': '#D0B35E',
        'gunmetal': '#1B2D32',
        'slate-gray': '#6F7B7F',
        'secondary-gojek': '#00AA13',
        'primary-maroon: ':'#780009',
        'primary-red: ':'#F10000',
      },
      
      // Tambahkan ekstensi tema lain di sini jika diperlukan (misalnya font, spacing)
    },
  },
  
  // 3. Konfigurasi Plugins
  plugins: [
    require('daisyui'),
  ],
  
  // 4. Konfigurasi DaisyUI
  daisyui: {
    // Terapkan tema Bumblebee
    themes: ["bumblebee"], 
    // daisyui: false untuk menonaktifkan tema default
    // darkTheme: "dark", // Jika Anda ingin menambahkan tema gelap lain
    // base: true, // Tambahkan gaya dasar Tailwind ke seluruh elemen
    // styled: true, // Tambahkan gaya DaisyUI ke komponen
    // utils: true, // Tambahkan utility classes (misalnya btn-sm, hero-overlay)
    // prefix: "", // Tambahkan prefix ke nama kelas DaisyUI (misalnya 'daisy-btn' alih-alih 'btn')
    // logs: true, // Menampilkan log saat membangun
  },
}