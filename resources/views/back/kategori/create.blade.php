@extends('layouts.default')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-head-row">
                <div class="card-title">Tambah Kategori</div>
                <div class="ml-auto">
                    <a href="{{ route('kategori.index') }}"
                       class="btn btn-warning"> <i class="fas fa-undo"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('kategori.store') }}"
                  enctype="multipart/form-data"
                  method="POST">
                @csrf
                <div class="form-group">
                    <label for="email2">Nama Kategori</label>
                    <input type="name"
                           class="form-control"
                           id="name"
                           name="name"
                           placeholder="Masukan Kategori">
                </div>
                <div class="form-group">
                    <label for="email2">Deskripsi</label>
                    <input type="desc"
                           class="form-control"
                           id="desc"
                           name="desc"
                           placeholder="Masukan Deskripsi Maks 80 Karakter">
                </div>
                <div class="form-group">
                    <label for="email2">Gambar Kategori</label>
                    <input type="file"
                           class="form-control"
                           name="image">
                </div>
                {{-- <div class="form-group">
                    <label for="email2">Kategori Parent</label>
                    <select class="form-control"
                            name="kategori_stage_id">
                        @foreach ($kategoristage as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div> --}}
                <div class="form-group">
                    <label for="email2">Status</label>
                    <select class="form-control"
                            name="is_active">
                        <option value="1">Publish</option>
                        <option value="0">Draft</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="email2">Gambar Kategori</label>
                    <input type="file"
                           class="form-control"
                           id="image"
                           name="image">
                    <br>
                    <img src="{{ asset('uploads/' . $kategori->image) }} "
                         width="250px"
                         alt="">
                </div>
                <div class="form-group">
                    <button class="btn btn-success"
                            type="submit">Submit</button>
                    <a href="{{ route('kategori.index') }}"
                       class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection