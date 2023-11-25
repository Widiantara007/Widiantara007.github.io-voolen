@extends('main')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-4 animated slideInDown">Art Installation</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">Installation</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Activities Start -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                <img class="img-fluid" src="img/article.jpg" alt="">
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="section-title">
                    <a href="" class="fs-5 fw-medium fst-italic text-dark">String Art</a>
                    <h1 class="display-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa magnam hic dolor commodi deserunt tempore!
                    </h1>
                </div>
                
                <a href="" class="btn btn-dark rounded-pill py-3 px-5">Read More</a>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row g-5">
            <div class="col-lg-5 wow fadeIn order-lg-2" data-wow-delay="0.1s">
                <img class="img-fluid" src="img/article.jpg" alt="">
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="section-title">
                    <a href="" class="fs-5 fw-medium fst-italic text-dark">Cross Stitch Wall Art</a>
                    <h1 class="display-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque sint suscipit laborum molestias pariatur reiciendis!</h1>
                </div>
                <a href="" class="btn btn-dark rounded-pill py-3 px-5">Read More</a>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row g-5">
            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                <img class="img-fluid" src="img/article.jpg" alt="">
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="section-title">
                    <a href="" class="fs-5 fw-medium fst-italic text-dark">Crochet Art</a>
                    <h1 class="display-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error magni perferendis earum eligendi voluptate? Ratione.</h1>
                </div>
                <a href="" class="btn btn-dark rounded-pill py-3 px-5">Read More</a>
            </div>
        </div>
    </div>
    {{-- <div class="container mt-5">
        <div class="row g-5">
            <div class="col-lg-5 wow fadeIn order-lg-2" data-wow-delay="0.1s">
                <img class="img-fluid" src="img/article.jpg" alt="">
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="section-title">
                    <a href="" class="fs-5 fw-medium fst-italic text-dark">Basic Knitting</a>
                    <h1 class="display-6">The ancient knit with breien is no longer difficult in your hands. We have methodes that will make you love it. </h1>
                </div>
                <a href="" class="btn btn-dark rounded-pill py-3 px-5">Read More</a>
            </div>
        </div>
    </div> --}}
</div>
<!-- Activities End -->
    <!-- Store End -->
@endsection