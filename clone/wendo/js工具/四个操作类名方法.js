
function addClass(obj,cn){
    if(!hasClass(obj,cn)){
        obj.className+=' '+cn;
    }
    
}
// 判断一个元素是否含有指定的class，如果有返回true，没就false
function hasClass(obj,cn){
    // var reg=/\bbox2\b/;
    // 因为要传参，只能用构造函数
    var reg=new RegExp('\\b'+cn+'\\b');
    
    return reg.test(obj.className);
}
function removeClass(obj,cn){
    var reg=new RegExp('\\b'+cn+'\\b');
    
    obj.className=obj.className.replace(reg,'');
}
// 切换一个类，有就删，没就加
function toggleClass(obj,cn){
    // 判断有没有
    if(hasClass(obj,cn)){
        removeClass(obj,cn);
    }else{
        addClass(obj,cn);
    }
    
}
