<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>challenge4-0-2</title>
</head>
<body>
    <?php

    /*
     * 問1.14-19行目における変数の初期化に、どんなメリットがあるのかを答えなさい
     * 答.コードを書くとき同じ変数を何度も使用するときに便利なため
     */
    $waganeko_texts = array();
    $read_line = 21;
    $count = 0;
    $figure = '猫';
    $exchange_figure = '犬';
    $changed_text = array();

    /*
     * 問2.下行でどのような処理が行われるのかを答えなさい
     * 答.ファイルの読み込み
     */
    $waganeko_fp = fopen('4_0_2text.txt','r');

    /*
     * 問3.このループにおける繰り返し条件を答えなさい
     * 答.$iが$read_lineより小さければ$iに1をプラス
     *
     * 問4.このループの目的を答えなさい
     * 答.21行目まで同じ処理を行うため
     */
    for($i=0;$i<=$read_line;$i++){

        /*
         * 問5.下行でどのような処理が行われるのかを答えなさい
         * 答.$waganeko_textsのi行目の読み取り
         *
         * 問6.最終的に、$waganeko_textsはどのような状態になるのか答えなさい
         * 答.吾輩（わがはい）は猫である。名前はまだ無い。
         *
         * 問7.なぜ下行のような処理が行われているのかを答えなさい
         * 答.$waganeko_texts[$i]に吾輩（わがはい）は猫である。名前はまだ無い。を入れたいため
         *
        */
        $waganeko_texts[$i]=fgets($waganeko_fp);

        /*
         * 問8.下行でどのような処理が行われるのかを答えなさい
         * 答.文字数を数える
         *
         * 問9.なぜ下行のような処理が行われているのかを答えなさい
         * 答.文字が何個あるかカウントするため
        */
        $count += mb_strlen($waganeko_texts[$i]);
    }


    /*
     * 問10.下行でどのような処理が行われるのかを答えなさい
     * 答.21行目までの文字数を表示する
     */
    echo $read_line.'行目までの文字数は'.$count.'です<br>';

    /*
     * 問11.下行でどのような処理が行われるのかを答えなさい
     * 答.猫という文字が$waganeko_textsに何個あるかを表示する
     *
     * 問12.わざわざfigure_count()というユーザー定義関数を用いることに、どのようなメリットがあるのかを答えなさい
     * 答.何についての処理なのかをわかるようにするため
     *
     */
    echo 'そのうち、「'.$figure.'」という文字は'.figure_count($waganeko_texts).'個含まれています<br>';

    /*
     * 問13.下行でどのような処理が行われるのかを答えなさい
     * 答.犬という文字に変える
     */
    echo '<br>これを「'.$exchange_figure.'」という文字に置き換えると...<br>';

    /*
     * 問13.下行でどのような処理が行われるのかを答えなさい
     * 答.waganeko_exchangeを関数で処理し$changed_textに値が返ってくる
     */
    $changed_text = waganeko_exchange($waganeko_texts,$exchange_figure);

    /*
     * 問13.以下のループの目的を答えなさい
     * 答.
     */
    foreach ($changed_text as $key => $changed_line){

        /*
         * 問14.なぜ($key+1)となっているのかを答えなさい
         * 答.1行ずつ増やしていくため
         */
        echo ($key+1).'行目:';
        echo $changed_line.'<br>';
    }

    echo '<br>という表現になります<br>';


    /*
     * 問15.このユーザー定義関数の機能を説明しなさい
     * 答.猫という文字のカウントをする機能
     */
    function figure_count($texts){

        /*
         * 問16.なぜ通常の引数ではなく、globalな値として$figureを扱っているのかを答えなさい
         * 答.変数名が被っても別の値を保持し続けられるため
        */
        global $figure;
        $figcnt = 0;

        /*
         * 問17.以下のループはどのようなループなのか答えなさい
         * 答.4_0_2textの文を1行ずつ回してみていく
        */
        foreach ($texts as $text_line){
            /*
             * 問18. 組み込み関数mb_substr_count()の機能を答えなさい
             * 答.指定数分の文字を取得
            */
            $figcnt += mb_substr_count($text_line, $figure);
        }

        return $figcnt;
    }

    /*
     * 問19.このユーザー定義関数の機能を説明しなさい
     * 答.
     */
    function waganeko_exchange($texts,$exfig){
        global $figure;
        $ex_texts = array();

        /*
         * 問20.以下のループはどのようなループなのか答えなさい
         * 答.$textsに入っている文を1行ずつ回す
        */
        foreach ($texts as $line_num => $text_line){

            /*
            * 問21.下行でどのような処理が行われるのかを答えなさい
            * 答.4_0_2textの猫を犬と言う文字に置き換える
            *
            * 問22.最終的に、$ex_textsはどのような状態になるのか答えなさい
            * 答.猫が犬に置き換わったtext文
            *
            * 問23.なぜ下行のような処理が行われているのかを答えなさい
            * 答.文字を置き換えたいため
            *
            */
            $ex_texts[$line_num] = str_replace($figure, $exfig, $text_line);
        }

        return $ex_texts;
    }

    /*
     * 問24.このプログラムは、何を目的とした処理なのかを要約して答えなさい
     * 答.猫という文字を犬に置き換えることを目的とした処理
     *
     * 問25.「猫」→「犬」ではなく「吾輩」→「私」という風に文字を置き換え、行数も30行に増やしたい。具体的にどこをどう修正すべきか答えなさい
     * 答.
     */


    ?>
</body>
</html>
