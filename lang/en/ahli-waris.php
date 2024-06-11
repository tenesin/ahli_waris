<?php

return [
    'pages' => [

        'auth' => [

            'login' => [

                'form' => [

                    'email' => [
                        'label' => 'Alamat Email'
                    ],

                    'password' => [
                        'label' => 'Kata Sandi'
                    ],

                    'remember' => [
                        'label' => 'Ingat Saya'
                    ],

                    'actions' => [
                        'authenticate' => [
                            'label' => 'Masuk'
                        ]
                    ]
                ],

                'actions' => [
                    'register' => [
                        'before' => 'Belum punya akun?',
                        'label' => 'Daftar Disini'
                    ]
                ],

                'heading' => 'Masuk Aplikasi',

                'title' => 'Masuk Aplikasi'

            ],
            'register' => [
                'title' => 'Daftar Akun',

                'heading' => 'Daftar Akun',

                'actions' => [

                    'login' => [
                        'before' => 'Sudah punya akun?',
                        'label' => 'Masuk Disini',
                    ],

                ],

                'form' => [

                    'email' => [
                        'label' => 'Alamat Email',
                    ],

                    'name' => [
                        'label' => 'Nama Lengkap',
                    ],

                    'password' => [
                        'label' => 'Kata Sandi',
                        'validation_attribute' => 'password',
                    ],

                    'password_confirmation' => [
                        'label' => 'Konfirmasi Kata Sandi',
                    ],

                    'actions' => [

                        'register' => [
                            'label' => 'Daftar',
                        ],

                    ],

                ],
            ]
        ]
    ]
];
