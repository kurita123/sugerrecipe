@extends('layouts.temple')

@section('title','糖質制限')

@section('content')
    <div class="row">
        <div class="col-3">
            <div class="sidebar_content">
                <div class="text">
                    <p>レシピ検索</p>
                    <form action="search" mecthod="post">
                    @csrf
                    <p>検索ワード</p>
                    <input type="text" name="search">
                    <input type="submit" value="検索" style="text-center">
                    </div>  
                </form>
            </div>
        <div sidebar_fixed>
            <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1705da02.aebce5b3.1705da03.f53d39f5/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fabe92909ae32d8975e66d5beca5735b0%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1c90d32c.da3a5d7f.1c90d32d.cba11d24/?me_id=1330300&item_id=10000352&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fchoosefood%2Fcabinet%2F04945509%2Fseasoning%2Frakanto_800.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1705da02.aebce5b3.1705da03.f53d39f5/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fabe92909ae32d8975e66d5beca5735b0%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >ラカントS 顆粒 800g サラヤ カロリーゼロ 糖類ゼロ 業務用【メール便ポスト投函】【全国送料無料】</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
            <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1c90dcbf.8b490d52.1c90dcc0.be4d4c79/?pc=https%3A%2F%2Fitem.rakuten.co.jp%2Froombania%2Fr-ao-pd500%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjowfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1c90dcbf.8b490d52.1c90dcc0.be4d4c79/?me_id=1252463&item_id=10000481&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Froombania%2Fcabinet%2Fsoypowder%2F0204okara_newp01.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1c90dcbf.8b490d52.1c90dcc0.be4d4c79/?pc=https%3A%2F%2Fitem.rakuten.co.jp%2Froombania%2Fr-ao-pd500%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjowfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >おからパウダー 糖質ゼロ 超微粉 送料無料 奇跡のおから 500g 糖質制限 糖質オフ ローカボ 食物繊維 置き換え 国内 京都 加工 送料無料 おやつ パン お菓子 作りに</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
            <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1705da02.aebce5b3.1705da03.f53d39f5/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fe4c30da266abd5b38ce49bc336ba0e04%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1c90d772.c3f7aa77.1c90d773.38226854/?me_id=1193677&item_id=11647992&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fkenkocom%2Fcabinet%2F064%2F4902856314064.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1705da02.aebce5b3.1705da03.f53d39f5/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fe4c30da266abd5b38ce49bc336ba0e04%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >盛田 カロリーオフ 糖質オフ みりんタイプ(500ml)【spts4】【盛田(MORITA)】</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
            <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1705da02.aebce5b3.1705da03.f53d39f5/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fd910194e4a9aecafce66fe4242be371e%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1c90d911.30002bc8.1c90d912.f2885b53/?me_id=1271176&item_id=10000325&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fkibun-shop%2Fcabinet%2F0tsuyu%2Fthum_otuyu_6p.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1705da02.aebce5b3.1705da03.f53d39f5/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fd910194e4a9aecafce66fe4242be371e%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >糖質0つゆ 1ケース(6本)　　　 【低糖質 低糖質つゆ 糖質0つゆ 糖質ゼロ 糖質制限 糖質カット 糖質オフ 糖質オフ調味料 つゆ めんつゆ 麺つゆ かつおだし 食 ヘルシー 健康 ダイエット ローカーボ 低カロリー】</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
            <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1c90d9dd.2594c687.1c90d9de.32b3df26/?pc=https%3A%2F%2Fitem.rakuten.co.jp%2Fnunoviki%2Fkb025%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjowfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1c90d9dd.2594c687.1c90d9de.32b3df26/?me_id=1223019&item_id=10001105&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fnunoviki%2Fcabinet%2Fitem-p%2Fimgrc0110255337.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1c90d9dd.2594c687.1c90d9de.32b3df26/?pc=https%3A%2F%2Fitem.rakuten.co.jp%2Fnunoviki%2Fkb025%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjowfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >ヒルナンデスで紹介【送料無料】選んで8種類（3個×8種類） ダイエット こんにゃく麺 24個アソートセットこんにゃく ラーメン うどん 焼きそば中華麺 パスタ等 お好きな味を3個づつ8種類24個の詰合せ蒟蒻麺 コンニャク麺 糖質0 糖質ゼロ ナカキ</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
            <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1c90ddf1.0217c718.1c90ddf2.c1e18b05/?pc=https%3A%2F%2Fitem.rakuten.co.jp%2Fwide%2F6757-12%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjowfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1c90ddf1.0217c718.1c90ddf2.c1e18b05/?me_id=1190950&item_id=10003786&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fwide%2Fcabinet%2Fguide%2F61943-_-.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1c90ddf1.0217c718.1c90ddf2.c1e18b05/?pc=https%3A%2F%2Fitem.rakuten.co.jp%2Fwide%2F6757-12%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjowfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >ポッキリ1000円!【送料無料】ZIP＆めざましテレビで紹介! こんにゃく麺 こんにゃくラーメン 6食セット ダイエット食品 ダイエットフード 置き換え 蒟蒻 蒟活 置き換えダイエット 糖質制限食 炭水化物除去食 糖質制限 低カロリー 低糖質 糖質カット 日本製 在宅 テレワーク</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
            <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1c90dfef.b0d47b36.1c90dff0.2ab286a5/?pc=https%3A%2F%2Fitem.rakuten.co.jp%2Fgourmet-de-ribbon%2Ftou187%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjowfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1c90dfef.b0d47b36.1c90dff0.2ab286a5/?me_id=1254182&item_id=10000233&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_gold%2Fgourmet-de-ribbon%2Fimages%2Fitem%2Ftou187.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1c90dfef.b0d47b36.1c90dff0.2ab286a5/?pc=https%3A%2F%2Fitem.rakuten.co.jp%2Fgourmet-de-ribbon%2Ftou187%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjowfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >低糖質 糖質制限 クロワッサン 10個 パン 植物ファイバー オーツ胚芽 オーツ麦 オート麦 燕麦 置き換え ダイエット 食品 ダイエット食品 置き換え 食物繊維 デニッシュ 朝食パン お試し ロカボ 冷凍パン 非常食 タンパク質</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
            <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1c90df32.95c16983.1c90df33.492c2fa3/?pc=https%3A%2F%2Fitem.rakuten.co.jp%2Ffukui%2F10000013%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjowfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1c90df32.95c16983.1c90df33.492c2fa3/?me_id=1209588&item_id=10000013&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Ffukui%2Fcabinet%2F00704907%2F06399308%2Fimgrc0075991475a.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1c90df32.95c16983.1c90df33.492c2fa3/?pc=https%3A%2F%2Fitem.rakuten.co.jp%2Ffukui%2F10000013%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjowfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >チョコレート 送料無料 【初めてのお客様限定】 30％オフ チョコ屋 ノンシュガー クーベルチュール チョコレート 【50枚（500g）】 ギフト 業務用 個包装 糖質制限 糖質オフ 低糖質 お中元 スイーツ おやつ お菓子 おしゃれ 非常食 【楽ギフ_包装】【楽ギフ_のし】</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>

        </div>
    </div>
    <div class="col">
        <div class = "example">
            <img src="img/top.png">
            <div class="d-flex flex-row flex-wrap">
                @foreach($recipes as $recipe)
                    <div class="col-xs-6 col-sm-4 col-md-4 ">
                        <div class="myrecipe">
                            料理名 : {{$recipe->c_name}}<br>
                            画像 : <img src="/img/{{$recipe->imgpath}}" alt="" class="inrecipe"><br>
                            糖質量 : {{$recipe->t_suger}}g<br>
                            評価 : {{$recipe->evalunation}}<br>
                            <form action="recipe" method="post">
                            @csrf
                            <input type="hidden" name="recipe" value="{{$recipe->id}}">
                            <input type="submit" value="詳細" class= 'btn-lg btn-primary'><br>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection