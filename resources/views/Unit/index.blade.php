
@forelse($units as $l)
    <a href="{{route('Unit_single' , $l->id)}}">{{$l->title}}</a>
@empty
    <p>There is no units</p>
@endforelse
