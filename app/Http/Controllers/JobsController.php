<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Job;
use Mail;

class JobsController extends Controller {
    
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('jobform', ['job' => Job::find($id)]);
	}

    /**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $job = Job::find($id);
        $job->status = 3;
        $job->activated = new \DateTime;
        if($job->save()) {
            $this->sendMail($job);
        }
        return Redirect::to('/jobs/'.$id.'/edit');
	}
    
    private function sendMail($job) {
        Mail::send('emails.activated', ['job' => $job], function($message) use ($job) {
            $message->from('no-reply@site.com', "Site name");
            $message->subject('Aktiválva');
            $message->to($job->sales_email);
        });
    }


        /**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
