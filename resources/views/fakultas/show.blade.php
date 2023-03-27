@extends('fakultas.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2> Show Fakultas</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('fakultas.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Fakultas:</strong>
                {{ $fakultas->nama_fakultas }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>code:</strong>
                    {{ $fakultas->code }}
                </div>
            </div>
        </div>
    @endsection