
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Signup</h2>
    <form action="../api/signup.php" method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" class="form-control" name="username" required>
        </div>
        <div class="mb-3">
            <label for="password1" class="form-label">Password:</label>
            <input type="password" class="form-control" name="password1" required>
        </div>
        <div class="mb-3">
            <label for="password2" class="form-label">Retype Password:</label>
            <input type="password" class="form-control" name="password2" required>
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role:</label>
            <select name="role" class="form-control">
                <option value="customer">Customer</option>
                <option value="vendor">Vendor</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Signup</button>
    </form>
</body>
</html>
