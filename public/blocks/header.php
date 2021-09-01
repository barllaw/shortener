<header>
    <div class="logo"> <a href="/"><b>LOND</b>  Shortener</a> </div>

    <?php if($_COOKIE['login'] != ''): ?>
        
        <div class="profit_week"><b>$<?= round($data['profit_week'], 2) ?></b></div>

        <div class="menu_wrap" id="">
            <div class="menu_btn" id="menu_btn"></div>
            <div class="menu" id="menu">
                <p><a href="/"><span><i class="fas fa-home"></i></span>Main</a></p>
                <p><a href="/user/dashboard"><span><i class="fas fa-user-circle"></i></span>Profile</a></p>
                <p><a href="/user/text"><span><i class="fas fa-file-alt"></i></span>Texts</a></p>
                <p><a href="/user/images"><span><i class="fas fa-images"></i></span>Images</a></p>
                <p><a href="/user/postback"><span><i class="fas fa-coins"></i></span>Postaback</a></p>
                <p><a href="/user/settings"><span><i class="fas fa-cog"></i></span>Settings</a></p>
                <p><a href="/user/logout"><span><i class="fas fa-sign-out-alt"></i></span>Exit</a></p>
            </div>
        </div>
    
    <?php endif; ?>
</header>

