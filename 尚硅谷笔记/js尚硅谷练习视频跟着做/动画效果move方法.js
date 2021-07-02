//getStyle获取元素样式
        //obj -dom元素
        //name -获取样式(用字符串输入)
        function getStyle(obj, name) {
            if (window.getComputedStyle) {
                return getComputedStyle(obj, null)[name];
            } else {
                return obj.currentStyle[name];
            }
        }
        //move(obj元素对象, str样式, speedInt速度, target1左边界, target2右边界, callback回调函数可不传)
        function move(obj, str, speedInt, target1, target2, callback) {
            clearInterval(obj.timer);
            obj.timer = setInterval(function () {
                var oldValue = parseInt(getStyle(obj, str));
                var newValue = oldValue + speedInt;
                obj.style[str] = newValue + 'px';

                if (speedInt < 0 && newValue <= target1 || speedInt > 0 && newValue >= target2) {
                    // obj.style.left = target + 'px';
                    clearInterval(obj.timer);
                    //speedInt=-speedInt;
                    callback && callback();
                };
            }, 30);
        }
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		