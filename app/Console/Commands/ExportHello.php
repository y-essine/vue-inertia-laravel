<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ExportHello extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hello:export';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $dir_name = 'hello';
        $directory = public_path($dir_name);
        $filename = $dir_name . '-' . now() . '.txt';
        $file_path = public_path($dir_name . '/' . $filename);
        $this->info('Exporting to ' . $file_path);
        $content = 'Hello World';
        $result = file_put_contents($file_path, $content);
        $this->info('Hello World');
        return Command::SUCCESS;
    }
}
