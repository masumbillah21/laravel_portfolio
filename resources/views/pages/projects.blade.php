@extends('layout.app')
@section('title', 'Project')

@section('content')
@include('components.titleBar', ['pageTitle' => 'Projects'])
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                Project Page
            </div>
        </div>
    </div>
</section>

@endsection