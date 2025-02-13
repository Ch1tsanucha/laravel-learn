<x-layout>
    <x-slot:heading>
        Contact Page
    </x-slot:heading>
<body>
    @foreach ($users as $user)
    <p>{{ $user['name']}}</p>
    @endforeach
</body>
</x-layout>
