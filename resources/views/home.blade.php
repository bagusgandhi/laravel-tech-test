@extends('layouts.base-layout')

@section('title', 'Home Page')
@section('content')
    <div class="container mx-auto">
        <div class="p-10 ">
            <h1 class="text-2xl">Selamat Datang di Nasari Digital</h1>
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class=" text-white form-button bg-red-400 border-2 p-4 rounded-lg ">Logout</button>
                </form>

            @endauth
        </div>
    </div>
@endsection
