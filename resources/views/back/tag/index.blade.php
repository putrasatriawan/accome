@extends('layouts.default')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-head-row">
                <div class="card-title">Data Tag</div>
                <div class="ml-auto">
                    <a href="{{ route('tag.create') }}"
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
                        <th scope="col">Tag</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tag as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td><a href="{{ route('tag.edit' ,$item->id) }}"
                               class="btn btn-primary btn-sm"> <i class="
                                fas fa-edit"></i></a>
                            <form action="{{ route('tag.destroy', $item->id) }}"
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