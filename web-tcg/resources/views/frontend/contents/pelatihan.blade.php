@extends('frontend.layouts.app')
@section('title')
    Pelatihan | Tribun Consulting Group
@endsection

@section('content')
    <section class="gj do ir hj sp i pg">
        <!-- Bg Shapes -->
        <span class="rc h s r vd fd/5 fh rm"></span>
        <img src="{{ asset('frontend/images/shape-08.svg') }}" alt="Shape Bg" class="h q r" />
        <img src="{{ asset('frontend/images/shape-09.svg') }}" alt="Shape" class="of h y z/2" />
        <img src="{{ asset('frontend/images/shape-10.svg') }}" alt="Shape" class="h _ aa" />
        <img src="{{ asset('frontend/images/shape-11.svg') }}" alt="Shape" class="of h m ba" />

        <!-- Section Title Start -->
        <div x-data="{ sectionTitle: `Tingkatkan Keahlian Digital Anda Pelatihan Digital Marketing Berbasis Data & Praktik Langsung.`, }">
            <div class="animate_top bb ze rj ki xn vq">
                <h2 x-text="sectionTitle" class="fk vj pr kk wm on/10 gq/2 bb _b">
                </h2>
                <div class="tc sf rn tn un zf dp">
                    <div>
                        <img src="{{ asset('frontend/images/icon-quote.svg') }}" alt="Quote" />
                        <p class="ek ik xj _p kc fb">
                            Tutup kesenjangan keterampilan digital Anda! Kami hadir dengan kurikulum yang dirancang untuk
                            implementasi nyata, memastikan Anda tidak hanya tahu teori, tetapi mampu menjalankan strategi
                            Digital Marketing yang terbukti menghasilkan konversi dan profit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section Title End -->
    </section>

    <section class="">
        <div class="bb ze ki">
            <div class="zf kq">
                <div class="ro">
                    <div
                        class="rounded-md shadow-solid-13 bg-white dark:bg-blacksection border border-stroke dark:border-strokedark p-7.5 md:p-10">
                        <h2 class="animate_left ek vj 2xl:ud-text-title-lg kk wm nb gb">Mengapa Memilih Pelatihan Kami?</h2>
                        <p>
                            <br>
                            <strong class="go1">100% Praktik & Hands-On:</strong> <br> Semua materi dirancang untuk
                            langsung diuji dan diimplementasikan.
                            Belajar sambil menjalankan proyek nyata. <br><br>

                            <strong class="go1">Kurikulum Berbasis Data Terbaru:</strong> <br> Kami mengajarkan tren dan
                            tool Digital Marketing yang paling
                            relevan dan up-to-date untuk pasar lokal dan nasional. <br><br>

                            <strong class="go1">Mentor Berpengalaman:</strong> <br> Belajar langsung dari tim Tribun
                            Consulting Group yang telah sukses
                            mengelola strategi digital berbagai UMKM dan startup. <br><br>

                            <strong class="go1">Sertifikasi & Dukungan Pasca-Pelatihan:</strong> <br> Dapatkan sertifikat
                            kompetensi dan akses ke grup
                            komunitas untuk dukungan implementasi berkelanjutan.
                        </p>

                        <h2 class="animate_left ek vj 2xl:ud-text-title-lg kk wm nb gb">Untuk Siapa Pelatihan Ini?</h2>
                        <p class="animate_left ob">
                            Pelatihan ini sangat cocok untuk:
                            <br><br>
                            <strong class="go1">Pemilik UMKM/Bisnis Kecil:</strong> <br> Yang ingin mengambil kendali
                            penuh atas pemasaran digital tanpa ketergantungan agensi.
                            <br><br>

                            <strong class="go1">Staf Marketing Internal:</strong> <br> Yang perlu memperbarui skill
                            mereka agar mampu menjalankan strategi yang lebih efektif dan terukur. <br><br>

                            <strong class="go1">Pencari Kerja & Umum:</strong> <br> Individu yang ingin memulai karier di
                            industri Digital Marketing dengan bekal keahlian yang siap kerja. <br><br>
                        </p>

                        <h2 class="animate_left ek vj 2xl:ud-text-title-lg kk wm nb qb">Workshop Pelatihan Digital Marketing</h2>
                        <div class="animate_left wc qf pn dg cb">
                            <img class="gbr" onclick="openModal(this.src)"
                                src="{{ asset('frontend/images/pelatihan/kalla1.jpg') }}"
                                alt="Workshop Pelatihan Digital Marketing | Tribun Consulting Group" />
                            <img class="gbr" onclick="openModal(this.src)"
                                src="{{ asset('frontend/images/pelatihan/kalla2.jpg') }}"
                                alt="Workshop Pelatihan Digital Marketing | Tribun Consulting Group" />
                            <img class="gbr" onclick="openModal(this.src)"
                                src="{{ asset('frontend/images/pelatihan/kalla3.jpg') }}"
                                alt="Workshop Pelatihan Digital Marketing | Tribun Consulting Group" />
                        </div>

                        <h2 class="animate_left ek vj 2xl:ud-text-title-lg kk wm nb qb">Webinar Digital Marketing</h2>
                        <div class="animate_left wc qf pn dg cb">
                            <img class="gbr" onclick="openModal(this.src)"
                                src="{{ asset('frontend/images/pelatihan/webinar1.jpg') }}"
                                alt="Workshop Pelatihan Digital Marketing | Tribun Consulting Group" />
                            <img class="gbr" onclick="openModal(this.src)"
                                src="{{ asset('frontend/images/pelatihan/webinar2.jpg') }}"
                                alt="Workshop Pelatihan Digital Marketing | Tribun Consulting Group" />
                            <img class="gbr" onclick="openModal(this.src)"
                                src="{{ asset('frontend/images/pelatihan/webinar3.jpg') }}"
                                alt="Workshop Pelatihan Digital Marketing | Tribun Consulting Group" />
                        </div>

                        <h2 class="animate_left ek vj 2xl:ud-text-title-lg kk wm nb qb">Privat Digital Marketing</h2>
                        <div class="animate_left wc qf pn dg cb">
                            <img class="gbr" onclick="openModal(this.src)"
                                src="{{ asset('frontend/images/pelatihan/privat-1.jpg') }}"
                                alt="Workshop Pelatihan Digital Marketing | Tribun Consulting Group" />
                            <img class="gbr" onclick="openModal(this.src)"
                                src="{{ asset('frontend/images/pelatihan/privat-2.jpg') }}"
                                alt="Workshop Pelatihan Digital Marketing | Tribun Consulting Group" />
                            <img class="gbr" onclick="openModal(this.src)"
                                src="{{ asset('frontend/images/pelatihan/privat-3.jpg') }}"
                                alt="Workshop Pelatihan Digital Marketing | Tribun Consulting Group" />
                        </div>



                        {{-- Share Button Social Media --}}
                        <ul class="animated_left tc wf bg sb">
                            <li>
                                <p class="sj kk wm tb">Share On:</p>
                            </li>
                            <li>
                                <a href="#!" class="tc wf xf yd ad rg ml il ih wk">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_47_28)">
                                            <path
                                                d="M11.6663 11.25H13.7497L14.583 7.91663H11.6663V6.24996C11.6663 5.39163 11.6663 4.58329 13.333 4.58329H14.583V1.78329C14.3113 1.74746 13.2855 1.66663 12.2022 1.66663C9.93967 1.66663 8.33301 3.04746 8.33301 5.58329V7.91663H5.83301V11.25H8.33301V18.3333H11.6663V11.25Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_47_28">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#!" class="tc wf xf yd ad rg ml il jh wk">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_47_47)">
                                            <path
                                                d="M18.4683 4.71327C17.8321 4.99468 17.1574 5.1795 16.4666 5.26161C17.1947 4.82613 17.7397 4.14078 17.9999 3.33327C17.3166 3.73994 16.5674 4.02494 15.7866 4.17911C15.2621 3.61792 14.5669 3.24574 13.809 3.12043C13.0512 2.99511 12.2732 3.12368 11.596 3.48615C10.9187 3.84862 10.3802 4.42468 10.0642 5.12477C9.74812 5.82486 9.67221 6.60976 9.84825 7.35744C8.46251 7.28798 7.10686 6.92788 5.86933 6.30049C4.63179 5.67311 3.54003 4.79248 2.66492 3.71577C2.35516 4.24781 2.19238 4.85263 2.19326 5.46827C2.19326 6.67661 2.80826 7.74411 3.74326 8.36911C3.18993 8.35169 2.64878 8.20226 2.16492 7.93327V7.97661C2.16509 8.78136 2.44356 9.56129 2.95313 10.1842C3.46269 10.807 4.17199 11.2345 4.96075 11.3941C4.4471 11.5333 3.90851 11.5538 3.38576 11.4541C3.60814 12.1468 4.04159 12.7526 4.62541 13.1867C5.20924 13.6208 5.9142 13.8614 6.64159 13.8749C5.91866 14.4427 5.0909 14.8624 4.20566 15.1101C3.32041 15.3577 2.39503 15.4285 1.48242 15.3183C3.0755 16.3428 4.93 16.8867 6.82409 16.8849C13.2349 16.8849 16.7408 11.5741 16.7408 6.96827C16.7408 6.81827 16.7366 6.66661 16.7299 6.51827C17.4123 6.02508 18.0013 5.41412 18.4691 4.71411L18.4683 4.71327Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_47_47">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#!" class="tc wf xf yd ad rg ml il kh wk">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_47_50)">
                                            <path
                                                d="M11.1417 1.74502C9.14781 1.47074 7.12195 1.92715 5.43827 3.02999C3.75459 4.13283 2.52679 5.80761 1.98158 7.74508C1.43637 9.68255 1.61059 11.7519 2.47205 13.5709C3.33351 15.3899 4.82404 16.8359 6.66841 17.6417C6.61854 17.0015 6.66432 16.3575 6.80425 15.7309C6.95841 15.0317 7.88425 11.1784 7.88425 11.1784C7.69989 10.7651 7.60775 10.3167 7.61425 9.86419C7.61425 8.62669 8.32841 7.70336 9.21675 7.70336C9.37634 7.70103 9.53455 7.7331 9.68064 7.79738C9.82673 7.86166 9.95727 7.95665 10.0634 8.07588C10.1695 8.19511 10.2487 8.33578 10.2955 8.48835C10.3424 8.64091 10.3559 8.80178 10.3351 8.96002C10.3351 9.71002 9.85342 10.845 9.60175 11.91C9.55201 12.1053 9.54886 12.3096 9.59254 12.5064C9.63621 12.7031 9.72551 12.8869 9.85321 13.0428C9.98092 13.1987 10.1435 13.3225 10.3278 13.4041C10.5121 13.4857 10.713 13.5228 10.9142 13.5125C12.4959 13.5125 13.5559 11.4867 13.5559 9.09502C13.5559 7.26169 12.3417 5.88836 10.1034 5.88836C9.56789 5.86755 9.03373 5.95579 8.53336 6.14773C8.03298 6.33968 7.57684 6.63131 7.19262 7.00493C6.8084 7.37855 6.50413 7.82636 6.29827 8.32117C6.09241 8.81598 5.98926 9.34746 5.99508 9.88336C5.97122 10.4778 6.163 11.0608 6.53508 11.525C6.60461 11.5769 6.65538 11.65 6.67973 11.7333C6.70408 11.8166 6.70069 11.9055 6.67008 11.9867C6.63175 12.14 6.53508 12.5059 6.49675 12.64C6.48877 12.6855 6.47023 12.7285 6.4426 12.7655C6.41497 12.8026 6.37904 12.8326 6.33769 12.8532C6.29634 12.8738 6.25073 12.8844 6.20454 12.8841C6.15835 12.8838 6.11286 12.8727 6.07175 12.8517C4.91841 12.39 4.37508 11.1209 4.37508 9.67169C4.37508 7.29919 6.36175 4.45919 10.3367 4.45919C13.5001 4.45919 15.6034 6.77336 15.6034 9.24836C15.6034 12.5059 13.7892 14.955 11.1084 14.955C10.7077 14.9678 10.3103 14.8794 9.95286 14.6979C9.59541 14.5164 9.2895 14.2477 9.06342 13.9167C9.06342 13.9167 8.58175 15.8467 8.48675 16.2117C8.29282 16.8423 8.00667 17.4407 7.63758 17.9875C8.40675 18.2209 9.20591 18.3375 10.0092 18.3342C11.1039 18.3351 12.188 18.12 13.1994 17.7013C14.2108 17.2827 15.1297 16.6686 15.9035 15.8943C16.6772 15.12 17.2907 14.2007 17.7086 13.1889C18.1266 12.1772 18.3409 11.093 18.3393 9.99836C18.3382 7.98586 17.6091 6.04169 16.2864 4.52484C14.9638 3.00799 13.137 2.02091 11.1434 1.74586L11.1417 1.74502Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_47_50">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#!" class="tc wf xf yd ad rg ml il lh wk">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_47_53)">
                                            <path
                                                d="M5.78353 4.16665C5.78331 4.60867 5.6075 5.03251 5.29478 5.34491C4.98207 5.65732 4.55806 5.8327 4.11603 5.83248C3.674 5.83226 3.25017 5.65645 2.93776 5.34373C2.62536 5.03102 2.44997 4.60701 2.4502 4.16498C2.45042 3.72295 2.62622 3.29912 2.93894 2.98671C3.25166 2.67431 3.67567 2.49892 4.1177 2.49915C4.55972 2.49937 4.98356 2.67517 5.29596 2.98789C5.60837 3.30061 5.78375 3.72462 5.78353 4.16665ZM5.83353 7.06665H2.5002V17.5H5.83353V7.06665ZM11.1002 7.06665H7.78353V17.5H11.0669V12.025C11.0669 8.97498 15.0419 8.69165 15.0419 12.025V17.5H18.3335V10.8916C18.3335 5.74998 12.4502 5.94165 11.0669 8.46665L11.1002 7.06665Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_47_53">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <!-- The Modal (Lightbox) -->
        <div id="imageModal" class="modal-overlay">
            <span class="modal-close-button" onclick="closeModal()">&times;</span>

            <img class="modal-content" id="img01">
        </div>
    </section>

    <!-- ===== CTA Start ===== -->
    <section class="i pg gh ji">
        <!-- Bg Shape -->
        <img class="h p q" src="{{ asset('frontend/images/shape-16.svg') }}" alt="Bg Shape" />

        <div class="bb ye i z-10 ki xn dr">
            <div class="tc uf sn tn un gg">
                <div class="animate_left to/2">
                    <h2 class="fk vj zp pr lk ac">
                        Daftar &amp; Kuasai <br>
                        Digital Marketing
                    </h2>
                    <p class="lk">
                        "Jangan Tunda Lagi Pertumbuhan Karir atau Bisnis Anda."
                    </p>
                </div>
                <div class="animate_right bf">

                    <a href="https://wa.me/6285346098979?text=Halo%20Pak,%20saya%20tertarik%20dengan%20layanan%20Digital%20Marketing%20Anda%20dan%20menemukan%20kontak%20ini%20dari%20website%20tribunconsultinggroup.id.%20Mohon%20bantuannya%20untuk%20konsultasi%20lebih%20lanjut.%20Terima%20kasih."
                        class="vc ek kk hh rg ol il cm gi hi">
                        <span class="tc sf">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                clip-rule="evenodd" />
                            <path fill="currentColor"
                                d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                        </svg>
                    </span>
                        Konsultasi Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== CTA End ===== -->
