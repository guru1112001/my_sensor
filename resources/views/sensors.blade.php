<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensor Data</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Sensor Data</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg shadow-md">
                <thead>
                    <tr>
                        <th class="py-1 px-2 bg-gray-200 text-center">Temperature</th>
                        <th class="py-1 px-2 bg-gray-200 text-center">Humidity</th>
                        <th class="py-1 px-2 bg-gray-200 text-center">Force</th>
                        <th class="py-1 px-2 bg-gray-200 text-center">Bend</th>
                        <th class="py-1 px-2 bg-gray-200 text-center">Pressure</th>
                        <th class="py-1 px-2 bg-gray-200 text-center">Pulse Rate</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sensors as $sensor)
                        <tr class="border-t text-center">
                            <td class="py-1 px-2">{{ $sensor->temp_ }}</td>
                            <td class="py-1 px-2">{{ $sensor->hum_ }}</td>
                            <td class="py-1 px-2">{{ $sensor->force_ }}</td>
                            <td class="py-1 px-2">{{ $sensor->bend_ }}</td>
                            <td class="py-1 px-2">{{ $sensor->pressure_ }}</td>
                            <td class="py-1 px-2">{{ $sensor->pulse_rate }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
