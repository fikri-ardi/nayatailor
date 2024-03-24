<?php

namespace Database\Seeders;

use App\Models\Media;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $media = [
            [
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/J2iYxTHpNkuRdOzrdaww9prpEnQ=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/skechers-7017-5319034-1.jpg'
                ],
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/SoSGvygKGQX1-Zh23SZ1CZt_B_4=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/skechers-7017-5319034-2.jpg'
                ],
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/D1dA5Kz7vFCZBJqajil1jVgeu8c=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/skechers-7017-5319034-3.jpg'
                ],
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/gyzKRoVBks1sEgEHw976gWUIAtg=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/skechers-7018-5319034-4.jpg'
                ],
            ],
            [
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/PTZAW4lndsOkx2WFpC7SgwX2idQ=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/emba-jeans-1384-1327144-1.jpg'
                ],
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/kSWXwm1EpRv0iX3Br-6SElJtJ30=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/emba-jeans-1384-1327144-2.jpg'
                ],
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/LZbKjwL3XjEFQA8s0IRs3FyZy94=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/emba-jeans-1384-1327144-3.jpg'
                ],
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/LZbKjwL3XjEFQA8s0IRs3FyZy94=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/emba-jeans-1384-1327144-3.jpg'
                ],
            ],
            [
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/as8bhat1_u44b3GurR5umK7uutU=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/hush-puppies-7122-0463814-1.jpg'
                ],
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/xj3cxxzvxE7F7Mm5SguAM1ufxgU=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/hush-puppies-8988-0463814-2.jpg'
                ],
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/DSwBihaVtb4MLMB-MhpfKYoPQJA=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/hush-puppies-8989-0463814-3.jpg'
                ],
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/3-jFBmBAwannmwCt6Qse2caG70o=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/hush-puppies-8989-0463814-4.jpg'
                ],
            ],
            [
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/BSTMScN_UNzq8_ieGRAN3U0yP4g=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/salt-n-pepper-5096-5359904-1.jpg'
                ],
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/vSbb9CklJLwq-x6kV4gvMKk1nsc=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/salt-n-pepper-5096-5359904-2.jpg'
                ],
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/DUr7aYIuFK7Hxip7vnZRlvU3Cbc=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/salt-n-pepper-5097-5359904-3.jpg'
                ],
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/lNI_Z4bB52yfkkl3Ky1XmEXcHag=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/salt-n-pepper-5097-5359904-4.jpg'
                ],
            ],
            [
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/w38uCzdSjbAtuhucxhf9g_z97ek=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/batik-talenta-exclusive-2911-7839313-1.jpg'
                ],
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/IMId5s-9_p16uEHwbLoxbnBP0NM=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/batik-talenta-exclusive-2911-7839313-2.jpg'
                ],
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/BWWxUR4f0Bdrhr56JK9i7vlLKiY=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/batik-talenta-exclusive-2911-7839313-3.jpg'
                ],
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/dEyxzXnxiyfF9pHSvvR2uyCaZgU=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/batik-talenta-exclusive-2912-7839313-5.jpg'
                ],
            ],
            [
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/tr3u-ReF9E9UIbNDLHI9ku574r0=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/edwin-jeans-4155-3637414-1.jpg'
                ],
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/IjeZvDsmzb-6jC0dOru_3kYYfJk=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/edwin-jeans-4155-3637414-2.jpg'
                ],
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/Cd30SVDQsRetBcImJ-B1Skp2KXY=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/edwin-jeans-4155-3637414-3.jpg'
                ],
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/6xNMnHcGFDc8RhtVGQRMsk593Ks=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/edwin-jeans-4155-3637414-4.jpg'
                ],
            ],
            [
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/VO1APLjagxrlQ7jBazMmDe6kYC8=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/trendyol-3264-8088634-1.jpg'
                ],
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/YB-dCjBs1YSFQcjQFj94AyKBXlg=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/trendyol-3264-8088634-2.jpg'
                ],
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/0xkkdLnZ-qZqYkSc1irYA4crBYA=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/trendyol-3264-8088634-3.jpg'
                ],
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/fg7umcEmPmGwR4voT4etVgrap-Y=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/trendyol-3265-8088634-4.jpg'
                ],
            ],
            [
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/OtXHXSwI-LlrOBVKHeiKw0-C2-M=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/house-of-cuff-2492-0111862-1.jpg'
                ],
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/SRbG9nOwoiIa6iBsoRsnsJcBbeU=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/house-of-cuff-2492-0111862-2.jpg'
                ],
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/bFeWhWN1gmQbXPcsraetw-l74Gk=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/house-of-cuff-2492-0111862-3.jpg'
                ],
                [
                    'type' => 'image',
                    'url' => 'https://dynamic.zacdn.com/dAfg6MpWyVahiQ6N31j7oJhrGCQ=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/house-of-cuff-2492-0111862-4.jpg'
                ],
            ],
        ];
        for ($i = 1; $i < 9; $i++) {
            $product = Product::find($i);
            foreach ($media[$i - 1] as $image) {
                $product->media()->create($image);
            }
        }
    }
}
