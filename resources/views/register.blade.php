<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>

    <h2>Registration Form</h2>

    {{-- Display validation errors --}}
    @if ($errors->any())
        <div>
            <strong>Please fix the following errors:</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/register">
        @csrf

        <label>Name:</label>
        <input type="text" name="name">
        <br><br>

        <label>Email:</label>
        <input type="text" name="email">
        <br><br>

        <label>Password:</label>
        <input type="password" name="password">
        <br><br>

        <button type="submit">Register</button>
    </form>

</body>
</html>