<x-layout>
    <x-slot:heading>
        jobs Page
    </x-slot:heading>

    <body>
        <div class="grid grid-cols-2">
        @foreach ($jobs as $job)
        <div class="p-3 mb-4 rounded-sm border-4 border-grey-500 px-10 w-10/12">
        <a href="/jobs/{{$job['id']}}">
            <p class="text-blue-500">
                <strong>Title {{$job['title']}} </strong> 
            </p>
         

            <p>{{ $job->employer->name }} is 
                @foreach ( $job->employer->job as $jj)
                {{ $jj->title }} 
                @endforeach

          
           
        </p>
        <p>
            Salary : {{$job['salary']}}
            </p>
        </a>
        </div>
        @endforeach
        </div>
        

    </body>
</x-layout>