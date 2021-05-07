<?php

class Postback extends Controller
{
    public function index()
    {
        exit(header('location: /'));
    }

    public function telegram($cid, $sum)
    {
        $postbackModel = $this->model('PostbackModel');

        $postbackModel->sendMessage($cid, $sum);
        $postbackModel->updateProfit($cid, $sum);
        $postbackModel->updateStatistics($cid, $sum);
        
    }

    public function ultraLeads($geo, $sum, $os, $sub1)
    {

        switch ($sub1) {
            case 'moom':
                $login = 'moom';
                $telegram_bot = 'https://api.telegram.org/bot1669490486:AAFKKHYDy8jY39kolav0XYlyFvlDfSEb8CA/sendMessage?chat_id=653793108&text=';
                break;
            
            case 'vitalikk':
                $login = 'makeover';
                $telegram_bot = 'https://api.telegram.org/bot803325728:AAEEJJC36ZgBa95WljOeLh7hnF4ubXBEpMI/sendMessage?chat_id=482242700&text=';
                break;

            case 'anya':
                $login = 'anya';
                $telegram_bot = 'https://api.telegram.org/bot1563149144:AAEeELFWU-GCnpxK4hWglL4liiMrN5YjYyA/sendMessage?chat_id=403424982&text=';
                break;
            case 'nazzar':
                $login = 'nazar';
                // $telegram_bot = 'https://api.telegram.org/bot1700797831:AAEz3hw0SVJjRNRXOrIjX03abYENzGE5M7k/sendMessage?chat_id=246354853&text=';
                break;
            case 'fech':
                $login = 'ihor';
                $telegram_bot = 'https://api.telegram.org/bot1681246759:AAEm_yLl30aISTlIf7RGgiilEDeKrTE2S3I/sendMessage?chat_id=569494276&text=';
                break;
            case 'fanj':
                $login = 'andrii';
                $telegram_bot = 'https://api.telegram.org/bot963131464:AAFhO_f_9ZR4vbZDyB6FOYpYek-tjrZig6o/sendMessage?chat_id=481733241&text=';
                break;
            case 'emannon':
                $login = 'emannon';
                $telegram_bot = 'https://api.telegram.org/bot1625228851:AAHIPg9En0y50EUSWI-KZZQmW2Cr37q1N5M/sendMessage?chat_id=479909043&text=';
                break;
            case 'sergey':
                $login = 'sergiy';
                $telegram_bot = 'https://api.telegram.org/bot1721756354:AAG9DTwpnmOKkoJF1OqASleTt_5nI2859u0/sendMessage?chat_id=445238530&text=';
                break;
            case 'olegk':
                $login = 'oleg';
                $telegram_bot = 'https://api.telegram.org/bot1728224984:AAGTNgrhkwF4qSx972wvkvbQm57hsBW0aFU/sendMessage?chat_id=505758786&text=';
                break;
            case 'igorkach':
                $login = 'igor2';
                $telegram_bot = 'https://api.telegram.org/bot1756444727:AAFoRsOoKM24KQgE8hKPSsoGGoonwCTPHfE/sendMessage?chat_id=404713131&text=';
                break;
            
            default:
                header('location: /');
                break;
        }


        $postbackModel = $this->model('PostbackModel');
        $cid = '';
        $postbackModel->updateStatistics($cid, $sum, $login);
        $for_telegram = "ULTRA%F0%9F%8C%8D$geo%F0%9F%92%B0$sum$%F0%9F%92%BB$os%F0%9F%93%A1$sub1";
        fopen($telegram_bot.$for_telegram, 'r');
    }
    
}