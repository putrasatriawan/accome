@extends('layouts.default')
@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-head-row">

                <div class="card-title">Edit Talent {{ $talent->name }}</div>
                <div class="ml-auto">
                    <a href="{{ route('talent.index') }}"
                       class="btn btn-warning"> <i class="fas fa-undo"></i></a>
                </div>
            </div>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="card-body">
            <form action="{{ url('talent/update', $talent->id) }}"
                  enctype="multipart/form-data"
                  method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="email2">Nama</label>
                    <input type="text"
                           class="form-control @error('name') is-invalid @enderror"
                           id="name"
                           name="name"
                           value="{{ $talent->name }}"
                           @error('name')
                           is-invalid
                           @enderror>
                    @error('name')
                    <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email2">Rate</label>
                    <input type="text"
                           class="form-control @error('rate') is-invalid @enderror"
                           id="rate"
                           name="rate"
                           value="{{ $talent->rate }}">
                    @error('rate')
                    <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Body</label>
                    <textarea type="textarea"
                              class="form-control @error('body') is-invalid @enderror"
                              id="editor1"
                              @error('body')
                              is-invalid
                              @enderror"
                              name="body">{{ $talent->body }}
                              @error('body')
                              <div class="text-muted">{{ $message }}</div>
                              @enderror
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="email2">Kategori</label>
                    <select class="form-control @error('kategori_id') is-invalid @enderror"
                            id="kategori_id"
                            name="kategori_id">
                        @foreach ($kategori as $item)
                        @if ($item->id == $talent->kategori_id)
                        <option value={{
                                $item->id }} selected='selected'>{{ $item->name }}</option>
                        @else
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endif
                        @endforeach
                        @error('kategori_id')
                        <div class="text-muted">{{ $message }}</div>
                        @enderror
                    </select>
                </div>
                <div class="form-group">
                    <label for="email2">Domisili</label>
                    <select class="form-control  @error('domisili_id') is-invalid @enderror"
                            id="domisili_id"
                            name="domisili_id">
                        @foreach ($domisili as $item)
                        @if ($item->id == $talent->domisili_id)
                        <option value={{
                                $item->id }} selected='selected'>{{ $item->nama_domisili }}</option>
                        @else
                        <option value="{{ $item->id }}">{{ $item->nama_domisili }}</option>
                        @endif
                        @endforeach
                        @error('domisili_id')
                        <div class="text-muted">{{ $message }}</div>
                        @enderror
                    </select>
                </div>

                <div class="form-group">
                    <label for="email2">Tag</label>
                    <select class="selectpicker form-control
                            @error('tag')
                            is-invalid
                            @enderror"
                            name="tags[]"
                            multiple
                            data-live-search="true">
                        @foreach ($tag as $item)
                        <option value="{{ $item->id }}"
                                @if(in_array($item->id,old ('tag',[]))) selected="selected"
                            @endif>{{ $item->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="email2">Thumnail Talent</label>
                    <input type="file"
                           class="form-control @error('domisili_id') is-invalid @enderror"
                           id="picture"
                           name="picture">
                    <br>
                    <img src="{{ asset('uploads/' . $talent->picture) }} "
                         width="250px"
                         alt="">
                    @error('picture')
                    <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email2">CV</label>
                    <input type="file"
                           class="form-control"
                           id="cv"
                           name="cv">
                </div>
                <div class="form-group">
                    <label for="email2">Portofolio</label>
                    <input type="file"
                           class="form-control"
                           id="images[]"
                           multiple
                           name="images">
                </div>
                <div class="form-group">
                    <label for="email2">Status</label>
                    <select class="form-control"
                            id="is_active"
                            name="is_active">
                        <option value="1"
                                {{
                                $talent->is_active == '1' ? 'selected' : ''}}>Publish</option>
                        <option value="0"
                                {{
                                $talent->is_active == '0' ? 'selected' : ''}}>Draft</option>
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