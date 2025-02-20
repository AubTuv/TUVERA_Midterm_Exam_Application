<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Rentals</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        table { width: 70%; margin: auto; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 10px; }
        th { background-color: #f4f4f4; }
        .available { color: green; font-weight: bold; }
        .unavailable { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <h2>Movie Rentals</h2>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Year</th>
                <th>Genre</th>
                <th>Price (USD)</th>
                <th>Availability</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rentals as $rental)
                <tr>
                    <td>{{ $rental['title'] }}</td>
                    <td>{{ $rental['year'] }}</td>
                    <td>{{ $rental['genre'] }}</td>
                    <td>${{ number_format($rental['price'], 2) }}</td>
                    <td class="{{ $rental['available'] ? 'available' : 'unavailable' }}">
                        {{ $rental['available'] ? 'Available' : 'Unavailable' }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
