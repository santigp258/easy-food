<?php include_once('./layout/header.php') ?>

<div class="container-all">
    <div class="ctn-form">
        <img src="<?php echo BASE_URL ?>img/logo.png" alt="logo" class="logo">
        <h1 class="title">Registro</h1>
        <form action="<?php echo BASE_URL ?>/App/controllers/authentication/RegisterController.php" method="POST" name="signup">
            <!-- User -->
            <label for="usernameReg">Usuario</label>
            <input type="text" name="usernameReg" id="usernameReg" autocomplete="off" autofocus>
            <!-- Email -->
            <label for="emailReg">Email</label>
            <input type="text" name="emailReg" id="emailReg" autocomplete="off">
            <!-- Password -->
            <label for="passwordReg">Contraseña</label>
            <input type="password" name="passwordReg" id="passwordReg" autocomplete="off">
            <!-- Boton Registarse -->
            <input type="submit" name="signupSubmit" value="Registrar" id="signupSubmit">
        </form>
        <!-- Text Footer -->
        <span class="text-footer">¿Ya te has registrado?<a href="index.php">
                Iniciar Sesión</a></span>
    </div>
    <!-- Lado Derecho -->
    <div class="ctn-text">
        <div class="capa"></div>
        <h1 class="title-description" id="par">Lorem ipsum dolor sit amet</h1>
        <p class="text-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati et culpa molestiae
            ea
            tenetur temporibus suscipit, labore, repellat provident delectus facere iusto quo dolorum esse, dignissimos
            aliquam blanditiis dolorem. Odio.</p>
    </div>
</div>

<script src="<?php echo BASE_URL ?>/admin/views/plugins/toastr/validateRegister.js"></script>
<?php include_once('./layout/footer.php') ?>