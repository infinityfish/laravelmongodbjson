<?php

class QuestionsController extends BaseController {

	/**
	 * Question Repository
	 *
	 * @var Question
	 */
	protected $question;

	public function __construct(Question $question)
	{
		$this->question = $question;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		$questions = $this->question->all();
		return Response::json($questions);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */


	public function show($id)
	{
		// $question = $this->question->where('questionid', '=', $id);

		$question = DB::collection('questions')->where('questionid', $id)->first();
		return Response::json($question);
	}

}
