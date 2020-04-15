<?php
class eMailBody
{
    public function loadBody() {
        $this->body .= "This is Main Email body.";
    }
}

class christmasEmail extends eMailBody {
    public function loadBody() {
        parent::loadBody();
        $this->body .= "Added Content for Xmas"."<br>";
    }
}

class newYearEmail extends eMailBody {
    public function loadBody() {
        parent::loadBody();
        $this->body .= "Added Content for New Year";
    }
}

$christmasEmail = new christmasEmail();
$christmasEmail->loadBody();
echo $christmasEmail->body;

$newYearEmail = new newYearEmail();
$newYearEmail->loadBody();
echo $newYearEmail->body;
