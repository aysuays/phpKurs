<?php
include_once './Interfaces/Notification.php';

class EmailGonder implements Notification
{
    public function sendNotification($mail)
    {
        echo 'Kullanıcıya sms atıldı telefonu :' .$mail;
    }
}