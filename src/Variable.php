<?php

class Variable implements Selectable, GroupCondition, VarOrIri {

	private $name;

	public function __construct($name) {
		// TODO check name
		$this->name = $name;
	}

}
