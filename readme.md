<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Ethos 状态面板

是一个用于ethos矿机的 简单、免费、强大的面板 。系统基于 Laravel 5.8.10 .
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

### 全部功能列表

- 矿场概要
- 紧急状态提示
- 用户角色控制
- 远程配置

## 安装说明

- 安装 `docker`   [教程](https://docs.docker.com/install/linux/docker-ce/ubuntu/)
- 创建目录 `mkdir /app/folder && cd /app/folder`
- 下载项目源码 `git clone https://github.com/QQ40451/minestat.git ./`
- 运行安装脚本 `sudo install.sh`
- 创建用户: 运行`cd docker && docker-compose run php_srv /bin/bash` 和 `php /var/www/html/artisan user:create email@domain.com` 输入密码后在输入`exit`t退出
- 完毕，你现在可以访问网址 `http://your.domain/cabinet`

## EthOS /SMOS  系统接入步骤

通过SSH 手动编辑系统文件. 

- 运行命令 `sudo nano /opt/ethos/lib/functions.php`
- 找到这一行 `$hook = "http://ethosdistro.com/get.php";`
- 替换为 `$hook = "http://{your_app_domain}/api/pushstat"` 其中 `{your_app_domain}` 改成你自己的服务器地址;

## 集成与定制

我们能为你提供付费的定制和安装服务。 [40451@qq.com](mailto:40451@qq.com)

## 项目捐助

我是兼职程序员. 如果项目对你有用, 非常乐意接受你的捐助:
- 比特币: `35srf7rfL4MTzicftAceAKX9DLVKmzhgiz`
- 支付宝

![alipay](https://github.com/QQ40451/minestat/blob/master/public/img/QRPayPal.png.JPG)

- [以太坊](0xa0b742B1616f960174aF78944D85EA0bb1F188d6) 

![ETH](https://github.com/QQ40451/minestat/blob/master/public/img/y_donate.jpg)

