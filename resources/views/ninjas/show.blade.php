<x-layout>
    <a href="{{ route('ninjas.index') }}" class="btn">Back</a>

    <h1 class="mt-5">{{ $Ninja->name }}</h1>

    <div class="bg-gray-200 p-5 rounded mt-5">        
        <p><strong>Skill:</strong> {{ $Ninja->skill }}</p>
        <p><strong>Bio:</strong> {{ $Ninja->bio }}</p>
    </div>
    
    <div class="bg-red-200 p-5 rounded mt-5">
        <h2 class="text-red-500">Dojo Information</h2>
        <p><strong>Dojo Name:</strong> {{ $Ninja->dojo->name }}</p>
        <p><strong>Dojo Location:</strong> {{ $Ninja->dojo->location }}</p>
        <p><strong>Dojo Description:</strong> {{ $Ninja->dojo->description }}</p>
    </div>

    <div class="grid grid-cols-2">        
        <form action="{{ route('ninjas.destroy', $Ninja->id) }}" method="post">
            @csrf
            @method('delete') <!-- This changes method post to delete -->
    
            <button type="submit" class="btn my-4">Delete Ninja</button>
        </form>
    </div>    
</x-layout>