<?php

class SelectQuery implements QueryBody {

	/**
	 * @var SelectClause
	 */
	private $selectClause;

    /**
     * @var DatasetClause[]
     */
	private $dataSetClauses = [];

    /**
     * @var GroupGraphPattern
     */
	private $whereClause;

    /**
     * @var SolutionModifier
     */
	private $solutionModifier;

	public function selectVariables($variables) {
		foreach ($variables as $var) {
			$this->selectClause->addSelectable(new Variable($var));
		}
	}

	public function selectExpressions($expressions) {
		foreach ($expressions as $expression => $var) {
			$this->selectClause->addSelectable(new ExpressionAsVariable(
				new Expression($expression),
				new Variable($var)
			));
		}
	}

}

