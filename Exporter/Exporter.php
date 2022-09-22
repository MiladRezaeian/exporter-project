<?php

namespace Exporter;

interface Exportable
{
	public function export();
}

abstract class Exporter implements Exportable
{
	protected $format;
	protected $data;

	public function __construct($data)
	{
		$this->data = $data;
		if (!$this->is_valid()) {
			die("Invalid Data!");
		}
	}

	public function is_valid(): bool
	{
		foreach ($this->data as $field) {
			if (empty($field)) {
				return false;
			}
		}
		return true;
	}
}