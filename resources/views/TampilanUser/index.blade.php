@extends('TampilanUser.partials.main')
@section('konten')
    <!-- Header-->
    <header class="py-5">
        <div class="container px-5 pb-5">
            <div class="row gx-5 align-items-center">
                <div class="col-xxl-5">
                    <!-- Header text content-->
                    <div class="text-center text-xxl-start">
                        <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                            <div class="text-uppercase">Backend Web Developer</div>
                        </div>
                        <div class="fs-3 fw-light text-muted">I can help your website</div>
                        <h1 class="display-3 fw-bolder mb-5"><span class="d-inline">From Concept to Realization</span></h1>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                            <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder"
                                href="{{ route('resume') }}">Resume</a>
                            <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder"
                                href="{{ route('project') }}">Projects</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7">
                    <!-- Header profile picture-->
                    <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                        <div class="profile bg-gradient-primary-to-secondary">
                            <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                            <!-- Watch a tutorial on how to do this on YouTube (link)-->

                            <img class="profile-img" src="{{ asset('foto/profile/' . GetMetaValue('_foto')) }}"
                                alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section-->
    <section class="bg-light py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-8">
                    <div class="text-center my-5">
                        <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                        <p class="lead fw-light mb-4">{{ GetMetaValue('_nama') }}</p>
                        <p class="text-muted">{{ GetMetaValue('_aboutMe') }}</p>
                        <div class="d-flex justify-content-center fs-2 gap-4">
                            <a class="text-gradient" target="_blank" href="{{ GetMetaValue('_youtube') }}"><i class="bi bi-linkedin"></i></a>
                            <a class="text-gradient" target="_blank" href="{{ GetMetaValue('_instagram') }}"><i class="bi bi-instagram"></i></a>
                            <a class="text-gradient" target="_blank" href="{{ GetMetaValue('_github') }}"><i class="bi bi-github"></i></a>
                            <a class="text-gradient" target="_blank" href="{{ GetMetaValue('_github') }}"><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
