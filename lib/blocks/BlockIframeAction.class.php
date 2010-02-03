<?php
class iframe_BlockIframeAction extends block_BlockAction
{
	/**
	 * Récupère l'id de la note a affiché de la QS. Si on visualise la page dans une nouvelle
	 * fenêtre à partir du back office.
	 *
     * @param block_BlockContext $context
     * @param block_BlockRequest $request
     * @return String view name
	 */
	public function execute($context, $request)
	{
		$iframe = $this->getDocumentParameter();

		if(($context->getGlobalRequest()->getParameter('action') == 'PreviewPage' || $context->inBackofficeMode()) || $iframe->isPublicated())
		{
			$url = $iframe->getUrl();
			$websiteUrl = website_WebsiteModuleService::getInstance()->getCurrentWebsite()->getUrl();

			if(strpos($url, $websiteUrl) === false)
			{
				$this->setParameter('iframe', $iframe);
			}
			else
			{
				return block_BlockView::ERROR ;
			}
			if(!$iframe->isPublicated())
			{
				$this->setParameter('iframeNotPublished', true);
			}
			return block_BlockView::SUCCESS ;
		}
		return block_BlockView::NONE ;
	}

	function executeBackoffice($context, $request)
	{
		$iframe = $this->getDocumentParameter();
		$this->setParameter('iframe', $iframe);
		return "Backoffice";
	}
}
