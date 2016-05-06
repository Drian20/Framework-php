<?php include('head.php'); ?>
<form class="form-out" method="POST" action="<?= APP_W . 'register/back'; ?>">
    <input type="submit" id="logout-button" value="Atras" />
</form>
<div>
    <article>
        <div id="formreg"><form class="form-reg" method="post" action="<?= APP_W . 'register/register'; ?>">
                Usuario<input class="input" type="text" name="username"></input><br>
                Nombre<input class="input" type="text" name="name"></input><br>
                Apellido<input class="input" type="text" name="lastname"></input><br>
                Contraseña<input class="input" type="text" name="password"></input><br>
                Correo<input class="input" type="text" name="email"></input><br>
                Pais<input class="input" type="text" name="country"></input><br>
                <input type="submit" value="Hecho!" class="btn btn-default"></input>
            </form></div>
    </article>
</div>

<?php include('footer.php'); ?>