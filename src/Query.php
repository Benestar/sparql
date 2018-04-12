<?php

class Query {

	/**
	 * @var Declaration[]
	 */
	private $prologue = [];

    /**
     * @var QueryBody
     */
	private $queryBody;

    /**
     * @var DataBlock|null
     */
	private $valuesClause = null;

	public function addDeclaration(Declaration $declaration) {
		$this->prologue[] = $declaration;
	}

	public function addBaseDeclaration($iri) {
		$this->prologue[] = new BaseDeclaration($iri);
	}

	public function addPrefixDeclaration($ns, $iri) {
		$this->prologue[] = new PrefixDeclaration($ns, $iri);
	}

	public function addPrefixDeclarations(array $prefixes) {
		foreach ($prefixes as $ns => $iri) {
            $this->prologue[] = new PrefixDeclaration($ns, $iri);
		}
	}

	public function setQueryBody(QueryBody $queryBody) {
	    $this->queryBody = $queryBody;
    }

    public function setValuesClause(DataBlock $valuesClause) {
	    $this->valuesClause = $valuesClause;
    }

}
