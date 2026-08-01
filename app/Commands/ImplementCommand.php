<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

/**
 * 當我說「實作」時，請執行以下步驟：
 *
 * 1. **閱讀規格**：先讀 `proposal.md` 與 `tasks.md`，確認上下文。
 * 2. **單一執行**：由上至下，一次只做一條 `- [ ]`。優先重複使用現有程式碼。
 * 3. **驗證勾選**：完成後對照「驗收條件」，確認無誤後將 `- [ ]` 改為 `- [x]`。
 * 4. **即時回報**：每完成一條即簡短回報，再進行下一條。
 * 5. **異常中斷**：若發現規格有誤或方向不對，立即停下討論，不硬幹。
 * 6. **完成驗收**：全部打勾後，回報「全部完成」並請我驗收。
 */
class ImplementCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:implement-command';

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
