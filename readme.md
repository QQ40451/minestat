<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Ethos 状态面板

alternate 是一个用于ethos矿机的 简单、免费、强大的面板 。系统基于 Laravel 5.8.10 .
你可以在自己的服务器上安装用于控制你的矿场。

系统对每一项指标都有详细的报表. 

安装使用docker 技术，能自动解决各种依赖。不需要太多专业技能。

双核cpu 2G内存大约能支持100台矿机频繁访问，超过这个数量需要另行优化。


### 系统截图

![Rigs table](https://raw.githubusercontent.com/artdevision/minestat/master/public/img/screenshot.png)
![Chart example](https://raw.githubusercontent.com/artdevision/minestat/master/public/img/chartscreen.png)


### 技术参数
- MongoDB 数据库
- 管理面板
- 报表
- 负载均衡矿机每分钟的请求数 
- 简单的用户认证
- 定时清理.  
- 队列服务，用于对钻机进行一致的更新传入请求.

### TODO

- Summary farm dashboard
- Notification on critical rigs states
- Users roles control
- Remote configuration

## 安装说明

- Install `docker` following [instructions](https://docs.docker.com/install/linux/docker-ce/ubuntu/)
- Make and cd to app folder `mkdir /app/folder && cd /app/folder`
- Clone project from GitHub `git clone https://github.com/artdevision/minestat.git ./`
- Run installation script `sudo install.sh`
- Create new user: run `cd docker && docker-compose run php_srv /bin/bash` and `php /var/www/html/artisan user:create email@domain.com` type password  and then `exit`
- Done now stat panel is started - go to url `http://your.domain/cabinet`

## EthOS 系统接入步骤

Edit the web hook address manually. May be done vis SSH, direct from keyboard or Teamviewer

- run shell command `sudo nano /opt/ethos/lib/functions.php`
- find the line like this `$hook = "http://ethosdistro.com/get.php";`
- edit it to match `$hook = "http://{your_app_domain}/api/pushstat"` where `{your_app_domain}` is your server domain or IP;

## 集成与定制

I can provide services for the installation and customisation of the application to your needs for. Of course not free :) [40451@qq.com](mailto:40451@qq.com)

## 项目捐助

我是兼职程序员. 如果项目对你有用, 非常乐意接受你的捐助:
- 比特币: `35srf7rfL4MTzicftAceAKX9DLVKmzhgiz`
- 支付宝

![alipay](https://github.com/QQ40451/minestat/blob/master/public/img/QRPayPal.png.JPG)

- [以太坊](0xa0b742B1616f960174aF78944D85EA0bb1F188d6) 

![ETH](https://github.com/QQ40451/minestat/blob/master/public/img/y_donate.jpg)

