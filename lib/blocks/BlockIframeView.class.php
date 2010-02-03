<?php
class iframe_BlockIframeSuccessView extends block_BlockView
{
	/**
	 * @param block_BlockContext $context
	 * @param block_BlockRequest $request
     * @return void
	 */
	public function execute($context, $request)
	{
		$this->setTemplateName('BlockIframe');
		$this->setAttributes($this->getParameters());
	}
}

class iframe_BlockIframeBackofficeView extends block_BlockView
{
	/**
	 * @param block_BlockContext $context
	 * @param block_BlockRequest $request
     * @return void
	 */
	public function execute($context, $request)
	{
		$this->setTemplateName('BlockIframeBack');
		$this->setAttributes($this->getParameters());
	}
}


class iframe_BlockIframeErrorView extends block_BlockView
{
	/**
	 * @param block_BlockContext $context
	 * @param block_BlockRequest $request
     * @return void
	 */
	public function execute($context, $request)
	{
		$this->setTemplateName('BlockIframeError');
	}
}
