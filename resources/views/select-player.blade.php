{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Player</title>
    @vite('resources/css/app.css')</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="mb-4">
        <h1 class="text-xl font-bold mb-4">E-Shirt Smartboard</h1>
        <form action="{{ route('run-smartboard') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="user" class="block text-sm font-medium text-gray-700">Select Player</label>
                <select name="user_id" id="user" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="age_group" class="block text-sm font-medium text-gray-700">Select Age Group</label>
                <select name="age_group" id="age_group" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    @foreach ($age_groups as $age_group)
                        <option value="{{ $age_group }}">{{ $age_group }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="height_group" class="block text-sm font-medium text-gray-700">Select Height (CM)</label>
                <select name="height_group" id="height_group" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    @foreach ($height_groups as $height_group)
                        <option value="{{ $height_group }}">{{ $height_group }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="weight_group" class="block text-sm font-medium text-gray-700">Select Weight Group (Kg)</label>
                <select name="weight_group" id="weight_group" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    @foreach ($weight_groups as $weight_group)
                        <option value="{{ $weight_group }}">{{ $weight_group }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Run Smartboard</button>
        </form>
    </div>
</body>
</html> --}}
@extends('layout')

@section('content')
<div class="container mx-auto p-4">
    {{-- <img src="{{ asset('images/logo.png') }}" alt="Logo" class="mb-4"> --}}
    <h1 class="text-xl font-bold mb-4">E-Shirt Smartboard</h1>
    <form action="{{ route('run-smartboard') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="user" class="block text-sm font-medium text-gray-700">Select Player</label>
            <select name="user_id" id="user" class="border-2  border-stone-900 mt-1 block w-full rounded-md  shadow-sm">
                <option value="" disabled selected>Select an player</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4 ">
            <label for="age_group" class="block text-sm font-medium text-gray-700">Select Age Group</label>
            <select name="age_group" id="age_group" class="mt-1 block w-full rounded-md border-2  border-stone-900 shadow-sm">
                <option value="" disabled selected>Select an age group</option>
                @foreach ($age_groups as $age_group)
                    <option value="{{ $age_group }}">{{ $age_group }}</option>
                @endforeach
            </select>
        </div>
        {{-- <div class="mb-4">
            <label for="height_group" class="block text-sm font-medium text-gray-700">Select Height (CM)</label>
            <select name="height_group" id="height_group" class="mt-1 block w-full rounded-md border-2  border-stone-900 shadow-sm">
                <option value="" disabled selected>Select an height group</option>
                @foreach ($height_groups as $height_group)
                    <option value="{{ $height_group }}">{{ $height_group }}</option>
                @endforeach
            </select>
        </div> --}}
        <div class="mb-4">
            <label for="weight_group" class="block text-sm font-medium text-gray-700">Select Weight Group (Kg)</label>
            <select name="weight_group" id="weight_group" class="mt-1 block w-full rounded-md border-2  border-stone-900 shadow-sm">
                <option value="" disabled selected>Select an weight group</option>
                @foreach ($weight_groups as $weight_group)
                    <option value="{{ $weight_group }}">{{ $weight_group }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Run Smartboard</button>
    </form>
</div>
@endsection