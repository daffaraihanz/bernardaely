@extends('global.main-structure')

@section('main-structure')
    <section class="first">
        <img class="me-3 img-fluid top-shape" src="{{ asset('images/top-shape.png') }}" alt="logo">
        <img class="me-3 img-fluid left-shape" src="{{ asset('images/left-shape.png') }}" alt="logo">
        <img class="me-3 img-fluid right-shape" src="{{ asset('images/right-shape.png') }}" alt="logo">
        {{-- NAVIGATION --}}
        <nav class="navigation desktops-navigation">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <a class="navbar-brand" href="#">
                        <img class="me-3 img-fluid" src="{{ asset('storage/' . $dataProfiles[0]->logo) }}"
                            alt="profile image">
                    </a>
                    <div class="d-flex align-items-center center-nav">
                        <a class="nav-link" href="#">Works</a>
                        <a class="nav-link mx-4" href="#">About</a>
                        <a class="nav-link" href="#">Contacts</a>
                    </div>
                    <div>
                        <a href="{{ asset('storage/' . $dataProfiles[0]->cv) }}" download>
                            <button class="btn">Download CV</button>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        {{-- MOBILE ONLY --}}
        <section class="mobile-navigation">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="d-flex align-items-center justify-content-between">
                            <a class="navbar-brand" href="#">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.6729 29.1172C20.1289 28.5731 20.1289 27.691 20.6729 27.1469L23.7688 24.0511C24.3128 23.507 25.195 23.507 25.739 24.0511L28.8349 27.1469C29.3789 27.691 29.3789 28.5731 28.8349 29.1172L25.739 32.213C25.195 32.7571 24.3128 32.7571 23.7688 32.213L20.6729 29.1172Z"
                                        fill="white" />
                                    <path
                                        d="M27.4286 22.3623C26.8845 21.8182 26.8845 20.9361 27.4286 20.3921L30.5244 17.2962C31.0685 16.7522 31.9506 16.7522 32.4946 17.2962L35.5905 20.3921C36.1345 20.9361 36.1345 21.8182 35.5905 22.3623L32.4946 25.4581C31.9506 26.0022 31.0685 26.0022 30.5244 25.4581L27.4286 22.3623Z"
                                        fill="white" />
                                    <path
                                        d="M20.6729 15.6079C20.1289 15.0639 20.1289 14.1817 20.6729 13.6377L23.7688 10.5418C24.3128 9.99777 25.195 9.99777 25.739 10.5418L28.8349 13.6377C29.3789 14.1817 29.3789 15.0639 28.8349 15.6079L25.739 18.7037C25.195 19.2478 24.3128 19.2478 23.7688 18.7037L20.6729 15.6079Z"
                                        fill="white" />
                                    <path opacity="0.2"
                                        d="M13.9177 8.85305C13.3736 8.30897 13.3736 7.42685 13.9177 6.88278L17.0135 3.78696C17.5576 3.24289 18.4397 3.24289 18.9838 3.78696L22.0796 6.88278C22.6237 7.42685 22.6237 8.30897 22.0796 8.85305L18.9838 11.9489C18.4397 12.4929 17.5576 12.4929 17.0135 11.9489L13.9177 8.85305Z"
                                        fill="#F2F4F7" />
                                    <path opacity="0.2"
                                        d="M0.408177 22.3622C-0.135897 21.8181 -0.135896 20.936 0.408178 20.392L10.2588 10.5414C10.8029 9.99728 11.685 9.99728 12.229 10.5414L22.0796 20.392C22.6237 20.936 22.6237 21.8181 22.0796 22.3622L12.229 32.2128C11.685 32.7569 10.8029 32.7569 10.2588 32.2128L0.408177 22.3622Z"
                                        fill="#F2F4F7" />
                                </svg>
                            </a>
                            <a href="">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.35999 7.27997C3.35999 6.97069 3.61071 6.71997 3.91999 6.71997H24.08C24.3893 6.71997 24.64 6.97069 24.64 7.27997C24.64 7.58925 24.3893 7.83997 24.08 7.83997H3.91999C3.61071 7.83997 3.35999 7.58925 3.35999 7.27997ZM24.08 13.44H3.91999C3.61071 13.44 3.35999 13.6907 3.35999 14C3.35999 14.3093 3.61071 14.56 3.91999 14.56H24.08C24.3893 14.56 24.64 14.3093 24.64 14C24.64 13.6907 24.3893 13.44 24.08 13.44ZM3.91999 20.16H24.08C24.3893 20.16 24.64 20.4107 24.64 20.72C24.64 21.0293 24.3893 21.28 24.08 21.28H3.91999C3.61071 21.28 3.35999 21.0293 3.35999 20.72C3.35999 20.4107 3.61071 20.16 3.91999 20.16Z"
                                        fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- END MOBILE ONLY --}}
        {{-- END NAVIGATION --}}
        {{-- PROFIL --}}
        <section class="profile">
            <div class="container-fluid">
                <div class="row justify-content-start">
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-10 col-md-10">
                        <h1>{{ $dataProfiles[0]->headline }}</h1>
                        <div class="d-flex align-items-center mt-4 profil-wrapper">
                            <img class="me-3 img-fluid image-profile"
                                src="{{ asset('storage/' . $dataProfiles[0]->image) }}" alt="profile image">
                            <div>
                                <h5 class="mb-1">{{ $dataProfiles[0]->name }}</h5>
                                <p>{{ $dataProfiles[0]->region }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="works">
            <div class="container-fluid">
                <div class="row title">
                    <div class="col">
                        <div class="d-flex align-items-center mb-1">
                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_66_663)">
                                    <path
                                        d="M0.327262 4.90825C-0.109087 4.47191 -0.109088 3.76444 0.327261 3.3281L3.3281 0.327262C3.76444 -0.109087 4.47191 -0.109088 4.90825 0.327261L7.67274 3.09175C8.10909 3.52809 8.10909 4.23556 7.67274 4.6719L4.6719 7.67274C4.23556 8.10909 3.52809 8.10909 3.09175 7.67274L0.327262 4.90825Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_66_663">
                                        <rect width="8" height="8" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <p class="text-white ms-1">Works</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4 text-center">
                        <img class="img-fluid" width="100%" height="100%" src="{{ asset('images/dummy.png') }}"
                            alt="logo">
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 text-center">
                        <img class="img-fluid" width="100%" height="100%" src="{{ asset('images/dummy.png') }}"
                            alt="logo">
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 text-center">
                        <img class="img-fluid" width="100%" height="100%" src="{{ asset('images/dummy.png') }}"
                            alt="logo">
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 text-center">
                        <img class="img-fluid" width="100%" height="100%" src="{{ asset('images/dummy.png') }}"
                            alt="logo">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4 text-center">
                        <img class="img-fluid" width="100%" height="100%" src="{{ asset('images/dummy.png') }}"
                            alt="logo">
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 text-center">
                        <img class="img-fluid" width="100%" height="100%" src="{{ asset('images/dummy.png') }}"
                            alt="logo">
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 text-center">
                        <img class="img-fluid" width="100%" height="100%" src="{{ asset('images/dummy.png') }}"
                            alt="logo">
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 text-center">
                        <img class="img-fluid" width="100%" height="100%" src="{{ asset('images/dummy.png') }}"
                            alt="logo">
                    </div>
                </div>
            </div>
        </section>
        {{-- END PROFIL --}}
    </section>
    <section class="second">
        {{-- QUOTE --}}
        <section class="quote">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-7 col-md-11 col-11">
                        <h2>"Good design is <span class="span1">noticed</span>. great design goes <span class="span2">
                                unnoticed</span>.”</h2>
                        <p class="mt-2">- Design Foundations</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-10 col-12">
                        <hr>
                    </div>
                </div>
            </div>
        </section>
        {{-- END QUOTE --}}
        {{-- EXPERIENCES --}}
        <section class="exp">
            <div class="container-fluid">
                {{-- MOBILE ONLY --}}
                <section class="mobile-only">
                    @foreach ($dataExperiences as $data)
                        <div class="row mb-4">
                            @if ($dataExperiences[0]->start == $data->start)
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <svg width="8" height="8" viewBox="0 0 8 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_66_663)">
                                                <path
                                                    d="M0.327262 4.90825C-0.109087 4.47191 -0.109088 3.76444 0.327261 3.3281L3.3281 0.327262C3.76444 -0.109087 4.47191 -0.109088 4.90825 0.327261L7.67274 3.09175C8.10909 3.52809 8.10909 4.23556 7.67274 4.6719L4.6719 7.67274C4.23556 8.10909 3.52809 8.10909 3.09175 7.67274L0.327262 4.90825Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_66_663">
                                                    <rect width="8" height="8" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <p class="text-white ms-1 title">Experience</p>
                                    </div>
                                </div>
                            @else
                                <div class="col-6"></div>
                            @endif
                            <div class="col-6 exp-content">
                                <div>
                                    <h5>{{ $data->position }}</h5>
                                    <p class="mt-1">{{ $data->companies }}</p>
                                    @if ($data->end == 'Present')
                                        <h5 class="mt-2"><span>{{ $data->start }} -</span> {{ $data->end }}</h5>
                                    @else
                                        <h5 class="mt-2"><span>{{ $data->start }} - {{ $data->end }}</span></h5>
                                    @endif

                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="row justify-content-end mb-4">
                        <div class="col-6"></div>
                        <div class="col-6">
                            <hr>
                        </div>
                    </div>
                    @foreach ($dataSkills as $data)
                        <div class="row mb-4">
                            @if ($dataSkills[0]->names == $data->names)
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <svg width="8" height="8" viewBox="0 0 8 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_66_663)">
                                                <path
                                                    d="M0.327262 4.90825C-0.109087 4.47191 -0.109088 3.76444 0.327261 3.3281L3.3281 0.327262C3.76444 -0.109087 4.47191 -0.109088 4.90825 0.327261L7.67274 3.09175C8.10909 3.52809 8.10909 4.23556 7.67274 4.6719L4.6719 7.67274C4.23556 8.10909 3.52809 8.10909 3.09175 7.67274L0.327262 4.90825Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_66_663">
                                                    <rect width="8" height="8" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <p class="text-white ms-1 title">Skills</p>
                                    </div>
                                </div>
                            @else
                                <div class="col-6"></div>
                            @endif
                            <div class="col-6 exp-content">
                                <div>
                                    <h5>{{ $data->names }}</h5>
                                    <p class="mt-1">{{ $data->levels }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="row justify-content-end mb-4">
                        <div class="col-6"></div>
                        <div class="col-6">
                            <hr>
                        </div>
                    </div>
                    @foreach ($dataEducations as $data)
                        <div class="row mb-4">
                            @if ($dataEducations[0]->schools == $data->schools)
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <svg width="8" height="8" viewBox="0 0 8 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_66_663)">
                                                <path
                                                    d="M0.327262 4.90825C-0.109087 4.47191 -0.109088 3.76444 0.327261 3.3281L3.3281 0.327262C3.76444 -0.109087 4.47191 -0.109088 4.90825 0.327261L7.67274 3.09175C8.10909 3.52809 8.10909 4.23556 7.67274 4.6719L4.6719 7.67274C4.23556 8.10909 3.52809 8.10909 3.09175 7.67274L0.327262 4.90825Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_66_663">
                                                    <rect width="8" height="8" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <p class="text-white ms-1 title">Education</p>
                                    </div>
                                </div>
                            @else
                                <div class="col-6"></div>
                            @endif
                            <div class="col-6 exp-content">
                                <div>
                                    <h5>{{ $data->schools }}</h5>
                                    <p class="mt-1">{{ $data->majors }}</p>
                                    @if ($data->end == 'Present')
                                        <h5 class="mt-2"><span>{{ $data->start }}</span> - {{ $data->end }}</h5>
                                    @else
                                        <h5 class="mt-2"><span>{{ $data->start }} - {{ $data->end }}</span></h5>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </section>
                {{-- END MOBILE ONLY --}}
                @foreach ($dataExperiences as $data)
                    <div class="row mb-5 non-mobile">
                        <div class="col-lg-2 col-md-1"></div>
                        @if ($dataExperiences[0]->start == $data->start)
                            <div class="col-lg-3 col-md-3">
                                <div class="d-flex align-items-center">
                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_66_663)">
                                            <path
                                                d="M0.327262 4.90825C-0.109087 4.47191 -0.109088 3.76444 0.327261 3.3281L3.3281 0.327262C3.76444 -0.109087 4.47191 -0.109088 4.90825 0.327261L7.67274 3.09175C8.10909 3.52809 8.10909 4.23556 7.67274 4.6719L4.6719 7.67274C4.23556 8.10909 3.52809 8.10909 3.09175 7.67274L0.327262 4.90825Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_66_663">
                                                <rect width="8" height="8" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <p class="text-white ms-1 title">Experience</p>
                                </div>
                            </div>
                        @else
                            <div class="col-lg-3 col-md-3"></div>
                        @endif
                        <div class="col-lg-3 col-md-4 exp-content">
                            <div>
                                <h5>{{ $data->position }}</h5>
                                <p class="mt-1">{{ $data->companies }}</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 exp-content d-flex justify-content-end">
                            @if ($data->end == 'Present')
                                <h5><span>{{ $data->start }} -</span> {{ $data->end }}</h5>
                            @else
                                <h5><span>{{ $data->start }} - {{ $data->end }}</span></h5>
                            @endif
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                @endforeach
                {{-- HR --}}
                <div class="row justify-content-end mb-5 non-mobile">
                    <div class="col-lg-5 col-md-4"></div>
                    <div class="col-lg-6 col-md-7">
                        <hr>
                    </div>
                    <div class="col-lg-1 col-md-1"></div>
                </div>
                {{-- END HR --}}
                {{-- DESKTOP ONLY --}}
                <section class="desktops-only">
                    <div class="row justify-content-end mb-5">
                        <div class="col-lg-2 col-md-1"></div>
                        <div class="col-lg-3 col-md-3">
                            <div class="d-flex align-items-center">
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_66_663)">
                                        <path
                                            d="M0.327262 4.90825C-0.109087 4.47191 -0.109088 3.76444 0.327261 3.3281L3.3281 0.327262C3.76444 -0.109087 4.47191 -0.109088 4.90825 0.327261L7.67274 3.09175C8.10909 3.52809 8.10909 4.23556 7.67274 4.6719L4.6719 7.67274C4.23556 8.10909 3.52809 8.10909 3.09175 7.67274L0.327262 4.90825Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_66_663">
                                            <rect width="8" height="8" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p class="text-white ms-1">Skills</p>
                            </div>
                        </div>
                        <div class="col-6 exp-content">
                            <div class="row">
                                @foreach ($dataSkills as $data)
                                    <div class="col-4 mb-5">
                                        <h5>{{ $data->names }}</h5>
                                        <p class="mt-1">{{ $data->levels }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    {{-- HR --}}
                    <div class="row justify-content-end mb-5">
                        <div class="col-lg-5"></div>
                        <div class="col-lg-6">
                            <hr>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                    {{-- END HR --}}
                </section>
                {{-- END DESKTOP ONLY --}}
                {{-- TAB ONLY --}}
                <section class="tablet-only">
                    <div class="row mb-5">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <div class="d-flex align-items-center">
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_66_663)">
                                        <path
                                            d="M0.327262 4.90825C-0.109087 4.47191 -0.109088 3.76444 0.327261 3.3281L3.3281 0.327262C3.76444 -0.109087 4.47191 -0.109088 4.90825 0.327261L7.67274 3.09175C8.10909 3.52809 8.10909 4.23556 7.67274 4.6719L4.6719 7.67274C4.23556 8.10909 3.52809 8.10909 3.09175 7.67274L0.327262 4.90825Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_66_663">
                                            <rect width="8" height="8" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p class="text-white ms-1">Skills</p>
                            </div>
                        </div>
                        <div class="col-md-8 exp-content">
                            <div class="row">
                                @foreach ($dataSkills as $data)
                                    @if (
                                        $dataSkills[count($dataSkills) - 1]->names != $data->names &&
                                            $dataSkills[count($dataSkills) - 2]->names != $data->names)
                                        <div class="col-md-5 mb-5">
                                            <h5>{{ $data->names }}</h5>
                                            <p class="mt-1">{{ $data->levels }}</p>
                                        </div>
                                        <div class="col-md-1"></div>
                                    @else
                                        <div class="col-md-5">
                                            <h5>{{ $data->names }}</h5>
                                            <p class="mt-1">{{ $data->levels }}</p>
                                        </div>
                                        <div class="col-md-1"></div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end mb-5">
                        <div class="col-md-4"></div>
                        <div class="col-md-7">
                            <hr>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </section>
                {{-- END TAB ONLY --}}
                @foreach ($dataEducations as $data)
                    <div class="row mb-5 non-mobile">
                        <div class="col-lg-2 col-md-1"></div>
                        @if ($dataEducations[0]->schools == $data->schools)
                            <div class="col-lg-3 col-md-3">
                                <div class="d-flex align-items-center">
                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_66_663)">
                                            <path
                                                d="M0.327262 4.90825C-0.109087 4.47191 -0.109088 3.76444 0.327261 3.3281L3.3281 0.327262C3.76444 -0.109087 4.47191 -0.109088 4.90825 0.327261L7.67274 3.09175C8.10909 3.52809 8.10909 4.23556 7.67274 4.6719L4.6719 7.67274C4.23556 8.10909 3.52809 8.10909 3.09175 7.67274L0.327262 4.90825Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_66_663">
                                                <rect width="8" height="8" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <p class="text-white ms-1">Education</p>
                                </div>
                            </div>
                        @else
                            <div class="col-lg-3 col-md-3"></div>
                        @endif
                        <div class="col-lg-3 col-md-4 exp-content">
                            <div>
                                <h5>{{ $data->schools }}</h5>
                                <p class="mt-1">{{ $data->majors }}</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 exp-content d-flex justify-content-end">
                            @if ($data->end == 'Present')
                                <h5><span>{{ $data->start }} -</span> {{ $data->end }}</h5>
                            @else
                                <h5><span>{{ $data->start }} - {{ $data->end }}</span></h5>
                            @endif
                        </div>
                    </div>
                @endforeach
        </section>
        {{-- END EXPERIENCES --}}
        {{-- FOOTER --}}
        <section class="footer">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-10 col-12">
                        <hr>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col">
                        <div class="d-flex align-items-center contact-wrapper">
                            <h2>{{ $dataProfiles[0]->email }}</h2>
                            <button class="btn">Let's Talk!</button>
                        </div>
                    </div>
                </div>
                <section class="desktops-only">
                    <div class="row justify-content-between copyright-wrapper mt-4">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5">
                            <div class="row">
                                @foreach ($dataSocials as $data)
                                    <div class="col">
                                        <a href="{{ $data->url }}" class="text-white">{{ $data->names }}</a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-5 d-flex justify-content-end">
                            <p>{{ $dataCopyright->copyright }}</p>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </section>
                {{-- TAB ONLY --}}
                <section class="tablet-only">
                    <div class="row justify-content-between copyright-wrapper mt-4">
                        <div class="col-1 col-md-1"></div>
                        <div class="col-5 col-md-10">
                            <div class="row">
                                @foreach ($dataSocials as $data)
                                    <div class="col">
                                        <a href="#" class="text-white">{{ $data->names }}</a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <div class="row copyright-wrapper">
                        <div class="col-1"></div>
                        <div class="col-5">
                            <p>{{ $dataCopyright->copyrights }}</p>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </section>
                {{-- END TAB ONLY --}}
                {{-- MOBILE ONLY --}}
                <section class="mobile-only">
                    <div class="row copyright-wrapper mt-4">
                        @foreach ($dataSocials as $data)
                            <div class="col-3 mb-3">
                                <a href="#" class="text-white">{{ $data->names }}</a>
                            </div>
                        @endforeach
                    </div>
                    <div class="row copyright-wrapper">
                        <div class="col-12">
                            <p>{{ $dataProfiles[0]->copyright }}</p>
                        </div>
                    </div>
                </section>
                {{-- END MOBILE ONLY --}}
            </div>
        </section>
        {{-- FOOTER --}}
    </section>
@endsection
