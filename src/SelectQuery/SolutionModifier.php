<?php

class SolutionModifier {

    /**
     * @var GroupCondition[]
     */
    private $groupClause = [];

    /**
     * @var Constraint[]
     */
    private $havingClause = [];

    /**
     * @var OrderCondition[]
     */
    private $orderClause = [];

    /**
     * @var int|null
     */
    private $limit = null;

    /**
     * @var int|null
     */
    private $offset = null;

}