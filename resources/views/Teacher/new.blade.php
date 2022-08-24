<form method="post" action="{{route('Teacher_new.post')}}">
    @csrf
    <div class="col-auto">
        <label class="visually-hidden">Teacher Title </label>
        <br>
        <input type="text"  class="form-control-plaintext" placeholder="Teacher name" name="name" >
        <br>
        <label class="visually-hidden">Unit id </label>
        <br>
        <input type="text"  class="form-control-plaintext" placeholder="Unit Title" name="unit_id" >
        <br>
    </div>

    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Add</button>
    </div>
</form>
