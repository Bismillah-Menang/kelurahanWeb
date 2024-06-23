<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\AdminController;

class DeleteOldRecords extends Command
{
    protected $signature = 'records:delete-old';
    protected $description = 'Delete records older than 24 hours';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $adminController = new AdminController();
        $adminController->deleteOldRecords();
        $this->info('Old records deleted successfully.');
    }
}
