<?php

namespace App\Console\Commands;

use App\Models\Attendance;
use App\Traits\SystemLog;
use Illuminate\Console\Command;

class PushAttendance extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    use SystemLog;
    protected $signature = 'push:attendance';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $attendance = Attendance::where('sync', 0)->take(30)->orderBy('updated_at', 'asc')->get()->toArray();

        $client = new \GuzzleHttp\Client();
        $response = $client->post(
            'http://3022661891d9.ngrok.io/api/sync_attendance',
            array(
                'form_params' => $attendance
            )
        );

        $data = json_decode($response->getBody(), true);
        foreach ($data as $item) {
            $attendance = Attendance::find($item['id']);
            $attendance->sync = $item['sync'];
            if ($item['sync']) {
                $this->pushAttendance('New Attendance Record has been Pushed to the cloud');
            } else {
                $this->pushAttendance('Failed to Push Attendance to cloud due to' . $item['message']);
            }
            $attendance->message = $item['message'];
            $attendance->employee_name = $item['employee_name'];
            $attendance->employee_number = $item['employee_number'];
            $attendance->save();
        }


    }
}