@endsection

@section('script')
    <script defer>
        // 1. Ambil elemen modal dan gambar
        const modal = document.getElementById("imageModal");
        const modalImg = document.getElementById("img01");

        /**
         * 2. Fungsi untuk membuka modal (dipanggil oleh onclick pada tag <img> kecil)
         * @param {string} imgSrc - Sumber (src) gambar yang diklik.
         */
        function openModal(imgSrc) {
            // A. Reset status zoom
            // Penting: Memastikan gambar selalu terbuka dalam ukuran normal
            modalImg.classList.remove('zoomed');

            // B. Tampilkan modal dan atur sumber gambar
            modal.style.display = "flex";
            modalImg.src = imgSrc;

            // C. Reset posisi scroll
            // Memastikan jika modal baru dibuka, scroll berada di posisi paling atas dan kiri.
            modal.scrollTop = 0;
            modal.scrollLeft = 0;
        }

        /**
         * 3. Fungsi untuk menutup modal (dipanggil oleh tombol X atau window.onclick)
         */
        function closeModal() {
            modal.style.display = "none";
            // Penting: Reset status zoom saat modal ditutup
            modalImg.classList.remove('zoomed');
        }

        // ----------------------------------------------------------------------
        // 4. FUNGSI UTAMA: MENGATUR ZOOM DAN SCROLL
        // ----------------------------------------------------------------------

        // Event listener: Ketika gambar di dalam modal (modalImg) diklik
        modalImg.onclick = function() {
            // A. Toggle Class 'zoomed'
            // Mengubah status: Jika ada class 'zoomed', hapus. Jika tidak ada, tambahkan.
            this.classList.toggle('zoomed');

            if (this.classList.contains('zoomed')) {
                // B. KONDISI: SAAT GAMBAR DI-ZOOM (class 'zoomed' ADA)

                // Memaksa browser untuk menghitung dimensi gambar yang baru di-zoom
                // Ini seringkali penting agar scrollHeight dan scrollWidth mendapatkan nilai yang akurat.
                void this.offsetWidth;

                // Scroll Top: Gulir ke tengah vertikal.
                // Rumus: (Total Tinggi Konten - Tinggi Viewport Modal) / 2
                // Tujuannya: Memberi indikasi visual bahwa gambar telah membesar dan ada yang terpotong.
                modal.scrollTop = (this.scrollHeight - modal.clientHeight) / 2;

                // Scroll Left: Gulir ke tengah horizontal.
                // Rumus: (Total Lebar Konten - Lebar Viewport Modal) / 2
                modal.scrollLeft = (this.scrollWidth - modal.clientWidth) / 2;
            } else {
                // C. KONDISI: SAAT GAMBAR DI-UNZOOM (class 'zoomed' DIHAPUS)

                // Kembalikan posisi scroll ke awal (atas-kiri)
                modal.scrollTop = 0;
                modal.scrollLeft = 0;
            }
        }
        // ----------------------------------------------------------------------
        // 5. PENUTUPAN MODAL OPSIONAL
        // ----------------------------------------------------------------------

        // Opsional: Tutup modal ketika pengguna mengklik di luar gambar (area overlay)
        window.onclick = function(event) {
            // Jika target klik (event.target) sama dengan elemen modal (modal-overlay)
            if (event.target == modal) {
                closeModal();
            }
        }

        // Opsional: Tutup modal ketika pengguna menekan tombol ESC
        document.addEventListener('keydown', function(event) {
            // Jika tombol yang ditekan adalah 'Escape' dan modal sedang terbuka
            if (event.key === 'Escape' && modal.style.display === 'block') {
                closeModal();
            }
        });
    </script>
@endsection
