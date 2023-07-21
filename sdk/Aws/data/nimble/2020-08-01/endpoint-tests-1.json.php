<?php
// This file was auto-generated from sdk-root/src/data/nimble/2020-08-01/endpoint-tests-1.json
return [ 'testCases' => [ [ 'documentation' => 'For region ca-central-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://nimble-fips.ca-central-1.api.aws', ], ], 'params' => [ 'UseDualStack' => true, 'Region' => 'ca-central-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ca-central-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://nimble-fips.ca-central-1.amazonaws.com', ], ], 'params' => [ 'UseDualStack' => false, 'Region' => 'ca-central-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ca-central-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://nimble.ca-central-1.api.aws', ], ], 'params' => [ 'UseDualStack' => true, 'Region' => 'ca-central-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ca-central-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://nimble.ca-central-1.amazonaws.com', ], ], 'params' => [ 'UseDualStack' => false, 'Region' => 'ca-central-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-west-2 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://nimble-fips.us-west-2.api.aws', ], ], 'params' => [ 'UseDualStack' => true, 'Region' => 'us-west-2', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-west-2 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://nimble-fips.us-west-2.amazonaws.com', ], ], 'params' => [ 'UseDualStack' => false, 'Region' => 'us-west-2', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-west-2 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://nimble.us-west-2.api.aws', ], ], 'params' => [ 'UseDualStack' => true, 'Region' => 'us-west-2', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-west-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://nimble.us-west-2.amazonaws.com', ], ], 'params' => [ 'UseDualStack' => false, 'Region' => 'us-west-2', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region eu-west-2 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://nimble-fips.eu-west-2.api.aws', ], ], 'params' => [ 'UseDualStack' => true, 'Region' => 'eu-west-2', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region eu-west-2 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://nimble-fips.eu-west-2.amazonaws.com', ], ], 'params' => [ 'UseDualStack' => false, 'Region' => 'eu-west-2', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region eu-west-2 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://nimble.eu-west-2.api.aws', ], ], 'params' => [ 'UseDualStack' => true, 'Region' => 'eu-west-2', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region eu-west-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://nimble.eu-west-2.amazonaws.com', ], ], 'params' => [ 'UseDualStack' => false, 'Region' => 'eu-west-2', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ap-northeast-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://nimble-fips.ap-northeast-1.api.aws', ], ], 'params' => [ 'UseDualStack' => true, 'Region' => 'ap-northeast-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ap-northeast-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://nimble-fips.ap-northeast-1.amazonaws.com', ], ], 'params' => [ 'UseDualStack' => false, 'Region' => 'ap-northeast-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ap-northeast-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://nimble.ap-northeast-1.api.aws', ], ], 'params' => [ 'UseDualStack' => true, 'Region' => 'ap-northeast-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ap-northeast-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://nimble.ap-northeast-1.amazonaws.com', ], ], 'params' => [ 'UseDualStack' => false, 'Region' => 'ap-northeast-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ap-southeast-2 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://nimble-fips.ap-southeast-2.api.aws', ], ], 'params' => [ 'UseDualStack' => true, 'Region' => 'ap-southeast-2', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ap-southeast-2 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://nimble-fips.ap-southeast-2.amazonaws.com', ], ], 'params' => [ 'UseDualStack' => false, 'Region' => 'ap-southeast-2', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ap-southeast-2 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://nimble.ap-southeast-2.api.aws', ], ], 'params' => [ 'UseDualStack' => true, 'Region' => 'ap-southeast-2', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ap-southeast-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://nimble.ap-southeast-2.amazonaws.com', ], ], 'params' => [ 'UseDualStack' => false, 'Region' => 'ap-southeast-2', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://nimble-fips.us-east-1.api.aws', ], ], 'params' => [ 'UseDualStack' => true, 'Region' => 'us-east-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://nimble-fips.us-east-1.amazonaws.com', ], ], 'params' => [ 'UseDualStack' => false, 'Region' => 'us-east-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://nimble.us-east-1.api.aws', ], ], 'params' => [ 'UseDualStack' => true, 'Region' => 'us-east-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://nimble.us-east-1.amazonaws.com', ], ], 'params' => [ 'UseDualStack' => false, 'Region' => 'us-east-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://example.com', ], ], 'params' => [ 'UseDualStack' => false, 'Region' => 'us-east-1', 'UseFIPS' => false, 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips enabled and dualstack disabled', 'expect' => [ 'error' => 'Invalid Configuration: FIPS and custom endpoint are not supported', ], 'params' => [ 'UseDualStack' => false, 'Region' => 'us-east-1', 'UseFIPS' => true, 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack enabled', 'expect' => [ 'error' => 'Invalid Configuration: Dualstack and custom endpoint are not supported', ], 'params' => [ 'UseDualStack' => true, 'Region' => 'us-east-1', 'UseFIPS' => false, 'Endpoint' => 'https://example.com', ], ], ], 'version' => '1.0',];
