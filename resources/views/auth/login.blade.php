<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
    <div class="card shadow">
                <div class="card-header text-center">
                    <h4>Login</h4>
          </div>
        <div class="card-body">
                    <form method="POST" action="{{ url('/login') }}">
                        @csrf

                 <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
             </div>

         <div class="mb-3">
                            <label>Senha</label>
              <input type="password" name="password" class="form-control" required>
                        </div>

                  @if ($errors->any())
                            <div class="alert alert-danger">
                                {{ $errors->first() }}
                            </div>
              @endif

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Entrar</button>
  </div>
</form>
</div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
