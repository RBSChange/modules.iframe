<?php
class iframe_ActionBase extends f_action_BaseAction
{
		
	/**
	 * Returns the iframe_IframeService to handle documents of type "modules_iframe/iframe".
	 *
	 * @return iframe_IframeService
	 */
	public function getIframeService()
	{
		return iframe_IframeService::getInstance();
	}
		
}