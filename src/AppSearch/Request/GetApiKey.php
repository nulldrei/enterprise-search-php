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

namespace Elastic\EnterpriseSearch\AppSearch\Request;

use Elastic\EnterpriseSearch\Request\Request;

/**
 * Retrieve an API key
 * @see https://www.elastic.co/guide/en/app-search/current/credentials.html#credentials-single
 */
class GetApiKey extends Request
{
	/**
	 * @param string $apiKeyName Name of an API key
	 */
	public function __construct(string $apiKeyName)
	{
		$this->method = 'GET';
		$api_key_name = urlencode($apiKeyName);
		$this->path = "/api/as/v1/credentials/$api_key_name";
	}
}
