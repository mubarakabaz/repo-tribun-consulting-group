document.addEventListener('DOMContentLoaded', () => {
    const totalImages = 16;
    const carousel = document.getElementById('testimoni-carousel');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');

    if (!carousel || !prevBtn || !nextBtn) return;

    // Definisikan kode HEX warna kustom untuk styling dinamis
    const PRIMARY_GOLD = '#D4AE4C';

    // 1. Fungsi untuk Memuat Item Carousel secara Dinamis
    function loadTestimonialItems() {
        let itemsHtml = '';
        for (let i = 1; i <= totalImages; i++) {
            const id = `item${i}`;
            const imgSrc = `https://meta.tribunconsultinggroup.id/assets/img/testimoni/${i}.jpg`;
            
            // Menggunakan inline style untuk border mockup-phone (Primary Gold)
            itemsHtml += `
                <div id="${id}" class="carousel-item">
                    <div class="flex flex-col items-center justify-center p-6 bg-base-500 w-[320px] h-[550px]">
                      <img alt="Testimoni ${i}" src="${imgSrc}" class="shadow-lg"/>
                    </div>
                </div>
            `;
        }
        carousel.innerHTML = itemsHtml;
    }

    // 2. Fungsi untuk Navigasi Carousel (Panah)
    let currentItemIndex = 1; // Mulai dari item1

    function scrollToItem(index) {
        if (index < 1) {
            index = totalImages; // Loop ke item terakhir
        } else if (index > totalImages) {
            index = 1; // Loop ke item pertama
        }
        
        currentItemIndex = index;
        const targetId = `item${currentItemIndex}`;
        const targetElement = document.getElementById(targetId);
        
        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: 'smooth',
                block: 'nearest',
                inline: 'center'
            });
        }
    }

    // 3. Pasang Event Listeners ke Tombol Panah
    prevBtn.addEventListener('click', (e) => {
        e.preventDefault();
        scrollToItem(currentItemIndex - 1);
    });

    nextBtn.addEventListener('click', (e) => {
        e.preventDefault();
        scrollToItem(currentItemIndex + 1);
    });
    
    // 4. Inisialisasi: Muat konten dan scroll ke item pertama
    loadTestimonialItems();
    // ScrollToItem(1) dilakukan otomatis oleh DaisyUI/CSS carousel-center saat DOM dimuat
});