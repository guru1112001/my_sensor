@extends('layout')

@section('content')
<div class="py-24 flex items-center justify-center space-x-8">
    <div class="relative bg-sky-950 rounded-full flex justify-center items-center text-center p-5 shadow-xl">
        <img src="{{ asset('images/tshirt.png') }}" alt="Logo" class="mb-4 w-96 h-full">
        <div class="absolute inset-0 flex flex-col items-center justify-center">
            <p class="text-white text-l mb-7 p-1">{{ $name }}</p>
        </div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="flex flex-col items-start space-y-4 absolute left-0 ">
                <div class="bg-white text-sky-950 p-2 rounded shadow-lg flex items-center space-x-2">
                    <i class="fas fa-tint text-xl"></i>
                    <div>
                        <p class="text-sm font-bold">Sweat Level</p>
                        <p class="text-lg">{{ $sweat_level }}</p>
                    </div>
                </div>
                <div class="bg-white text-sky-950 p-2 rounded shadow-lg flex items-center space-x-2">
                    <i class="fas fa-running text-xl"></i>
                    <div>
                        <p class="text-sm font-bold">Fatigue/Activity Level</p>
                        <p class="text-lg">{{ $fatigue_level }}</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-end space-y-4 absolute right-0 ">
                <div class="bg-white text-sky-950 p-2 rounded shadow-lg flex items-center space-x-2">
                    <i class="fas fa-thermometer-half text-xl"></i>
                    <div>
                        <p class="text-sm font-bold">Pain Level</p>
                        <p class="text-lg">{{ $pain_level }}</p>
                    </div>
                </div>
                <div class="bg-white text-sky-950 p-2 rounded shadow-lg flex items-center ">
                    <i class="fas fa-heartbeat text-xl"></i>
                    <div>
                        <p class="text-sm font-bold">Pulse Rate</p>
                        <p class="text-lg">{{ $pulse_rate }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
