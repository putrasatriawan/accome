@extends('layouts.default')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-head-row">
                <div class="card-title">Data Talent</div>
                <div class="ml-auto">
                    <a href="{{ route('talent.create') }}"
                       class="btn btn-primary"><i class="
                       fas fa-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session('success') }}
            </div>
            @endif
            <table class="table table-responsive DIV">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">User</th>
                        <th scope="col">Rate</th>
                        <th scope="col">Body</th>
                        <th scope="col">Domisili</th>
                        <th scope="col">Tag</th>
                        {{-- <th scope="col">Status</th> --}}
                        <th scope="col">Kategori</th>
                        <th scope="col">Thumbail</th>
                        <th scope="col">CV</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($talent as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->users->name }}</td>
                        <td>{{ $item->rate }}</td>
                        <td>{!! $item->body !!}</td>
                        <td>{{ $item->domisili->nama_domisili }}</td>
                        <td>@foreach($item->tags as $tag)
                            <ul>
                                <li>{{ $tag->name }}</li>
                            </ul>
                            @endforeach
                        </td>

                        {{-- <td>
                            @if ($item->is_active == 1 )
                            Publish
                            @else
                            Draft
                            @endif
                        </td> --}}
                        <td>{{ $item->kategori->name }}</td>
                        <td> <img src="{{ asset('uploads/' . $item->picture) }} "
                                 width="100px"
                                 alt=""></td>
                        <td> <a href="{{ asset('uploads/'.
                        $item->cv) }}"><button class="btn btn-primary"
                                        download=""
                                        type="button">Download</button></a></td>
                        <td><a href="{{ route('talent.edit' ,$item->id) }}"
                               class="btn btn-primary btn-sm"> <i class="
                                fas fa-edit"></i></a>
                            <form action="{{ route('talent.destroy', $item->id) }}"
                                  method="post"
                                  class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash">
                                    </i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7"
                            class="text-center p-5">
                            Data Tidak Tersedia
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection