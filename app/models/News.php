<?php

class News extends Eloquent{

	public function index(){
		return News::get();
	}

}
