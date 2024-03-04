@extends('layouts.backend.main')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row my-3">
                        <div class="col">
                            <a href="{{ route('bahasa-pemograman.index') }}" class="btn btn-info">
                                <i class=" ti bi bi-arrow-90deg-left me-1"></i>Kembali</a>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <h5 class="card-title fw-semibold mb-1 d-inline">Update bahsa-pemograman</h5>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('bahasa-pemograman.update', $data->id) }}"
                        enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Bahasa Pemograman</label>
                            <input type="text" class="form-control" name="bahasa_pemograman" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Bahasa Pemogramn.." required
                                value="{{ $data->bahasa_pemograman }}">
                        </div>

                        <div class="my-3">
                            <button type="submit" class="btn btn-primary"><i class="bi bi-sd-card"></i> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
