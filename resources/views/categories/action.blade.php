<a href="{{url("/categories/$c->id/edit")}}"class="btn btn-info btn-sm" >Edit</a>
<form action="{{url("/categories/$c->id")}}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
</form>