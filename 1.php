<?php  

$datakey=array('dumb','ways','the','best');
$word='';

function check($datakey,$word){
    
foreach ($datakey as $value) {

   if ($value==$word) 
   {print $value.'=>'.TRUE.'  ';}
   else
   {print $value.'=>'.FALSE.'  ';}

}
}

check($datakey,'dumb');

?>