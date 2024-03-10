@extends('layout.app')

@section('title', 'Upload File')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Upload File</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>All Files</h4>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('uploadFile.store') }}">
                        @csrf
                        <div class="form-group">
                            <label>Pilih File</label>
                            <input type="file" class="form-control" name="file">
                        </div>
                        <div class="form-group">
                            <label>Nama File</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary mr-1" type="submit">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
