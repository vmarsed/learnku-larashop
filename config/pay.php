<?php

return [
    'alipay' => [
        'app_id'         => '9021000135683039',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvHAze8JsGC3+BYzplrQPP6dU3b+20NLh5DzbC0m5m5S+/3cjNOo802nMnMyGkkcuRfc2VNJd5epN5X1p/baJPv9GcPkbHOEEFj3FiKi85zoGHdBCYr+OkPshEQ7eTnCt84SKTeZeuBf7RmBqxmneL8qGpbI19+c91Xg3ni0MQMrNTll3ffBSzRXL6KWrotT1JC4I1BUK0uYcPFzME+irlfm/fLcYFyb9eOhUImDI6K9Dl14RFJIHhUlAEWWScnki+4jtolFugU54ZoegVq9phtq0NMbaMVuuXHwRAnreg9OOt+7Qkpt3z2NnzteNaNiCIzjQu69+NQSmTyTRA5h0ywIDAQAB',
        'private_key'    => 'MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCEadnIwp4ZgBp7+ftJ3dRYNeYV1GhZ3Y9PaA9+cQMLPdRoj8AQVgmjkfs8qC3y6tM/zdzfN0jpnAPlDhRE10L5cUG1nfXQdUKyntXt/JyslcyfvHKCcP+Axyr7bPfO9xskaw8m/9sn4M/TLyxDDLTydoT34FQq+mR/J7mcAMBXGwvGE9hh12gNYMEDOB5bGLMQyGV5SjTrRhXLKzyn+km4X6a0kNfkmspOVfKMEXiuFhkhvTRzKQKJEd3frJpoRI++ydw6Ysfe+2WTWuufQzl4BILyirFNwXW7Af6R3DBcJNctrRn+IlRaXdkLe2sgPQuxVY22krGQhV5RW22VggfBAgMBAAECggEAbDoQNZVMn88i1n5GM+PKMacsPl90Qy9ieSa2s0QvlrqcqDIGa9PG4RjqXnOfytLAg4ABrbiEMdzBGjDdxD6lkThO2uEXD6EoONK2TGSSskVmEJF4jsFJNLqVmRdBnLpARw3yPpAVUozfkN8XsF3sb9kLaYbDhLVP+tY/UREUJJzQDMJPEXecn3MVr+YKjMu0EumDWERKPiL9cigsm8PJWk0sDIKjU+i7MOTTphlJRGFBbiZUZslGXv/3Xr1hsKsQy8cY6pgP7iXMBgUVyxN9BfbA6XwgAVm4pM3Ku0FORq+pd1PhhC4cg2PorS5u9B5EO4nTv0VhJMxxGlZsrkPFoQKBgQDynHCAsAnPEoZ+PRVeklWvG/xSV8iT4daUxsggEmuayGEprIONyojGJbGpQHbeLQUqY1UDnTdThmC/fdtJGxJHw62BzeCCQtrdYnbK+TXGQwlUFJlg668GlKd7v2XEg5Fn+a4BJlC9To+Vp2olqmmTowdT1jnidHyZzsmz3eHE7QKBgQCLuI/HDMG05QXXXNVOPyjE2+Pkjein0jsAkTOuASc88dr/K1QM40qdgR9zte0OdSAVWkQMVjfRIeEF60WhaND4fXLBx31bP7WLi/xqg7Gh68Z0ji7mi+j18rLLMUzEuBjbpZmaW5TpHbdI5pwE3NR9cpwv34T+vNhYgc6MtDYnpQKBgDfgW/Dnmnq8s4kjnGZZoa5g7a4xVZrpqrg9SB5K38mYWPh2KR5hBTtNtytaE4Z8K/JlSlE4xmNQUbwIypZ9y6oHoVCCEDEwIKRYZy+8UexFyEI7NFAkN/12A1T28gNeogCmerL9Fh9jlqJLGqFuLD66j5d5gX9sgL4T6FSqx7LJAoGAFFa1d0BAIlkEVKlK060V/jIUJn0R1PwhYp/Aah/42kJKosJn5chgYDUfovRkoaojFXiiVzllvqez3ey1oh1j7gg04Eht0w6fGsUx5T9uaCeuJ+FaqmzLaKH/rNxsVGaIF9EvXuzd7GFLAO2w4HRU6j34xm8/KOXMiHW833aMO5ECgYBTwgOHA2MUEIqjhfXh0XJG0SP1Ag5duMQQu/PqMHqguOaMc4eZhIPV+oMfXUZN/9RWqmX81pfvNFSWNUu1ecY6xGCDx7Q8X7jV8ptrHMCyx9ZVWW5Ye+jWXj4z5+8rka1zgArkXFk46aSMzQYwv+q5N00Eht48HH2io9lSXv/5Kg==',
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