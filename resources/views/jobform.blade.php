<!DOCTYPE html>
<html>
<head>
  <title>Job</title>
</head>
<body>
    <h1>Job</h1>
    {!! Form::open(array('action' => ['JobsController@update', $job->id],'method' => 'PUT')) !!}
    Name:<br/>
    {!! $job->name !!}<br/>
    Status:<br/>
    {!! $job->statusToString !!}<br/>
    {!! Form::submit('Aktiválás') !!}
    {!! Form::close() !!}
</body>
</html>