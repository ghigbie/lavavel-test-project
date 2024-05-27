<x-_layout>
    @if($loginSuccess)
        <h1>You have loggedin. Welcome back!</h1>
    @else
        <h1>Incorrect username or password</h1>
        <p>Please login again.</p>
    @endif
</x-_layout>