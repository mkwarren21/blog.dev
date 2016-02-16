<?php

class Post extends BaseModel
{
    protected $table = 'posts';

    public static $rules = array(
		    'title'      => 'required|min:8|max:100',
		    'content'       => 'required'
		);

    public function setTitleAttribute($value)
    {
    	$this->attributes['title']= $value;
    	//this is so you never have to assign your slug in the database
    	$this->attributes['slug']= Str::slug($value);
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function tags()
    {
        return $this->belongsToMany('Tag');
    }
}

?>