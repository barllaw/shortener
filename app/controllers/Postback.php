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

        switch ($login) {
            case 'londofff':
                                        $token = '1067255544:AAENEmI-DXxCm9pP_oZomApduRmLMtZyaUk';  $chat_id = '379565079';;
                break;
            case 'test':
                                        $token = '1067255544:AAENEmI-DXxCm9pP_oZomApduRmLMtZyaUk';  $chat_id = '379565079'; 
                    $ref = [['londofff' , $sum * (20 / 100)],['test1' , $sum * (20 / 100)]]; $sum = $sum * (60 / 100);
                break;
            case 'moom':
                                        $token = '1669490486:AAFKKHYDy8jY39kolav0XYlyFvlDfSEb8CA';  $chat_id = '653793108';
                break;
            case 'vitalikk':
                $login = 'makeover';    $token = '803325728:AAEEJJC36ZgBa95WljOeLh7hnF4ubXBEpMI';   $chat_id = '482242700';
                    $ref = [['andrii' , $sum * (20 / 100)]]; $sum = $sum * (80 / 100);
                break;
            case 'anya':
                                        $token = '1563149144:AAEeELFWU-GCnpxK4hWglL4liiMrN5YjYyA';  $chat_id = '403424982';
                break;
            case 'nazzar':
                $login = 'nazar';       $token = '1700797831:AAEz3hw0SVJjRNRXOrIjX03abYENzGE5M7k';  $chat_id = '246354853'; 
                    $ref = [['andrii' , $sum * (35 / 100)]]; $sum = $sum * (65 / 100);
                break;
            case 'fech':
                $login = 'ihor';        $token = '1681246759:AAEm_yLl30aISTlIf7RGgiilEDeKrTE2S3I';  $chat_id = '569494276';
                break;
            case 'fanj':
                $login = 'andrii';      $token = '963131464:AAFhO_f_9ZR4vbZDyB6FOYpYek-tjrZig6o';   $chat_id = '481733241';
                break;
            case 'emannon':
                                        $token = '1625228851:AAHIPg9En0y50EUSWI-KZZQmW2Cr37q1N5M';  $chat_id = '479909043';
                    $ref = [['andrii' , $sum * (20 / 100)]]; $sum = $sum * (80 / 100);
                break;
            case 'sergey':
                $login = 'sergiy';      $token = '1721756354:AAG9DTwpnmOKkoJF1OqASleTt_5nI2859u0';  $chat_id = '445238530'; 
                    $ref = [['andrii' , $sum * (20 / 100)],['makeover' , $sum * (20 / 100)]]; $sum = $sum * (60 / 100);
                break;
            case 'olegk':
                $login = 'oleg';        $token = '1728224984:AAGTNgrhkwF4qSx972wvkvbQm57hsBW0aFU';  $chat_id = '505758786'; 
                    $ref = [['andrii' , $sum * (20 / 100)],['makeover' , $sum * (20 / 100)]]; $sum = $sum * (60 / 100);
                break;
            case 'igorkach':
                $login = 'igor2';       $token = '1756444727:AAFoRsOoKM24KQgE8hKPSsoGGoonwCTPHfE';  $chat_id = '404713131'; 
                    $ref = [['andrii' , $sum * (20 / 100)],['makeover' , $sum * (20 / 100)]]; $sum = $sum * (60 / 100);
                break;

            case 'artur':
                $login = 'artur';       $token = '';  $chat_id = ''; 
                    $ref = [['andrii' , $sum * (20 / 100)],['ihor' , $sum * (20 / 100)]]; $sum = $sum * (60 / 100);
                break;
            case 'VA1':
                $login = 'vadim';       $token = '';  $chat_id = ''; 
                    $ref = [['andrii' , $sum * (20 / 100)],['ihor' , $sum * (20 / 100)]]; $sum = $sum * (60 / 100);
                break;
            case 'Danya':
                $login = 'danya';       $token = '';  $chat_id = ''; 
                    $ref = [['andrii' , $sum * (20 / 100)],['ihor' , $sum * (20 / 100)]]; $sum = $sum * (60 / 100);
                break;
            case 'DEN4IK':
                $login = 'den4ik';       $token = '';  $chat_id = ''; 
                    $ref = [['andrii' , $sum * (20 / 100)],['ihor' , $sum * (20 / 100)]]; $sum = $sum * (60 / 100);
                break;
        }

        $for_telegram = "$pp%F0%9F%8C%8D$geo%F0%9F%92%B0$sum$%F0%9F%92%BB$os%F0%9F%93%A1$login 🌚 $nickname";

        if ($login == 'lond' or $login == 'mihal2'){
            $login = 'londofff';
            $token = '1067255544:AAENEmI-DXxCm9pP_oZomApduRmLMtZyaUk';
            $chat_id = '379565079';
            $for_telegram = "$pp 🌖 $geo $nickname 💰 $sum";
            $ref = [['andrii' , $sum * (20 / 100)]]; $sum = $sum * (80 / 100);
        }

        if( $ref != []){
            foreach ($ref as $item ) {
                $postbackModel->updateStatistics( 0, '', $item[0], $item[1]);
            }
        }

        if($nickname != '') {
            $postbackModel->updateStatistics( $sum, $nickname, $login);
            $postbackModel->updateProfit($nickname, $sum);
        }

        fopen("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$for_telegram", 'r');

    }
}