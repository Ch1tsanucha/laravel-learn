<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <body>
        <div class="grid grid-cols-2 justify-center items-center gap-10">
            @foreach ($jobs as $job)
                <div class="flex justify-center">
                    <div class="p-3 rounded-sm border-4 border-grey-500 px-10 w-10/12 grid grid-cols-[1fr_0.25fr]">
                        <div class="h-1/2">
                            <a href="/jobs/{{$job->id}}">
                                <div class="text-blue-500 flex justify-between  ">
                                    <strong>Title: {{ $job->title }} </strong>
                                </div>
                                <!-- <p> -->
                                <!-- {{ $job->employer->name }} is -->
                                {{-- @if ($job->employer->job->isNotEmpty()) --}}
                                <!-- @foreach ($job->employer->job as $jj)
                                        {{ $jj->title }} 
                                    @endforeach -->
                                {{-- @else
                                No job found --}}
                                {{-- @endif --}}
                                <!-- </p> -->
                                <p>
                                    Salary : {{ $job->salary }}
                                </p>
                            </a>
                        </div>

                        <div class="w-full h-1/2">
                            <div>
                                <form action="{{ url('/jobs/' . $job->id) }}" method="POST" class="w-full flex justify-end">
                                    @csrf
                                    @method('DELETE') <!-- Laravel's method spoofing -->
                                    <button type="submit"
                                        class="bg-red-500 w-5 h-5 flex justify-center items-center text-white">
                                        x
                                    </button>
                                </form>
                            </div>
                            <div class="md:w-full md:flex md:justify-end">
                                <a href="/jobs/update/{{$job->id}}"
                                    class="bg-green-500 w-5 h-5 flex justify-center items-center text-white">
                                    ^
                                </a>
                            </div>

                        </div>

                    </div>
                </div>

            @endforeach
        </div>

        {{-- <div class="flex justify-center ">
            <div class="flex">
                <div class="text-xl cursor-pointer">
                    << /div>
                        <div class="w-10"></div>
                        <div class="text-xl cursor-pointer">></div>
                </div>
            </div> --}}

            <div class="mt-5">
                {{$jobs->links()}}
            </div>

    </body>
</x-layout>