<x-layout>
    <x-slot:heading>Job Listing</x-slot:heading>
    <div class="space-y-2">
     @foreach ( $jobs as $job )
        <a class="cursor-pointer block px-4 py-6 border border-gray-300 rounded-lg " href="/jobs/{{ $job['id'] }}">
            <p class="font-bold text-blue-500 ">{{$job->employer->name}}</p>
            <div> 
            <strong>{{$job['title']}}</strong> 
            : Pays {{$job['salary']}} annually
            </div>
        </a>
    @endforeach
    </div>
</x-layout>