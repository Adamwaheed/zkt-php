<div class="container-fluid">
    @if($attendance->message)
        <div class="alert alert-danger" role="alert">
            {{ $attendance->message}}
        </div>
    @endif

    <table class="table">
        <tbody>
        <tr>
            <td scope="col">ID</td>
            <td scope="col">{{ $attendance->id }}</td>
        </tr>

        <tr>
            <td scope="col">Name</td>
            <td scope="col">{{ $attendance->employee_name }}</td>
        </tr>

        <tr>
            <td scope="col">Employee No</td>
            <td scope="col">{{ $attendance->employee_number }}</td>
        </tr>

        <tr>
            <td scope="col">PIN</td>
            <td scope="col">{{ $attendance->pin }}</td>
        </tr>

        <tr>
            <td scope="col">date_time</td>
            <td scope="col">{{ $attendance->date_time }}</td>
        </tr>

        <tr>
            <td scope="col">Verified</td>
            <td scope="col">{{ $attendance->verified }}</td>
        </tr>

        <tr>
            <td scope="col">Work code</td>
            <td scope="col">{{ $attendance->work_code }}</td>
        </tr>

        <tr>
            <td scope="col">status</td>
            <td scope="col">{{ $attendance->status == 1 ? 'Out' : 'In' }}</td>
        </tr>
        @if($attendance->sync)
            <tr  class="success">
                <td scope="col">Syncs</td>
                <td scope="col">{{ $attendance->sync == true ? 'Yes' : 'No' }}</td>
            </tr>
        @endif

        @if(!$attendance->sync)
            <tr class="danger">
                <td scope="col">Sync</td>
                <td scope="col">{{ $attendance->sync == true ? 'Yes' : 'No' }}</td>
            </tr>
        @endif

        <tr>
            <td scope="col">Created at</td>
            <td scope="col">{{ $attendance->created_at }}</td>
        </tr>

        <tr>
            <td scope="col">Updated at</td>
            <td scope="col">{{ $attendance->updated_at }}</td>
        </tr>
        </tbody>
    </table>

</div>
