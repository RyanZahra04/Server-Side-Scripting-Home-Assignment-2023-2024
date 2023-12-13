@extends('layouts.main')

@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title">
                            <strong>Edit Car: Id {{ $car->id }}</strong>
                        </div>
                        <form action="{{ route('cars.update', $car->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="model" class="col-md-3 col-form-label">Model</label>
                                            <div class="col-md-9">
                                                <input type="text" name="model" id="model" value="{{ old('model', $car->model) }}"
                                                    class="form-control @error('model') is-invalid @enderror">
                                                @error('model')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="year" class="col-md-3 col-form-label">Year</label>
                                            <div class="col-md-9">
                                                <input type="text" name="year" id="year" value="{{ old('year', $car->year) }}"
                                                    class="form-control @error('year') is-invalid @enderror">
                                                    @error('year')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-3 col-form-label">Salesperson Email</label>
                                            <div class="col-md-9">
                                                <input type="email" name="email" id="email" value="{{ old('email', $car->salesperson_email) }}"
                                                    class="form-control @error('email') is-invalid @enderror">
                                                    @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="manufacturer_id"
                                                class="col-md-3 col-form-label">Manufacturer</label>
                                            <div class="col-md-9">
                                                <select name="manufacturer_id" id="manufacturer_id"
                                                    class="form-control @error('manufacturer_id') is-invalid @enderror">
                                                    <option value="">Select Manufacturer</option>
                                                    @foreach ($allManufacturers as $id => $manufacturer)
                                                        <option {{ $id == old('manufacturer_id', $car->manufacturer->id) ? 'selected' : '' }} value="{{ $id }}">{{ $manufacturer }}</option>
                                                    @endforeach
                                                </select>
                                                @error('manufacturer_id')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-9 offset-md-3">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <a href="{{ route('cars.index') }}"
                                                    class="btn btn-outline-secondary">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endSection('content')
