<?php

class Item extends Eloquent{
	protected $fillable = array('owner_id','name','done');

	public function mark() {

		$this->done= $this->done ? false :true;
		$this->save();

	}
}