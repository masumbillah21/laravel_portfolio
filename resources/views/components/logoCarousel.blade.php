<div class="container my-5">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="headline-1 text-center">My Valuable Clients</h2>
        </div>
        <div class="col-lg-12 mt-5">
            <div class="logo-carousel">
                <div class="owl-carousel owl-theme">
                    <div class="item"><img src="https://placehold.co/600x400" alt=""></div>
                    <div class="item"><img src="https://placehold.co/600x400" alt=""></div>
                    <div class="item"><img src="https://placehold.co/600x400" alt=""></div>
                    <div class="item"><img src="https://placehold.co/600x400" alt=""></div>
                    <div class="item"><img src="https://placehold.co/600x400" alt=""></div>
                    <div class="item"><img src="https://placehold.co/600x400" alt=""></div>
                    <div class="item"><img src="https://placehold.co/600x400" alt=""></div>
                    <div class="item"><img src="https://placehold.co/600x400" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</div>




@section('script')


<script>
    jQuery('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        autoplay: true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:5,
                nav:true,
                dots:false,
                loop:true
            }
        }
    })
</script>

@endsection

