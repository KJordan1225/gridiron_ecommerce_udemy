@extends('admin.layouts.app')

@section('title')
    Edit child category
@endsection

@section('content')
    <div class="row">
        <!-- sidebar here -->
        @include('admin.partials.sidebar')
        <div class="col-md-9">
            <h3 class="my-3">
                Edit child category
            </h3>
            <hr>
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mx-auto">
                                    <form action="{{ route('admin.childcategories.update', $childcategory->slug) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-floating mb-3">
                                            <input type="text" 
                                                class="form-control @error('name') is-invalid @enderror"
                                                name="name" id="floatingName" 
                                                value="{{ old('name',$childcategory->name) }}"
                                                placeholder="Name*">
                                            <label for="floatingName">Name*</label>
                                            @error('name')
                                                <span class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Subcategory*</label>
                                            <select
                                                class="form-select @error('subcategory_id') is-invalid @enderror"
                                                name="subcategory_id"
                                                id="subcategory_id"
                                            >
                                                <option value="" selected disabled>Choose a subcategory</option>
                                                @foreach ($subcategories as $subcategory)
                                                    <option 
                                                        value="{{ $subcategory->id }}"
                                                        @if (old('subcategory_id',$childcategory->subcategory_id) == $subcategory->id)
                                                            selected
                                                        @endif    
                                                    >{{ $subcategory->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('subcategory_id')
                                                <span class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-2">
                                            <button type="submit" class="btn btn-sm btn-dark">
                                                Submit
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection