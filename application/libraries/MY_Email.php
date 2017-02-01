<?php
// Mailgun (2017.01.20 BrianPark)
use Mailgun\Mailgun;

class MY_Email extends CI_Email
{
    private $mailgunClient;
    private $mailgunDomain;

    public function __construct($config = array())
    {
        parent::__construct($config);

        $this->mailgunClient = new Mailgun("YOUR_MAILGUN_KEY");
        $this->mailgunDomain = "YOUR_DOMAIN";
    }

    /**
     * Send Mail
     * Mailgun을 사용해 메일을 날리는 기능
     */

    public function sendMailgun($to = null, $subject = null, $contents = null, $from = 'YOUR_DEFAULT_MAIL_ADDRESS')
    {
        if ($to != null && $subject != null && $contents != null) {
            $this->mailgunClient->sendMessage(
                $this->mailgunDomain,
                array(
                    'from' => $from,
                    'to' => $to,
                    'subject' => $subject,
                    'text' => $contents)
            );
        } else {
            return false;
        }
    }
}