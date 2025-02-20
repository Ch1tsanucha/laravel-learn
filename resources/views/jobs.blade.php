<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <body>
        <div class="grid grid-cols-2 justify-center items-center gap-10">
            @foreach ($jobs as $job)
            <div class="flex justify-center">
                <div class="p-3 rounded-sm border-4 border-grey-500 px-10 w-10/12">
                    <a href="/jobs/{{$job->id}}">
                        <p class="text-blue-500">
                            <strong>Title: {{ $job->title }} </strong> 
                        </p>
                        <p>
                            {{ $job->employer->name }} is
                            {{-- @if ($job->employer->job->isNotEmpty())  --}}
                                @foreach ($job->employer->job as $jj)
                                    {{ $jj->title }} 
                                @endforeach
                            {{-- @else
                                No job found --}}
                            {{-- @endif --}}
                        </p>
                        <p>
                            Salary : {{ $job->salary }}
                        </p>
                    </a>
                </div>
            </div>
               
            @endforeach
        </div>

        {{-- <div class="flex justify-center ">
            <div class ="flex">
               <div class="text-xl cursor-pointer"><</div>
                <div class="w-10"></div>
                <div class="text-xl cursor-pointer">></div> 
            </div>
        </div> --}}

        <div class="mt-5">
            {{$jobs->links()}}
        </div>

    </body>
</x-layout>
