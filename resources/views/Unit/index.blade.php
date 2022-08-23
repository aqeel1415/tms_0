
@forelse($units as $l)
    <a href="{{route('Unit_single' , $l->id)}}">{{$l->title}}</a>
    <br>
@empty
    <p>There is no units</p>
@endforelse
<button type="button" onclick="window.location='{{ url('Unit/create') }}'">Add</button>
