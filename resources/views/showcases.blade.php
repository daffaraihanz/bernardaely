@extends('global.main-structure')

@section('main-structure-detail')
    <section class="detail-admin">
        <div class="container">
            <form action="/storeDataShowcase" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row justify-content-between align-items-center">
                    <div class="col">
                        <h1>Edit Showcases</h1>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <a id="addCtaShowcase" class="addCta" style="cursor: pointer;">
                            <h5 style="color: #FEC84B;">Add New Showcase <span>+</span> </h5>
                        </a>
                        <a id="cancelCtaShowcase" class="text-danger mx-4 disNone" style="cursor: pointer;">
                            <h5>Cancel </h5>
                        </a>
                        <button id="storeCtaShowcase" class="addCta disNone" type="submit">
                            <h5 style="color: #FEC84B;">Save</h5>
                        </button>
                    </div>
                </div>
                <div id="addCtaShowcaseForm" class="row mt-4 disNone align-items-center">
                    <div class="col-4">
                        <input name="names" placeholder="Project's Name" type="text">
                    </div>
                    <div class="col-4">
                        <input name="roles" placeholder="Role" type="text">
                    </div>
                    <div class="col-2 input-image">
                        <input name="images" type="file">
                    </div>
                    <div class="col-2 input-image">
                        <input name="powers" type="file">
                    </div>
                </div>
                <hr class="my-4">
            </form>
            @foreach ($dataShowcases as $data)
                <form action="/updateDataShowcase/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-2">
                        <div class="col">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5>Showcase {{ $loop->iteration }}</h5>
                                <div class="d-flex align-items-center">
                                    <a href="/destroyShowcase/{{ $data->id }}">
                                        <p class="text-danger">Delete</p>
                                    </a>
                                    <button class="removeButton ms-3" type="submit">
                                        <p style="color: #FEC84B;">Update</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start mb-5">
                        <div class="col-4">
                            <input name="names" value="{{ $data->names }}" type="text">
                        </div>
                        <div class="col-4">
                            <input name="roles" value="{{ $data->roles }}" type="text">
                        </div>
                        <div class="col-4">
                            <div class="row input-image align-items-start">
                                <div class="col-6">
                                    <input name="images" type="file">
                                    <img class="me-3 mt-2 img-fluid main-image"
                                        src="{{ asset('storage/' . $data->images) }}" alt="langka foto showcase">
                                </div>
                                <div class="col-6">
                                    <input name="powers" type="file">
                                    <img class="me-3 mt-2 img-fluid main-image"
                                        src="{{ asset('storage/' . $data->powers) }}" alt="langka foto powered">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
        <div class="container ">
            <div class="row buttons-wrapper mt-5">
                <div class="col-4">
                    <a href="/admin">
                        <button type="submit">Back</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
