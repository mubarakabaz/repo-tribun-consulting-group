@extends('frontend.layouts.app')

@section('title')
    Jasa Pembuatan Website, Landing Page, SEO Bergaransi | Tribun Consulting Group
@endsection

@section('meta')
    <meta name="description"
        content="Tribun Consulting Group menyediakan Digital Marketing di Makassar dan seluruh Indonesia, training, workshop, dan strategi paid traffic, jasa pembuatan website profesional, landing page menarik, dan layanan SEO bergaransi untuk meningkatkan visibilitas bisnis Anda secara online.">
    <meta name="keywords"
        content="jasa pembuatan website, jasa landing page, jasa SEO bergaransi, pembuatan website profesional, layanan SEO, optimasi mesin pencari, desain website menarik, Tribun Consulting Group">
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
                    <h1 class="fk vj zp or kk wm wb">Naik Level Bersama Pendampingan Digital Marketing All in One</h1>
                    <p class="fq">
                        <strong style="color: #ffc400">Tribun Consulting Group</strong> <br> Solusi Digital Marketing
                        berbasis Data & Riset untuk Landing Page yang terbukti menghasilkan konversi tinggi, trafik
                        tertarget, dan brand awareness maksimal.
                    </p>

                    <div class="tc tf yo zf mb">
                        <a href="#!" class="ek jk lk gh gi hi rg ml il vc _d _l">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                    clip-rule="evenodd" />
                                <path fill="currentColor"
                                    d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                            </svg>

                            Konsultasi Sekarang
                        </a>

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


    <!-- ===== About Start ===== -->
    <section class="ji gp uq 2xl:ud-py-35 pg">
        <div class="bb ze ki xn wq">
            <div class="tc wf gg qq">
                <!-- About Images -->
                <div class="animate_left xc gn gg jn/2 i">
                    <div>
                        <img src="{{ asset('frontend/images/shape-05.svg') }}" alt="Shape" class="h -ud-left-5 x" />
                        <img src="{{ asset('frontend/images/about/1.png') }}" alt="About" class="ib" />
                        <img src="{{ asset('frontend/images/about/2.png') }}" alt="About" />
                    </div>
                    <div>
                        <img src="{{ asset('frontend/images/shape-06.svg') }}" alt="Shape" />
                        <img src="{{ asset('frontend/images/about/3.png') }}" alt="About" class="ob gb" />
                        <img src="{{ asset('frontend/images/shape-07.svg') }}" alt="Shape" class="bb" />
                    </div>
                </div>

                <!-- About Content -->
                <div class="animate_right jn/2">
                    <h4 class="ek yj mk gb">Mengapa memilih kami?</h4>
                    <h2 class="fk vj zp pr kk wm qb">Kami Mewujudkan Pertumbuhan Bisnis yang Nyata dan Terukur.</h2>
                    <p class="uo">Sebagai Mitra Konsultasi Digital All-in-One di Makassar, kami tidak hanya memberikan
                        teori,
                        tetapi juga eksekusi strategi yang data-driven di setiap kanal pemasaran. Kami hadir untuk
                        menuntaskan masalah marketing Anda
                        dan memastikan setiap investasi digital mendatangkan konversi dan profit maksimal.</p>

                    <a href="https://www.youtube.com/watch?v=a6mrRuPIEjQ" data-fslightbox class="vc wf hg mb">
                        <span class="tc wf xf be dd rg i gh ua">
                            <span class="nf h vc yc vd rg gh qk -ud-z-1"></span>
                            {{-- <img src="images/icon-play.svg" alt="Play" /> --}}
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 18V6l8 6-8 6Z" />
                            </svg>

                        </span>
                        <span class="kk">Lihat Proses Kerja Kami</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== About End ===== -->

    <!-- ===== Team Start ===== -->
    <section class="i pg ji gp uq">
        <!-- Bg Shapes -->
        <span class="rc h s r vd fd/5 fh rm"></span>
        <img src="{{ asset('frontend/images/shape-08.svg') }}" alt="Shape Bg" class="h q r" />
        <img src="{{ asset('frontend/images/shape-09.svg') }}" alt="Shape" class="of h y z/2" />
        <img src="{{ asset('frontend/images/shape-10.svg') }}" alt="Shape" class="h _ aa" />
        <img src="{{ asset('frontend/images/shape-11.svg') }}" alt="Shape" class="of h m ba" />

        <!-- Section Title Start -->
        <div x-data="{ sectionTitle: `Temui Tim Ahli Strategi Digital yang Berdedikasi Penuh.`, sectionTitleText: `Di balik setiap keberhasilan klien, ada tim spesialis yang bekerja secara kolaboratif. Mulai dari Analis Data, Copywriter, hingga Digital Strategist, tim kami berkomitmen penuh untuk merumuskan, mengimplementasikan, dan mengukur setiap langkah untuk memastikan tujuan bisnis Anda tercapai.` }">
            <div class="animate_top bb ze rj ki xn vq">
                <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
                </h2>
                <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
            </div>


        </div>
        <!-- Section Title End -->

        <div class="bb ze i va ki xn xq jb jo">
            <div class="wc qf pn xo gg cp">
                <!-- Team Item -->
                <div class="animate_top rj">
                    <div class="c i pg z-1">
                        <img class="vd" src="{{ asset('frontend/images/team/1.png') }}" alt="Team" />

                        <div class="ef im nl il">
                            <span class="h -ud-left-5 -ud-bottom-21 rc de gd gh if wa"></span>
                            <span class="h s p rc vd hd mh va"></span>
                            <div class="h s p vd ij jj xa">
                                <ul class="tc xf wf gg">
                                    <li>
                                        <a href="#!">
                                            <svg class="uh vl ml il" width="10" height="18" viewBox="0 0 10 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.66634 10.25H8.74968L9.58301 6.91669H6.66634V5.25002C6.66634 4.39169 6.66634 3.58335 8.33301 3.58335H9.58301V0.783354C9.31134 0.74752 8.28551 0.666687 7.20218 0.666687C4.93968 0.666687 3.33301 2.04752 3.33301 4.58335V6.91669H0.833008V10.25H3.33301V17.3334H6.66634V10.25Z"
                                                    fill="" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <svg class="uh vl ml il" width="18" height="14" viewBox="0 0 18 14"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.4683 1.71333C16.8321 1.99475 16.1574 2.17956 15.4666 2.26167C16.1947 1.82619 16.7397 1.14085 16.9999 0.333333C16.3166 0.74 15.5674 1.025 14.7866 1.17917C14.2621 0.617982 13.5669 0.245803 12.809 0.120487C12.0512 -0.00482822 11.2732 0.123742 10.596 0.486211C9.91875 0.848679 9.38024 1.42474 9.06418 2.12483C8.74812 2.82492 8.67221 3.60982 8.84825 4.3575C7.46251 4.28805 6.10686 3.92794 4.86933 3.30055C3.63179 2.67317 2.54003 1.79254 1.66492 0.715833C1.35516 1.24788 1.19238 1.85269 1.19326 2.46833C1.19326 3.67667 1.80826 4.74417 2.74326 5.36917C2.18993 5.35175 1.64878 5.20232 1.16492 4.93333V4.97667C1.16509 5.78142 1.44356 6.56135 1.95313 7.18422C2.46269 7.80709 3.17199 8.23456 3.96075 8.39417C3.4471 8.53337 2.90851 8.55388 2.38576 8.45417C2.60814 9.14686 3.04159 9.75267 3.62541 10.1868C4.20924 10.6209 4.9142 10.8615 5.64159 10.875C4.91866 11.4428 4.0909 11.8625 3.20566 12.1101C2.32041 12.3578 1.39503 12.4285 0.482422 12.3183C2.0755 13.3429 3.93 13.8868 5.82409 13.885C12.2349 13.885 15.7408 8.57417 15.7408 3.96833C15.7408 3.81833 15.7366 3.66667 15.7299 3.51833C16.4123 3.02514 17.0013 2.41418 17.4691 1.71417L17.4683 1.71333Z"
                                                    fill="" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <svg class="uh vl ml il" width="17" height="16" viewBox="0 0 17 16"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3.78353 2.16665C3.78331 2.60867 3.6075 3.03251 3.29478 3.34491C2.98207 3.65732 2.55806 3.8327 2.11603 3.83248C1.674 3.83226 1.25017 3.65645 0.937761 3.34373C0.625357 3.03102 0.449975 2.60701 0.450196 2.16498C0.450417 1.72295 0.626223 1.29912 0.93894 0.986712C1.25166 0.674307 1.67567 0.498925 2.1177 0.499146C2.55972 0.499367 2.98356 0.675173 3.29596 0.98789C3.60837 1.30061 3.78375 1.72462 3.78353 2.16665V2.16665ZM3.83353 5.06665H0.500195V15.5H3.83353V5.06665ZM9.1002 5.06665H5.78353V15.5H9.06686V10.025C9.06686 6.97498 13.0419 6.69165 13.0419 10.025V15.5H16.3335V8.89165C16.3335 3.74998 10.4502 3.94165 9.06686 6.46665L9.1002 5.06665V5.06665Z"
                                                    fill="" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <h4 class="yj go kk wm ob zb">Rusli Lii</h4>
                    <p>Founder & CEO</p>
                </div>

                <!-- Team Item -->
                <div class="animate_top rj">
                    <div class="c i pg z-1">
                        <img class="vd" src="{{ asset('frontend/images/team/2.png') }}" alt="Team" />

                        <div class="ef im nl il">
                            <span class="h -ud-left-5 -ud-bottom-21 rc de gd gh if wa"></span>
                            <span class="h s p rc vd hd mh va"></span>
                            <div class="h s p vd ij jj xa">
                                <ul class="tc xf wf gg">
                                    <li>
                                        <a href="#!">
                                            <svg class="uh vl ml il" width="10" height="18" viewBox="0 0 10 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.66634 10.25H8.74968L9.58301 6.91669H6.66634V5.25002C6.66634 4.39169 6.66634 3.58335 8.33301 3.58335H9.58301V0.783354C9.31134 0.74752 8.28551 0.666687 7.20218 0.666687C4.93968 0.666687 3.33301 2.04752 3.33301 4.58335V6.91669H0.833008V10.25H3.33301V17.3334H6.66634V10.25Z"
                                                    fill="" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <svg class="uh vl ml il" width="18" height="14" viewBox="0 0 18 14"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.4683 1.71333C16.8321 1.99475 16.1574 2.17956 15.4666 2.26167C16.1947 1.82619 16.7397 1.14085 16.9999 0.333333C16.3166 0.74 15.5674 1.025 14.7866 1.17917C14.2621 0.617982 13.5669 0.245803 12.809 0.120487C12.0512 -0.00482822 11.2732 0.123742 10.596 0.486211C9.91875 0.848679 9.38024 1.42474 9.06418 2.12483C8.74812 2.82492 8.67221 3.60982 8.84825 4.3575C7.46251 4.28805 6.10686 3.92794 4.86933 3.30055C3.63179 2.67317 2.54003 1.79254 1.66492 0.715833C1.35516 1.24788 1.19238 1.85269 1.19326 2.46833C1.19326 3.67667 1.80826 4.74417 2.74326 5.36917C2.18993 5.35175 1.64878 5.20232 1.16492 4.93333V4.97667C1.16509 5.78142 1.44356 6.56135 1.95313 7.18422C2.46269 7.80709 3.17199 8.23456 3.96075 8.39417C3.4471 8.53337 2.90851 8.55388 2.38576 8.45417C2.60814 9.14686 3.04159 9.75267 3.62541 10.1868C4.20924 10.6209 4.9142 10.8615 5.64159 10.875C4.91866 11.4428 4.0909 11.8625 3.20566 12.1101C2.32041 12.3578 1.39503 12.4285 0.482422 12.3183C2.0755 13.3429 3.93 13.8868 5.82409 13.885C12.2349 13.885 15.7408 8.57417 15.7408 3.96833C15.7408 3.81833 15.7366 3.66667 15.7299 3.51833C16.4123 3.02514 17.0013 2.41418 17.4691 1.71417L17.4683 1.71333Z"
                                                    fill="" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <svg class="uh vl ml il" width="17" height="16" viewBox="0 0 17 16"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3.78353 2.16665C3.78331 2.60867 3.6075 3.03251 3.29478 3.34491C2.98207 3.65732 2.55806 3.8327 2.11603 3.83248C1.674 3.83226 1.25017 3.65645 0.937761 3.34373C0.625357 3.03102 0.449975 2.60701 0.450196 2.16498C0.450417 1.72295 0.626223 1.29912 0.93894 0.986712C1.25166 0.674307 1.67567 0.498925 2.1177 0.499146C2.55972 0.499367 2.98356 0.675173 3.29596 0.98789C3.60837 1.30061 3.78375 1.72462 3.78353 2.16665V2.16665ZM3.83353 5.06665H0.500195V15.5H3.83353V5.06665ZM9.1002 5.06665H5.78353V15.5H9.06686V10.025C9.06686 6.97498 13.0419 6.69165 13.0419 10.025V15.5H16.3335V8.89165C16.3335 3.74998 10.4502 3.94165 9.06686 6.46665L9.1002 5.06665V5.06665Z"
                                                    fill="" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <h4 class="yj go kk wm ob zb">Ilham W</h4>
                    <p>Trainer Tim</p>
                </div>

                <!-- Team Item -->
                <div class="animate_top rj">
                    <div class="c i pg z-1">
                        <img class="vd" src="{{ asset('frontend/images/team/3.png') }}" alt="Team" />

                        <div class="ef im nl il">
                            <span class="h -ud-left-5 -ud-bottom-21 rc de gd gh if wa"></span>
                            <span class="h s p rc vd hd mh va"></span>
                            <div class="h s p vd ij jj xa">
                                <ul class="tc xf wf gg">
                                    <li>
                                        <a href="#!">
                                            <svg class="uh vl ml il" width="10" height="18" viewBox="0 0 10 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.66634 10.25H8.74968L9.58301 6.91669H6.66634V5.25002C6.66634 4.39169 6.66634 3.58335 8.33301 3.58335H9.58301V0.783354C9.31134 0.74752 8.28551 0.666687 7.20218 0.666687C4.93968 0.666687 3.33301 2.04752 3.33301 4.58335V6.91669H0.833008V10.25H3.33301V17.3334H6.66634V10.25Z"
                                                    fill="" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <svg class="uh vl ml il" width="18" height="14" viewBox="0 0 18 14"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.4683 1.71333C16.8321 1.99475 16.1574 2.17956 15.4666 2.26167C16.1947 1.82619 16.7397 1.14085 16.9999 0.333333C16.3166 0.74 15.5674 1.025 14.7866 1.17917C14.2621 0.617982 13.5669 0.245803 12.809 0.120487C12.0512 -0.00482822 11.2732 0.123742 10.596 0.486211C9.91875 0.848679 9.38024 1.42474 9.06418 2.12483C8.74812 2.82492 8.67221 3.60982 8.84825 4.3575C7.46251 4.28805 6.10686 3.92794 4.86933 3.30055C3.63179 2.67317 2.54003 1.79254 1.66492 0.715833C1.35516 1.24788 1.19238 1.85269 1.19326 2.46833C1.19326 3.67667 1.80826 4.74417 2.74326 5.36917C2.18993 5.35175 1.64878 5.20232 1.16492 4.93333V4.97667C1.16509 5.78142 1.44356 6.56135 1.95313 7.18422C2.46269 7.80709 3.17199 8.23456 3.96075 8.39417C3.4471 8.53337 2.90851 8.55388 2.38576 8.45417C2.60814 9.14686 3.04159 9.75267 3.62541 10.1868C4.20924 10.6209 4.9142 10.8615 5.64159 10.875C4.91866 11.4428 4.0909 11.8625 3.20566 12.1101C2.32041 12.3578 1.39503 12.4285 0.482422 12.3183C2.0755 13.3429 3.93 13.8868 5.82409 13.885C12.2349 13.885 15.7408 8.57417 15.7408 3.96833C15.7408 3.81833 15.7366 3.66667 15.7299 3.51833C16.4123 3.02514 17.0013 2.41418 17.4691 1.71417L17.4683 1.71333Z"
                                                    fill="" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <svg class="uh vl ml il" width="17" height="16" viewBox="0 0 17 16"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3.78353 2.16665C3.78331 2.60867 3.6075 3.03251 3.29478 3.34491C2.98207 3.65732 2.55806 3.8327 2.11603 3.83248C1.674 3.83226 1.25017 3.65645 0.937761 3.34373C0.625357 3.03102 0.449975 2.60701 0.450196 2.16498C0.450417 1.72295 0.626223 1.29912 0.93894 0.986712C1.25166 0.674307 1.67567 0.498925 2.1177 0.499146C2.55972 0.499367 2.98356 0.675173 3.29596 0.98789C3.60837 1.30061 3.78375 1.72462 3.78353 2.16665V2.16665ZM3.83353 5.06665H0.500195V15.5H3.83353V5.06665ZM9.1002 5.06665H5.78353V15.5H9.06686V10.025C9.06686 6.97498 13.0419 6.69165 13.0419 10.025V15.5H16.3335V8.89165C16.3335 3.74998 10.4502 3.94165 9.06686 6.46665L9.1002 5.06665V5.06665Z"
                                                    fill="" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <h4 class="yj go kk wm ob zb">Inayah, S.IP</h4>
                    <p>Project Manager</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== Team End ===== -->

    <!-- ===== Services Start ===== -->
    <section class="lj tp kr">
        <!-- Section Title Start -->
        <div x-data="{ sectionTitle: `Kami Menawarkan Solusi Digital Marketing Terbaik untuk Pertumbuhan Nyata.`, sectionTitleText: `Kami menggabungkan strategi data-driven dengan eksekusi kreatif untuk memastikan setiap langkah pemasaran digital Anda efisien, terukur, dan fokus pada peningkatan omzet.` }">
            <div class="animate_top bb ze rj ki xn vq">
                <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
                </h2>
                <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
            </div>


        </div>
        <!-- Section Title End -->

        <div class="bb ze ki xn yq mb en">
            <div class="wc qf pn xo ng">
                <!-- Service Item -->
                <div class="animate_top sg oi pi zq ml il am cn _m">
                    <img src="{{ asset('frontend/images/icon-04.svg') }}" alt="Icon" />
                    <h4 class="ek zj kk wm nb _b">Strategi Tepat untuk UMKM & Startup</h4>
                    <p>Program dan layanan kami dirancang khusus untuk memenuhi kebutuhan dan keterbatasan anggaran UMKM dan
                        Startup agar dapat bersaing di pasar digital secara efektif.</p>
                </div>

                <!-- Service Item -->
                <div class="animate_top sg oi pi zq ml il am cn _m">
                    <img src="{{ asset('frontend/images/icon-05.svg') }}" alt="Icon" />
                    <h4 class="ek zj kk wm nb _b">Kualitas Konten Visual Premium</h4>
                    <p>Kami menyediakan desain dan konten berkualitas tinggi yang konsisten dengan branding Anda, memastikan
                        pesan tersampaikan secara profesional dan menarik perhatian audiens target.</p>
                </div>

                <!-- Service Item -->
                <div class="animate_top sg oi pi zq ml il am cn _m">
                    <img src="{{ asset('frontend/images/icon-06.svg') }}" alt="Icon" />
                    <h4 class="ek zj kk wm nb _b">Layanan All-in-One Komprehensif</h4>
                    <p>Dapatkan semua kebutuhan pemasaran digital Anda (SEO, SMM, Ads, Content) dalam satu paket. Anda hanya
                        perlu fokus pada operasional bisnis utama Anda.</p>
                </div>

                <!-- Service Item -->
                <div class="animate_top sg oi pi zq ml il am cn _m">
                    <img src="{{ asset('frontend/images/icon-07.svg') }}" alt="Icon" />
                    <h4 class="ek zj kk wm nb _b">Eksekusi Cepat & Fleksibel</h4>
                    <p>Tim kami merespons perubahan tren dan data dengan gesit. Kami menjamin implementasi strategi yang
                        cepat dan proses adaptasi yang lincah sesuai dinamika pasar.</p>
                </div>

                <!-- Service Item -->
                <div class="animate_top sg oi pi zq ml il am cn _m">
                    <img src="{{ asset('frontend/images/icon-05.svg') }}" alt="Icon" />
                    <h4 class="ek zj kk wm nb _b">Strategi Kustom, Bukan Templat</h4>
                    <p>Setiap bisnis unik, begitu juga strateginya. Kami merancang strategi pemasaran digital yang
                        benar-benar dipersonalisasi sesuai profil audiens, produk, dan target spesifik Anda.</p>
                </div>

                <!-- Service Item -->
                <div class="animate_top sg oi pi zq ml il am cn _m">
                    <img src="{{ asset('frontend/images/icon-06.svg') }}" alt="Icon" />
                    <h4 class="ek zj kk wm nb _b">Laporan & Optimasi Berkelanjutan</h4>
                    <p>Anda akan menerima laporan kinerja yang transparan dan mudah dipahami. Kami terus melakukan
                        monitoring dan optimasi rutin untuk menjaga performa di titik maksimal.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== Services End ===== -->


    <!-- ===== Testimonials Start ===== -->
    <section class="hj rp hr">
        <!-- Section Title Start -->
        <div x-data="{ sectionTitle: `Kisah Sukses Nyata Apa Kata Klien Kami.`, sectionTitleText: `Kami bangga menjadi mitra pertumbuhan bagi berbagai jenis bisnis. Lihat bagaimana strategi digital kami telah memberikan hasil yang terukur bagi mereka.` }">
            <div class="animate_top bb ze rj ki xn vq">
                <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
                </h2>
                <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
            </div>


        </div>
        <!-- Section Title End -->

        <div class="bb ze ki xn ar">
            <div class="animate_top jb cq">
                <!-- Slider main container -->
                <div class="swiper testimonial-01">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="i hh rm sg vk xm bi qj">
                                <!-- Border Shape -->
                                <span class="rc je md/2 gh xg h q r"></span>
                                <span class="rc je md/2 mh yg h q p"></span>

                                <div class="tc sf rn tn un zf dp">
                                    <img class="bf" width="150" height="150"
                                        src="{{ asset('frontend/images/testimoni/bestfresh.png') }}" alt="User" />

                                    <div>
                                        <img src="{{ asset('frontend/images/icon-quote.svg') }}" alt="Quote" />
                                        <p class="ek ik xj _p kc fb">
                                            "Sebelum bekerjasama dengan Tribun Consulting, iklan kami sering 'boncos' dan
                                            tidak terarah. Setelah implementasi strategi yang berbasis data,
                                            penjualan kami naik 45% dalam tiga bulan. Pendekatan yang sangat terstruktur!"
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="i hh rm sg vk xm bi qj">
                                <!-- Border Shape -->
                                <span class="rc je md/2 gh xg h q r"></span>
                                <span class="rc je md/2 mh yg h q p"></span>

                                <div class="tc sf rn tn un zf dp">
                                    <img class="bf" width="150" height="150"
                                        src="{{ asset('frontend/images/testimoni/persada.png') }}" alt="User" />

                                    <div>
                                        <img src="{{ asset('frontend/images/icon-quote.svg') }}" alt="Quote" />
                                        <p class="ek ik xj _p kc fb">
                                            "Sebagai klinik, kepercayaan dan visibilitas digital itu krusial. Tim Tribun
                                            Consulting membantu kami mendominasi pencarian lokal (SEO)
                                            dan membangun citra profesional di media sosial. Jumlah pasien baru dari online
                                            meningkat signifikan."
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="i hh rm sg vk xm bi qj">
                                <!-- Border Shape -->
                                <span class="rc je md/2 gh xg h q r"></span>
                                <span class="rc je md/2 mh yg h q p"></span>

                                <div class="tc sf rn tn un zf dp">
                                    <img class="bf" width="150" height="150"
                                        src="{{ asset('frontend/images/testimoni/persada.png') }}" alt="User" />

                                    <div>
                                        <img src="{{ asset('frontend/images/icon-quote.svg') }}" alt="Quote" />
                                        <p class="ek ik xj _p kc fb">
                                            "Sebagai klinik, kepercayaan dan visibilitas digital itu krusial. Tim Tribun
                                            Consulting membantu kami mendominasi pencarian lokal (SEO)
                                            dan membangun citra profesional di media sosial. Jumlah pasien baru dari online
                                            meningkat signifikan."
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="i hh rm sg vk xm bi qj">
                                <!-- Border Shape -->
                                <span class="rc je md/2 gh xg h q r"></span>
                                <span class="rc je md/2 mh yg h q p"></span>

                                <div class="tc sf rn tn un zf dp">
                                    <img class="bf" width="150" height="150"
                                        src="{{ asset('frontend/images/testimoni/debroder.jpg') }}" alt="User" />

                                    <div>
                                        <img src="{{ asset('frontend/images/icon-quote.svg') }}" alt="Quote" />
                                        <p class="ek ik xj _p kc fb">
                                            "Kami berjuang menjangkau audiens yang tepat untuk produk apparel kami. Tribun
                                            Consulting mengoptimalkan Iklan Digital (Ads) kami,
                                            menurunkan biaya per akuisisi (CPA), dan membuat brand kami lebih dikenal di
                                            luar Makassar. Sangat direkomendasikan!"
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- If we need navigation -->
                    <div class="tc wf xf fg jb">
                        <div class="swiper-button-prev c tc wf xf ie ld rg _g dh pf ml vr hh rm tl zm rl ym">
                            <svg class="th lm" width="14" height="14" viewBox="0 0 14 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.52366 7.83336L7.99366 12.3034L6.81533 13.4817L0.333663 7.00002L6.81533 0.518357L7.99366 1.69669L3.52366 6.16669L13.667 6.16669L13.667 7.83336L3.52366 7.83336Z"
                                    fill="" />
                            </svg>
                        </div>
                        <div class="swiper-button-next c tc wf xf ie ld rg _g dh pf ml vr hh rm tl zm rl ym">
                            <svg class="th lm" width="14" height="14" viewBox="0 0 14 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z"
                                    fill="" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== Testimonials End ===== -->

    <!-- ===== Counter Start ===== -->
    <section class="i pg qh rm ji hp">
        <img src="{{ asset('frontend/images/shape-11.svg') }}" alt="Shape" class="of h ga ha ke" />
        <img src="{{ asset('frontend/images/shape-07.svg') }}" alt="Shape" class="h ia o ae jf" />
        <img src="{{ asset('frontend/images/shape-14.svg') }}" alt="Shape" class="h ja ka" />
        <img src="{{ asset('frontend/images/shape-15.svg') }}" alt="Shape" class="h q p" />

        <div class="bb ze i va ki xn br">
            <div class="tc uf sn tn xf un gg">
                <div class="animate_top me/5 ln rj">
                    <h2 class="gk vj zp or kk wm hc">100+</h2>
                    <p class="ek bk aq">Klien & Bisnis Terbantu</p>
                </div>
                <div class="animate_top me/5 ln rj">
                    <h2 class="gk vj zp or kk wm hc">500+</h2>
                    <p class="ek bk aq">Strategi Digital Diimplementasikan</p>
                </div>
                <div class="animate_top me/5 ln rj">
                    <h2 class="gk vj zp or kk wm hc">45%</h2>
                    <p class="ek bk aq">Rata-rata Kenaikan Omzet Klien</p>
                </div>
                <div class="animate_top me/5 ln rj">
                    <h2 class="gk vj zp or kk wm hc">1 Juta+</h2>
                    <p class="ek bk aq">Jangkauan Tertarget Dikelola</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== Counter End ===== -->

    <!-- ===== Blog Start ===== -->
    <section class="ji gp uq">
        <!-- Section Title Start -->
        <div x-data="{ sectionTitle: `Wawasan Terbaru dari Dunia Digital Marketing.`, sectionTitleText: `Kami tidak hanya mengimplementasikan strategi, tetapi juga berbagi pengetahuan. Dapatkan tips, analisis tren terbaru, dan panduan praktis dari tim ahli kami untuk membantu bisnis Anda terus tumbuh dan beradaptasi.` }">
            <div class="animate_top bb ze rj ki xn vq">
                <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
                </h2>
                <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
            </div>


        </div>
        <!-- Section Title End -->

        <div class="bb ye ki xn vq jb jo">
            <div class="wc qf pn xo zf iq">
                <!-- Blog Item -->
                <div class="animate_top sg vk rm xm">
                    <div class="c rc i z-1 pg">
                        <img class="w-full" src="https://picsum.photos/800" alt="Blog" />

                        <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                            <a href="./blog-single.html" class="vc ek rg lk gh sl ml il gi hi">Read More</a>
                        </div>
                    </div>

                    <div class="yh">
                        <div class="tc uf wf ag jq">
                            <div class="tc wf ag">
                                <img src="{{ asset('frontend/images/icon-man.svg') }}" alt="User" />
                                <p>Ilham W</p>
                            </div>
                            <div class="tc wf ag">
                                <img src="{{ asset('frontend/images/icon-calender.svg') }}" alt="Calender" />
                                <p>25 Dec, 2025</p>
                            </div>
                            <div class="tc wf ag">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="1"
                                        d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                    <path stroke="currentColor" stroke-width="1"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>

                                <p>25</p>
                            </div>
                        </div>
                        <h4 class="ek tj ml il kk wm xl eq lb">
                            <a href="blog-single.html">5 Strategi SEO Lokal Makassar untuk UMKM yang Minim Budget</a>
                        </h4>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="animate_top sg vk rm xm">
                    <div class="c rc i z-1 pg">
                        <img class="w-full" src="https://picsum.photos/800" alt="Blog" />

                        <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                            <a href="./blog-single.html" class="vc ek rg lk gh sl ml il gi hi">Read More</a>
                        </div>
                    </div>

                    <div class="yh">
                        <div class="tc uf wf ag jq">
                            <div class="tc wf ag">
                                <img src="{{ asset('frontend/images/icon-man.svg') }}" alt="User" />
                                <p>Ilham W</p>
                            </div>
                            <div class="tc wf ag">
                                <img src="{{ asset('frontend/images/icon-calender.svg') }}" alt="Calender" />
                                <p>25 Dec, 2025</p>
                            </div>
                            <div class="tc wf ag">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="1"
                                        d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                    <path stroke="currentColor" stroke-width="1"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>

                                <p>25</p>
                            </div>
                        </div>
                        <h4 class="ek tj ml il kk wm xl eq lb">
                            <a href="blog-single.html">5 Strategi SEO Lokal Makassar untuk UMKM yang Minim Budget</a>
                        </h4>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="animate_top sg vk rm xm">
                    <div class="c rc i z-1 pg">
                        <img class="w-full" src="https://picsum.photos/800" alt="Blog" />

                        <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                            <a href="./blog-single.html" class="vc ek rg lk gh sl ml il gi hi">Read More</a>
                        </div>
                    </div>

                    <div class="yh">
                        <div class="tc uf wf ag jq">
                            <div class="tc wf ag">
                                <img src="{{ asset('frontend/images/icon-man.svg') }}" alt="User" />
                                <p>Ilham W</p>
                            </div>
                            <div class="tc wf ag">
                                <img src="{{ asset('frontend/images/icon-calender.svg') }}" alt="Calender" />
                                <p>25 Dec, 2025</p>
                            </div>
                            <div class="tc wf ag">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="1"
                                        d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                    <path stroke="currentColor" stroke-width="1"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>

                                <p>25</p>
                            </div>
                        </div>
                        <h4 class="ek tj ml il kk wm xl eq lb">
                            <a href="blog-single.html">5 Strategi SEO Lokal Makassar untuk UMKM yang Minim Budget</a>
                        </h4>
                    </div>
                </div>

            </div>
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
                        Siap Meraih Sukses di Digital?
                    </h2>
                    <p class="lk">
                        Jadikan kami mitra bisnis terpercaya Anda untuk pertumbuhan profit yang berkelanjutan.
                    </p>
                </div>
                <div class="animate_right bf">
                    <a href="https://wa.me/6285346098979?text=Halo%2C%20saya%20tertarik%20dengan%20layanan%20konsultasi%20digital%20marketing%20berbasis%20data.%20Bisakah%20kita%20jadwalkan%20diskusi%20gratis%3F"
                        class="vc ek kk hh rg ol il cm gi hi">
                        Konsultasi Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CTA End ===== -->
@endsection
