同源：自己的网站访问自己ip地址下的数据，要协议名，ip地址，端口号三者相同才是同源，否则跨域
跨域访问：浏览器默认限制了跨域访问，但是在开发中不可避免出现跨域访问，有两种解决方案
1： cors:cross origin resource sharing,在服务器后台代码设置header('Access-Control-Arrow-Origin:*')就可以跨域访问，不过html5才支持
2： JSONP