<?php
include_once './Interfaces/Notification.php';
class SmsGonder implements Notification
{
    public function sendNotification($telefon)
    {
        echo 'Kullanıcıya sms atıldı telefonu :' .$telefon;
    }
}