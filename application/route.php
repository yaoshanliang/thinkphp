<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
/*Route::get('/',function(){
    return 'Hello,world!';
});*/
Route::rule('new/:id','index/index');
/*Route::get('',function(){
    return 'Hello,world!';
});*/
/*Route::rule('1','index/News/read');

Route::get('admin','index');*/
/*Route::get('/',function(){
    return 'Hello,world!';
});*/
/*Route::group('admin', function() {
    Route::get('/','index/index');
});*/
//Route::miss('index/miss');

/*return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];*/
