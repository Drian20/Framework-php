<form class="form-out" method="POST" action="<?= APP_W . 'user/logout'; ?>">
    <input type="submit" id="logout-button" value="Salir" />
</form>
<p id="user"><?php echo $_SESSION['user']; ?></p>

<div id="anuncios">
    <div id="anuncio">
        
    </div>
</div>