<?php

/**
 * Elastic Enterprise Search
 *
 * @link      https://github.com/elastic/enterprise-search-php
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @generated This file is generated, please do not edit
 *
 * Licensed to Elasticsearch B.V under one or more agreements
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License
 * See the LICENSE file in the project root for more information
 */

declare(strict_types=1);

namespace Elastic\EnterpriseSearch\WorkplaceSearch\Request;

use Elastic\EnterpriseSearch\Request\Request;
use Elastic\EnterpriseSearch\WorkplaceSearch\Schema\ContentSourceIconDefinition;

/**
 * Upload content source icons
 * @see https://www.elastic.co/guide/en/workplace-search/current/workplace-search-content-sources-api.html#upload-content-source-icon-api
 */
class PutContentSourceIcons extends Request
{
	/**
	 * @param string $contentSourceId Unique ID for a Custom API source, provided upon creation of a Custom API Source
	 * @param ContentSourceIconDefinition $content_source_icon_definition
	 */
	public function __construct(string $contentSourceId, ContentSourceIconDefinition $content_source_icon_definition)
	{
		$this->method = 'PUT';
		$content_source_id = urlencode($contentSourceId);
		$this->path = "/api/ws/v1/sources/$content_source_id/icon";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $content_source_icon_definition;
	}
}
