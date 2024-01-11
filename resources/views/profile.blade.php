@extends('global.main-structure')

@section('main-structure-detail')
    <section class="detail-admin">
        <div class="container">
            {{-- <div class="card-body">
                <form method="POST" action="/updateImage" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">File</label>
                        <div class="col-md-6">
                            <input type="file" class="form-control" name="image" required>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Upload
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <img src="{{ $dataProfiles->image }}" alt=""> --}}
            <form action="/updateDataProfile" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <h1>Edit Profile</h1>
                        <hr class="my-4">
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-6">
                        <h5>Edit Headline</h5>
                    </div>
                    <div class="col-6">
                        <input name="headline" value="{{ $dataProfiles->headline }}" type="text">
                    </div>
                </div>
                <div class="row mt-5 align-items-center">
                    <div class="col-6">
                        <h5>Edit Name</h5>
                    </div>
                    <div class="col-6">
                        <input name="name" value="{{ $dataProfiles->name }}" type="text">
                    </div>
                </div>
                <div class="row mt-5 align-items-center">
                    <div class="col-6">
                        <h5>Edit Region</h5>
                    </div>
                    <div class="col-6">
                        <input name="region" value="{{ $dataProfiles->region }}" type="text">
                    </div>
                </div>
                <div class="row  mt-5 align-items-center">
                    <div class="col-6">
                        <h5>Edit Email</h5>
                    </div>
                    <div class="col-6">
                        <input name="email" value="{{ $dataProfiles->email }}" type="text">
                    </div>
                </div>
                <div class="row mt-5 align-items-center input-image">
                    <div class="col-6">
                        <h5>Edit Profile Image</h5>
                    </div>
                    <div class="col-6 d-flex">
                        <input name="image" type="file">
                    </div>
                </div>
                <div class="row mt-5 align-items-center input-image">
                    <div class="col-6">
                        <h5>Edit Logo Navigation</h5>
                    </div>
                    <div class="col-6 d-flex">
                        <input name="logo" type="file">
                    </div>
                </div>
                <div class="row mt-5 align-items-center input-image">
                    <div class="col-6">
                        <h5>Edit CV Navigation</h5>
                    </div>
                    <div class="col-6 d-flex">
                        <input name="cv" type="file">
                    </div>
                </div>
                <div class="row buttons-wrapper justify-content-between mt-5">
                    <div class="col-4">
                        <a href="/admin">
                            <button>Back</button>
                        </a>
                    </div>
                    <div class="col-4 d-flex justify-content-end">
                        <button type="submit">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
