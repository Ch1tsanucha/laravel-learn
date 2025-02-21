<x-layout>
    <x-slot:heading>
        Update Page 
    </x-slot:heading>
    <form action="{{ url('/jobs/update/' . $job->id) }}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">

            <div class="sm:col-span-2">
                <label for="title" class="block text-sm/6 font-semibold text-gray-900">Title</label>
                <div class="mt-2.5">
                    <input value="{{ $job['title'] }}" type="text" name="title" id="title" autocomplete="organization" class="border-2 border-grey-500 block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 placeholder:text-gray-400">
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="salary" class="block text-sm/6 font-semibold text-gray-900">Salary</label>
                <div class="mt-2.5">
                    <input value="{{ $job['salary'] }}" type="text" name="salary" id="salary" autocomplete="email" class="border-2 border-grey-500 block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 placeholder:text-gray-400   ">
                </div>
            </div>


        </div>
        <div class="mt-10">
            <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
        </div>
    </form>
</x-layout>