<!-- resources/views/dashboard_page.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Link ke stylesheet -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        header {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
        }
        .content {
            padding: 20px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h1 {
            margin: 0;
        }
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .data-table th, .data-table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .data-table th {
            background-color: #007bff;
            color: white;
        }
        .data-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .data-table tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Dashboard</h1>
        </header>

        <div class="content">
            <h2>Welcome to the Dashboard</h2>
            <p>This is the main area where you can present various information to users.</p>

            <!-- Example Table -->
            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No users found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
