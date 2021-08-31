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

        // if($geo == '') $geo = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 3, 2);

        if($login == 'lond')
            $login = 'londofff';
        else if($login == 'vitalikk')
            $login = 'makeover';
        else if($login == 'nazzar')
            $login = 'nazar';
        else if($login == 'fech')
            $login = 'ihor';
        else if($login == 'fanj' or $login == 'me')
            $login = 'andrii';
        else if($login == 'sergey')
            $login = 'sergiy';
        else if($login == 'olegk')
            $login = 'oleg';
        else if($login == 'igorkach')
            $login = 'igor2';
        else if($login == 'Artur')
            $login = 'artur';
        else if($login == 'VA1')
            $login = 'vadim';
        else if($login == 'Danya')
            $login = 'danya';
        else if($login == 'DEN4IK')
            $login = 'den4ik';

        if($login == 'none')
            $login = $postbackModel->getLoginFromTT($nickname);

        $eighty = ['makeover'];
        $sixtyfive = ['nazar'];
        $sixty = ['sergiy','oleg','igor2','michael','artur','vadim',
        'danya','den4ik','edic','vova1','andriy888','igorbyb','aron','sanya','vadic','artem','stass'];

        if(in_array($login, $eighty)){
            $sum  = $sum * 80 / 100;
        }else if(in_array($login, $sixtyfive)){
            $sum  = $sum * 65 / 100;
        }else if(in_array($login, $sixty)){
            $sum  = $sum * 60 / 100;   
        }

        $postbackModel->newPostback( $pp, $sum, $nickname, $login, $geo, $os);

        $for_telegram = "$pp%F0%9F%8C%8D$geo%F0%9F%92%B0$sum$%F0%9F%92%BB$os%F0%9F%93%A1$login 🌚 $nickname";
        
        if ($login == 'londofff')
            $for_telegram = "$pp 🌖 $geo $nickname 💰 $sum";


        if($nickname != '') 
            $postbackModel->updateLinkStats($nickname, $sum);
            
            
        $settings = $userModel->getUserSettings($login);
            
        if($settings['telegram_bot'] == 'On')
            fopen("https://api.telegram.org/bot$settings[bot_token]/sendMessage?chat_id=$settings[bot_chat_id]&text=$for_telegram", 'r');
            
        $postbackModel->updateStatistics( $sum, $nickname, $login);
    }
}