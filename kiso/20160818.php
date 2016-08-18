<?php
    // 繰り返し処理の途中でループを抜ける

    // 途中でbrake文を実行することで繰り替え処理を抜ける

    // ◆ シンプルな例
    $fruit = array('apple', 'orange', 'grape');

    for ($i = 0; $i < 3; $i++) {
        echo $fruit[$i] . '<br>';
        if($i == 1) {
            echo 'ループ抜ける';
            break;
        }
    }

    // 1にあたる orange で止まってるのを確認
    echo '<br>';

    // ◆ break文で階層をぬける
    $i = 1;

    while ($i < 10) {
        echo 'i=' . $i . '';
        $j = 1;
        while ($j < 5) {
            echo 'j=' . $i * $i . '';
            if ($i * $j > 15) {
                break 2;
            }

            $j += 1;
        }
        $i += 1;
        echo '<br>';
    }
    // break文が実行されたときに処理が移る位置

    // この書き方(ループの階層化)はアンチパターン
    // 関数化して処理などがベター