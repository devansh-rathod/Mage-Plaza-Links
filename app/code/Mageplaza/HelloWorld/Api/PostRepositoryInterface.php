<?php
namespace Mageplaza\HelloWorld\Api;

use Mageplaza\HelloWorld\Api\Data\PostInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

interface PostRepositoryInterface
{
    public function save(PostInterface $post);

    public function getById($postId);

    public function delete(PostInterface $post);

    public function deleteById($postId);

    public function getList(SearchCriteriaInterface $searchCriteria);
}
