<h1 class="nombre-pagina">Crear cuenta</h1>
<p class="descripcion-pagina">Llena El Formulario Para Crear Una Cuenta</p>
<?php 
include_once __DIR__ . "/../templates/alertas.php";

?>

<form action="/crear-cuenta" class="formulario" method="POST">
    <div class="campo">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre" value="<?php echo s($usuario->nombre); ?>">
    </div>
    <div class="campo">
        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" name="apellido" placeholder="Tu Apellido" value="<?php echo s($usuario->apellido); ?>">
    </div>
    <div class="campo">
        <label for="telefono">Teléfono</label>
        <input type="tel" id="telefono" name="telefono" placeholder="Tu Teléfono" value="<?php echo s($usuario->telefono); ?>" >
    </div>
    <div class="campo">
        <label for="email">E-mail</label>
        <input type="mail" id="email" name="email" placeholder="Tu E-mail" value="<?php echo s($usuario->email); ?>" >
    </div>
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Tu Password" ">
    </div>
    <input type="submit" value="Crear Cuenta " class="boton">
</form>
<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia sesión</a>
    <a href="/olvide">¿Olvidaste tu password?</a>
</div>