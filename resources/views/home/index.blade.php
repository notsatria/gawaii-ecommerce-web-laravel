@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    {{-- header --}}
    <header id="header" class="vh-100 carousel slide" style="padding-top: 104px;" data-bs-ride="carousel">
        <div class="container h-100 d-flex carousel-inner align-items-center">
            <div class="carousel-item active text-center text-white">
                <h2 class="text-capitalize">Best Collection</h2>
                <h1 class="text-uppercase fw-bold py-2">New Arrivals</h1>
                <a href="#" class="btn mt-4 text-uppercase">shop now</a>
            </div>
            <div class="carousel-item text-center text-white">

                <h2 class="text-capitalize">Best price & offer</h2>
                <h1 class="text-uppercase fw-bold py-2">new season</h1>
                <a href="#" class="btn mt-4 text-uppercase">buy now</a>

            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" style="background-color: grey !important;"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header" data-bs-slide="next">
            <span class="carousel-control-next-icon" style="background-color: grey !important;"></span>
        </button>
    </header>
    <!-- header -->
    <!-- products -->
    <section id="recommendation" class="">
        <div class="container">
            <div class="title text-center py-5">
                <h2 class="position-relative d-inline-block">Our Recommendations</h2>
            </div>

            <div class="row pb-5 pt-2">
                @php
                    $counter = 0;
                @endphp

                @foreach ($viewData['products'] as $product)
                    @if ($counter < 3)
                        <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">

                            <div class="card">
                                <div class="d-flex justify-content-between p-3">
                                    <p class="lead mb-0">Gawaii Recommendations</p>

                                    <a href="{{ route('cart.add', ['id' => $product->getId()]) }}"
                                        class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                                        style="width: 35px; height: 35px; background-color: #87cbb9!important;">
                                        <i class="fa fa-shopping-cart text-white" style='font-size:16px;'></i>
                                    </a>

                                </div>
                                <img src="{{ asset('/storage/' . $product->getImage()) }}" class="card-img-top"
                                    alt="{{ $product->getName() }}" style="max-height: 380px;" />
                                <div class="card-body">

                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0"><a
                                                href="{{ route('product.show', ['id' => $product->getId()]) }}"
                                                style="color: black; text-decoration:none">{{ $product->getName() }}
                                            </a></h5>
                                        <h5 class="text-dark mb-0">${{ $product->getPrice() }}</h5>
                                    </div>

                                    <div class="d-flex justify-content-between mb-2">
                                        <p class="text-muted mb-0">Available: <span class="fw-bold">6</span></p>
                                        <div class="ms-auto text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @php
                        $counter++;
                    @endphp
                @endforeach
            </div>

        </div>
    </section>

@endsection
