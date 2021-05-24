@extends('adminlte.master')

@section('content')

    
<div>
        <h2>Edit Post {{$cast->id}}</h2>
        <form action="/cast/{{$cast->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">nama</label>
                <input type="text" class="form-control" name="nama" value="{{$cast->nama}}" id="nama" placeholder="Masukkan nama">
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="umur">umur</label>
                <input type="text" class="form-control" name="umur"  value="{{$cast->umur}}"  id="umur" placeholder="Masukkan umur">
                @error('umur')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="bio">bio</label>
                <input type="text" class="form-control" name="bio"  value="{{$cast->bio}}"  id="bio" placeholder="Masukkan bio">
                @error('bio')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>

@endsection