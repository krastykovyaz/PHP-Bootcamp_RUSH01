<?php

require_once('Ship.class.php');

class ImperatorDeus extends Ship
{

    public function __construct($pos_x, $pos_y, $angle, $color)
    {
        parent::__construct($pos_x, $pos_y, $angle, $color);
        $this->size_x = 2;
        $this->size_y = 7;
    }
    public static function doc()
    {
        try {
            if (tryfile_get_contents(get_called_class().'.doc.txt')) {
                throw new Exception();
            } else {
                throw new Error("Didn't find");
            }
        } catch (Throwable $e) {
            \var_dump($e->getMessage());
        }
    }
    public function __toString()
    {
        try {
            return (string) $this->doc();
        } finally {
            return '';
        }
    }

    public function saySlogan() {
        return("Пленных не брать");
    }

    public function __invoke($x)
    {
        var_dump($x);
    }
   
}

?>