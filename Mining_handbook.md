#第一步 清点配件
配件清单为：

* 5根USB线(4根短的,1根长的)
![](http://rm-img.b0.upaiyun.com/rockminer.com/images/handbook/usblines.png)
* 1个4口USBhub
![](http://rm-img.b0.upaiyun.com/rockminer.com/images/handbook/usbhub.png)
* 树莓派+树莓派电源线
![](http://rm-img.b0.upaiyun.com/rockminer.com/images/handbook/raspberrypi.png)
* 2根6pin电源线
![](http://rm-img.b0.upaiyun.com/rockminer.com/images/handbook/psulines.png)


#第二步 连接组装

  * 将4条短USB线分别插入HUB，连接MCU控制板,将长USB线小端插入HUB，另外一端连接树莓派
 ![](http://rm-img.b0.upaiyun.com/rockminer.com/images/handbook/usbhub2.png)
 ![](http://rm-img.b0.upaiyun.com/rockminer.com/images/handbook/usbmculine.png)
  * 将树莓派电源线黑色一端插入树莓派，白色一端插入刀片板插座
 ![](http://rm-img.b0.upaiyun.com/rockminer.com/images/handbook/redline.png)
 ![](http://rm-img.b0.upaiyun.com/rockminer.com/images/handbook/raspberrypiotherend.png)

 * 将6PIN电源线插入刀片电源插口，连接好电源
 * 将网线插入树莓派网口
 
#第三步 开始挖矿
 * 打开浏览器，输入192.168.1.254进入RockWeb挖矿界面
  ![](http://rm-img.b0.upaiyun.com/rockminer.com/images/handbook/rockwebip.png)

 * 如果有多台机器，点击Set IP设置矿机IP地址
  ![](http://rm-img.b0.upaiyun.com/rockminer.com/images/handbook/rockwebsetip.png)

 * 点击Pools，设置矿池账号
   ![](http://rm-img.b0.upaiyun.com/rockminer.com/images/handbook/rockwebsetpools.png)

 * 设置好之后，点击Reboot重启树莓派，等待大概1分钟之后，即可开始挖矿，MCU控制板上蓝灯闪烁表示正常
 
#常见问题解答
1. **无法进入192.168.1.254**
   1. 检查树莓派电源线是否插正确(需红色电源灯亮)。
   2. 检查网线是否插好，网络是否通畅(树莓派LINK黄绿灯亮并闪烁)。
   3. 检查是否有IP冲突，多台矿机请勿同时接入网络。
   4. 检查SD卡是否正常。

1. **打开RockWeb挖矿界面之后，显示“cgminer not running”。**

    这表示cgminer还没运行，等待一分钟之后，cgminer会自动重启运行。

2. **开始挖矿之后，有部分刀片不闪蓝灯。**

    1. 查看是否通电，电源灯(红灯)是否点亮
    2. 检查USB线是否插入正确位置,检查USB线是否有问题(替换法)
    3. 检查MCU控制板是否有问题(替换法)
    
3. **算力不足**
    1. 进入RockWeb首页，查看有刀片数是否正常，如异常，参考第2点。
    2. 进入RockWeb首页，查看是否有刀片算力明显低于平均数值，如是，尝试重启树莓派。
    3. 查看刀片温度，如果过高(高于60度)，则想办法降低矿机周围温度。
    4. 更换矿池。官方推荐使用Ghash.io矿池进行挖矿。
    
4. **树莓派频繁重启**
    1. 环境温度过高导致（高于37度），请尽量保持矿机周围通风。
    2. SD卡有故障，通过重新烧录镜像或者更换SD卡解决。
    3. 有USB数据线短路导致不稳定，检查USB数据线是否OK。
    
5. **升级RockWeb**
	1. 使用SSH工具连接矿机（如192.168.1.254），用户名root，密码rockminer。
	2. 输入命令ls，查看当前目录下是否有upgrade.sh文件：
		1. 如果有，则直接输入命令./upgrade.sh回车，即可完成升级。
		2. 如果没有，则手动创建：

**创建upgrade.sh文件：**
			
```
nano upgrade.sh
```

```
#!/bin/shcd /rootgit clone https://github.com/rockminerinc/RockWeb.gitcp /root/RockWeb/* /usr/share/nginx/www/ -avpfrm -rf /root/RockWeb
```
**按ctrl+x退出，确认保存。修改upgrade.sh为可执行权限，然后执行**
		
```
chmod 777 upgrade.sh
./upgrade.sh
```

