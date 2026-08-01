<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

/**
 * 當我說「歸檔」時，請執行以下步驟：
 *
 * 1. **檢查狀態**：確認 `tasks.md` 所有項目皆為 `- [x]`（若有未完成項，停止歸檔並回報）。
 * 2. **移動目錄**：將 `sdd/<短名稱>/` 移動至 `sdd/archive/YYYY-MM-DD-<短名稱>/`。
 * 3. **總結回報**：回報歸檔完成，並附上一句話總結。
 */
class ArchiveCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:archive-command';

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
