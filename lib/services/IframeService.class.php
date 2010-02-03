<?php
class iframe_IframeService extends f_persistentdocument_DocumentService
{
	/**
	 * @var iframe_IframeService
	 */
	private static $instance;

	/**
	 * @return iframe_IframeService
	 */
	public static function getInstance()
	{
		if (self::$instance === null)
		{
			self::$instance = self::getServiceClassInstance(get_class());
		}
		return self::$instance;
	}

	/**
	 * @return iframe_persistentdocument_iframe
	 */
	public function getNewDocumentInstance()
	{
		return $this->getNewDocumentInstanceByModelName('modules_iframe/iframe');
	}

	/**
	 * Create a query based on 'modules_iframe/iframe' model
	 * @return f_persistentdocument_criteria_Query
	 */
	public function createQuery()
	{
		return $this->pp->createQuery('modules_iframe/iframe');
	}
}