
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                

    @if (count($mnes) > 1) 
        @foreach($mnes as $mne => $value)
            <div class="flex justify-start flex-auto ">
                <div>{{ $value->year_covered}} - <a href="/projects/update/{{$value->id}}" >{{ $value->project}}</a></div>
            </div>
        @endforeach
    @else
        <p>No Data Found</p>
    @endif

    
    </div>
    </div>
    </div>

</x-app-layout>

