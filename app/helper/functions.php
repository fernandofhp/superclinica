<?php
    function formatDateAndTime($value, $format = 'd/m/Y')
    {
        // Utiliza a classe de Carbon para converter ao formato de data ou hora desejado
        return Carbon\Carbon::parse($value)->format($format);
    }

    function verifica($campo, $vazio = ''){
        return (
            isset($campo) ? (
                empty($campo) ? 
                ($vazio) : 
                ($campo)
            ) : 
            ($vazio)
        );
    }

?>