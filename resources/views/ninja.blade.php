<x-layout>
<body>
    <h1>
        <a href="/" style="text-decoration: none; color: black;"> Ninja Page {{ date('H:i:s', time()) }}</a>
    </h1>
    <ul style="padding: 0%">
        @foreach ($ninja as $nin)
        <x-card href="/ninja/{{$nin['id']}}" :highlight="false">
        <h1>{{$nin['name']}}</h1>
        </x-card>
        @endforeach
    </ul>

</body>
</x-layout>
