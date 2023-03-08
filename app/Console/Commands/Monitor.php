<?php

namespace App\Console\Commands;

use App\Models\Morph;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class Monitor extends Command
{
    protected $signature = 'uptime:monitor';
    protected $description = 'This monitoring command is for ';

    public function handle(): void
    {
        $website = Morph::select('name', 'url', 'active')->get();
        foreach ($website as $web) {
            try {
                $resp = Http::get($web->url);
                if($resp->ok()) {
                    $web->active = true;
                } else {
                    $web->active = false;
                }
            } catch (Exception $ex) {
                $web->active = false;
            }

            Log::info('This command is for '.$web->name);
            $web->save();
        }
    }
}
