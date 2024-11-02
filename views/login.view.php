<div class="login-container">
    <h2>Login</h2>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Usuário" required>
        <input type="password" name="password" placeholder="Senha" required>
        <br class="sing-up">
        <button type="submit">Entrar</button>
        <a href="cadastro.php" class="sing-up">Não tem acesso?<br>Cadastre-se</a>
    </form>
</div>