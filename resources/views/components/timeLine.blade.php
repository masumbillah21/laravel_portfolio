<div class="py-5">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <h2 class="headline-1 text-center">{{ $title }}</h2>
        </div>
      <div class="col-lg-12">
        <div id="content">
          <ul class="timeline-1 text-white site-bg">
            @if(isset($lists) && !empty($lists))
                @foreach($lists as $list)
                    <li class="event" data-date="Year: {{$list['year']}}">
                        <h4 class="mb-3">{{$list['name']}}</h4>
                        <p>{{ $list['place'] }}</p>
                    </li>
                @endforeach
            @endif
          </ul>
        </div>
      </div>
    </div>
  </div>