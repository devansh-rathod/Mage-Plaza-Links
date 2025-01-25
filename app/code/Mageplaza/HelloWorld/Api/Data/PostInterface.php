<?php
namespace Mageplaza\HelloWorld\Api\Data;

interface PostInterface
{
    const POST_ID = 'post_id';
    const NAME = 'name';
    const CONTENT = 'post_content';
    const URL_KEY = 'url_key';
    const TAGS = 'tags';
    const STATUS = 'status';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function getId();

    public function getName();

    public function getContent();

    public function getUrlKey();

    public function getTags();

    public function getStatus();

    public function getCreatedAt();

    public function getUpdatedAt();

    public function setId($id);

    public function setName($name);

    public function setContent($content);

    public function setUrlKey($urlKey);

    public function setTags($tags);

    public function setStatus($status);

    public function setCreatedAt($createdAt);

    public function setUpdatedAt($updatedAt);
}
