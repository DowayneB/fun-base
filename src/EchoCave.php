<?php

namespace Fun;

class EchoCave
{
    public function __construct($v = 'It worked! Try giving your own value! :)')
    {
        $message = 'Thanks for leading me to this :)';
        $link = 'http://stackoverflow.com/questions/4975411/when-do-i-use-php-eol-instead-of-n-and-vice-versa-ajax-jquery-client-problem';

        $this->echoSomething($message,$link);
    }

    public function echoSomething($message,$link)
    {
        echo $message . PHP_EOL . $link . PHP_EOL;
    }
}
