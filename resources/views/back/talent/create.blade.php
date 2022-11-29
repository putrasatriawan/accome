@extends('layouts.default')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-head-row">
                <div class="card-title">Tambah Talent</div>
                <div class="ml-auto">
                    <a href="{{ route('talent.index') }}"
                       class="btn btn-warning"> <i class="fas fa-undo"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('talent.store')  }} "
                  enctype="multipart/form-data"
                  method="POST">
                @csrf
                <div class="form-group">
                    <label for="email2">Nama</label>
                    <input type="text"
                           name="name"
                           class="form-control @error('name') is-invalid @enderror"
                           placeholder="
                           Masukan
                           NamaTalent">
                    @error('name')
                    <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email2">Rate / Projek</label>
                    <input type="number"
                           class="form-control @error('rate') is-invalid @enderror"
                           name="rate"
                           placeholder="Masukan Rate Talent">
                    @error('rate')
                    <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea id="editor1"
                              class="form-control  @error('body') is-invalid @enderror"
                              name="body"
                              placeholder="
                              Masukan
                              Body">
                              @error('body')
                              <div class="text-muted">{{ $message }}</div>
                              @enderror
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
                    <select class="form-control"
                            name="kategori_id">
                        @foreach ($kategori as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="email2">Tag</label>
                    <select class="js-example-basic-multiple form-control 
                            @error('tag')
                            is-invalid
                            @enderror"
                            name="tags[]"
                            multiple="multiple">
                        @foreach ($tag as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="email2">Gambar Talent</label>
                    <input type="file"
                           accept="image/*"
                           class="form-control @error('picture') is-invalid @enderror"
                           name="picture">
                    @error('picture')
                    <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email2">CV Talent</label>
                    <input type="file"
                           accept=".pdf"
                           class="form-control @error('cv') is-invalid @enderror"
                           name="cv">
                    @error('cv')
                    <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email2">Portofolio *masukan lebih dari 1</label>
                    <input type="file"
                           class="form-control @error('images') is-invalid @enderror"
                           accept="image/*"
                           name="images[]"
                           multiple>
                    @error('images')
                    <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email2">Status</label>
                    <select class="form-control @error('is_active') is-invalid @enderror"
                            name="is_active">
                        <option value="1">Publish</option>
                        <option value="0">Draft</option>
                        @error('is_active')
                        <div class="text-muted">{{ $message }}</div>
                        @enderror
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
<script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>
<!-- (Optional) Latest compiled and minified JavaScript translation files -->
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    CKEDITOR.replace( 'editor1' );
</script>
<script type="text/javascript"
        src="{{ asset('back/select/js/bootstrap-select.min.js') }}"></script>
<script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
@endpush

@push('styles')
<link rel="stylesheet"
      href="{{ asset('back/select/css/bootstrap-select.min.css') }}">
<!-- Latest compiled and minified CSS -->
{{--
<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css"> --}}
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"
      rel="stylesheet" />


@endpush