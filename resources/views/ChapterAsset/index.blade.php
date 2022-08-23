
@foreach ($chapterAssets as $w)
    {{ $w }}
    <br>
@endforeach

<button type="button" onclick="window.location='{{ url('ChapterAsset/create') }}'">Add</button>
