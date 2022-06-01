<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 *
 * Modified by __root__ on 01-June-2022 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Deconf\SEIWP\Google\Service\Analytics\Resource;

use Deconf\SEIWP\Google\Service\Analytics\Segments;

/**
 * The "segments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Deconf\SEIWP\Google\Service\Analytics(...);
 *   $segments = $analyticsService->segments;
 *  </code>
 */
class ManagementSegments extends \Deconf\SEIWP\Google\Service\Resource
{
  /**
   * Lists segments to which the user has access.
   * (segments.listManagementSegments)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param int max-results The maximum number of segments to include in this
   * response.
   * @opt_param int start-index An index of the first segment to retrieve. Use
   * this parameter as a pagination mechanism along with the max-results
   * parameter.
   * @return Segments
   */
  public function listManagementSegments($optParams = [])
  {
    $params = [];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], Segments::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ManagementSegments::class, 'Google_Service_Analytics_Resource_ManagementSegments');
