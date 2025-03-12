<x-layout>
    <x-slot:heading>Job Listing</x-slot:heading>
    <ul>
     @foreach ( $jobs as $job )
        <li class="cursor-pointer hover:underline">
           <a href="/jobs/{{ $job['id'] }}"> 
            <strong>{{$job['title']}}</strong> 
            : Pays {{$job['salary']}} annually
            </a>
        </li>
    @endforeach
    <ul>
</x-layout>