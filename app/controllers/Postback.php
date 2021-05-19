<?php

class Postback extends Controller
{
    public function index()
    {
        exit(header('location: /'));
    }

    public function telegramBot( $pp, $sum, $nickname = '', $login = '', $geo = '', $os = '' )
    {
        $postbackModel = $this->model('PostbackModel');

        if($geo == '') $geo = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 3, 2);

        $for_telegram = "$pp%F0%9F%8C%8D$geo%F0%9F%92%B0$sum$%F0%9F%92%BB$os%F0%9F%93%A1$login 🌚 $nickname";


        switch ($login) {
            case 'test':
                $login = 'londofff';    $token = '1067255544:AAENEmI-DXxCm9pP_oZomApduRmLMtZyaUk';  $chat_id = '379565079';
                break;
            case 'moom':
                                        $token = '1669490486:AAFKKHYDy8jY39kolav0XYlyFvlDfSEb8CA';  $chat_id = '653793108';
                break;
            case 'vitalikk':
                $login = 'makeover';    $token = '803325728:AAEEJJC36ZgBa95WljOeLh7hnF4ubXBEpMI';   $chat_id = '482242700';
                break;
            case 'anya':
                                        $token = '1563149144:AAEeELFWU-GCnpxK4hWglL4liiMrN5YjYyA';  $chat_id = '403424982';
                break;
            case 'nazzar':
                $login = 'nazar';       $token = '1700797831:AAEz3hw0SVJjRNRXOrIjX03abYENzGE5M7k';  $chat_id = '246354853';
                break;
            case 'fech':
                $login = 'ihor';        $token = '1681246759:AAEm_yLl30aISTlIf7RGgiilEDeKrTE2S3I';  $chat_id = '569494276';
                break;
            case 'fanj':
                $login = 'andrii';      $token = '963131464:AAFhO_f_9ZR4vbZDyB6FOYpYek-tjrZig6o';   $chat_id = '481733241';
                break;
            case 'emannon':
                                        $token = '1625228851:AAHIPg9En0y50EUSWI-KZZQmW2Cr37q1N5M';  $chat_id = '479909043';
                break;
            case 'sergey':
                $login = 'sergiy';      $token = '1721756354:AAG9DTwpnmOKkoJF1OqASleTt_5nI2859u0';  $chat_id = '445238530';
                break;
            case 'olegk':
                $login = 'oleg';        $token = '1728224984:AAGTNgrhkwF4qSx972wvkvbQm57hsBW0aFU';  $chat_id = '505758786';
                break;
            case 'igorkach':
                $login = 'igor2';       $token = '1756444727:AAFoRsOoKM24KQgE8hKPSsoGGoonwCTPHfE';  $chat_id = '404713131';
                break;
        }

        if ($login == 'lond' or $login == 'mihal2'){
            $login = 'londofff';
            $token = '1067255544:AAENEmI-DXxCm9pP_oZomApduRmLMtZyaUk';
            $chat_id = '379565079';
            $for_telegram = "$pp 🌖 $geo $nickname 💰 $sum";
        }

        if($nickname != '') {
            $postbackModel->updateStatistics( $sum, $nickname, $login);
            $postbackModel->updateProfit($nickname, $sum);
        }

        fopen("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$for_telegram", 'r');

    }

    public function ultraLeads($geo, $sum, $os, $sub1, $sub2 = '')
    {

        switch ($sub1) {
            case 'moom':
                $login = 'moom';
                $token = '1669490486:AAFKKHYDy8jY39kolav0XYlyFvlDfSEb8CA';$chat_id = '653793108';
                break;
            
            case 'vitalikk':
                $login = 'makeover';
                $token = '803325728:AAEEJJC36ZgBa95WljOeLh7hnF4ubXBEpMI';$chat_id = '482242700';
                break;

            case 'anya':
                $login = 'anya';
                $token = '1563149144:AAEeELFWU-GCnpxK4hWglL4liiMrN5YjYyA';$chat_id = '403424982';
                break;
            case 'nazzar':
                $login = 'nazar';
                $token = '1700797831:AAEz3hw0SVJjRNRXOrIjX03abYENzGE5M7k';$chat_id = '246354853';
                break;
            case 'fech':
                $login = 'ihor';
                $token = '1681246759:AAEm_yLl30aISTlIf7RGgiilEDeKrTE2S3I';$chat_id = '569494276';
                break;
            case 'fanj':
                $login = 'andrii';
                $token = '963131464:AAFhO_f_9ZR4vbZDyB6FOYpYek-tjrZig6o';$chat_id = '481733241';
                break;
            case 'emannon':
                $login = 'emannon';
                $token = '1625228851:AAHIPg9En0y50EUSWI-KZZQmW2Cr37q1N5M';$chat_id = '479909043';
                break;
            case 'sergey':
                $login = 'sergiy';
                $token = '1721756354:AAG9DTwpnmOKkoJF1OqASleTt_5nI2859u0';$chat_id = '445238530';
                break;
            case 'olegk':
                $login = 'oleg';
                $token = '1728224984:AAGTNgrhkwF4qSx972wvkvbQm57hsBW0aFU';$chat_id = '505758786';
                break;
            case 'igorkach':
                $login = 'igor2';
                $token = '1756444727:AAFoRsOoKM24KQgE8hKPSsoGGoonwCTPHfE';$chat_id = '404713131';
                break;
            case 'test':
                $login = 'londofff';
                $token = '1067255544:AAENEmI-DXxCm9pP_oZomApduRmLMtZyaUk';$chat_id = '379565079';
                break;

            default:
                header('location: /');break;
        }

        $postbackModel = $this->model('PostbackModel');
        
        $nickname = $sub2;
        $postbackModel->updateStatistics( $sum, $nickname, $login);
        $postbackModel->updateProfit($nickname, $sum);
        
        $telegram_bot = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=";
        $for_telegram = "ULTRA%F0%9F%8C%8D$geo%F0%9F%92%B0$sum$%F0%9F%92%BB$os%F0%9F%93%A1$sub1 🌚 $sub2";
        fopen($telegram_bot.$for_telegram, 'r');
    }
    
}