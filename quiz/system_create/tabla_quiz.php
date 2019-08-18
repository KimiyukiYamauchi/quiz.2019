<?php
//it's only an example
function row_creator ($x) {
    $conn = mysqli_connect("localhost", "testuser", "0808", "newtables");
    mysqli_query($conn, "SET NAMES 'UTF8'");
    $conn->query($x);
}

$x = array(
    array('select-img', 'M', 'LANの説明として、もっとも適切なものを選びなさい', 'インターネット上で構築される仮想的なネットワーク', 'WANを世界規模につなげたネットワーク', '家庭内や学校内といった限られた範囲に構成された小規模のネットワーク', '個々のネットワークを結ぶ広域のネットワーク', '', '', hash('sha256', json_encode('家庭内や学校内といった限られた範囲に構成された小規模のネットワーク')), '', '', ''),
    array('select-img', 'M', 'IoTの利用例として、もっとも適当なものを選びなさい', 'インターネット上にコミュニティを形成して多くの人と交流する', '自宅にある家電を外出先から操作したり、離れた場所にいるペットを見守ったりする', '電子メールを利用し、他人とコミュニケーションする', '目的に応じコンピュータ上で処理を行う', '', '', hash('sha256', json_encode('自宅にある家電を外出先から操作したり、離れた場所にいるペットを見守ったりする')), '', '', ''),
    array('select-img', 'M', 'パソコンの記憶装置である「SSD」についての説明として、誤って いるものを選びなさい', 'HDDと比べ耐衝撃性に優れている', 'HDDと比べると読み出し速度は遅い', 'HDDと比べ駆動部分がないため動作音が静か', '同じ容量のHDDと比較して価格が高い', '', '', hash('sha256', json_encode('HDDと比べると読み出し速度は遅い')), '', ''),
    array('select-img', 'M', '画面モードがXGAの画素数を選びなさい', '1280 X 768', '640 X 480', '1024 X 768', '800 X 600', '', '', hash('sha256', json_encode('1024 X 768')), '', '', ''),
    array('select-img', 'M', '光学メディアに関する説明として、正しいものを1つ選びなさい', "「DVD-R」や「BD-R」などの書き込み型メディアでは、規格上データの追記ができない", "片面１層の「BD-R」1枚には、「CDーROM」約100枚分のデータを書き込める", "両面２層の「DVD-ROM」は、「BD-ROM」と同じ容量を持つ", "「BD-RE」ディスクは、データの書き換えが可能なメディアである", '', '', hash('sha256', json_encode('「BD-RE」ディスクは、データの書き換えが可能なメディアである')), '', '', ''),
    array('select', 'M', '約650MBのCD-Rに、同じサイズの写真データが260枚分記録できた。これと同じサイズの写真データは、片面1層のDVD-Rには、およそ何枚記録できるか。もっとも近いものを選択肢から選びなさい', '500枚', '2000枚', '2500枚', '3000枚', '', '', hash('sha256', json_encode('2000枚')), '', '', ''),
    array('select', 'M', '以下のうち、Androidのアプリケーションを提供している、Google 社の配信サービスはどれか', 'Playストア', 'Google+', 'dマーケット', 'App Store', '', '', hash('sha256', json_encode('Playストア')), '', '', ''),
    array('select', 'M', '無線LANを識別する名前の呼び方を選びなさい', 'ホスト名', 'ドメイン名', 'SSID', 'FCDN', '', '', hash('sha256', json_encode('SSID')), '', '', ''),
    array('select', 'M', 'IPV6 アドレスの情報量を選びなさい', '32ビット', '64ビット', '128ビット', '256ビット', '', '', hash('sha256', json_encode('128ビット')), '', '', ''),
    array('select', 'M', 'ドメイン名とIPアドレスを関連付けるサーバを選びなさい', 'NTPサーバ', 'DHCP サーバ', 'FTPサーバ', 'DNS サーバ', '', '', hash('sha256', json_encode('DNS サーバ')), '', '', ''),
    array('bet-number', 'K', 'IMAP4で使用せれるポート番号(***)', '', '', '', '', '', '', hash('sha256', json_encode(143)), '3', '', ''),
    array('bet-number', 'K', '個人情報保護マネジメントシステム一要求事項 (JIS Q *****)', '', '', '', '', '', '', hash('sha256', json_encode(15001)), '5', '', ''),
    array('bet-text', 'K', '不正侵入検知の機能を実装する仕組みを一般に何と呼ばれるか(***)', '', '', '', '', '', '', hash('sha256', json_encode(strtolower('IDS'))), '3', '', ''),
    array('bet-text', 'K', '一斉ににたくさんの端末から攻撃者の命令で攻撃対象にアクセスする攻撃を一般に何と呼ばれるか (****)', '', '', '', '', '', '', hash('sha256', json_encode(strtolower('DDOS'))), '4', '', ''),
    array('bet-number', 'K', 'POP3で使用せれるポート番号(***)', '', '', '', '', '', '', hash('sha256', json_encode(110)), '3', '', ''),
    array('bet-number', 'K', 'HTTPSで使用せれるポート番号(***)', '', '', '', '', '', '', hash('sha256', json_encode(443)), '3', '', ''),
    array('bet-number', 'K', 'HTTPで使用せれるポート番号(***)', '', '', '', '', '', '', hash('sha256', json_encode(80)), '2', '', ''),
    array('checkbox', 'M', 'SELECT文に ORDER BY ASC を指定してデータを検索した場合の動作として、 正しいものを2つ選択し てください', '数値は、小さい値が先に表示される', '日付は、新しい日付から先に表示される', '英字は、アルファベット順に表示される', 'NULLは、最初に表示される', 'わからない', '', hash('sha256', json_encode('数値は、小さい値が先に表示される英字は、アルファベット順に表示される')), '', 5, 2),
    array('checkbox', 'M', '同時実行制 御の説明で正しいものを 2 つ選んで下さい', '検索対象行を明示的にロックできる', '2人以上のユーザーが互いにロックをかけあうとデットロックが発生する', 'FOR UPDATE句を使用すると複数ユーザーが同じデータに同時アクセスできる', 'ロック待機状態を避ける方法はない', 'わからない', '', hash('sha256', json_encode('検索対象行を明示的にロックできる2人以上のユーザーが互いにロックをかけあうとデットロックが発生する')), '', 5, 2),
    array('checkbox', 'M', 'SELECT 処理について、以下の説明文から正しいものを 2 つ選んで下さい', '全列を選択する場合、列名の代わりに「*」を使用できる', '複数の列を問合せた場合、常に表作成時の列の順序に従って検索される', '検索処理において、一時的に列に別名を定義できる', '複数列を問合せる場合、列名と列名の間をスペースで区切る', 'わからない', '', hash('sha256', json_encode('全列を選択する場合、列名の代わりに「*」を使用できる検索処理において、一時的に列に別名を定義できる')), '', 5, 2),
    array('checkbox', 'M', 'Oracle WorkflowとOracle Alertsについて正しい文はどれですか。 （３つ選んでください', 'ワークフローはアクティビティ中にユーザーの応答を待つことができます', 'ワークフローは複雑な条件付きロジックをサポートできます', 'アラートは1つのアクションしか実行できません', 'アラートは、指定した順序で複数のアクションを実行できます', 'データベースレコードが更新または作成 された場合にのみアラートが実行されます', 'アラートは発生頻度に関係なく設定できます', 'ba2cb76a2b002f862cd7001545609fb007cdead3f8c3d50ea74a69e2cedc2637', '', 6, 3)
);

for ($i = 0; $i < count($x); $i++) {
    $col1 = $x[$i][0];
    $col2 = $x[$i][1];
    $col3 = $x[$i][2];
    $col4 = $x[$i][3];
    $col5 = $x[$i][4];
    $col6 = $x[$i][5];
    $col7 = $x[$i][6];
    $col8 = $x[$i][7];
    $col9 = $x[$i][8];
    $col10 = $x[$i][9];
    $col11 = $x[$i][10];
    $col12 = $x[$i][11];
    $col13 = $x[$i][12];



    $query = "INSERT INTO quiz4 VALUES ('', '$col1', '$col2', '$col3', '$col4', '$col5', '$col6', '$col7', '$col8', '$col9', '$col10', '$col11', '$col12', '$col13')";
    row_creator($query);
}

?>