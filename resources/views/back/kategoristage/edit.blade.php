@extends('layouts.default')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-head-row">
                <div class="card-title">Edit Kategori Parent{{ $kategoristage->name }}</div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('kategoristage.update', $kategoristage->id) }}"
                  method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="email2">Nama Kategori Stage</label>
                    <input type="text"
                           class="form-control"
                           id="name"
                           name="name"
                           value="{{ $kategoristage->name }}">
                </div>
                <div class="form-group">
                    <button class="btn btn-success"
                            type="submit">Submit</button>
                    <a href="{{ route('kategoristage.index') }}"
                       class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection