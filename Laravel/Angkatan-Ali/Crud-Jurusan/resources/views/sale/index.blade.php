@extends('home')

@section('content')

<div class="body-1">

    <div>
        <div class="container">
            <div class="d-flex justify-content-between">
                <h1>Tabel Jurusan</h1>

                    @can('create', App\Models\Sale::class)
                        <div>
                            <a href="{{ route('sales.create') }}" class="btn btn-info">Create Sale</a>
                        </div>
                    @endcan

                    {{-- @cannot('create', App\Models\Sale::class)
                        <div>
                            <a href="{{ route('sales.create') }}" class="btn btn-info"> Tambah Jurusan</a>
                        </div>
                    @endcannot --}}


            </div>
            @if (session()->has('pesan'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('pesan') }}
                </div>
            @endif
            @if (session()->has('pesanDelete'))
                <div class="alert alert-danger" role="alert">
                    {{ session()->get('pesanDelete') }}
                </div>
            @endif
            <div class="m-2">
                <table class=" table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Details</th>
                        <th width="280px">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($sales as $sale )
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td><img src="/image/{{ $sale->image }}" width="100px"></td>
                                <td>{{ $sale->name }}</td>
                                <td>{{ $sale->detail }}</td>
                                <td>
                                    <form action="{{ route('sales.destroy',$sale->id) }}" method="POST">

                                        <a class="btn btn-info" href="{{ route('sales.show',$sale->id) }}">Show</a>

                                        <a class="btn btn-primary" href="{{ route('sales.edit',$sale->id) }}">Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

</div>
@endsection
