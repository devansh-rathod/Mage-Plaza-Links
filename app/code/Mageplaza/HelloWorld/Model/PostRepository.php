<?php
namespace Mageplaza\HelloWorld\Model;

use Mageplaza\HelloWorld\Api\PostRepositoryInterface;
use Mageplaza\HelloWorld\Api\Data\PostInterface;
use Mageplaza\HelloWorld\Model\ResourceModel\Post as ResourcePost;
use Mageplaza\HelloWorld\Model\ResourceModel\Post\CollectionFactory as PostCollectionFactory;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\CouldNotDeleteException;

class PostRepository implements PostRepositoryInterface
{
    protected $resource;

    protected $postFactory;

    protected $postCollectionFactory;

    public function __construct(
        ResourcePost $resource,
        PostFactory $postFactory,
        PostCollectionFactory $postCollectionFactory
    ) {
        $this->resource = $resource;
        $this->postFactory = $postFactory;
        $this->postCollectionFactory = $postCollectionFactory;
   
::contentReference[oaicite:0]{index=0}
 
