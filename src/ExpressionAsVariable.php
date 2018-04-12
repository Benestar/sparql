<?php

class ExpressionAsVariable implements Selectable, GroupCondition {

	private $expression;
	private $variable;

	public function __construct(Expression $expression, Variable $variable) {
		$this->expression = $expression;
		$this->variable = $variable;
	}
}
