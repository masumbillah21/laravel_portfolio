@extends('layout.app')
@section('title', 'Contact Me')

@section('content')
@include('components.titleBar', ['pageTitle' => 'Contact Me'])
@include('components.map')

{{ $validator ?? '' }}
<section>
    <div class="container">
        <div class="row py-5">
            <div class="col-lg-4">
                @include('components.contactInfo')
                @include('components.social')
            </div>
            <div class="col-lg-8">
                <h2 class="headline-1">Contact Us</h2>
                @include('components.contactForm')
            </div>
        </div>
    </div>
</section>

@endsection