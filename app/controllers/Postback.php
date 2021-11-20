<?php

class Postback extends Controller
{
    public function index()
    {
        exit(header('location: /'));
    }

    public function telegramBot( $pp='', $sum='', $login='',$nickname='',  $geo='', $os='' )
    {
        $postbackModel = $this->model('PostbackModel');
        $userModel = $this->model('UserModel');


        if($login == 'none')
            $login = $postbackModel->getLoginFromTT($nickname);

        $settings = $userModel->getUserSettings($login);

        $sum  = $sum * $settings['percent'] / 100;

        $postbackModel->newPostback( $pp, $sum, $nickname, $login, $geo, $os);

        $for_telegram = "$pp%F0%9F%8C%8D$geo%F0%9F%92%B0$sum$%F0%9F%92%BB$os%F0%9F%93%A1$login 🌚 $nickname";
        
        if ($login == 'londofff')
            $for_telegram = "$pp 🌖 $geo $nickname 💰 $sum";


        if($nickname != '') 
            $postbackModel->updateLinkStats($nickname, $sum);
            
            
            
        if($settings['telegram_bot'] == 'On')
            fopen("https://api.telegram.org/bot$settings[bot_token]/sendMessage?chat_id=$settings[bot_chat_id]&text=$for_telegram", 'r');
            
        $postbackModel->updateStatistics( $sum, $nickname, $login);
    }
}