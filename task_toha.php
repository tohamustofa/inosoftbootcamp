<?php
function luasLingkaran($jariJari) {
    return number_format(pi() * pow($jariJari, 2), 2);
}

function kelilingLingkaran($jariJari) {
    return number_format(2 * pi() * $jariJari, 2);
}

function luasPersegi($panjang, $lebar) {
    return number_format($panjang * $lebar, 2);
}

for ($i = 1; $i <= 100; $i++) {
    echo number_format($i, 2);

    if ($i % 3 === 0) {
        $jariJariLingkaran = $i / 3;
        echo luasLingkaran($jariJariLingkaran);
    }

    if ($i % 5 === 0) {
        $jariJariLingkaran = $i / 5;
        echo kelilingLingkaran($jariJariLingkaran);
    }

    if ($i % 3 === 0 && $i % 5 === 0) {
        $panjangPersegi = $i / 3;
        $lebarPersegi = $i / 5;
        echo luasPersegi($panjangPersegi, $lebarPersegi);
    }
}
?>