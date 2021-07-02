window.onload = function () {
    imgLocation('container', 'box');
    var imgData = { "data": [{ "src": "2.jpg" }, { "src": "4.jpg" }, { "src": "5.jpg" }, { "src": "6.jpg" }, { "src": "缩写3.png" }] };
    // console.log(imgData.data.length);
    window.onscroll = function () {//window.onscroll是监听滚动条，鼠标一滚动执行，一直滚动会持续的执行

        if (checkFlag()) {//checkFlag()返回一个true，就可以执行
            var cparent = document.getElementById('container');
            for (var i = 0; i < imgData.data.length; i++) {
                var ccontent = document.createElement('div');
                ccontent.className = 'box';
                cparent.appendChild(ccontent);
                var boximg = document.createElement('div');
                boximg.className = 'box_img';
                ccontent.appendChild(boximg);
                var img = document.createElement('img');
                img.src = imgData.data[i].src;
                // console.log(img.src)
                boximg.appendChild(img);
            } imgLocation('container', 'box')
        }

    }
}
function checkFlag() {
    var cparent = document.getElementById('container');
    var ccontent = getChildElement(cparent, 'box');
    var lastContentHeight = ccontent[ccontent.length - 1].offsetTop;//最后一张图的居上值
    var lastImgHeight=ccontent[ccontent.length-1].offsetHeight
    var scrollTop = document.documentElement.scrollTop;//滚动条的高度
    var pageHeight = document.documentElement.clientHeight;
    console.log(lastContentHeight+','+scrollTop+','+pageHeight+','+lastImgHeight)
    
    if (lastContentHeight+lastImgHeight <= scrollTop + pageHeight) {//页面拉到最底

        return true;//true就是允许加载图片，false就不给

    }

}
function imgLocation(parent, content) {
    // 将parent下的全部content取出
    var cparent = document.getElementById(parent);
    var ccontent = getChildElement(cparent, content);
    var imgWidth = ccontent[0].offsetWidth;
    var num = parseInt(document.documentElement.clientWidth / imgWidth);
    cparent.style.cssText = 'width:' + imgWidth * num + 'px;margin:0 auto;';
    var BoxHeightArr = [];
    for (var i = 0; i < ccontent.length; i++) {
        if (i < num) {
            BoxHeightArr[i] = ccontent[i].offsetHeight;
        } else {
            var minheight = Math.min.apply(null, BoxHeightArr);//获取列表里最小的值Math.min.apply,第一个参数为null不用管
            var minIndex = getminheightLocation(BoxHeightArr, minheight);//获取第一行各个高度中最小的那个，得到位置
            ccontent[i].style.position = 'absolute';
            ccontent[i].style.top = minheight + 'px';
            ccontent[i].style.left = ccontent[minIndex].offsetLeft + 'px';//新儿子的居左要与上面的儿子一致
            BoxHeightArr[minIndex] = BoxHeightArr[minIndex] + ccontent[i].offsetHeight;//更新列表的各个高度

        }
    }
}
function getminheightLocation(BoxHeightArr, minheight) {
    for (var i in BoxHeightArr) {
        if (BoxHeightArr[i] == minheight) {
            return i;
        }
    }
}
function getChildElement(parent, content) {//第一个是标签元素，第二个是类名（字符串）,作用是读取返回一堆儿子的列表
    var contentArr = [];
    var allcontent = parent.getElementsByTagName('*');
    // console.log(allcontent)
    // allcontent包含了儿子孙子
    for (var i = 0; i < allcontent.length; i++) {
        if (allcontent[i].className == content) {
            contentArr.push(allcontent[i]);
        }   
    }
    // console.log(contentArr) 
    // content只有儿子
    return contentArr;
}