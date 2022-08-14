<form method="post" action="{{route('Location_new.post')}}">
    @csrf
    <div class="col-auto">
        <label class="visually-hidden">location Title </label>
        <input type="text"  class="form-control-plaintext" placeholder="location Title" name="title" >
    </div>

    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Add</button>
    </div>
</form>
