@extends('global.main-structure')

@section('main-structure')
    {{-- CONTENT --}}
    <section class="first admin">
        <section class="profile">
            <div class="container-fluid">
                <div class="row justify-content-start">
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-10 col-md-10">
                        <h1>Hello Mas Gaber, What are you looking for ?</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="works mt-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4 text-center">
                        <a href="/profile">
                            <div class="works-wrapper d-flex justify-content-center">
                                <div>
                                    <h4>Edit Profile</h4>
                                    <p>Email - Headline - Name - Region - Image - Logo - CV</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 text-center">
                        <a href="/showcases">
                            <div class="works-wrapper d-flex justify-content-center">
                                <div>
                                    <h4>Edit Showcases</h4>
                                    <p>Showcase image & name</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 text-center">
                        <a href="/experiences">
                            <div class="works-wrapper d-flex justify-content-center">
                                <div>
                                    <h4>Edit Experiences</h4>
                                    <p>Experiences - Skills - Eductions</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 text-center">
                        <a href="/socials">
                            <div class="works-wrapper d-flex justify-content-center">
                                <div>
                                    <h4>Edit Social</h4>
                                    <p>Social Media</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row copyright justify-content-center mt-5">
                    <div class="col-6">
                        <div class="input-wrapper">
                            <form action="/updateCopyright">
                                <div class="d-flex align-items-center">
                                    <input name="copyright" value="{{ $dataCopyright->copyright }}" type="text">
                                    <button type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    {{-- CONTENT --}}
@endsection
