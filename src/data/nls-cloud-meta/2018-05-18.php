<?php
return [ 'product' => [ 'name' => 'nls-cloud-meta', 'domain' => 'nls-meta.[RegionId].aliyuncs.com', 'type' => 'Outer', ], 'version' => [ 'product' => 'nls-cloud-meta', 'name' => '2018-05-18', 'apiStyle' => 'ROA', ], 'api' => [ 'CreateToken' => [ 'attributes' => [ 'visibility' => 'Public', 'version' => '2018-05-18', 'showJsonItemName' => 'true', 'name' => 'CreateToken', 'parameterType' => 'Single', 'authType' => 'AK', 'responseLog' => 'enable', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'nls-cloud-meta', 'keepClientResourceOwnerId' => 'true', ], 'parameters' => NULL, 'IspProtocol' => [ 'protocol' => 'http', 'sign' => 'false', 'signKeyName' => '', 'resultType' => 'Object', 'httpHost' => 'http://nls-meta-${RegionId}.aliyun-inc.com', 'timeout' => '1000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTPS|HTTP', 'pattern' => '/pop/2018-05-18/tokens', 'method' => 'POST', ], 'FlowControl' => [ 'apiDefault' => '1000', 'controlUnit' => 'Second', ], 'name' => 'CreateToken', ], ],];