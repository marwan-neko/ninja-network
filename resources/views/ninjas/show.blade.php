<x-layout>
    <div class="mb-5">
        <a href="{{ route('ninjas.index') }}" class="btn">Back</a>

    </div>

    <!-- Sending Ninja->id to route and route receive object; route model binding -->
    <form action="{{ route('ninjas.update', $Ninja->id) }}" method="post">
        @csrf
        @method('put')

        <!-- Ninja Name -->
        <label for="name">Ninja Name:</label>
         <input type="text" id="name" name="name" value="{{ $Ninja->name }}" required>
         
        <!-- Ninja Skill -->
        <label for="skill">Ninja Skill (0-100):</label>
         <input type="number" id="skill" name="skill" value="{{ $Ninja->skill  }}" required>
         
        <!-- Ninja Bio -->
        <label for="bio">Ninja Bio:</label>
         <textarea rows="5" id="bio" name="bio" required>{{ $Ninja->bio  }}</textarea>
         
        <!-- Select a Dojo -->
        <label for="dojo_id">Ninja Name:</label>
         <select type="text" id="dojo_id" name="dojo_id" required>         
            <option value="" disabled selected>Select a dojo</option>
            @foreach ($Dojo as $dojo)
                <option value="{{ $dojo->id }}" {{ $dojo->id == $Ninja->dojo_id  ? 'selected' : '' }}>
                    {{ $dojo->name }}
                </option>
            @endforeach
         </select>
         
         <button type="submit" class="btn my-4">Update Ninja</button>
    </form>

    <h1 class="mt-5">{{ $Ninja->name }}</h1>

    <div class="bg-gray-200 p-5 rounded mt-5">        
        <p><strong>Skill:</strong> {{ $Ninja->skill }}</p>
        <p><strong>Bio:</strong> {{ $Ninja->bio }}</p>
    </div>
    
    <h2 class="text-red-500 mt-5">Dojo Information</h2>
    <div class="bg-red-200 p-5 rounded mt-5">
        <p><strong>Dojo Name:</strong> {{ $Ninja->dojo->name }}</p>
        <p><strong>Dojo Location:</strong> {{ $Ninja->dojo->location }}</p>
        <p><strong>Dojo Description:</strong> {{ $Ninja->dojo->description }}</p>
    </div>

    <div class="grid grid-cols-2">        
        <form action="{{ route('ninjas.update', $Ninja->id) }}" method="post">

        </form>
        <form action="{{ route('ninjas.destroy', $Ninja->id) }}" method="post">
            @csrf
            @method('delete') <!-- This changes method post to delete -->
    
            <button type="submit" class="btn my-4">Delete Ninja</button>
        </form>
    </div>    
</x-layout>