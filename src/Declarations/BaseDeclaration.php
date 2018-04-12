<?php

class BaseDeclaration extends Declaration {

	private $iri;

	public function __construct($iri) {
		// TODO check iri
		$this->iri = $iri;
	}

}
