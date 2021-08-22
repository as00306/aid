<?php

namespace App\Services;

use Phattarachai\LineNotify\Facade\Line;
use DiDom\Document;

class AidService
{
    /**
     * 匯率管家
     *
     * @return void
     */
    public function rate()
    {
        $url = "https://rate.bot.com.tw/xrt";

        $document = new Document($url, true);

        // 台灣銀行賣出匯率(本行賣出)
        $usd = $document->find('tr')[2]->find('td')[2]->text();
        $jpy = $document->find('tr')[9]->find('td')[2]->text();

        $rate = "\n 美金匯率:$usd \n 日幣匯率:$jpy";

        Line::send($rate);
    }
}
