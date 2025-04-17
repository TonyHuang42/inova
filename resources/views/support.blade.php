@extends('layouts.app')

@section('title', 'INOVA')
@section('meta_description', 'INOVA')

@push('styles')
    <style>
        .section {
            height: 100vh;
            position: sticky;
            top: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: white;
            transition: all 0.3s ease;
        }

        .section-1 {
            background: black;
            z-index: 1;
        }

        .section-2 {
            /* background: #3498db; */
            z-index: 2;
        }

        .section-3 {
            /* background: #e74c3c; */
            z-index: 3;
        }
    </style>
@endpush

@section('content')
    <div class="section section-1">
        <img src="{{ asset('img/home/banner_northlight.png') }}" alt="">
    </div>
    <div class="section section-2">
        <div class="banner-video-container">
            <video playsinline="" loop="" muted="" autoplay="true" data-wf-ignore="true" data-object-fit="cover">
                <source src="https://cdn.vidzflow.com/v/iN7fAS3EUL_1080p_1697633777.mp4" data-wf-ignore="true" class="w-100">
            </video>
        </div>
    </div>
    <div class="section section-3">
        <img src="{{ asset('img/northlight/Screenshot.png') }}" alt="">
    </div>
@endsection
