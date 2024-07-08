<x-layout>
    <x-slot:heading>
        Home page
    </x-slot:heading>
    <h2>This is home </h2>
    <div class="space-y-2">
    @foreach ($students as $student)
        <a href="person/{{$student['id']}}" class="hover:bg-gray-100 block border border-gray-200 px-4 py-4 rounded-lg">
            <div class="text-sm text-blue-800 text-bold">{{ $student->name}}</div> - {{ $student->person->title }}
        </a>
    @endforeach
    </div>
    <div>
        {{$students->links()}}
    </div>
</x-layout>