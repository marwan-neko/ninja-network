<x-layout>    
    <h2>Currently available ninjas</h2>
    
    <ul>
        @foreach($ninjas as $ninja) 
            <li>
                <x-card href="{{ route('ninjas.show', $ninja->id) }}" :isHighlight="$ninja['skill'] > 50">
                    <div>
                        <h3>{{ $ninja->name }}</h3>                
                        <p>{{ $ninja->dojo->name }}</p>                 
                    </div>
                </x-card>
            </li>
        @endforeach        
    </ul>

    <!-- Pagination -->
    {{ $ninjas->links() }}
</x-layout>    