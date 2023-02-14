<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Message;
use Illuminate\Support\Facades\File;

class ExportMessages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'messages:export';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export messages to a file';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $dir_name = 'exports';
        // create a directory and prepare file name
        $directory = public_path($dir_name);
        if (!File::exists($directory)) {
            File::makeDirectory($directory);
        }
        $filename = $dir_name . '-' . now() . '.txt';
        $file_path = public_path($dir_name . '\\' . $filename);
        $this->info('Exporting to ' . $file_path);
        // format data
        $headers = ['id', 'user', 'content', 'created_at'];
        $messages = Message::latest()->take(5)->get()->map(function ($message) {
            return [
                $message->id,
                $message->user->name,
                $message->message,
                $message->created_at,
            ];
        });
        $content = implode(',', $headers) . PHP_EOL;
        $content .= $messages->map(function ($message) {
            return implode(',', $message);
        })->implode("\n");

        // write to file
        $result = file_put_contents($file_path, $content);

        $this->info('Exported');
        return Command::SUCCESS;
    }
}
