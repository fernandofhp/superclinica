<?php
    // Rotinas e funções de apoio
    class campo{
        public static function verifica($campo, $vazio = ''){
            return (
                isset($campo) ? (
                    empty($campo) ? 
                    ($campo) : 
                    ($vazio)
                ) : 
                ($vazio)
            );
        }    
    }
    
    
?>