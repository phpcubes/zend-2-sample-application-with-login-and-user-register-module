<?php
    	$paginator = new \Zend\Paginator\Paginator($iteratorAdapter);
    	$matches = $this->getEvent()->getRouteMatch();
    	 $page      = $matches->getParam('page', 1);
    	 
    	$paginator->setCurrentPageNumber($page);
    	$paginator->setItemCountPerPage(2);
    	
    	return new ViewModel(array(
    			'albums' => $paginator,
    			'lang' => $matches->getParam('lang','en')
    	));