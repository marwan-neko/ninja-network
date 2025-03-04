<x-layout>
    <h2>Login</h2>

    <form action="{{ route('login') }}" method="post">
        @csrf

        <label for="email">Email:</label>
        <input type="email"  name="email" value="{{ old('email') }}" required>
        
        <label for="password">Password:</label>
        <input type="password"  name="password" required>

        <button class="btn mt-4">Login</button>

        <!-- Validation errors -->
        @if ($errors->any())
            <ul class="px-4 py-2 bg-red-100">
                @foreach ($errors->all() as $error)
                    <li class="my-2 text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>
</x-layout>