<? php
    if ( isset ( $ _POST [ 'numero' ]) && $ _POST [ 'numero' ]! == "" ) {
        $ numero = intval ( $ _POST { 'numero' });

        if ( $ numero % 2 === 0 ) {
            $ valor = 1 ;
        }   más {
            $ valor = 0 ;
        }
    } más {
        $ valor = 3 ;
    }
    echo  $ numero . "valor" ;

    encabezado ( "Ubicación: ./index.php?confirm=" . $ valor )
?>