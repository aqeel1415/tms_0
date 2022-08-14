<form method="post" action="{{route('Level_new.post')}}">
    @csrf
    <div class="col-auto">
        <label class="visually-hidden">Level Title </label>
        <input type="text"  class="form-control-plaintext" placeholder="Level Title" name="title" >
    </div>

    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Add</button>
    </div>
</form>
