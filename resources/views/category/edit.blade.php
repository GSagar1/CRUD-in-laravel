<x-site>
    {{-- @dd($category) --}}
    @section('title','Category Edit')
    <form action="{{ route('category.update',$category) }}" method="POST" class="needs-validation" novalidate>
        @method('PUT')
        @csrf
        <div class="form-group mb-3">
            <label for="name" class="form-label">Edit category</label>
            <a href="{{ url('category') }}" class="btn btn-sm btn-primary float-end mb-5">Back</a>

            <input value="{{ $category->name }}" type="text" name="name" id="name" class="form-control">
            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group mb-3">
            <button class=" btn btn-primary" type="submit">Save</button>
        </div>
    </form>
</x-site>