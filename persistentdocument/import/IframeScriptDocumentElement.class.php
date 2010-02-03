<?php
class iframe_IframeScriptDocumentElement extends import_ScriptDocumentElement
{
    /**
     * @return iframe_persistentdocument_iframe
     */
    protected function initPersistentDocument()
    {
    	return iframe_IframeService::getInstance()->getNewDocumentInstance();
    }
}