<?php

use Illuminate\Database\Seeder;
use App\Models\Recipe;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->truncate(); //2回目実行の際にシーダー情報をクリア
        DB::table('recipes')->insert([
            'user_id' => '1',
            'c_name' => 'とりつくね',
            'material' => 'とりミンチ200g、玉ねぎ１玉、卵1個、片栗粉大さじ１、おからパウダー大さじ１、
                           醤油大さじ１、ラカント大さじ１、酒大さじ１',
            'amount' => '100g',
            't_suger' => 10,
            'recipe' => '1個',
            'imgpath' => 'tukune.jpeg',
        ]);

        DB::table('recipes')->insert([
            'user_id' => '2',
            'c_name' => 'きのこバター炒め',
            'material' => 'お好きなきのこ100g、バター10g、ポン酢大さじ１、塩少々',
            'amount' => '100g',
            't_suger' => 8,
            'recipe' => 'フライパンにバターをのせ温める。
            　　　　　　　　きのこを炒め塩、ポン酢で味付けをしたら完成！',
            'imgpath' => 'kinoko.jpeg',
        ]);

        DB::table('recipes')->insert([
            'user_id' => '3',
            'c_name' => 'ほんのり塩味茹で卵',
            'material' => '卵好きな数、塩小さじ1、水200ml',
            'amount' => '1個',
            't_suger' => 0.2,
            'recipe' => '卵を8〜12分茹で冷水につける。殻をむき水200mlに塩を入れ冷蔵庫で約3時間寝かせる。
            　　　　　　　　お好みの味になったら塩水を抜いて完成！',
            'imgpath' => 'yudetamago.jpeg',
        ]);

        DB::table('recipes')->insert([
            'user_id' => '1',
            'c_name' => '豆腐ハンバーグ',
            'material' => '合い挽き肉200g、玉ねぎ１玉、卵1個、豆腐100g、パン粉大さじ１、おからパウダー大さじ１、塩少々、こしょう少々、
                           マヨネーズ大さじ１、牛乳大さじ２',
            'amount' => '100g',
            't_suger' => 15,
            'recipe' => '玉ねぎをみじん切りにし飴色になるまで炒める。
            　　　　　　　　ボールにパン粉、おからパウダー、牛乳を混ぜ合わせる。
            　　　　　　　　炒めた玉ねぎ、合い挽き肉、卵、豆腐、塩、こしょう、マヨネーズを入れ粘りが出るまで混ぜる。
            　　　　　　　　',
            'imgpath' => 'hanbagu.jpeg',
        ]);
    }
}
