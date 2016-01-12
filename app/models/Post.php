<?php

class Post extends Eloquent
{
    protected $table = 'posts';

    public static $rules = array(
		    'title'      => 'required|min:8|max:100',
		    'subtitle'      => 'required|min:8|max:100',
		    'body'       => 'required|max:10000'
		);
}

?>