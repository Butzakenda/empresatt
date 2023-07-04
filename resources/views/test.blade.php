@extends('index')
@section('contenido')
  <div class="container">
    <h2>Iniciar sesión</h2>
    <form action="login.php" method="post">
      <label for="email">Correo electrónico</label>
      <input type="email" id="email" name="email" required>
      
      <label for="password">Contraseña</label>
      <input type="password" id="password" name="password" required>
      
      <input type="submit" value="Iniciar sesión">
    </form>
    <div class="reset-password-link">
      <a href="reset-password.php">¿Olvidaste tu contraseña?</a>
    </div>
  </div>
@endsection

