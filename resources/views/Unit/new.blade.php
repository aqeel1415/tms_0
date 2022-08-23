<form method="post" action="{{route('unit_new.post')}}">
    @csrf
    <div class="col-auto">
        <label class="visually-hidden">unit Title </label>
        <br>
        <input type="text"  class="form-control-plaintext" placeholder="unit Title" name="title" >
    </div>

    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Add</button>
    </div>
</form>
