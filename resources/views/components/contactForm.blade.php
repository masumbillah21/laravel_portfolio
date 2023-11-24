@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(isset($success) && !empty($success))
    <div class="alert alert-success">
        {{ $success }}
    </div>
@endif
<form action="{{route('sendEmail')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-lg-6 mb-1">
            <input type="text" class="form-control" id="user-name" name="name" placeholder="Your name here...">
        </div>
        <div class="col-lg-6 mb-1">
            <input type="email" class="form-control" id="user-email" name="email" placeholder="Your email here...">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mb-1">
            <input type="tel" class="form-control" id="user-phone" name="phone"placeholder="Your phone number here...">
        </div>
        <div class="col-lg-6 mb-1">
            <input type="text" class="form-control" id="user-subject" name="subject"placeholder="Your subject here...">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 mb-1">
            <textarea id="user-message" class="form-control" name="message" placeholder="Your message here..." rows="10"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 mt-1 d-grid">
            <input type="submit" class="btn site-btn btn-block" value="Send">
        </div>
    </div>
</form>

