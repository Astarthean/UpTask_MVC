<div class="contenedor olvide">
    <?php include_once __DIR__ . '/../templates/nombre-sitio.php' ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Recupera tu Contraseña</p>
        <?php include_once __DIR__ . '/../templates/alertas.php' ?>
        <form action="/olvide" method="POST" class="formulario" novalidate>
            <div class="campo">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Tu Email" name="email">
            </div>

            <input type="submit" class="boton" value="Recuperar Contraseña">
        </form>

        <div class="acciones">
            <a href="/">¿Ya tienes una cuenta? ¡Inicia Sesión!</a>
            <a href="/crear">¿Aún no tienes una cuenta?</a>
        </div>
    </div>
</div>

