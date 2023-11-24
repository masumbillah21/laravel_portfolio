@extends('layout.app')
@section('title', 'About Me')

@section('content')
@include('components.titleBar', ['pageTitle' => 'About Me'])
<section class="about-me my-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="profile-photo">
                    <img src="https://placehold.co/600x400" alt="">
                </div>
            </div>
            <div class="col-lg-6 my-auto">
                <h2 class="headline-1">About Me</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere minus quis ipsum excepturi. Unde, at voluptas non beatae nisi doloribus? Accusantium, ipsa. Provident corporis odit deleniti dicta doloremque quas, quasi consequatur doloribus itaque ea facere distinctio harum possimus vero architecto saepe nobis consectetur qui ipsum libero tempora esse sed veniam?</p>
            </div>
        </div>
        {{-- Education --}}
        @include('components.timeLine', ['title' => 'Educations', 'lists' => $educations])
        {{-- Education --}}

        {{-- Skills --}}
        <div class="row">
            @if(isset($skills) && !empty($skills))
                <h2 class="headline-1 text-center">My Skills</h2>
                @foreach($skills as $skill)
                    <div class="col-lg-6 mb-4">
                        @include('components.skill', ['skill' => $skill])
                    </div>
                @endforeach
            @endif
        </div>
        
        {{-- Skills --}}

        {{-- Experience --}}
            @include('components.timeLine', ['title' => 'Experiences', 'lists' => $workExperience])
        {{-- Experience --}}
        
    </div>
</section>

@endsection