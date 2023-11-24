@extends('layout.app')
@section('title', 'Home')

@section('content')
@include('components.hero')
<section class="home my-3">
    <div class="container">
        <div class="row py-5">
            <div class="col-lg-6">
                <div class="profile-photo">
                    <img src="https://placehold.co/600x400" alt="">
                </div>
            </div>
            <div class="col-lg-6 my-auto">
                <h2 class="headline-1">About Me</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere minus quis ipsum excepturi. Unde, at voluptas non beatae nisi doloribus? Accusantium, ipsa. Provident corporis odit deleniti dicta doloremque quas, quasi consequatur doloribus itaque ea facere distinctio harum possimus vero architecto saepe nobis consectetur qui ipsum libero tempora esse sed veniam?</p>
                <a href="{{ route('about') }}" class="btn site-btn">Read More</a>
            </div>
        </div>
    </div>
    <div class="service-box site-bg py-5 mt-2 text-white">
        <div class="container">
            <div class="row">
                @if(isset($services) && !empty($services))
                    @foreach($services as $service)
                        <div class="col-lg-4">
                            @include('components.serviceBox')
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        
    </div>
</section>


@include('components.logoCarousel')
@include('components.callToAction')
@endsection