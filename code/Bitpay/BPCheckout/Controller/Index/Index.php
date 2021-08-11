<?php

namespace Bitpay\BPCheckout\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    /** @var PageFactory  */
	protected $pageFactory;

    /**
     * @param Context $context
     * @param PageFactory $pageFactory
     */
	public function __construct(
		Context $context,
		PageFactory $pageFactory)
	{
		$this->pageFactory = $pageFactory;
		return parent::__construct($context);
	}

    /**
     * Create new page
     *
     * @return Page
     */
	public function execute(): Page
    {
		return $this->pageFactory->create();
	}
}
