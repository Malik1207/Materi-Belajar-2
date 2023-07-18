@extends('..dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="pull-left" style="color: black;">
                <h2>OFFICER / LIST OFFICER</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('officers.create') }}">Create New</a>
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
            <th width="200rem" >Image Office</th>
            <th>Name</th>
            <th>Position</th>
            <th>Biography</th>
            <th>Action</th>
        </tr>
        @foreach ($officers as $officer)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $officer->image }}" width="80px" height="80px" style="border-radius: 80px;"></td>
            <td>{{ $officer->name }}</td>
            <td>{{ $officer->position }}</td>
            <td style="word-break: break-all; text-align:justify;">{!! $officer->biography !!}</td>
            <td>
                <form action="{{ route('officers.destroy',$officer->id) }}" method="POST" class="d-flex flex-column" style="width: 5rem;">

                    <a class="btn btn-success"  href="{{ route('officers.show',$officer->id) }}">Show</a>

                    <a class="btn btn-primary my-1"  href="{{ route('officers.edit',$officer->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $officers->links() !!}

@endsection
