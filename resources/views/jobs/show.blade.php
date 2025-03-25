<x-layout>
    <x-slot:heading>Job Details</x-slot:heading>
    <ul>
        <h2 class="text-3xl font-bold">{{ $job['title'] }}</h2>
        <p class="text-2xl"> Annual salary: {{ $job['salary'] }}</p>
    </ul>
    <p class="mt-4">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
    </p> 
</x-layout>