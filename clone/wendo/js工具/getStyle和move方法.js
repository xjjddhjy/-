function getStyle(obj, name) {
    if (window.getComputedStyle) {
        return getComputedStyle(obj, null)[name];
    } else {
        return obj.currentStyle[name];
    }
}
// 提取成函数,参数1：对象，2：速度,3:目标临街处,4:属性(字符串),5:回调函数，动画执行完毕时执行
           
function move(obj, speed, target, attr, callback) {

    var current = parseInt(getStyle(obj, attr));
    if (current > target) {
        speed = -speed;
    }

    // 开始定时器，持续向右
    // 获取box1原来的left
    // 判断speed的正负

    clearInterval(obj.timer);
    obj.timer = setInterval(function () {
        var oldValue = parseInt(getStyle(obj, attr));
        var newValue = oldValue + speed;
        if (speed < 0 && newValue <= target || speed > 0 && newValue >= target) {
            newValue = target;
        }

        obj.style[attr] = newValue + 'px';
        if (newValue == target) {
            clearInterval(obj.timer);
            callback && callback();
        }
    }, 50);
};
