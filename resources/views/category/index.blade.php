<x-site>
    @section('title','Categories')
    <a href="{{ route('category.create') }}" class="btn btn-primary float-end mb-5">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col" colspan="2">Handle</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($categories as $category)
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            @endforeach --}}
            @forelse ($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('category.edit',$category) }}" class="btn btn-success ">Edit</a>
                    
                    
                        <form action="{{ route('category.destroy',$category) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger " type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <th class="bg-danger text-center text-white" colspan="3">No categories.</th>
                </tr>
            @endforelse
        </tbody>
    </table>
</x-site>
