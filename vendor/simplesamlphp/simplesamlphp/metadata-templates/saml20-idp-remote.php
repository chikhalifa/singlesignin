<?php

/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */
$metadata['https://sts.windows.net/6762e8f8-825b-400d-961f-f010c25b02f5/'] = [
    'entityid' => 'https://sts.windows.net/6762e8f8-825b-400d-961f-f010c25b02f5/',
    'contacts' => [],
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://login.microsoftonline.com/6762e8f8-825b-400d-961f-f010c25b02f5/saml2',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://login.microsoftonline.com/6762e8f8-825b-400d-961f-f010c25b02f5/saml2',
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://login.microsoftonline.com/6762e8f8-825b-400d-961f-f010c25b02f5/saml2',
        ],
    ],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC8DCCAdigAwIBAgIQXbvVi/ezvKBF34YAVz/BqzANBgkqhkiG9w0BAQsFADA0MTIwMAYDVQQDEylNaWNyb3NvZnQgQXp1cmUgRmVkZXJhdGVkIFNTTyBDZXJ0aWZpY2F0ZTAeFw0yMjAxMDcxMDEzNDJaFw0yNTAxMDcxMDEzNDFaMDQxMjAwBgNVBAMTKU1pY3Jvc29mdCBBenVyZSBGZWRlcmF0ZWQgU1NPIENlcnRpZmljYXRlMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA3nCz3zQ2nM3/Hnnxos+gf4YRzEmTqKtHg2waN/Gv2mqQyaGFGrpJDRCXCfLOXpl2/xEI8ZIwqkYIo73b0NgjgANFdHZfwwEbYykgPvUH1sJkQARgN5KA4oP7szEq5oTYz06qtRF7OAcxYRrjd+TZBngro54A4UdwPt6u2vSR+DMfvfnBu3nTOuauNWJxX8BuemPyxa8FJO/nf5PZkkClGuN2EFQoSabyxDXa4he/Aj3ggbLK4rvs9flT91Qwzb991u/D6YVsSamF9tVsFkiAgjyxYhoIzqUPQavKQbszyp1yl4M87VFgHcUwzGzNKYFB47Wdh90KVNVkFQi4c69KRQIDAQABMA0GCSqGSIb3DQEBCwUAA4IBAQB5jNv9LkXKyCOUHE3XM50mu4yqebSphgGhSjXpuq40mJNEFkMVmY2/41/ucxHqYsHankfLLnQpDosneuSb2UtZeDNM5oUPz10QXfc1+x72elMrzO6/WI0wE93MvscnHI6/81QT59PCgKwYqVXCad2R9rzmemrXnjIa4e6vGLJgSfR3B/IBAytwQdCh8CWDx3YJ+YOdWIa32B9QOwqoJtQH6/zBXjvUlooc95TCyQl2iANeZk/7xNU0oS5/atmUBl2pQirTnsh6x387R2FP4wSeKtTBFm1u1c1e5ejOtQQm1eLCH4AEgv4F17DkSuC249K9QqdaPoCa3fjKCQMCit9C',
        ],
    ],
];


