<?php

class User
{
    public function profile()
    {
        return null;
    }
}

class Profile
{
    public function replyCount()
    {
        return 10;
    }
}

/*
 * this would normally throw an error as we are calling a function on null
 * $replyCount = (new User())->profile()->replyCount();
 * */

// the nullsafe operator ?-> in the example below will return null
$replyCount = (new User())->profile()?->replyCount();

var_dump($replyCount);