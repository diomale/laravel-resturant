<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Customer List</h1>

    <table cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Customer ID</th>
                <th>Customer Name</th>
                <th>Customer Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customerData as $data)
                <tr>
                    <td>{{ $data->cust_id }}</td>
                    <td>{{ $data->cust_name }}</td>
                    <td>{{ $data->cust_address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
