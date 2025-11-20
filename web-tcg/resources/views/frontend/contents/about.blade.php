@extends('frontend.layouts.app')
@section('title')
    Tentang Kami | Tribun Consulting Group
@endsection

@section('meta')
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
                        <img src="{{ asset('frontend/images/bossku.png') }}" alt="Coach Rusli Lii"/>

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

                </div>
            </div>
        </div>
    </section>

    <!-- ===== about End ===== -->
@endsection
