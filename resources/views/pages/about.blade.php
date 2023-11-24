@extends('layout.app')
@section('title', 'About Me')

@section('content')
@include('components.titleBar', ['pageTitle' => 'About Me'])
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                About Page
            </div>
        </div>
    </div>
</section>

@endsection