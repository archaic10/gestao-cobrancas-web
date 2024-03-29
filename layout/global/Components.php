<?php
class Components
{
    public function __constructor(){

    }
    public function label ($for, $class, $conteudo ){
        $evento = ''; 
        return "<label  for=$for class=$class  > $conteudo</label>";
    }
    public function input($tipo, $class , $name, $id = '', $evento = "", $propriedade, $function = ""){
        $evento = '';
        return "<input  type=$tipo  name=$name id=$id  $evento $propriedade class=$class >";
    }
    	
    public function select( $name, $id = '', $arrays ,$indices, $evento = "", $function = ""){
        $evento =  ''; 
        $conteudo="";
        for($x = 0; $x < count($arrays); $x++ ){
          if($arrays[$x] !=""){
               $conteudo .=" <option value='".$arrays[$x]."'>". $indices[$x]  ."</option>";
          }
        }
        return "<select name=$name id=$name  $evento > ". $conteudo."</select >";   
    }

    public function selecDb( $name, $id = '', $arrays ,$indices, $evento = "", $function = ""){
        $evento =  ''; 
        $conteudo="";
        foreach($arrays as $array){            
            foreach($indices as $indice){
                $conteudo .=" <option>". $array[$indice]  ."<option>";
            }   
        }
        
        return "<select name=$name id=$name  $evento > ". $conteudo."</select >";       
    }

    public function table($id, $columns, $registros, $indices){
        $conteudo="";
        $conteudoLinhas="";

        for($x = 0; $x < count($columns); $x++ ){        
                $conteudo.= "<th>".$columns[$x] ."</th>";         
        }
        $conteudoLinhas = "";
        $y = 0;
        foreach ($registros as $registro){        
                $conteudoLinhas  .=
                "<tr>";
                    for($y =0; $y < count($indices); $y++){
                    $conteudoLinhas  .=   "<td>".$registro [$indices[$y]]."</td>";
                }
                $conteudoLinhas  .=   "<td> ";
                $conteudoLinhas  .=   "</td>";
                "</tr>"; 
        }

        return 
        "<table id=$id>". 
            "<tr>"       
                   .$conteudo.
            "</tr>".
            "<tr>".
                $conteudoLinhas
            ."</tr>".
        "<table>";
    }

    public function checkBox( $name, $id = '', $evento = "", $function = ""){
        return "<input type='checkbox' name=$name id=$name  $evento >";
    }

    public function radio( $name, $id = '', $evento = "", $function = ""){
        return "<input type='radio' name=$name id=$name  $evento >";
    }

    public function button( $name, $id = '',$descricao ,$evento = "", $function = ""){
        return "<button type='button' name=$name id=$name  $evento >$descricao</button>";
    }

    public function buttonPesquisa( $name, $id = '',$descricao ,$evento = "", $function = "", $class){
        return "<button type='button' name=$name id=$name  $evento  class=$class>$descricao</button>";
    }

    public function textArea($nome, $id, $cols, $rows){
        return " <textarea name=$nome id=$id cols=$cols, rows=$rows></textarea>";
    }

    public function section($class, $id, $conteudo){
        return "<section class=$class  id=$id> $conteudo</section>"; 
    } 

    public function form($method, $id, $class, $conteudo){
        return "<form  method=$method class=$class id=$id > $conteudo</form>"; 
    } 

    public function h1($class, $conteudo){
        return "<h1 class=$class> $conteudo</h1>";
    } 
}
?>