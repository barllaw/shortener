<div class="nav">
    <a href="/user/logout"><i class="fas fa-sign-out-alt"></i></a>
    <a href="/user/text" class="<?php if($url[1] == 'text') echo 'active';?>"><i class="fas fa-file-alt"></i></a>
    <a href="/" class="<?php if($url[1] == '') echo 'active';?> home"><i class="fas fa-home"></i></a>
    <a href="/user/dashboard" class="<?php if($url[1] == 'dashboard') echo 'active';?>"><i class="fas fa-user"></i></a>
    <a href="/user/settings" class="<?php if($url[1] == 'settings') echo 'active';?>"><i class="fas fa-cog"></i></a>
</div>