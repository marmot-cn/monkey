<?php
/**
 * \d+(,\d+)*
 * 路由设置
 */
return [
    //工具
    //验证码图片
    [
        'method'=>'GET',
        'rule'=>'/utils/captcha',
        'controller'=>[
            'Common\Controller\UtilsController',
            'captcha'
        ],
    ],
    //user 用户
    [
        'method'=>'GET',
        'rule'=>'/users',
        'controller'=>[
            'Member\Controller\UserController',
            'index'
        ]
    ],
    //注册
    [
        'method'=>['POST','GET'],
        'rule'=>'/users/signUp',
        'controller'=>[
            'Member\Controller\UserSignController',
            'signUp'
        ]
    ],
    //登录
    [
        'method'=>['POST','GET'],
        'rule'=>'/users/signIn',
        'controller'=>[
            'Member\Controller\UserSignController',
            'signIn'
        ]
    ],
    //登出
    [
        'method'=>'GET',
        'rule'=>'/users/signOut',
        'controller'=>[
            'Member\Controller\UserSignController',
            'signOut'
        ]
    ]
];
