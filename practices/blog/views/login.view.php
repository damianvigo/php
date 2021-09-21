<?php require 'header.php'; ?>

<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo">Iniciar Sesion</h2>
            <form class="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <input type="text" name="usuario" placeholder='Ingresa tu usuario'>
                <input type="password" name="password" placeholder="Ingresa tu password">
                <input type="submit" value="Iniciar Sesion">
            </form>
        </article>
    </div>
</div>

<?php require 'footer.php'; ?>