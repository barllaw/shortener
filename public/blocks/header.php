<header>
    <div class="logo"> <a href="/"><b>LOND</b>  Shortener</a> </div>

    <?php if($_COOKIE['login'] != ''): ?>
        
        <div class="profit_week"><b>$<?= round($data['profit_week'], 2) ?></b></div>

        <div class="menu_wrap" id="">
            <div class="menu_btn" id="menu_btn"></div>
            <div class="menu" id="menu">
                <p><a href="/"><span></span>Main</a></p>
                <p><a href="/user/dashboard"><span></span>Profile</a></p>
                <p><a href="/user/text"><span></span>Texts</a></p>
                <p><a href="/user/images"><span></span>Images</a></p>
                <p><a href="/user/postback"><span></span>Leads</a></p>
                <p><a href="/user/settings"><span></span>Settings</a></p>
                <p><a href="/user/logout"><span></span>Exit</a></p>
            </div>
        </div>
    
    <?php endif; ?>
</header>

