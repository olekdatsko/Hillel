<?php

class UserService
{
    protected $db;
    protected $mailer;
    protected $smsService;

    public function __construct(Database $db, EmailService $mailer, SMSService $smsService)
    {
        $this->db = $db;
        $this->mailer = $mailer;
        $this->smsService = $smsService;
    }

    public function registerUser($userData)
    {
        // Реєстрація юзера в базі
        $this->db->insert('users', $userData);

        // Відправка листа
        $this->mailer->sendWelcomeEmail($userData['email']);

        // Відправка СМСки
        $this->smsService->sendSMS($userData['phone'], 'Відправ шістнадцять цифр своєї кредитки на цей номер!');
    }
}

