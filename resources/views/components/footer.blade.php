<footer class="site-footer site-bg text-white">
    <div class="container">
        <div class="row p-5">
            <div class="col-lg-4">
                <h3 class="headline-1">About Me</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                @include('components.social')
            </div>
            <div class="col-lg-4">
                <h3 class="headline-1">Quick Links</h3>
                <ul class="footer-nav list-unstyled">
                    <li class="p-1">
                      <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="p-1">
                        <a class="nav-link" href="{{ route('about') }}">About Me</a>
                    </li class="p-1">
                    <li class="p-1">
                        <a class="nav-link" href="{{ route('projects') }}">Projects</a>
                    </li>
                    <li class="p-1">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4">
                @include('components.contactInfo')
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center py-2">
                    © {{ now()->year }} All Rights Reserved, H. M. Masum Billah
                </div>
            </div>
        </div>
    </div>
</footer>