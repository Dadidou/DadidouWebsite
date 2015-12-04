<?php
require 'baseRSS.php';
/*============================================================================================*
 *
 *  Configuration des flux
 *
 *============================================================================================*/
$a_flux = array();
$nb_items   = 1;    // Nombre d'éléments à afficher
$size_texte = 180;  // Nombre de caractères à afficher
   
while($dbRow=mysqli_fetch_assoc($query)){	
	$flux['Title']      =   $dbRow['Title'];
	$flux['url']        =   $dbRow['Adresse'];
	$flux['keywords']   =   array('attentat','cyclone','morts','mot4');
	$a_flux[]           = $flux;
}

function TruncText ($text , $size, $charset='iso-8859-1'){
    $text = strip_tags ( html_entity_decode( $text , ENT_COMPAT, $charset ) );
    if ( strlen( $text) + 4 > $size ) {
        $text  = substr ( $text , 0 , $size).' ...' ;
    }  
    return $text;
}
 
foreach($a_flux as $flux){
    $xml = simplexml_load_file($flux['url']);
     
    echo 'Flux: '.$flux['title'].'<ul">'."\n";
    $i = 0;
    foreach ( $xml->channel->item as $value){
        if ( $i < $nb_items ){
            $matched = false;
            foreach($flux['keywords'] as $kw){
                if(strstr($value->title,$kw) !== false || strstr($value->description,$kw) !== false){
                    $matched = true;
                    break;
                }
            }
            if($matched === true){
                echo '<li>
                <a href="'.$value->link.'" target="_blank">'.utf8_decode($value->title).'</a> :
                    <span>'.utf8_decode(TruncText($value->description, $size_texte )).'</span>
                </li>'."\n";
                echo '<br />'."\n";
                $i++;
            }
        }
    }
    echo '</ul>'."\n";
}
?>