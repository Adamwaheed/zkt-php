<?php

namespace App\Console\Commands;

use App\Models\Attendance;
use App\Models\Reader;
use App\Traits\SystemLog;
use Illuminate\Console\Command;
use TADPHP\TADFactory;
use TADPHP\TAD;

class SyncAttendance extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    use SystemLog;
    protected $signature = 'sync:attendance';

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


        $readers = Reader::where('status', 1)->select('id', 'ip', 'internal_id', 'com_key', 'description', 'soap_port', 'udp_port', 'encoding')->get()->toArray();
        foreach ($readers as $reader) {
            /*
             initializing readers
            */
            $tad_factory = new TADFactory($reader);

            /*
             * get instance
             */
            $tad = $tad_factory->get_instance();
            /*
             * get all attendance logs of specific Machines
             */
            $logs = $tad->get_att_log();

            foreach ($logs->to_array() as $logs) {

                foreach ($logs as $log) {

                    $exists = Attendance::where('date_time', $log['DateTime'])->where('pin', $log['PIN'])->first();
                    if (!$exists) {
                        $attendance = new Attendance();
                        $attendance->pin = $log['PIN'];
                        $attendance->date_time = $log['DateTime'];
                        $attendance->verified = $log['Verified'];
                        $attendance->work_code = $log['WorkCode'];
                        $attendance->status = $log['Status'];
                        $attendance->reader_id = $reader['id'];
                        if ($attendance->save()) {
                            $this->readerSync('New Data Synced from reader =>' . $log['PIN']);
                        }
                    } else {
                        $this->readerSync('the Record is already exist =>' . $log['PIN'] . ' and  ' . $log['DateTime']);
                    }
                }
            }
        }
    }

}
