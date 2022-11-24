@extends('layouts.default')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-head-row">
                <div class="card-title">Tambah Kategori Parent</div>
                <div class="ml-auto">
                    <a href="{{ route('kategoristage.index') }}"
                       class="btn btn-warning"> <i class="fas fa-undo"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('kategoristage.store') }}"
                  method="POST">
                @csrf
                <div class="form-group">
                    <label for="email2">Nama Kategori Parent</label>
                    <input type="text"
                           class="form-control"
                           id="name"
                           name="name"
                           placeholder="Masukan Kategori Parent">
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