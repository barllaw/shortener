<header>
    <div class="logo"> <a href="/"><b>LOND</b>  Shortener</a> </div>

    <?php if($_COOKIE['login'] != ''): ?>
        <div class="profit_week"><b>$<?= round($data['profit_week'], 2) ?></b></div>
    <?php endif; ?>
    <a href="/user/dashboard" class="account"></a>
</header>