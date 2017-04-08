<?php

namespace App\Console\Commands;

use App\Jobs\MovieSourceReader;
use Illuminate\Console\Command;

class MovieDownloader extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'movie:download';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download of movies and subtitles';

    /**
     * Create a new command instance.
     *
     * @return MovieDownloader
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @param  MovieSourceReader $sourceReader
     *
     * @return void
     */
    public function handle(MovieSourceReader $sourceReader)
    {
        dispatch($sourceReader);
    }
}
