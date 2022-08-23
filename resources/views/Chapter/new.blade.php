<form method="post" action="{{route('Chapter_new.post')}}">
    @csrf
    <div class="col-auto">
        <label class="visually-hidden">Chapter Title </label>
        <br>
        <input type="text"  class="form-control-plaintext" placeholder="Chapter Title" name="title" >
        <br>
        <label class="visually-hidden">Lavel id </label>
        <br>
        <input type="text"  class="form-control-plaintext" placeholder="Level Title" name="level_id" >
        <br>
    </div>

    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Add</button>
    </div>
</form>
