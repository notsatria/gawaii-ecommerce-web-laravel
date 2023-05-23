@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="container py-5" style="margin-top: 150px;">

        <div class="card">
            <div class="card-header">
                Purchase Completed
            </div>
            <div class="card-body">
                <div class="alert-success alert" role="alert">
                    Congratulations, purchase completed. Order number is <b>#{{ $viewData['order']->getId() }}</b>
                </div>
            </div>
        </div>
    </div>
@endsection
