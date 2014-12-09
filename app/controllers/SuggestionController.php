<?php

class SuggestionController extends BaseController
{
    public function getIndex()
    {
    	$suggestions = Suggestion::all();
        return View::make('suggestion_index')->with('suggestions',$suggestions);
    }

    public function getCreate()
    {
        return View::make('suggestion_add');
    }

    public function postCreate()
    {
        $rules = array(
        'suggestion_text' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()) {
        return Redirect::to('/create_suggestion')
        ->with('flash_message', 'You did not make a suggestion.')
        ->withInput()
        ->withErrors($validator);
        }

        $suggestion = new Suggestion();
        $suggestion->subject = Input::get('subject');
        $suggestion->suggestion_text = Input::get('suggestion_text');
        $suggestion->user_id = Auth::user()->getId();
        $suggestion->save(); 
        return Redirect::action('SuggestionController@getIndex')->with('flash_message', 'Thank you for your input.'); 
    }
}