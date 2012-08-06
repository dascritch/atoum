<?php

namespace mageekguy\atoum\tests\units\fcgi\records\responses;

use
	mageekguy\atoum,
	mageekguy\atoum\fcgi\records\responses\stderr as testedClass
;

require_once __DIR__ . '/../../../../runner.php';

class stderr extends atoum\test
{
	public function testClass()
	{
		$this->testedClass->isSubclassOf('mageekguy\atoum\fcgi\records\response');
	}

	public function testClassConstants()
	{
		$this->string(testedClass::type)->isEqualto(7);
	}

	public function test__construct()
	{
		$this
			->if($record = new testedClass($requestId = uniqid(), $contentData = uniqid()))
			->then
				->string($record->getType())->isEqualTo(testedClass::type)
				->string($record->getRequestId())->isEqualTo($requestId)
				->string($record->getContentData())->isEqualTo($contentData)
		;
	}
}