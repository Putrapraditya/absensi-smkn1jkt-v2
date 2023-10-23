@extends('layouts.landing')

@section('content')
<!-- section -->
<section class="section bg-gray-gradient-reverse">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6 col-xl-5 pe-xxl-8">
                <h6 class="text-primary mb-3">Our Approach</h6>
                <h3 class="h2 mb-4">When building a new website, you need a partner</h3>
                <p class="fs-lg">Look professional and help customers connect with your business.</p>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="pb-5 row">
                    <div class="col-6">
                        <div class="icon-md border border-primary rounded-3 text-primary mb-4">
                            <i class="bi bi-pencil"></i>
                        </div>
                        <h6>Creative Concept</h6>
                        <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    </div>
                    <div class="col-6">
                        <div class="icon-md border border-primary rounded-3 text-primary mb-4">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <h6>Production</h6>
                        <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    </div>
                </div>
                <a class="btn btn-primary" href="#">Get a Quote <i class="bi bi-chevron-right ms-1"></i></a>
            </div>
            <div class="col-lg-6 ms-auto">
                <img class="img-fluid rounded" src="assets/img/about-3.jpg" title="" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End section -->
@endsection
