<x-site>
    @section('title','Category Create')
    <form action="{{ route('category.store') }}" method="POST" class="needs-validation" novalidate>
        @csrf
        <a href="{{ url('category') }}" class="btn btn-sm btn-primary float-end mb-5">Back</a>

        <div class="form-group mb-3">
            <label for="name" class="form-label">Name</label>
            <input value="{{ old('name') }}" type="text" name="name" id="name" class="form-control">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group mb-3">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
    </form>
</x-site>
