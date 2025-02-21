<x-layout>
    <x-slot:heading>
        {{$job['title']}}
    </x-slot:heading>
    <p>This job pay {{$job['salary']}} per year.</p>
</x-layout>