<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++){
            DB::table('users')->insert([
                'username' => "User" . ($i + 1),
                'password' => Hash::make('123456'),
            ]);
        }

        for ($i = 0; $i < 20; $i++){
            DB::table('posts')->insert([
                'name' => "Name" . ($i + 1),
                'content' => "Day la content thu" . ($i +1),
                'image' => "text.txt",
                'user_id' => ($i + 1),
            ]);
        }

        DB::table('admins')->insert([
            'username' => "Admin",
            'password' => Hash::make('123456'),
        ]);

        // Them loai thuc an

        DB::table('food_types')->insert([
            'name' => "Các món mới",
        ]);

        DB::table('food_types')->insert([
            'name' => "Mẹt",
        ]);

        DB::table('food_types')->insert([
            'name' => "Gà",
        ]);

        DB::table('food_types')->insert([
            'name' => "Vịt",
        ]);

        DB::table('food_types')->insert([
            'name' => "Bò",
        ]);

        DB::table('food_types')->insert([
            'name' => "Heo",
        ]);

        DB::table('food_types')->insert([
            'name' => "Hải sản",
        ]);

        DB::table('food_types')->insert([
            'name' => "Mì",
        ]);

        DB::table('food_types')->insert([
            'name' => "Cơm",
        ]);

        DB::table('food_types')->insert([
            'name' => "Gỏi",
        ]);

        DB::table('food_types')->insert([
            'name' => "Lẫu",
        ]);

        DB::table('food_types')->insert([
            'name' => "Các món khác",
        ]);

        //Thêm thức ăn
        DB::table('foods')->insert([
            'foodtype' => "1",
            'foodnamevn' => "Chả lụa",
            'foodnamejp' => "ベトナムのハム",
            'price' => "480",
            'image' => "images/1v3ova1I2VqBKvmJXD6JejY2NUaeMbaXnXK59Jop.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "2",
            'foodnamevn' => "Mẹt bò",
            'foodnamejp' => "牛セット",
            'price' => "1980",
            'image' => "images/1nvwNfOGbHcFq4iVAzMXGq0dzTdRtVoo1kRANFS7.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "2",
            'foodnamevn' => "Mẹt heo",
            'foodnamejp' => "豚セット",
            'price' => "1980",
            'image' => "images/vB4GJGDT5CgeL1TS4vJkpbbnsYEMFILZHle7fgTj.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "10",
            'foodnamevn' => "Gỏi sứa",
            'foodnamejp' => "クラゲサラダ",
            'price' => "780",
            'image' => "images/CHI98OGodjJvb9Ns8W9udI2XHynGfpdVLui1wb9Z.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "8",
            'foodnamevn' => "Bún bò giò",
            'foodnamejp' => "ブンボー",
            'price' => "780",
            'image' => "images/cSArAgrlVtwQS1Vaa1d1ac7TjEAj5IbYNeCx1Tnl.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "8",
            'foodnamevn' => "Mì xào hải sản",
            'foodnamejp' => "海鮮焼きそば",
            'price' => "680",
            'image' => "images/fSAKTCnu4ftPtU4zY2l8UFyhhQr8T5ZJbT90VMe0.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "1",
            'foodnamevn' => "Ốc xào sả ớt",
            'foodnamejp' => "タニシレモングラス",
            'price' => "780",
            'image' => "images/GD22L88lxEWSjB9D514vYKSwlu3FC9FQufxEJtLv.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "3",
            'foodnamevn' => "Trứng non cháy tỏi",
            'foodnamejp' => "卵の子ニンニクソース炒め",
            'price' => "680",
            'image' => "images/Ifsn9J7S58rlzVBTV33hq0QjXbgGamwnC5loMclh.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "7",
            'foodnamevn' => "Sò lụa xào sả",
            'foodnamejp' => "アサリレモングラス炒め",
            'price' => "480",
            'image' => "images/il1F1GhaL1OzVbuuWZOE7zZ3mVA4JWVZEMH5bGhY.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "7",
            'foodnamevn' => "Râu mực chiên",
            'foodnamejp' => "げそから",
            'price' => "480",
            'image' => "images/iLcxhVevYu7aDzxGKa1ZIkEm2Gy7Q2FAtjI8g23B.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "9",
            'foodnamevn' => "Cơm sườn",
            'foodnamejp' => "豚ニンニクソース炒めご飯",
            'price' => "780",
            'image' => "images/IvS6AmSHOlmQseTVByUC5hCScGIgIlF7jmxZR9gH.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "8",
            'foodnamevn' => "Bún thịt nướng",
            'foodnamejp' => "焼肉ビーフン",
            'price' => "680",
            'image' => "images/iwlYdRhn7WdrcEAncl2ZBMkN3uWP3kID2X3ESdZ2.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "6",
            'foodnamevn' => "Đuôi heo hon",
            'foodnamejp' => "豚テールレモングラス煮込み",
            'price' => "540",
            'image' => "images/kaXxuu7biZMJD1jXTVtaCX8QcEfkYV5Ftz2lNJFa.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "2",
            'foodnamevn' => "Mẹt hải sản",
            'foodnamejp' => "海鮮セット",
            'price' => "1980",
            'image' => "images/kfXKspSEZ4fS5xEuyIjVyBOHiAV0L7uSAYyyNH94.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "6",
            'foodnamevn' => "Heo luộc cuốn bánh tráng",
            'foodnamejp' => "豚肉茹でると野菜巻き",
            'price' => "980",
            'image' => "images/klx2MnOCodY5ESZdkpu9Fw9yIY3kzTwQEnlsh2ff.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "3",
            'foodnamevn' => "Gà luộc",
            'foodnamejp' => "鳥茹でる",
            'price' => "480",
            'image' => "images/KMP95GzhtjsXPMRI6gRiuxLe05x05Vj6CcqwNBR6.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "1",
            'foodnamevn' => "Nồi trường",
            'foodnamejp' => "豚のコブクロ",
            'price' => "680",
            'image' => "images/KYn4GByYh4mj2e3GHGnBu3ndLQW3BXOZU2UU41QW.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "4",
            'foodnamevn' => "Vịt hon",
            'foodnamejp' => "ダックレモングラス煮込み",
            'price' => "780",
            'image' => "images/L1VeU3Fjv0ZWE5fltd2EfMV0xA5dfaT5b9d7my2g.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "2",
            'foodnamevn' => "Mẹt gà",
            'foodnamejp' => "鳥セット",
            'price' => "1980",
            'image' => "images/lsJLWkX73XsU8fz44hxHQ0Z7Hm58ZTCLu3ZCdl5U.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "5",
            'foodnamevn' => "Típ bò",
            'foodnamejp' => "牛煮込み",
            'price' => "780",
            'image' => "images/MxZbXkwHcFkqCnrqQe2zmjeUz0dO7MPkQvQ2D2AG.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "1",
            'foodnamevn' => "Ốc om chuối",
            'foodnamejp' => "タニシバナナ煮込み",
            'price' => "850",
            'image' => "images/o4Zc1b5ZujrhaXB8fUa78Bp50pLwzZk7exHgwFup.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "6",
            'foodnamevn' => "Thịt heo nướng",
            'foodnamejp' => "豚焼肉",
            'price' => "480",
            'image' => "images/O9DgaXcvoYWdVt8Y1Fhaq4kEMIRmXb5TL5IYxPq6.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "8",
            'foodnamevn' => "Phở gà",
            'foodnamejp' => "鳥フォー",
            'price' => "680",
            'image' => "images/OEvjhRv4pdYJsQBc9ieoJzrsXvq84EQKLeQvuGRC.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "7",
            'foodnamevn' => "Tôm xóc tỏi",
            'foodnamejp' => "海老ニンニクソース炒め",
            'price' => "980",
            'image' => "images/qRzh4H8njNKOVQ38weT1lDZfRUqXSmJmCu6L9wEL.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "5",
            'foodnamevn' => "Bò bóp thấu",
            'foodnamejp' => "牛サラダ",
            'price' => "680",
            'image' => "images/t99MTaHPL7pw50FT8aGechYG3NZniwvzslo6yHQ2.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "10",
            'foodnamevn' => "Gỏi bò",
            'foodnamejp' => "牛サラダ",
            'price' => "680",
            'image' => "images/t99MTaHPL7pw50FT8aGechYG3NZniwvzslo6yHQ2.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "9",
            'foodnamevn' => "Cơm chiên",
            'foodnamejp' => "チャーハン",
            'price' => "680",
            'image' => "images/tB0XYiCXOopGtAZsBYmQ1G544yHRRgJGcX56eZRh.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "12",
            'foodnamevn' => "Xôi trắng",
            'foodnamejp' => "おこわ",
            'price' => "200",
            'image' => "images/WHe2uixyGSKX6zB78VmIPGdnFChaHpFT14Dr3Wpr.jpeg",
            'status' => "1",
        ]);

        DB::table('foods')->insert([
            'foodtype' => "8",
            'foodnamevn' => "Phở bò",
            'foodnamejp' => "牛フォー",
            'price' => "680",
            'image' => "images/YJ8VxRf0ij3jwfuGYTlhreeEskPJaqnjXMmPMGTw.jpeg",
            'status' => "1",
        ]);

        // Thêm loại thức uống

        DB::table('drink_types')->insert([
            'name' => "Thức uống mới",
        ]);

        DB::table('drink_types')->insert([
            'name' => "Nước ngọt",
        ]);

        DB::table('drink_types')->insert([
            'name' => "Bia",
        ]);

        DB::table('drink_types')->insert([
            'name' => "ハイボール",
        ]);

        DB::table('drink_types')->insert([
            'name' => "Cocktail",
        ]);

        DB::table('drink_types')->insert([
            'name' => "酎ハイ",
        ]);

        DB::table('drink_types')->insert([
            'name' => "Rượu",
        ]);

    }
}
