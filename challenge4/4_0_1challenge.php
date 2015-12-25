<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>タスク4-0-1</title>
</head>
<body>
    <?php
    /*
     * 問1.なぜ13-18行目のような初期化が行われているかを答えなさい
     * 答.2015.1.1から処理を始めたいため
     */
    $hour=0;
    $min=0;
    $sec=0;
    $month=1;
    $day=1;
    $year=2015;

    /*
     * 問2.なぜ下行のような処理を行っているのか答えなさい
     * 答え.$befor_monthより$monthの方が変数名が短くていいため
     */
    $befor_month=$month;

    /*
     * 問3.このループにおける繰り返し条件を答えなさい
     * 答.$dayが365以下の場合処理を繰り返す
     *
     * 問4.このループの目的を答えなさい
     * 答.1年間365日分処理を行いたいため
     */
    while($day<=365){

        /*
         * 問5.下行の処理の動作を答えなさい
         * 答.時, 分, 秒, 月, 日, 年の配列を作った
         *
         * 問6.なぜ下行のような処理を行っているのかを答えなさい
         * 答.年や月、日など連想配列で返せるため
         */
        $timestamp = mktime($hour, $min, $sec, $month, $day, $year);


        /*
         * 問6.下行の処理の動作を答えなさい
         * 答.今月をだす
         *
         * 問7.なぜ下行のような処理を行っているのかを答えなさい
         * 答.今、何月かを知らせるため
         */
        $now_month=date('m', $timestamp);

        /*
         * 問8.この条件分岐はどのような条件で行われているのか答えなさい
         * 答.もし$befor_monthが$now_monthでなければ
         *
         * 問9.条件分岐の目的を答えなさい
         * 答.今月分のみのデータが知りたいため
         */
        if($befor_month!=$now_month){

            /*
            * 問10.なぜ下行のような処理を行っているのかを答えなさい
            * 答.$befor_month=$now_monthと定義するため
            */
            $befor_month=$now_month;

            /*
            * 問11.下行の処理の動作を答えなさい
            * 答.今月を表示する
            */
            echo '<br>'.$now_month.'月<br>';
        }

        /*
         * 問12.下行の処理の動作を答えなさい
         * 答.今現在の年、月、日を表示
         *
         * 問13.なぜ下行のような処理を行っているのか答えなさい
         * 答.今日の日付を表示させるため
         */
        echo date('Y年m月d日', $timestamp).'タイムスタンプ:'.$timestamp.'<br>';

        /*
         * 問14.なぜ下行のような処理を行っているのか答えなさい
         * 答.次の日にするため
         */
        $day++;
    }

    /*
     * 問15.このプログラムは、何を目的とした処理なのかを要約して答えなさい
     * 答.自動的に現在の日付にするため
     *
     * 問16.このままでは本来この処理が望んでいる結果になっていない。何が問題で、どこをどう修正すべきか答えなさい
     * 答.
     *
     */

    ?>
</body>
</html>