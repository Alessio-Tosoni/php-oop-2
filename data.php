<?php
require_once __DIR__ . '/models/Prodotti.php';

$prodotti = [
    new Prodotto(
        "croccantini al pollo 2kg",
        "cibo",
        "cani",
        "8,99",
        ["biologici","adatti a tutte le taglie"]
    ),
    new Prodotto(
        "croccantini al salmone 1kg",
        "cibo",
        "gatti",
        "4,59",
        ["ogm free", "per gatti adulti"]
    ),
    new Prodotto(
        "cuccia da esterno xxl",
        "cuccie",
        "cani",
        "52,99",
        ["adatta a taglie grandi", "materiali di qualità"]
    ),
    new Prodotto(
        "lettino da interno",
        "cuccie",
        "cani/gatti",
        "25,00",
        ["adatta a cani e gatti", "stoffa resistente e comoda"]
    ),
    new Prodotto(
        "osso in gomma",
        "giochi",
        "cani",
        "7,59",
        ["ideale per cani energici", "materiali anti-soffocamento"]
    ),
    new Prodotto(
        "tiragraffi a colonna",
        "giochi",
        "gatti",
        "75,55",
        ["l'intrattenimento perfetto per il tuo gatto", "pedana inclusa nel prezzo"]
    )

];