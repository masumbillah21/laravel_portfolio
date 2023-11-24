@extends('layout.app')
@section('title', 'Projects')

@section('content')
@include('components.titleBar', ['pageTitle' => 'Projects'])
<section class="projects mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="project-section-title">Recent Projects</h2>
                <h4 class="project-section-subtitle">Showcase</h4>
                @foreach($left as $project)
                    @include('components.project',['image_url' => $project['image_url'], 'title' => $project['title'], 'subtitle' => $project['subtitle']])
                @endforeach
            </div>
            <div class="col-lg-6">
                @foreach($right as $project)
                    @include('components.project',['image_url' => $project['image_url'], 'title' => $project['title'], 'subtitle' => $project['subtitle']])
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection