@extends('layouts.base-layout')

@section('title', 'Nasari Tech Test')
@section('content')

    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        #container {
            background-color: rgba(0, 0, 0, 0.4);
            position: relative;
            width: 100%;
            height: 100vh;
        }

        #my-video-player {
            opacity: 0.4;
            position: absolute;
            transform: translate(-20%, -20%);
            width: 180%;
            height: 180%;
            object-fit: cover;
            pointer-events: none;
            z-index: -1;
        }

        .centered-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
        }
    </style>

    <div id="container" class="bg-black">
        <iframe id="my-video-player"
            src="https://www.youtube.com/embed/j8wYZYwMnqE?si=qbnmaXVCQCYqXq0D&autoplay=1&mute=1&loop=1&enablejsapi=1&amp;controls=0"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>

        <div class="centered-content">
            <form action="/authenticate"   method="POST" class="p-4 text-black">
                @csrf
                <div class="mb-4 flex justify-between items-center">
                    <label for="email" class="text-lg ">Email:</label>
                    <input type="email" id="email" name="email" class="border-blue-400 border-2 form-input w-2/3 p-3 rounded-lg" required>
                </div>
                <div class="mb-4 flex justify-between items-center">
                    <label for="password" class="text-lg ">Password:</label>
                    <input type="password" id="password" name="password" class="border-blue-400 border-2 form-input w-2/3 p-3 rounded-lg" required>
                </div>
                <div class="flex justify-center text-white font-bold">
                    <button type="submit" class="form-button bg-blue-400 border-2 p-4 rounded-lg ">Login</button>
                </div>
            </form>
        </div>
    </div>

@endsection
