<?php

class Post extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'title' => 'required',
		'slug' => 'required',
        'content' => 'required',
    );
    public function category()
    {
        return $this->belongsTo('Category', 'category_id');
    }
}
