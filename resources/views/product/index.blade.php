@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="container">
        <div class="row" style="padding-top: 120px;">
            @foreach ($viewData['products'] as $product)
                <div class="col-md-12 col-lg-4 mb-4 mb-lg-0 py-4">
                    <div class="card">
                        <div class="d-flex justify-content-between p-3">
                            <p class="lead mb-0"></p>
                            <div class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                                style="width: 35px; height: 35px; background-color: #87cbb9!important;">
                                <i class="fa fa-shopping-cart text-white" style='font-size:16px;'></i>
                            </div>
                        </div>
                        <img src="{{ asset('/storage/' . $product->getImage()) }}" class="card-img-top"
                            alt="{{ $product->getName() }}" style="max-height: 380px;" />
                        <div class="card-body">

                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0"><a href="{{ route('product.show', ['id' => $product->getId()]) }}"
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
            @endforeach
        </div>
    </div>
@endsection
