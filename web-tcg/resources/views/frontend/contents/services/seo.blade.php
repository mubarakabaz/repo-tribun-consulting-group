@extends('frontend.layouts.app')
@section('title')
    Layanan Optimasi SEO | Tribun Consulting Group
@endsection

@section('meta')
@endsection

@section('content')
    <section class="i pg ji gp uq">
        <div class="animate_top">
            <nav class="ji justify-center flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 xl:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="{{ route('beranda') }}"
                            class="inline-flex items-center text-sm font-medium text-body hover:text-fg-brand">
                            <svg class="w-4 h-4 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
                            </svg>
                            Beranda
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center space-x-1.5">
                            <svg class="w-3.5 h-3.5 rtl:rotate-180 text-body" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m9 5 7 7-7 7" />
                            </svg>
                            <a href="#"
                                class="inline-flex items-center text-sm font-medium text-body hover:text-fg-brand">Layanan</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex space-x-1.5">
                            <svg class="w-3.5 h-3.5 rtl:rotate-180 text-body" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m9 5 7 7-7 7" />
                            </svg>
                            <span class="inline-flex items-center text-sm font-medium text-body-subtle"> Optimasi
                                SEO</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>

        <!-- Section Title Start -->
        <div class="pt1" x-data="{ sectionTitle: `Raih Posisi #1 di Google, Dapatkan 3x Lebih Banyak Omzet`, sectionTitleText: `Layanan Optimasi SEO Premium dari PT. Tribun Consulting Group - Partner Digital Anda yang terpercaya.` }">
            <div class="animate_top bb ze rj ki xn vq">
                <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
                </h2>
                {{-- <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p> --}}
                <p class="bb on/5 wo/5 hq">Kami mengubah traffic pencarian menjadi pendapatan berkelanjutan. Dapatkan
                    kunjungan website 100% organik yang terbukti memiliki Conversion Rate (tingkat konversi) tertinggi.
                </p>
                <br>
                <div class="animate_right bf">

                    <a href="https://wa.me/6285346098979?text=Halo%20Pak,%20saya%20tertarik%20dengan%20layanan%20Digital%20Marketing%20Anda%20dan%20menemukan%20kontak%20ini%20dari%20website%20tribunconsultinggroup.id.%20Mohon%20bantuannya%20untuk%20konsultasi%20lebih%20lanjut.%20Terima%20kasih."
                        style="color: white;"
                        class="vc ek inline-flex items-center justify-center px-8 py-3 text-lg font-bold text-center text-white bg-red-600 rounded-full hover:bg-red-700 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900 transition duration-300 shadow-xl transform hover:scale-105">
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
                        Dapatkan Rencana Strategi 30 Hari Anda
                    </a>
                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-500">Kuota audit gratis terbatas setiap bulannya.
                    </p>
                </div>


            </div>
        </div>

    </section>



    <section class="bg-white dark:bg-gray-900 pt-16 pb-24 lg:pt-24 lg:pb-32 border-b border-gray-200 dark:border-gray-700">
        <div class="px-4 mx-auto max-w-screen-xl text-gray-900 dark:text-white">

            <div class="mx-auto max-w-3xl text-center mb-16">
                <h1
                    class="mb-4 text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight leading-none text-indigo-700 dark:text-indigo-400">
                    Raih Posisi #1 di Google, Dapatkan 3x Lebih Banyak Omzet.
                </h1>
                <p class="mb-6 text-xl font-light text-gray-600 dark:text-gray-400 md:text-2xl">

                </p>

                <a href="[LINK_WA_CTA_ANDA]"
                    class="inline-flex items-center justify-center px-8 py-3 text-lg font-bold text-center text-white bg-red-600 rounded-full hover:bg-red-700 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900 transition duration-300 shadow-xl transform hover:scale-105">
                    Lakukan Audit SEO Gratis & Dapatkan Rencana Strategi 30 Hari Anda
                </a>
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-500">Kuota audit gratis terbatas setiap bulannya.</p>
            </div>

            <div class="mt-16 text-center mb-16">
                <h3 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Ini yang Kami Jamin untuk Bisnis Anda:
                </h3>
                <div class="grid grid-cols-1 gap-8 md:grid-cols-3">

                    <div
                        class="p-6 bg-gray-50 dark:bg-gray-800 rounded-xl shadow-lg border-t-4 border-indigo-600 dark:border-indigo-400">
                        <h4 class="mb-2 text-2xl font-bold text-indigo-700 dark:text-indigo-400">💵 3x Peningkatan Nilai
                            Omzet Organik</h4>
                        <p class="font-light text-gray-600 dark:text-gray-400">Kami menargetkan keyword dengan intensi
                            pembelian tinggi, memastikan setiap pengunjung memiliki potensi tinggi untuk menjadi klien. SEO
                            adalah investasi, bukan biaya.</p>
                    </div>

                    <div
                        class="p-6 bg-gray-50 dark:bg-gray-800 rounded-xl shadow-lg border-t-4 border-indigo-600 dark:border-indigo-400">
                        <h4 class="mb-2 text-2xl font-bold text-indigo-700 dark:text-indigo-400">🛡️ Otoritas Domain &
                            Stabilitas Jangka Panjang</h4>
                        <p class="font-light text-gray-600 dark:text-gray-400"></p>
                    </div>

                    <div
                        class="p-6 bg-gray-50 dark:bg-gray-800 rounded-xl shadow-lg border-t-4 border-indigo-600 dark:border-indigo-400">
                        <h4 class="mb-2 text-2xl font-bold text-indigo-700 dark:text-indigo-400"></h4>
                        <p class="font-light text-gray-600 dark:text-gray-400"></p>
                    </div>

                </div>
            </div>

            <div class="mt-20">
                <h3 class="text-3xl font-bold text-gray-900 dark:text-white text-center mb-12">Metodologi 4D: Proses Kerja
                    Transparan Kami</h3>
                <ol class="items-center sm:flex max-w-4xl mx-auto">

                    <li class="relative mb-6 sm:mb-0 w-full">
                        <div class="flex items-center">
                            <div
                                class="flex z-10 justify-center items-center w-8 h-8 bg-indigo-200 dark:bg-indigo-700 rounded-full ring-0 ring-white dark:ring-gray-900 sm:ring-8 shrink-0">
                                <span class="text-sm font-bold text-indigo-700 dark:text-indigo-200">1</span>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="mt-3 sm:pr-8">
                            <h4 class="text-xl font-semibold text-gray-900 dark:text-white">DIAGNOSIS (Audit)</h4>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Analisis komprehensif website
                                Anda, kompetitor, dan pasar kata kunci.</p>
                        </div>
                    </li>

                    <li class="relative mb-6 sm:mb-0 w-full">
                        <div class="flex items-center">
                            <div
                                class="flex z-10 justify-center items-center w-8 h-8 bg-indigo-200 dark:bg-indigo-700 rounded-full ring-0 ring-white dark:ring-gray-900 sm:ring-8 shrink-0">
                                <span class="text-sm font-bold text-indigo-700 dark:text-indigo-200">2</span>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="mt-3 sm:pr-8">
                            <h4 class="text-xl font-semibold text-gray-900 dark:text-white">DESIGN (Strategi)</h4>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Perumusan roadmap SEO 12
                                bulan
                                yang dipersonalisasi dan fokus pada keyword ROI.</p>
                        </div>
                    </li>

                    <li class="relative mb-6 sm:mb-0 w-full">
                        <div class="flex items-center">
                            <div
                                class="flex z-10 justify-center items-center w-8 h-8 bg-indigo-200 dark:bg-indigo-700 rounded-full ring-0 ring-white dark:ring-gray-900 sm:ring-8 shrink-0">
                                <span class="text-sm font-bold text-indigo-700 dark:text-indigo-200">3</span>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                        </div>
                        <div class="mt-3 sm:pr-8">
                            <h4 class="text-xl font-semibold text-gray-900 dark:text-white">DEPLOY (Eksekusi)</h4>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Implementasi Technical,
                                Content, dan Link Building secara etis oleh tim spesialis.</p>
                        </div>
                    </li>

                    <li class="relative mb-6 sm:mb-0 w-full">
                        <div class="flex items-center">
                            <div
                                class="flex z-10 justify-center items-center w-8 h-8 bg-indigo-200 dark:bg-indigo-700 rounded-full ring-0 ring-white dark:ring-gray-900 sm:ring-8 shrink-0">
                                <span class="text-sm font-bold text-indigo-700 dark:text-indigo-200">4</span>
                            </div>
                        </div>
                        <div class="mt-3 sm:pr-8">
                            <h4 class="text-xl font-semibold text-gray-900 dark:text-white">DASHBOARD (Laporan)</h4>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Pelaporan transparan, akses
                                ke dashboard kinerja real-time, dan optimasi berkelanjutan.</p>
                        </div>
                    </li>
                </ol>
            </div>

        </div>
    </section>
@endsection
