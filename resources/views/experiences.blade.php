@extends('global.main-structure')

@section('main-structure-detail')
    <section class="detail-admin">
        <div class="container">
            <form action="/storeDataExperience" method="POST">
                @csrf
                @method('POST')
                <div class="row justify-content-between align-items-center">
                    <div class="col">
                        <h1>Edit Experiences</h1>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <a id="addCtaExperience" class="addCta" style="cursor: pointer;">
                            <h5 style="color: #FEC84B;">Add New Experience <span>+</span> </h5>
                        </a>
                        <a id="cancelCtaExperience" class="text-danger mx-4 disNone" style="cursor: pointer;">
                            <h5>Cancel </h5>
                        </a>
                        <button id="storeCtaExperience" class="addCta disNone" type="submit">
                            <h5 style="color: #FEC84B;">Save</h5>
                        </button>
                    </div>
                </div>
                <div id="addCtaExperienceForm" class="row mt-4 disNone">
                    <div class="col-4">
                        <input name="position" placeholder="Position" type="text">
                    </div>
                    <div class="col-4">
                        <input name="companies" placeholder="Company" type="text">
                    </div>
                    <div class="col-2">
                        <input name="start" placeholder="Start" type="text">
                    </div>
                    <div class="col-2">
                        <input name="end" placeholder="End" type="text">
                    </div>
                </div>
                <hr class="my-4">
            </form>
            @foreach ($dataExperiences as $data)
                <form action="/updateDataExperience/{{ $data->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-2">
                        <div class="col">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5>Experience {{ $loop->iteration }}</h5>
                                <div class="d-flex align-items-center">
                                    <a href="/destroyExperience/{{ $data->id }}">
                                        <p class="text-danger">Delete</p>
                                    </a>
                                    <button class="removeButton ms-3" type="submit">
                                        <p style="color: #FEC84B;">Update</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-4">
                        <div class="col-4">
                            <input name="position" value="{{ $data->position }}" type="text">
                        </div>
                        <div class="col-4">
                            <input name="companies" value="{{ $data->companies }}" type="text">
                        </div>
                        <div class="col-2">
                            <input name="start" value="{{ $data->start }}" type="text">
                        </div>
                        <div class="col-2">
                            <input name="end" value="{{ $data->end }}" type="text">
                        </div>
                    </div>
                </form>
            @endforeach
            {{-- SKILLS --}}
            <form action="/storeDataSkill" method="POST">
                @csrf
                @method('POST')
                <div class="row justify-content-between align-items-center mt-5">
                    <div class="col">
                        <h1>Edit Skills</h1>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <a id="addCtaSkill" class="addCta" style="cursor: pointer;">
                            <h5 style="color: #FEC84B;">Add New Skills <span>+</span> </h5>
                        </a>
                        <a id="cancelCtaSkill" class="text-danger mx-4 disNone" style="cursor: pointer;">
                            <h5>Cancel </h5>
                        </a>
                        <button id="storeCtaSkill" class="addCta disNone" type="submit">
                            <h5 style="color: #FEC84B;">Save</h5>
                        </button>
                    </div>
                </div>
                <div id="addCtaSkillForm" class="row mt-4 disNone">
                    <div class="col-6">
                        <input name="names" placeholder="Skill" type="text">
                    </div>
                    <div class="col-6">
                        <input name="levels" placeholder="Level" type="text">
                    </div>
                </div>
            </form>
            <hr class="my-4">
            @foreach ($dataSkills as $data)
                <form action="/updateDataSkill/{{ $data->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-2">
                        <div class="col">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5>Skill {{ $loop->iteration }}</h5>
                                <div class="d-flex align-items-center">
                                    <a href="/destroySkill/{{ $data->id }}">
                                        <p class="text-danger">Delete</p>
                                    </a>
                                    <button class="removeButton ms-3" type="submit">
                                        <p style="color: #FEC84B;">Update</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-4">
                        <div class="col-5">
                            <input name="names" value="{{ $data->names }}" type="text">
                        </div>
                        <div class="col-5">
                            <input name="levels" value="{{ $data->levels }}" type="text">
                        </div>
                        <div class="col-2">
                            @if ($data->crowns == 0)
                                <a href="/updateCrownsDisabled/{{ $data->id }}"
                                    class="crown crown-disabled align-items-center">
                                    Icon Disabled
                                </a>
                            @else
                                <a href="/updateCrownsActive/{{ $data->id }}"
                                    class="crown crown-active align-items-center">
                                    Icon Active
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            @endforeach
            {{-- EDUCATIONS --}}
            <form action="/storeDataEdu" method="POST">
                @csrf
                @method('POST')
                <div class="row justify-content-between align-items-center mt-5">
                    <div class="col">
                        <h1>Edit Educations</h1>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <a id="addCtaEdu" class="addCta" style="cursor: pointer;">
                            <h5 style="color: #FEC84B;">Add New Education <span>+</span> </h5>
                        </a>
                        <a id="cancelCtaEdu" class="text-danger mx-4 disNone" style="cursor: pointer;">
                            <h5>Cancel </h5>
                        </a>
                        <button id="storeCtaEdu" class="addCta disNone" type="submit">
                            <h5 style="color: #FEC84B;">Save</h5>
                        </button>
                    </div>
                </div>
                <div id="addCtaEduForm" class="row mt-4 disNone">
                    <div class="col-3">
                        <input name="schools" placeholder="School" type="text">
                    </div>
                    <div class="col-3">
                        <input name="majors" placeholder="Major" type="text">
                    </div>
                    <div class="col-3">
                        <input name="start" placeholder="Start" type="text">
                    </div>
                    <div class="col-3">
                        <input name="end" placeholder="End" type="text">
                    </div>
                </div>
            </form>
            <hr class="my-4">
            @foreach ($dataEdus as $data)
                <form action="/updateDataEducation/{{ $data->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-2">
                        <div class="col">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5>Education {{ $loop->iteration }}</h5>
                                <div class="d-flex align-items-center">
                                    <a href="/destroyEdu/{{ $data->id }}">
                                        <p class="text-danger">Delete</p>
                                    </a>
                                    <button class="removeButton ms-3" type="submit">
                                        <p style="color: #FEC84B;">Update</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-4">
                        <div class="col-4">
                            <input name="schools" value="{{ $data->schools }}" type="text">
                        </div>
                        <div class="col-4">
                            <input name="majors" value="{{ $data->majors }}" type="text">
                        </div>
                        <div class="col-2">
                            <input name="start" value="{{ $data->start }}" type="text">
                        </div>
                        <div class="col-2">
                            <input name="end" value="{{ $data->end }}" type="text">
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
