<div class="modal fade" id="exampleModal{{$pizza->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete the {{$pizza->name}} pizza?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         If you continue,the pizza #{{$pizza->id}} will be deleted. This action cannot be undone.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <form method="POST" action="{{route('pizzas.destroy', ['pizza' => $pizza->id])}}">
            @csrf
            @method('DELETE')
            <button type="submit" name="button" data-toggle="modal" data-target="#exampleModal{{$pizza->id}}" class="btn btn-danger">
              Delete<i class="fas fa-trash"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
