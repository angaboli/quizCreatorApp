<?php

namespace App\Entity;

use Core\Entity\Entity;

class QuestionEntity extends Entity{

    public function getUrl(){
        return 'index.php?p=questions.index&id=' . $this->id;
    }


}