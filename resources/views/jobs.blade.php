<x-layout>
    <x-slot:heading>
        jobs Page
    </x-slot:heading>

    <body>
        @foreach ($jobs as $job)
        <a href="/jobs/{{$job['id']}}">
            <p>
                <strong>Title {{$job['title']}} </strong> Salary : {{$job['salary']}}
            </p>
        </a>
        @endforeach

    </body>
</x-layout>