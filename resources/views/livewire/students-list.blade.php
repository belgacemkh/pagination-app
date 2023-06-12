<div>
    <h1 class="text-center mt-5">Laravel Livewire Pagination et Filtres</h1> 
    
    <div class="row mt-4">
       
            <div class="col-md-6">
                <label for="query" class="sr-only">Search</label>
                <input type="text" wire:model="query"  id="query" class="form-control" placeholder="Ex: John Doe">
            </div>
       
        <div class="col-auto ml-auto mb-2">
            Show
            <select wire:model.lazy="perPage" id="per_page" class="custom-select w-auto">
                @for($i=5; $i<=25; $i+=5)
                <option valu="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            <label for="per_page">per page
        </div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Adult?</th>
                </tr>
            </thead>
            <tbody>
                @if(count($students)>0)
                    @foreach( $students as $student )
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{!! $student->is_an_adult ? '&#9989;' : '&#10060;' !!}</td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <div class="mt-3 col-md-6 mx-auto">
        {{ $students->links() }}
    </div>
</div>
