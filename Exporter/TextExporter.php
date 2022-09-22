<?php

namespace Exporter;

class TextExporter extends Exporter
{
	protected $format = '.txt';

	public function export()
	{
		$file_name = "text-file-" . rand(100, 999) . $this->format;
		$file_path = __DIR__ . "/files/$file_name";
		file_put_contents($file_path);
		echo "$file_name successfully created!\n";
	}
}