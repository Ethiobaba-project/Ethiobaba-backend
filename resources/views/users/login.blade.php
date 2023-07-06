<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24 border border-gray-200">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <header class="text-center mb-6">
                    <h2 class="text-2xl font-bold uppercase">Login</h2>
                    <p>Log into your account</p>
                </header>
                <div class="border border-secondary bg-gray p-4 rounded">
                <form method="POST" action="/users/authenticate">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block text-lg mb-2">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                        @error('email')
                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-lg mb-2">Password</label>
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}">

                        @error('password')
                            <p class="text-danger text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6 text-center">
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </div>
                </form>
                </div>
            </div>
            <div class="col-md-4">

            </div>

        </div>
        <div class="text-center mt-8">
            <p>Don't have an account? <a href="/register" class="text-primary">Register</a></p>
        </div>
    </x-card>
</x-layout>
