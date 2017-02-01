## codeigniter3-mailgun

# 한국어(korean)
[Codeigniter](https://codeigniter.com/) 3.x 버전과 Mailgun을 쉽게 연동하기 위해 제작한 library입니다.

Library Extending과 관련한 내용은 [링크](http://www.ciboard.co.kr/user_guide/kr/general/creating_libraries.html)를 참고하시기 바랍니다.

설치방법

1. Codeigniter 3.x버전을 설치합니다.
2. composer를 사용해서 sentry를 설치해줍니다.
    `composer require mailgun/mailgun-php php-http/curl-client guzzlehttp/psr7`
3. `/application/libraries/MY_Email.php` 파일을 당신의 `/application/libraries/`폴더에 복사해주세요.
4. 설정값을 변경합니다.
    * line 14. new Mailgun("{Your Mailgun Key}");
    * line 15. $this->mailgunDomain = "{Your Domain}";
5. 이후 email library를 로드하여 $this->email->sendMailgun($to, $subject, $contents, $from);으로 날려주시면 됩니다.

- 사용 소스: [Mailgun PHP client](https://github.com/mailgun/mailgun-php)
