<?php

namespace App\Entity;

use Core\Entity\Entity;

class PostEntity extends Entity{

    public function getUrl(){
        return 'index.php?p=questions.show&id=' . $this->id;
    }

    public function getExtrait(){
        $html = '<p>'. $this->contenu . '</p>';

        return $html;
    }

}