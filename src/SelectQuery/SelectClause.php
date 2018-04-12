<?php

class SelectClause {

	const MODE_DEFAULT = '';
	const MODE_DISTINCT = 'DISTINCT';
	const MODE_REDUCED = 'REDUCED';

	/**
	 * @var string one of the `MODE_` constants
	 */
	private $mode = self::MODE_DEFAULT;

	/**
	 * @var Selectable[] empty array means `*`
	 */
	private $selectables = [];

	public function setMode($mode) {
        if (!in_array($mode, [self::MODE_DEFAULT, self::MODE_DISTINCT, self::MODE_REDUCED])) {
            throw new InvalidArgumentException('Invalid value for mode');
        }

		$this->mode = $mode;
	}

	public function addSelectable(Selectable $selectable) {
		$this->selectables[] = $selectable;
	}
}
