@extends('layouts.app')

@section('title', 'INOVA')
@section('meta_description', 'INOVA')

@section('content')
    <div class="home-banner-container">
        <img class="home-banner" src="{{ asset('img/home/home-banner-1.png') }}" alt="Banner">
    </div>

    <div class="bg-black text-white">
        <div class="container">
            <div class="row bottom-padding">
                <div class="col-lg-7">
                    <h2>Follow the digital trends & lead the changes with us</h2>
                </div>

                <div class="col-lg-5 border-start ps-5">
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum dele niti atque corrupti quos dolores et quas molestias.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
