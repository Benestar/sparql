<?php

class SubSelect implements GroupGraphPattern {

	/**
	 * @var SelectClause
	 */
	private $selectClause;

	/**
	 * @var GroupGraphPattern
	 */
	private $whereClause;

	/**
     * @var SolutionModifier
     */
	private $solutionModifier;

    /**
     * @var DataBlock
     */
	private $valuesClause;

}
