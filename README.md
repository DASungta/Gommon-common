
## Gommon-common组件包 ##

好久不写php写的太丑了自己测试用的别看了各位。

--------

Gommon --基于ThinkPHP设计的快速应用框架
===============


为了快速支持公司项目的派生开发，在ThinkPHP V5.1.3x 的基础上隔离出用户体系，让Gommon的使用者只需要关心业务逻辑的设计与开发。


> Common的运行环境要求PHP5.6以上。

Gommon的核心概念：

- 用户体系分离
    
    为了实现通用应用的快速开发，在设计时无需考虑用户表的设计。
    
- 用户产生记录静态

    在应用中用户产生的所有记录与`User`无关。即时发生的数据不会再同步更新。

- 权限验证无状态

    应用的权限设计仅与`user_id`强相关。
    
- User服务提供方需提供

    - 用户列表（查询，分页，搜索，排序）
    - 个人信息查询
