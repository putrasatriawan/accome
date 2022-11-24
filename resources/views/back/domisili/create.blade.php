@extends('layouts.default')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-head-row">
                <div class="card-title">Tambah Domisili</div>
                <div class="ml-auto">
                    <a href="{{ route('domisili.index') }}"
                       class="btn btn-warning"> <i class="fas fa-undo"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('domisili.store') }}"
                  method="POST">
                @csrf
                <div class="form-group">
                    <label for="email2">Nama Domisili</label>
                    <input type="nama_domisili"
                           class="form-control"
                           id="nama_domisili"
                           name="nama_domisili"
                           placeholder="Masukan Domisili">
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