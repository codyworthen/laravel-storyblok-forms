<?php

namespace Riclep\StoryblokForms;

use Illuminate\Support\Str;

class Validator
{
	/**
	 * @var
	 */
	protected $settings;

	/**
	 * @param $settings
	 */
	public function __construct($settings)
	{
		$this->settings = $settings;
	}

	/**
	 * @return string
	 */
	public function rule() {
		// TODO - custom string...
		// TODO - custom class - bespoke validator class?
		// TODO or use https://github.com/square/laravel-hyrule ?

		// single parameter validators
		if (array_key_exists('parameter', $this->settings)) {
			return Str::afterLast($this->settings['component'], '-') . ':' . $this->settings['parameter'];
		}

		return Str::afterLast($this->settings['component'], '-');
	}

	/**
	 * @return mixed
	 */
	public function errorMessage() {
		return $this->settings['error_message']; // TODO or default
	}
}