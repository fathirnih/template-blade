<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>

    <style>
        /* ========== GLOBAL RESET ========== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        /* ========== BODY ========== */
        body {
            background: linear-gradient(135deg, #0a0a0a, #1f1f1f);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        /* ========== LOGIN CONTAINER ========== */
        .login-container {
            background: rgba(255, 255, 255, 0.05);
            padding: 40px 50px;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(10px);
            width: 350px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.1);
            animation: fadeIn 0.6s ease-in-out;
        }

        /* ========== HEADER ========== */
        .login-container h2 {
            font-size: 28px;
            margin-bottom: 25px;
            font-weight: 700;
            color: #00bcd4;
            text-shadow: 0 0 10px rgba(0, 188, 212, 0.4);
        }

        /* ========== FORM ========== */
        .login-container form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .login-container label {
            display: block;
            text-align: left;
            font-size: 14px;
            color: #ccc;
            margin-bottom: 6px;
        }

        .login-container input {
            width: 100%;
            padding: 10px 12px;
            border-radius: 8px;
            border: 1px solid #333;
            background: #121212;
            color: #fff;
            outline: none;
            transition: all 0.3s ease;
        }

        .login-container input:focus {
            border-color: #00bcd4;
            box-shadow: 0 0 5px rgba(0, 188, 212, 0.5);
        }

        /* ========== BUTTON ========== */
        .login-container button {
            padding: 10px 15px;
            border: none;
            border-radius: 8px;
            background: #00bcd4;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .login-container button:hover {
            background: #0097a7;
            transform: scale(1.05);
        }

        /* ========== ERROR MESSAGE ========== */
        .error {
            margin-top: 20px;
            background: rgba(255, 0, 0, 0.15);
            border-left: 4px solid #ff3b3b;
            color: #ff6b6b;
            padding: 10px;
            border-radius: 8px;
            font-size: 14px;
        }

        /* ========== ANIMATION ========== */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login Admin</h2>
        <form method="POST" action="{{ url('/login') }}">
            @csrf
            <div>
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Masuk</button>
        </form>

        @if ($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif
    </div>
</body>
</html>
