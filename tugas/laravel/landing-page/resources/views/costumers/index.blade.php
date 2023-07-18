@extends('..dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="pull-left" style="color: black;">
                <h2>Costumer / LIST Costumer</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('costumers.create') }}">Create New</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible ">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($message = Session::get('danger'))
        <div class="alert alert-danger alert-dismissible ">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($message = Session::get('primary'))
        <div class="alert alert-primary alert-dismissible ">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <table class="table my-5">
        <tr>
            <th>No</th>
            <th width="200px">Name</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        @foreach ($costumers as $costumer)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $costumer->name }}</td>
            <td><img src="/image/{{ $costumer->image }}" width="120px"></td>
            <td>
                <form action="{{ route('costumers.destroy',$costumer->id) }}" method="POST" class="d-flex flex-column" style="width: 5rem;">

                    <a class="btn btn-success"  href="{{ route('costumers.show',$costumer->id) }}">Show</a>

                    <a class="btn btn-primary my-1"  href="{{ route('costumers.edit',$costumer->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $costumers->links() !!}

@endsection
