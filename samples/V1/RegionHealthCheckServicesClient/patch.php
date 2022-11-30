<?php
/*
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START compute_v1_generated_RegionHealthCheckServices_Patch_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\Compute\V1\HealthCheckService;
use Google\Cloud\Compute\V1\RegionHealthCheckServicesClient;
use Google\Rpc\Status;

/**
 * Updates the specified regional HealthCheckService resource with the data included in the request. This method supports PATCH semantics and uses the JSON merge patch format and processing rules.
 *
 * @param string $healthCheckService Name of the HealthCheckService to update. The name must be 1-63 characters long, and comply with RFC1035.
 * @param string $project            Project ID for this request.
 * @param string $region             Name of the region scoping this request.
 */
function patch_sample(string $healthCheckService, string $project, string $region): void
{
    // Create a client.
    $regionHealthCheckServicesClient = new RegionHealthCheckServicesClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $healthCheckServiceResource = new HealthCheckService();

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $regionHealthCheckServicesClient->patch(
            $healthCheckService,
            $healthCheckServiceResource,
            $project,
            $region
        );
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            printf('Operation completed successfully.' . PHP_EOL);
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $healthCheckService = '[HEALTH_CHECK_SERVICE]';
    $project = '[PROJECT]';
    $region = '[REGION]';

    patch_sample($healthCheckService, $project, $region);
}
// [END compute_v1_generated_RegionHealthCheckServices_Patch_sync]
