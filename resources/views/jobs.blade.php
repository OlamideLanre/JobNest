<x-layout>
    <x-slot:heading>Job Listing</x-slot:heading>
     @foreach ( $jobs as $job )
        <li><strong>{{$job['title']}}</strong> : Pays {{$job['salary']}} annually</li>
    @endforeach
</x-layout>