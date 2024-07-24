<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="/style/login.css">
    <title>Desa Palangan | Login KUMPALA</title>
</head>

<body>
    <form method="POST" class="login-container">
        @error('error')
            <div class="alert-error">
                <p>{{ $message }}</p>
                <span class="x-btn">
                    &times;
                </span>
            </div>
        @enderror
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" autofocus>
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            @error('password')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group form-btn">
            <button>Login</button>
        </div>
    </form>


    <script>
        const xbtn = document.querySelector('.x-btn');
        xbtn.addEventListener('click', function(event){
            this.parentElement.remove();
        })
    </script>
</body>

</html>
