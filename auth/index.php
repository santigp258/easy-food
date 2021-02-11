<?php include_once('./layout/header.php') ?>
<!-- Add your site or application content here -->
<div class="container-all">
    <div class="ctn-form">
        <img src="<?php echo BASE_URL ?>img/logo.png" alt="logo" class="logo">
        <h1 class="title">Iniciar Sesión</h1>

        <form action="<?php echo BASE_URL ?>login/sendData.php" method="POST" name="login">
            <!-- Email -->
            <label for="usernameEmail">Email o Usuario</label>
            <input type="text" name="usernameEmail" id="usernameEmail" autofocus>
            <!-- Password -->
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" autocomplete="off">
            <!-- Boton Iniciar -->
            <input type="submit" name="loginSubmit" id="loginSubmit" value="Iniciar">
        </form>
        <!-- Text footer -->
        <span class="text-footer">¿Aún no te has registrado?<a href="register.php"> Registrate</a></span>
    </div>
    <!-- Lado Derecho -->
    <div class="ctn-text">
        <div class="capa"></div>
        <h1 class="title-description">Lorem ipsum dolor sit amet</h1>
        <p class="text-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati et culpa molestiae
            ea
            tenetur temporibus suscipit, labore, repellat provident delectus facere iusto quo dolorum esse, dignissimos
            aliquam blanditiis dolorem. Odio.</p>
    </div>
</div>

<?php include_once('./layout/footer.php') ?>