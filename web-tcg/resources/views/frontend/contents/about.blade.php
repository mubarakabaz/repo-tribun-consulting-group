@extends('frontend.layouts.app')
@section('title')
    Tentang Kami | Tribun Consulting Group
@endsection

@section('content')
    <!-- ===== Hero Start ===== -->
    <section class="gj do ir hj sp jr i pg">
        <!-- Hero Images -->
        <div class="xc fn zd/2 2xl:ud-w-187.5 bd 2xl:ud-h-171.5 h q r">
            <img src="{{ asset('frontend/images/shape-01.svg') }}" alt="shape"
                class="xc 2xl:ud-block h t -ud-left-[10%] ua" />
            <img src="{{ asset('frontend/images/shape-02.svg') }}" alt="shape" class="xc 2xl:ud-block h u p va" />
            <img src="{{ asset('frontend/images/shape-03.svg') }}" alt="shape" class="xc 2xl:ud-block h v w va" />
            {{-- <img src="{{asset('frontend/images/shape-04.svg')}}" alt="shape" class="h q r" /> --}}
            <img src="{{ asset('frontend/images/hero.png') }}" alt="Pane" class="h q r ua" />
        </div>

        <!-- Hero Content -->
        <div class="bb ze ki xn 2xl:ud-px-0">
            <div class="tc _o">
                <div class="animate_left jn/2">
                    <h2 class="fq">
                        <strong style="color: orange">Tentang Kami</strong>
                    </h2>
                    <h1 class="fk vj zp or kk wm wb">PT. Tribun Consulting Group</h1>
                    <h2 class="fq">
                        PT. Tribun Consulting Group lahir dari kebutuhan nyata akan solusi Digital Marketing yang efektif
                        dan terukur bagi UMKM, startup, dan bisnis menengah. Kami memahami tantangan pasar regional, dan
                        kami percaya bahwa strategi digital yang sukses haruslah terstruktur, berbasis data, dan langsung
                        diimplementasikan. Kami ada untuk mendampingi Anda dari nol hingga mencapai tujuan omzet yang
                        signifikan.
                    </h2>

                    <div class="tc tf yo zf mb">
                        <a href="#!" class="ek jk lk gh gi hi rg ml il vc _d _l">Konsultasi Gratis</a>

                        <span class="tc sf">
                            <a href="#!" class="inline-block ek xj kk wm"> Hubungi Kami (62) 853-4609-8979 </a>
                            <span class="inline-block">Untuk pertanyaan atau masalah apa pun</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== Hero End ===== -->

    <!-- ===== about Start ===== -->
    <section class="ji gp uq 2xl:ud-py-35 pg">
        <div class="bb ze ki xn wq">
            <div class="tc wf gg">
                <!-- About Images -->
                <div class="animate_bottom xc gn  jn/3 ">
                    <div>
                        <img src="{{ asset('frontend/images/bossku.png') }}" alt="Coach Rusli Lii" />

                    </div>
                </div>

                <!-- About Content -->
                <div class="animate_right jn/4">
                    <h4 class="ek yj mk gb" style="color: orange">PT. Tribun Consulting Group</h4>
                    <h2 class="fk vj zp pr kk wm qb">Kami adalah Mitra Strategis Anda dalam Transformasi Digital yang
                        Terukur.</h2>
                    <p class="uo qb">Di tengah persaingan pasar digital yang ketat, banyak bisnis—terutama UMKM dan
                        startup—kesulitan menemukan strategi yang efektif dan efisien. Tribun Consulting Group hadir sebagai
                        solusi All-in-One yang berdedikasi. Misi kami adalah memberdayakan bisnis Anda dengan strategi
                        digital marketing yang tidak hanya teoretis, tetapi langsung implementatif dan berbasis data yang
                        akurat.
                    </p>
                    <p class="uo qb">Kami menggabungkan tim ahli lokal dan praktik global terbaik. Kami tidak menjual jasa
                        periklanan biasa; kami menjual Kepastian Hasil melalui analisis mendalam, eksekusi yang agile, dan
                        kepemilikan penuh (ownership) terhadap setiap proyek. Dengan pendekatan terstruktur, kami memastikan
                        setiap rupiah investasi digital Anda memberikan Return on Investment (ROI) yang maksimal.
                    </p>
                    <p class="uo qb">Berbasis di Makassar, kami sangat memahami dinamika pasar lokal, namun siap bersaing
                        di kancah nasional. Kami bangga telah menjadi jembatan bagi puluhan bisnis lokal untuk menembus
                        batas geografis dan mencapai pertumbuhan signifikan di ranah digital. Percayakan strategi digital
                        Anda kepada kami, dan fokuslah pada pengembangan produk terbaik Anda.
                    </p>

                    {{-- <h4 class="ek yj mk gb">Layanan Utama Kami</h4>
                    <div class="wc qf pn xo ng">
                        <!-- Service Item -->
                        <div class="animate_top sg oi pi zq ml il am cn _m">
                            <img src="{{ asset('frontend/images/icon-04.svg') }}" alt="Icon" />
                            <h4 class="ek zj kk wm nb _b">Manajemen Sosial Media</h4>
                        </div>
                        <!-- Service Item -->
                        <div class="animate_top sg oi pi zq ml il am cn _m">
                            <img src="{{ asset('frontend/images/icon-04.svg') }}" alt="Icon" />
                            <h4 class="ek zj kk wm nb _b">Digital Branding</h4>
                        </div>
                        <!-- Service Item -->
                        <div class="animate_top sg oi pi zq ml il am cn _m">
                            <img src="{{ asset('frontend/images/icon-04.svg') }}" alt="Icon" />
                            <h4 class="ek zj kk wm nb _b">Pembuatan Website</h4>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- ===== about End ===== -->

    <!-- ===== CTA Start ===== -->
    <section class="i pg gh ji">
        <!-- Bg Shape -->
        <img class="h p q" src="{{ asset('frontend/images/shape-16.svg') }}" alt="Bg Shape" />

        <div class="bb ye i z-10 ki xn dr">
            <div class="tc uf sn tn un gg">
                <div class="animate_left to/2">
                    <h2 class="fk vj zp pr lk ac">
                        Siap Melipatgandakan Omzet Bisnis Anda?
                    </h2>
                    <p class="lk">
                        Tim ahli kami siap menganalisis potensi pasar Anda dan merumuskan strategi digital yang terukur.
                        Jangan tunda pertumbuhan bisnis Anda.
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
