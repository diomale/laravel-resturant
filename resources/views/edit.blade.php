<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
</head>
<body>
    <h1>Edit Customer</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('updateCustomer', $customer->cust_id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="cust_name">Name:</label>
        <input type="text" id="cust_name" name="cust_name" value="{{ old('cust_name', $customer->cust_name) }}">

        <label for="cust_address">Address:</label>
        <input type="text" id="cust_address" name="cust_address" value="{{ old('cust_address', $customer->cust_address) }}">

        <button type="submit">Update</button>
        <a href="{{ url('/home') }}">Cancel</a>
    </form>
</body>
</html>
