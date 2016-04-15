/*
* 难难最关键的JS代码文件
* Time:
* http://nncode.github.com
*/
var
NN={
	s:location.hash.substr(C.tag.length+2)?location.hash.substr(C.tag.length+2):'home', // error ?
	m:document.getElementById('m'),
	$:function(e){
		return document.getElementById(e);
	},i:function(){
		var i;
		for(i=0;i<C.nav.length;i++){
			if(location.hash.substr(C.tag.length+2)==C.nav[i][0]){
				NN.h(C.nav[i][2]);
				break;
			}
		}
		if(i==C.nav.length)
			location.hash='#'+C.tag+'=home';
		// nav
		var c = document.getElementsByClassName('a');
		for(var i=0;i<c.length;i++){
			c[i].className='';
		}
		var o = document.getElementById(location.hash.substr(C.tag.length+2));
		o.className = 'a';
	},h:function(t){
		if(!window.XMLHttpRequest||!window.localStorage)
			return NN.m.innerHTML="请升级您的浏览器！";
		var x=new XMLHttpRequest();
		x.open('GET','n?t='+t,1);
		x.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		x.onreadystatechange=function(){x.readyState==4&&x.status==200?NN.r(x.responseText):0;}
		x.send();
	},r:function(v){
		var
		l='_'+location.hash.substr(C.tag.length+2)+'_',
		t=NN.$(l).innerHTML;
		Mustache.parse(t);
		// template, object that contains the data and code needed to the render the template
		NN.m.innerHTML=Mustache.render(t,JSON.parse(v));
	}
};
var nav=document.getElementById('_nav_');
document.getElementById('nav').innerHTML=Mustache.render(nav.innerHTML, C);
// X
// location.hash=''?location.hash='#'.C.tag+'=home':0;
// window.onload=function(){
// 	location.hash=''?location.hash='#'.C.tag+'=home':0;
// }
window.onload=window.onhashchange=NN.i;
