<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home page</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <table>
    <tr>
      <th>CUstomer ID</th>
      <th>Customer Name</th>
      <th>Customer Address</th>
    </tr>
    @foreach ()
    
    @endforeach($CustomerData as $data)
      <tr>
        <td>{{ $custData->cust_id }}</td>
        <td>{{ $custData->cust_name }}</td>
        <td>{{ $custData->cust_address }}</td>
      </tr>
    @endforeach

  </table>
</body>
</html>