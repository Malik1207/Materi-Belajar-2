<!-- Button trigger modal -->
    <button type="button" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#navigation-{{ $navigation->id }}">
        Delete
    </button>
  
  <!-- Modal -->
  <div class="modal fade" id="navigation-{{ $navigation->id }}" tabindex="-1" aria-labelledby="navigation-{{ $navigation->id }}Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="navigation-{{ $navigation->id }}Label">Are you sure</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="my-2">
                {{ $navigation->name }} - <a href="{{ url($navigation->url) }}">{{ $navigation->url }}</a>
            </div>
            <div class="d-flex justify-content-around">
                <div class="w-100">
                    <form action="{{ route('navigation.delete', $navigation) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger w-100">Yes</button>
                    </form>
                </div>
                <div class="mx-1"></div>
                <div class="w-100">
                    <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>