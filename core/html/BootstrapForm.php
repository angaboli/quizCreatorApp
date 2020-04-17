<?php 

namespace Core\html;



class BootstrapForm extends Form{
    
    protected function surround($html, $type){
        
        if($type === 'radio'){
            
            return "<div class=\"radio\">{$html}</div>";
        }elseif($type === 'checkbox'){
            return "<div class=\"checkbox\">{$html}</div>"; 
        } else {
            return "<div class=\"form-group\">{$html}</div>";
        }
    }

    public function input($name, $label, $options = []){
        
        $type = isset($options['type']) ? $options['type'] : 'text';
        if($type === 'textarea'){
            $input = '<label> <textarea name="' . $name .'" class="form-control" > ' . $this->getValue($name) . '</textarea>' . $label . '</label>';
            
        }elseif ($type === 'radio') {
            $input = '<label> '. $label . ' <input type="' . $type . '" name="' . $name .'" value=""></label>';
        }
        
        else {
            $input = '<label> '. $label . '<input type="' . $type . '" name="' . $name .'" value="' . $this->getValue($name) . '" class="form-control"></label>';
            
        }
  
        return $this->surround($input , $type);
    }
    
    public  function select($name, $label, $options){
        $label = '<label>' . $label . '</label>';
        $input = '<select class="form-control" name="' .$name.'">';
        foreach ($options as $k => $v){
            $attributes = '';
            if ($k == $this->getValue($name)) {
                $attributes = 'selected';
            }
            $input .="<option value='$k' $attributes>$v</option>";
        }
        $input .= '</select>';
        return $this->surround($label . $input);
    }
        
    public  function submit(){
        return  '<button type="submit" class="btn btn-primary">Envoyer</button>';
    }
}


?>