<a href="{{url("/tasks/$row->id/edit")}}" class="btn btn-info btn-sm">Edit</a>
<form action="{{url("/tasks/$row->id")}}" method="post" onsubmit="return confirm('Do your really want to delet the Task');">
    @csrf
    @method('delete')
    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
</form>
