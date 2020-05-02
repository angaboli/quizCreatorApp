<?php 

namespace Core\html;

/**
 * Class Form
 * Permet de générer un formulaire rapidement et simplement 
 */
class Form{
    
    
    protected $data;
    
    public $surround = 'p';
    
    
    public function __construct($data = array()) {
        $this->data = $data;
    }
    
    protected function surround($html, $type){
        
        if($type === 'radio'){
            return "<div class=\"radio\">{$html}</div>";
        }elseif($type === 'checkbox'){
            return "<div class=\"checkbox\">{$html}</div>"; 
        } else {
            return "<{$this->surround}>{$html}</{$this->surround}>" ;
        }      
    }
    
    protected function getValue($index){
        if(is_object($this->data)){
            return $this->data->$index;
        }
        return isset($this->data[$index]) ? $this->data[$index] : null ;
    }
    
    public function input($name, $label, $options = []) {
        
        $type = isset($options['type']) ? $options['type'] : 'text';
        return $this->surround(
            '<input type="'.$type.'" name="' . $name . '" value="' . $this->gatValue($name) .'" >');
    }
    
    
    public function submit() {
        return '<button type="submit">Envoyer</button>';
    }
}
