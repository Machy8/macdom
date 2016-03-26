<?php

/**
 *
 * This file is part of the Macdom
 *
 * Copyright (c) 2015-2016 Vladimír Macháček
 *
 * For the full copyright and license information, please view the file license.md that was distributed with this source code.
 *
 */

namespace Machy8\Macdom\Macros;

class MacrosInstaller {

	protected $macros = [];

	/**
	 * @param string $fnName
	 * @param string $macroId
	 */
	protected function addMacro($fnName, $macroId) {
		if (!in_array($macroId, $this->macros))
			$this->macros[$macroId] = $fnName;
	}

	/**
	 * @param string $macroId
	 * @param function $function
	 */
	public function addCustomMacro($macroId, $function) {
		if ($macroId && $function) {
			if (!in_array($macroId, $this->macros)) {
				$this->macros[] = $macroId;
				$this->macros[$macroId]['function'] = $function;
			}
		}
	}
}
