<h2>Iniciar sesión</h2>
<?php if (isset($_GET['msg']) && $_GET['msg'] == 'registrado'): ?>
    <p style="color: green;">¡Registro exitoso! Inicia sesión.</p>
<?php endif; ?>

<form action="procesar_login.php" method="POST">
    <label>Email:</label><br>
    <input type="email" name="email" required><br>

    <label>Contraseña:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Entrar</button>
</form>

<p>Primera vez? <a href="registro.php">👉Registrese👈</a> </p>