<?php
class Prodotto
{
    public $nome; 
    public $genere;
    public $tipoAnimale;
    public $costo;
    public $caratteristicheProdotto;

    public function __construct($nome, $genere, $tipoAnimale, $costo, array $caratteristicheProdotto)
    {
        $this->nome = $nome;
        $this->genere = $genere;
        $this->tipoAnimale = $tipoAnimale;
        $this->costo = $costo;
        $this->caratteristicheProdotto = $caratteristicheProdotto;
    } 

    public function getMovieCompleto(){
        $result = $this->nome . ", " . $this->genere . ", " . $this->tipoAnimale . ", " . $this->costo . ", " . $this->caratteristicheProdotto;
        return $result;
    }
}
?>