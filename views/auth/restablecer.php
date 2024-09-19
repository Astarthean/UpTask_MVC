<div class="contenedor restablecer">
    <?php include_once __DIR__ . '/../templates/nombre-sitio.php' ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Coloca tu nueva Contraseña</p>
        <?php include_once __DIR__ . '/../templates/alertas.php' ?>

        <?php if($mostrar): ?>
        <form method="POST" class="formulario">

            <div class="campo">
                <label for="password">Contraseña</label>
                <input type="password" id="password" placeholder="Tu Nueva Contraseña" name="password">
            </div>

            <input type="submit" class="boton" value="Guardar Contraseña">
        </form>

        <?php endif; ?>

        <div class="acciones">
            <a href="/crear">¿Aún no tienes una cuenta?</a>
            <a href="/olvide">¿Olvidaste tu Contraseña?</a>
        </div>
    </div>
</div>