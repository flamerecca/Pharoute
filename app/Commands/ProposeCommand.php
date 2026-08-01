<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

/**
 * 當我說「提案」時，請執行以下步驟：
 *
 * 1. **命名與分類**：
 * - 取英文短名稱（小寫、連字號，如 `fix-login`）。
 * - 分類為：`新功能` / `修 bug` / `重構`（三選一）。
 * 2. **建立 `sdd/<短名稱>/proposal.md`**，內容包含：
 * - `## 為什麼做`：解決什麼問題。
 * - `## 要改什麼`：行為變更（條列）。
 * - `## 影響範圍`：預計新增或修改的檔案。
 * 3. **建立 `sdd/<短名稱>/tasks.md`**，內容包含：
 * - **任務清單**：使用 `- [ ]` 格式，每項限 1 小時內完成，總數不超過 10 條（若超標，提醒我拆分）。
 * - `## 驗收條件`：用白話「情境」描述（格式：`情境：當...就...`）。
 * 4. **停下等待**：貼出提案重點，**除非我說「開始實作」，否則不寫任何程式碼**。
 */
class ProposeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:propose-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }

    /**
     * Define the command's schedule.
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
