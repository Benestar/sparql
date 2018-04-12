<?php

class PrefixDeclaration extends Declaration {

	private $ns;
	private $iri;

	public function __construct($ns, $iri) {
		// TODO check ns and iri
		$this->ns = $ns;
		$this->iri = $iri;
	}

}
