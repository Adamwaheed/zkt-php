<?php


namespace App\Traits;


trait SystemLog
{

    public function readerDelete($message)
    {
        $new = new \App\Models\SystemLog();
        $new->type = 'Reader delete';
        $new->message = $message;
        $new->save();
    }

    public function readerSync($message)
    {
        $new = new \App\Models\SystemLog();
        $new->type = 'Reader Sync';
        $new->message = $message;
        $new->save();
    }


    public function pushAttendance($message)
    {
        $new = new \App\Models\SystemLog();
        $new->type = 'Attendance Push';
        $new->message = $message;
        $new->save();
    }

}
