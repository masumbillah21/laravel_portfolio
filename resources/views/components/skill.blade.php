@php
if($skill['range'] >= 80){
    $class = 'danger';
}elseif($skill['range'] >= 60){
    $class = 'info';
}else{
    $class = 'warning';
}
@endphp
<div class="skill-set">
    <p class="skil-name mb-0">{{ $skill['name'] }}</p>
    <div class="progress">
        <div class="progress-bar bg-{{ $class }}" role="progressbar" style="width: {{ $skill['range'] }}%;" aria-valuenow="{{ $skill['range'] }}" aria-valuemin="0" aria-valuemax="100">{{ $skill['range'] }}%</div>
    </div>
</div>