@extends('layouts.default')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-head-row">

                <div class="card-title">Edit Talent {{ $talent->judul }}</div>
                <div class="ml-auto">
                    <a href="{{ route('talent.index') }}"
                       class="btn btn-warning"> <i class="fas fa-undo"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('talent.update', $artikel->id) }}"
                  enctype="multipart/form-data"
                  method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="email2">Nama</label>
                    <input type="text"
                           class="form-control"
                           name="name"
                           placeholder="Masukan Nama Talent">
                </div>
                <div class="form-group">
                    <label for="email2">Rate / Projek</label>
                    <input type="number"
                           class="form-control"
                           name="rate"
                           placeholder="Masukan Nama Talent">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea id="editor1"
                              class="form-control"
                              name="body"
                              placeholder="Masukan Body">
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="email2">Domisili</label>
                    <select class="form-control"
                            name="domisili_id">
                        @foreach ($domisili as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_domisili }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="email2">Kategori</label>
                    <select class="selectpicker form-control"
                            @error('kategori')
                            @enderror
                            name="kategori[]"
                            multiple
                            data-live-search="true">
                        @foreach ($kategori as $item)
                        <option value="{{ $item->id}}"
                                @foreach
                                ($talent->talentkategori as $row)
                            @if(in_array($item->id,old('kategori',[$row->kategori_id]))) selected="selected"
                            @endif
                            @endforeach>
                            {{ $item->name}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="email2">Gambar Talent</label>
                    <input type="file"
                           class="form-control"
                           name="gambar_talent">
                </div>
                <div class="form-group">
                    <label for="email2">CV Talent</label>
                    <input type="file"
                           class="form-control"
                           name="cv">
                </div>
                <div class="form-group">
                    <label for="email2">Status</label>
                    <select class="form-control"
                            name="is_active">
                        <option value="1">Publish</option>
                        <option value="0">Draft</option>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-success"
                            type="submit">Submit</button>
                    <a href="{{ route('talent.index') }}"
                       class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js">
</script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
$('.selectpicker').selectpicker();
<script type="text/javascript"
        src="{{ asset('back/select/js/bootstrap-select.min.js') }}"></script>
@endpush
@push('styles')
<link rel="stylesheet"
      href="{{ asset('back/select/css/bootstrap-select.min.css') }}">
@endpush