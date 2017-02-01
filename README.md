## codeigniter3-mailgun

# 한국어(korean)
[Codeigniter](https://codeigniter.com/) 3.x 버전과 Mailgun을 쉽게 연동하기 위해 제작한 library입니다.

Library Extending과 관련한 내용은 [링크](http://www.ciboard.co.kr/user_guide/kr/general/creating_libraries.html)를 참고하시기 바랍니다.

설치방법

1. Codeigniter 3.x버전을 설치합니다.
2. `/application/config/config.php`파일에서 아래와 같은 정보를 수정해줍니다.
    * line 139. $config['composer_autoload'] = 'false'; => $config['composer_autoload'] = './vendor/autoload.php';
3. composer를 사용해서 mailgun을 설치해줍니다.(필요한 여러가지 라이브러리를 같이 설치해주세요)
    `composer require mailgun/mailgun-php php-http/curl-client guzzlehttp/psr7`
4. `/application/libraries/MY_Email.php` 파일을 당신의 `/application/libraries/`폴더에 복사해주세요.
5. 설정값을 변경합니다.
    * line 14. new Mailgun("YOUR_MAILGUN_KEY");
    * line 15. $this->mailgunDomain = "YOUR_DOMAIN";
    * line 23. $from = 'YOUR_DEFAULT_MAIL_ADDRESS'
6. 이후 email library를 로드하여 $this->email->sendMailgun($to, $subject, $contents, $from);으로 날려주시면 됩니다.

- 사용 소스: [Mailgun PHP client](https://github.com/mailgun/mailgun-php)
