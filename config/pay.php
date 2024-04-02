<?php
use Yansongda\Pay\Pay;

return [
    'alipay' => [
        'app_id'         => '9021000135683039',
        // 'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvHAze8JsGC3+BYzplrQPP6dU3b+20NLh5DzbC0m5m5S+/3cjNOo802nMnMyGkkcuRfc2VNJd5epN5X1p/baJPv9GcPkbHOEEFj3FiKi85zoGHdBCYr+OkPshEQ7eTnCt84SKTeZeuBf7RmBqxmneL8qGpbI19+c91Xg3ni0MQMrNTll3ffBSzRXL6KWrotT1JC4I1BUK0uYcPFzME+irlfm/fLcYFyb9eOhUImDI6K9Dl14RFJIHhUlAEWWScnki+4jtolFugU54ZoegVq9phtq0NMbaMVuuXHwRAnreg9OOt+7Qkpt3z2NnzteNaNiCIzjQu69+NQSmTyTRA5h0ywIDAQAB',
        // 'private_key'    => 'MIIEogIBAAKCAQEAydsKuqzCl1//2UUlGWOadeAAddr3TBIwIpuz+2BU7+dyFGz/c80jxmyi16QbDuOk7n64xFhiU83zyAvYsqnsYEm4fbRPkgl89WDRjYzWt5iZSTSwa+3RpL875w363cYxd+n+HKcQDMGPCNpk5PRiKnveX3jcPb/P/9Erp2WdMzGXuJZnHuS9xj7XWp79Y774VAyEaMNZV35Q+hc4cQg/NBGL5cSfYDdUwb41hIFtntoG34iNiNfixsXgo77WVr0cEwA56VHndHO8wzHqIePbcwsokUK6WhCb0boQ+b3JF/mwfn0fwxYI3PQa45PJ6dK4GRwTpcDdrVA7tP21EmGpyQIDAQABAoIBAAoHT+kmXCSZKGTrAoTYZfwlPOCeGFs3LB0MD00V5CJnJUvOfoKKVpStIQoFpTKALNmMgjF/EqOHP+1YaVO3DX9bKkdUhf+DaSnnvYGC1cgZVMRGUd2K2zeMKLW6BBSwnBSRE4bo5es8UpbmAs09NwNVVB76KjcHKJZVFg4jBkRcw81isCp9euTLvB2TUsugE2efIHBtoKA5MTmTc2/dqVx2V8u4PrP5jU5q/9ieSEOSwEsg5NDyxuPxpRavftOg3+kQHqimUTVPxPwLTAazGkdgtNV6/VLFKDMbF9lhWa0ooTfL44PMbvlCszJ5JZSI6RTJxorD/0D2nfmvmkTh/uECgYEA57iBi85LEzk8QB3I+4ZH1QGFBhRareweB8OHc02qGolOimivwCWUwVGmYiQSUHhmZ7S5acPxbED7LO7eoB/hxxK6cKA9sGPcg5My1QapOrDy1r4AoCDLzRj1aawCAM752d5WFUIyT8OvRtA98kxPM6ulhkD2zXOKomOz/xGQAuMCgYEA3wF1SPs+CfqQCt6H+6hnfUrIRmJmEh088tLQKYQlb/qqxPFxJLcn0lboyahJThDULr6HcFyE+1c0SqOIWTE4JQuXk8K2WV/EVJA1zJ1/vX8v4+TiRm3ovbfhWtgEgVOCy+Yyu0ZltOCHJrIhAK6dflGQFEUj2b4HGPqtaOnXBGMCgYBac20uE5K+qELajEXd2ObFQNiaLOvQpDB8u1huK8zQmvRrlr2z9XeBlsup14bGnpjqtmMB5BijNyJUwdFpE8jgGnFocURjTDfRrG3VNcptPJEuPfCkkOi84Jc7bodBpYlmACH+Hl7hP/N1YugrYpowAzqTk1xDimx9QwoJ8OMUHQKBgBVxsHOKJVcUTxGcgHsEoJ79t/B8uc/4G8pF11qGqIryEcXKadTb/+pMDSqHEjV9jMnJ7IAzhV4d7ptWyl+5SerWCIde6+YAPYLcMzAv3P694j8J3XBkVUMZEYSIzTYab7NnuW0kwdb42EYyTtYf9GkXMsGgPGhNy6TtRguWoOR9AoGAZPDZEsBYhN91lrj1PPeOOkKYm+qBJCKqPRJa7GaJXip2AsdAisBsSwwdsP88vvgAfMAGsSBAVOs0y/hR2gkXdlPGBVr7L1rX9DVL3xmYz0Q8QEzGghwfT8/8gegfkQwcYSdFFyJNLNcJpq67TbXBSqyO2ux91+ofM9KlxSFrX10=',
        # 应用私钥
        'app_secret_cert' => 'MIIEogIBAAKCAQEAydsKuqzCl1//2UUlGWOadeAAddr3TBIwIpuz+2BU7+dyFGz/c80jxmyi16QbDuOk7n64xFhiU83zyAvYsqnsYEm4fbRPkgl89WDRjYzWt5iZSTSwa+3RpL875w363cYxd+n+HKcQDMGPCNpk5PRiKnveX3jcPb/P/9Erp2WdMzGXuJZnHuS9xj7XWp79Y774VAyEaMNZV35Q+hc4cQg/NBGL5cSfYDdUwb41hIFtntoG34iNiNfixsXgo77WVr0cEwA56VHndHO8wzHqIePbcwsokUK6WhCb0boQ+b3JF/mwfn0fwxYI3PQa45PJ6dK4GRwTpcDdrVA7tP21EmGpyQIDAQABAoIBAAoHT+kmXCSZKGTrAoTYZfwlPOCeGFs3LB0MD00V5CJnJUvOfoKKVpStIQoFpTKALNmMgjF/EqOHP+1YaVO3DX9bKkdUhf+DaSnnvYGC1cgZVMRGUd2K2zeMKLW6BBSwnBSRE4bo5es8UpbmAs09NwNVVB76KjcHKJZVFg4jBkRcw81isCp9euTLvB2TUsugE2efIHBtoKA5MTmTc2/dqVx2V8u4PrP5jU5q/9ieSEOSwEsg5NDyxuPxpRavftOg3+kQHqimUTVPxPwLTAazGkdgtNV6/VLFKDMbF9lhWa0ooTfL44PMbvlCszJ5JZSI6RTJxorD/0D2nfmvmkTh/uECgYEA57iBi85LEzk8QB3I+4ZH1QGFBhRareweB8OHc02qGolOimivwCWUwVGmYiQSUHhmZ7S5acPxbED7LO7eoB/hxxK6cKA9sGPcg5My1QapOrDy1r4AoCDLzRj1aawCAM752d5WFUIyT8OvRtA98kxPM6ulhkD2zXOKomOz/xGQAuMCgYEA3wF1SPs+CfqQCt6H+6hnfUrIRmJmEh088tLQKYQlb/qqxPFxJLcn0lboyahJThDULr6HcFyE+1c0SqOIWTE4JQuXk8K2WV/EVJA1zJ1/vX8v4+TiRm3ovbfhWtgEgVOCy+Yyu0ZltOCHJrIhAK6dflGQFEUj2b4HGPqtaOnXBGMCgYBac20uE5K+qELajEXd2ObFQNiaLOvQpDB8u1huK8zQmvRrlr2z9XeBlsup14bGnpjqtmMB5BijNyJUwdFpE8jgGnFocURjTDfRrG3VNcptPJEuPfCkkOi84Jc7bodBpYlmACH+Hl7hP/N1YugrYpowAzqTk1xDimx9QwoJ8OMUHQKBgBVxsHOKJVcUTxGcgHsEoJ79t/B8uc/4G8pF11qGqIryEcXKadTb/+pMDSqHEjV9jMnJ7IAzhV4d7ptWyl+5SerWCIde6+YAPYLcMzAv3P694j8J3XBkVUMZEYSIzTYab7NnuW0kwdb42EYyTtYf9GkXMsGgPGhNy6TtRguWoOR9AoGAZPDZEsBYhN91lrj1PPeOOkKYm+qBJCKqPRJa7GaJXip2AsdAisBsSwwdsP88vvgAfMAGsSBAVOs0y/hR2gkXdlPGBVr7L1rX9DVL3xmYz0Q8QEzGghwfT8/8gegfkQwcYSdFFyJNLNcJpq67TbXBSqyO2ux91+ofM9KlxSFrX10=',
        # 应用公钥证书
        'app_public_cert_path' => base_path('secret/appPublicCert.crt'),
        # 支付宝公钥证书
        'alipay_public_cert_path' => base_path('secret/alipayPublicCert.crt'),
        # 支付宝根证书
        'alipay_root_cert_path' => base_path('secret/alipayRootCert.crt'),
        'return_url' => 'http://larashop.wodetou.top/alipay',
        'notify_url' => 'http://larashop.wodetou.top/alipay',
        'app_auth_token' => '', // 选填 - 第三方应用授权 token
        'service_provider_id' => '', //选填-服务商模式下的服务商 id , 当 mode 为 Pay::MODE_SERVICE 时使用参数
        // 'mode' => Pay::MODE_NORMAL, // 选填 - 默认为正常模式. 可选为: MODE_NORMAL, MODE_SANDBOX , MODE_SERVICE
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];