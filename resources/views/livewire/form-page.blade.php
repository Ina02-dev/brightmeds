<div>
    <h2>Livewire Form Page</h2>
    {{-- @dd($maritalStatus) --}}

    @if($currentPage === 1)
        <x-form-1 />
    @elseif($currentPage === 2)
        @include('components.form-2')

    @elseif($currentPage === 3)
        @include('components.form-3')

    @endif

    
</div>
