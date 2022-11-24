@extends('layouts.default')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-head-row">
                <div class="card-title">Edit Domisili {{ $domisili->nama_domisili }}</div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('domisili.update', $domisili->id) }}"
                  method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="email2">Nama Domisili</label>
                    <input type="text"
                           class="form-control"
                           id="nama_domisili"
                           name="nama_domisili"
                           value="{{ $domisili->nama_domisili }}">
                </div>
                <div class="form-group">
                    <button class="btn btn-success"
                            type="submit">Submit</button>
                    <a href="{{ route('domisili.index') }}"
                       class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection