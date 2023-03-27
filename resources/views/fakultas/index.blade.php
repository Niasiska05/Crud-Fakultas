@extends('fakultas.layout')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Fakultas</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('fakultas.create') }}"> Tambah Fakultas</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Nama Fakultas</th>
            <th>code</th>
            <th width="280px">Action</th>
        </tr>
        @php($nomor = 1)
        @foreach ($fakultas as $fakultas)
            <tr>
                <td>{{ $id++ }}</td>
                <td>{{ $fakultas->nama_fakultas }}</td>
                <td>{{ $fakultas->code }}</td>
                <td>
                    <form action="{{ route('fakultas.destroy', $fakultas->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('fakultas.show', $fakultas->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('fakultas.edit', $fakultas->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
    {{-- <div class="row text-center">
        {!! $fakultas->links() !!}
    </div> --}}
@endsection