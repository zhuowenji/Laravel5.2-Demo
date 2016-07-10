### development!

<a href="https://zhuowenji1.gitbooks.io/laravel5-2-demo" target="_blank" >进程文档，持续更新！</a>

### Laravel5.2-Demo项目安装
---

>   **项目安装前提:   
>   1:本机可以执行git命令，或者git客户端  
>   2:可以执行composer安装更新项目  
>   后台地址：http://laravel.fuxiben.com/admin    
>   登录帐号： admin    
>   登录密码： 123456**  


获取项目：
```
# git clone https://github.com/zhuowenji/Laravel5.2-Demo
```

进入项目文件，通过composer install 安装：
```
# cd Laravel5.2-Demo
# composer install
```
安装完成后给予 storage 和 vendor 权限：

```
# chmod -R 7777 storage
# chmod -R 7777 vendor
```

新增 .env 配置文件：

```
# cp .env.example .env
```
主要修改 .env 中以下参数：
```
APP_ENV=local
APP_DEBUG=true
APP_KEY=base64:66bDiQEpVqzyL6CsWBcIN5IYnJHa3vqezUtph+hHGXc=
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=123456
```
APP_KEY 可以使用 artisan 生成：

```
# php artisan key:generate
```

在以上配置文件，数据库连接好情况下执行数据库迁移：

```
php artisan migrate:refresh --seed
```

over!

---

.git/config 配置(可更具自己具体情况修改)

```
[core]
        repositoryformatversion = 0
        filemode = false
        bare = false
        logallrefupdates = true
        ignorecase = true
        precomposeunicode = true
        autocrlf = input
[remote "origin"]
        url = git@github.com:zhuowenji/Laravel5.2-Demo.git
        fetch = +refs/heads/*:refs/remotes/origin/*
[branch "master"]
        remote = origin
        merge = refs/heads/master
```

nginx 配置文件（可参考，可自己定义虚拟主机）

```
server {
    listen       80;
    server_name  laravel;
    root /Users/wenji/project/Laravel5.2-Demo/public;
    index  index.html index.htm index.php;

    access_log  /Users/wenji/project/logs/laravel5.2_access.log;
    
    # php rewrite
    location / {
    try_files $uri $uri/ /index.php?$query_string;
    }
    # pass the PHP scripts to FastCGI server listening on 127.0.0.1:9000
    location ~ \.php$ {
        fastcgi_pass   127.0.0.1:9000;
        fastcgi_index  index.php;
        fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
        include        fastcgi_params;
    }

    error_log  /Users/wenji/project/logs/laravel_error.log;
}
```







