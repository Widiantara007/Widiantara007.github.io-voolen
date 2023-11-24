@extends('main')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
       
        <h1 class="display-1 text-dark mb-4 animated zoomIn">Our Activities</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-dark" aria-current="page">Activities</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Activities Start -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium fst-italic smalltitle">Goods</p>
            <h1 class="display-6 maintext">These are our popular made-with-love goods that you can have</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="store-item position-relative text-center">
                    <img class="img-fluid" src="img/store-product-1.jpg" alt="">
                    <div class="p-4">
                        <div class="text-center mb-3">
                            <small class="fa fa-star smalltitle"></small>
                            <small class="fa fa-star smalltitle"></small>
                            <small class="fa fa-star smalltitle"></small>
                            <small class="fa fa-star smalltitle"></small>
                            <small class="fa fa-star smalltitle"></small>
                        </div>
                        <h4 class="mb-3">Shoulder Bag</h4>
                        <p>Fancy colors & cotton materials bring you to simple yet stylish everyday</p>
                        <h4 class="smalltitle">$19.00</h4>
                    </div>
                    <div class="store-overlay">
                        <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Buy Now <i class="fa fa-arrow-right ms-2"></i></a>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="store-item position-relative text-center">
                    <img class="img-fluid" src="img/store-product-2.jpg" alt="">
                    <div class="p-4">
                        <div class="text-center mb-3">
                            <small class="fa fa-star smalltitle"></small>
                            <small class="fa fa-star smalltitle"></small>
                            <small class="fa fa-star smalltitle"></small>
                            <small class="fa fa-star smalltitle"></small>
                            <small class="fa fa-star smalltitle"></small>
                        </div>
                        <h4 class="mb-3">Granny Square Bag</h4>
                        <p>Granny's never get old, it old-fashioned lover bag!</p>
                        <h4 class="smalltitle">$19.00</h4>
                    </div>
                    <div class="store-overlay">
                        <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Buy Now <i class="fa fa-arrow-right ms-2"></i></a>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="store-item position-relative text-center">
                    <img class="img-fluid" src="img/store-product-3.jpg" alt="">
                    <div class="p-4">
                        <div class="text-center mb-3">
                            <small class="fa fa-star smalltitle"></small>
                            <small class="fa fa-star smalltitle"></small>
                            <small class="fa fa-star smalltitle"></small>
                            <small class="fa fa-star smalltitle"></small>
                            <small class="fa fa-star smalltitle"></small>
                        </div>
                        <h4 class="mb-3">Scrunchy</h4>
                        <p>Wear it on your wrist, tied it on your hair, bring it everytime you go</p>
                        <h4 class="smalltitle">$19.00</h4>
                    </div>
                    <div class="store-overlay">
                        <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Buy Now <i class="fa fa-arrow-right ms-2"></i></a>
                       
                    </div>
                </div>
            </div>
            {{-- <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                <a href="" class="btn btn-primary rounded-pill py-3 px-5">View More Products</a>
            </div> --}}
        </div>
    </div>
</div>
<!-- Activities End -->
    
@endsection