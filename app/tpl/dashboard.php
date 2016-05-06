<form class="form-out" method="POST" action="<?= APP_W . 'dashboard/logout'; ?>">
    <input type="submit" id="logout-button" value="Salir" />
</form>
<p id="user"><?php echo $_SESSION['user']; ?></p>
<div class="dashboard">
    <b>DASHBOARD</b>
    <div id="cont">
        <div class="dash">
            <form class="flex" action="<?= APP_W . 'dashboard/insert_user'; ?>" method="post">
                Usuario<input type="text" name="username"></input><br>
                Nombre<input type="text" name="name"></input><br>
                Apellido<input type="text" name="lastname"></input><br>
                Contraseña<input type="text" name="password"></input><br>
                Email<input type="text" name="email"></input><br>
                Poblacion<input type="text" name="country"></input><br>
                Rol<input type="text" name="rol"></input><br>
                <input type="submit" value="Insertar" class="btn btn-default"></input>
            </form>
        </div>
        
        <div class="dash">
            <form class="flex" action="<?= APP_W . 'dashboard/update_user'; ?>" method="post">
                ID Usuario<input type="text" name="id"></input>
                <br>--------------------------------------------------------<br>
                Usuario<input type="text" name="username"></input><br>
                Nombre<input type="text" name="name"></input><br>
                Apellido<input type="text" name="lastname"></input><br>
                Contraseña<input type="text" name="password"></input><br>
                Email<input type="text" name="email"></input><br>
                Poblacion<input type="text" name="country"></input><br>
                Rol<input type="text" name="rol"></input><br>
                <input type="submit" value="Modificar" class="btn btn-default"></input>
            </form>
        </div>

        <div id="del" class="dash">
            <form class="flex" action="<?= APP_W . 'dashboard/delete_user'; ?>" method="post">
                Usuario<input type="text" name="username"></input><br>
                <input type="submit" value="Eliminar" class="btn btn-default"></input>
            </form>
        </div>
    </div>
    <div id="showUsersDiv"></div>
</div>
