@extends('layout')

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="mb-4">
        
        <h1 class="text-xl font-bold mb-4">Welcome to E-Shirt Smartboard</h1>
        <a href="{{ route('select-player') }}" class="bg-blue-500 text-white py-2 px-4 rounded">Enter</a>
    </div>
    
</body>
</html> --}}
@section('content')
{{-- <h1 class="text-xl font-bold mb-4">Welcome to E-Shirt Smartboard</h1> --}}
<section class="flex flex-col md:flex-row items-center justify-between px-8 py-16 bg-gray-100">
    <div class="md:w-1/2 mb-8 md:mb-0">
      <h1 class="text-4xl font-bold mb-4">Welcome to eShirt Smartboard</h1>
      <p class="text-xl mb-8"></p>
      <a href="{{ route('select-player') }}" class="bg-blue-500 text-white font-bold py-3 px-6 rounded hover:bg-blue-600 transition duration-300">
        Start 
      </a>
    </div>
    <div class="md:w-1/2">
      <img src="{{asset('images/tshirt.png')}}" alt="Customizable T-Shirt" class="w-96 h-full">
    </div>
  </section>
@endsection