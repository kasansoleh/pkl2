<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Aplikasi PKL SMK Islam 1 Blitar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome@6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4e73df;
            --secondary-color: #f8f9fc;
        }
        
        body {
            background: linear-gradient(to right, #f8f9fc, #e3e6f0);
            height: 100vh;
            display: flex;
            align-items: center;
        }
        
        .login-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 400px;
        }
        
        .login-header {
            background: var(--primary-color);
            color: white;
            padding: 20px;
            text-align: center;
        }
        
        .login-header h3 {
            margin: 0;
            font-weight: 700;
        }
        
        .login-body {
            padding: 30px;
        }
        
        .form-control {
            border-radius: 5px;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #d1d3e2;
        }
        
        .btn-login {
            background: var(--primary-color);
            border: none;
            color: white;
            padding: 12px;
            border-radius: 5px;
            width: 100%;
            font-weight: 600;
        }
        
        .admin-logo {
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .admin-logo i {
            font-size: 40px;
            color: var(--primary-color);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="login-container">
                    <div class="login-header">
                        <div class="admin-logo">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <h3>SMK ISLAM 1 BLITAR</h3>
                        <p>Login Admin</p>
                    </div>
                    <div class="login-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                        
                        <form method="POST" action="{{ route('admin.login') }}">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                            </div>
                            
                            <div class="mb-4">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                            
                            <button type="submit" class="btn btn-login">
                                <i class="fas fa-sign-in-alt"></i> Masuk
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>