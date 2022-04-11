<?php

namespace Riclep\StoryblokForms\Blocks;

use Riclep\StoryblokForms\MultiInput;
use Riclep\StoryblokForms\Validators;

class LsfCheckbox extends MultiInput
{
	/**
	 * @var string The name of the textarea in Storyblok holding the checkbox options
	 */
	protected $siblingsName = 'checkboxes';
}