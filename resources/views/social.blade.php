@extends('global.main-structure')

@section('main-structure-detail')
    <section class="detail-admin">
        <div class="container">
            <form action="/storeDataSocial" method="POST">
                @csrf
                @method('POST')
                <div class="row justify-content-between align-items-center mt-5">
                    <div class="col">
                        <h1>Edit Social</h1>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <a id="addCtaSocial" class="addCta" style="cursor: pointer;">
                            <h5 style="color: #FEC84B;">Add New Social<span>+</span> </h5>
                        </a>
                        <a id="cancelCtaSocial" class="text-danger mx-4 disNone" style="cursor: pointer;">
                            <h5>Cancel </h5>
                        </a>
                        <button id="storeCtaSocial" class="addCta disNone" type="submit">
                            <h5 style="color: #FEC84B;">Save</h5>
                        </button>
                    </div>
                </div>
                <div id="addCtaSocialForm" class="row mt-4 disNone">
                    <div class="col-6">
                        <input name="names" placeholder="Social" type="text">
                    </div>
                    <div class="col-6">
                        <input name="url" placeholder="Link URL" type="text">
                    </div>
                </div>
            </form>
            <hr class="my-4">
            @foreach ($dataSocials as $data)
                <form action="/updateSocial/{{ $data->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-2">
                        <div class="col">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5>Education {{ $loop->iteration }}</h5>
                                <div class="d-flex align-items-center">
                                    <a href="/destroySocial/{{ $data->id }}">
                                        <p class="text-danger">Delete</p>
                                    </a>
                                    <button class="removeButton ms-3" type="submit">
                                        <p style="color: #FEC84B;">Update</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-6">
                            <input name="names" value="{{ $data->names }}" type="text">
                        </div>
                        <div class="col-6">
                            <input name="url" value="{{ $data->url }}" type="text">
                        </div>
                    </div>
                </form>
            @endforeach
            <div class="row buttons-wrapper mt-5">
                <div class="col-4">
                    <a href="/admin">
                        <button>Back</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
