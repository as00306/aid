<?php

namespace App\Console\Commands;

use App\Services\AidService;

use Illuminate\Console\Command;

class Rate extends Command
{
    // 命令名稱
    protected $signature = 'rate';

    // 說明文字
    protected $description = '台灣銀行匯率';

    public function handle(AidService $service)
    {
        $service->rate();
    }
}
