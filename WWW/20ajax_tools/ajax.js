// url
// data,key1=value1&key2=value2的字符串，可填null
function get(url, data, callback) {
  var xhr = new XMLHttpRequest();
  if (data) {
    url += '?';
    url += data;
  }
  xhr.open('get', url);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      callback(xhr.responseText);
           
    }  
  }
  xhr.send();
} 
// url
// data,key1=value1&key2=value2的字符串，可填null
function post(url, data, callback) {
  var xhr = new XMLHttpRequest();
  xhr.open('post', url);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      callback(xhr.responseText);
          
    } 
  }
  xhr.send();
} 
function ajax_test(url,type,data,callback){
  // url
  // data,key1=value1&&key2=value2的字符串，可填null
    var xhr = new XMLHttpRequest();
    if (data && type=='get') {
      url += '?';
      url += data;
      data=null;
    }
    xhr.open(type, url);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
        callback(xhr.responseText);
        
      }
    }
        xhr.send(data);
}
function ajax(option){
  // url
  // data,key1=value1&&key2=value2的字符串，可填null
    var xhr = new XMLHttpRequest();
    if (option.data && option.type=='get') {
      option.url += '?';
      option.url += option.data;
      option.data=null;
    }
    xhr.open(option.type, option.url);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
      // console.log(xhr.getResponseHeader('Content-Type'));  
      var type=xhr.getResponseHeader('Content-Type');  
      if(type.indexOf('json')!=-1){
        option.callback(JSON.parse(xhr.responseText));
      }else if(type.indexOf('xml')!=-1){
        option.callback(xhr.responseXML)
      }else{
        option.callback(xhr.responseText)
      }
        
      }
    }
        xhr.send(option.data);
}