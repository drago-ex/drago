<?php

/**
 * Extending for Nette Framework.
 * Copyright (c) 2015, Zdeněk Papučík
 *
 * @package Drago
 */
namespace Drago\Application\UI;
use Nette;

/**
 * Flash messages that we want to distinguish from their importance.
 * @author Zdeněk Papučík
 */
class Flash
{
	use Nette\StaticClass;
	const
		Warning = 'warning',
		Success = 'success',
		Info = 'info';
}
