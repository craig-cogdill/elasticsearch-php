<?php

declare(strict_types = 1);

namespace Elasticsearch\Endpoints;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Render
 *
 * @category Elasticsearch
 * @package Elasticsearch\Endpoints
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */

class RenderSearchTemplate extends AbstractEndpoint
{
    /**
     * @return $this
     */
    public function setBody(?array $body): RenderSearchTemplate
    {
        if (isset($body) !== true) {
            return $this;
        }

        $this->body = $body;
        return $this;
    }

    public function getURI(): string
    {
        $id = $this->id;

        $uri   = "/_render/template";

        if (isset($id) === true) {
            $uri = "/_render/template/$id";
        }

        return $uri;
    }

    public function getParamWhitelist(): array
    {
        return [];
    }

    public function getBody(): array
    {
        return $this->body;
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}
