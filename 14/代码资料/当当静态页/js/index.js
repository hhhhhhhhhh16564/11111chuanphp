/*****************************************书讯快递***********************************************/

var dome = document.getElementById("dome");
var dome1 = document.getElementById("dome1");
var dome2 = document.getElementById("dome2");
dome1.style.height = dome.offsetHeight+"px"; 
dome2.style.height = dome.offsetHeight+"px";
dome2.innerHTML = dome1.innerHTML;

var timer = window.setInterval("scrollUp()",50);

function scrollUp()
{
	if(dome.scrollTop >= dome.offsetHeight)
	{
		dome.scrollTop = 0;	
	}
	else
	{
		dome.scrollTop++;	
	}
}

dome.onmouseover = function ()
					{
						timer = window.clearInterval(timer);	
					}
dome.onmouseout = function s()
					{
						timer = window.setInterval("scrollUp()",50);
					}
















/*

//（1）获取三个对象：dome、dome1、dome2
//（2）设置三个DIV的高度为一样
//（3）id=dome的<div>的CSS属性：overflow:hidden
//（4）dome2中的内容与dome1的内容一样
//（5）通过dome的scrollTop属性来实现滚动
//（6）鼠标放上dome停止滚动、鼠标移开dome继续滚动

//获取三个对象
var dome = document.getElementById("dome");
var dome1 = document.getElementById("dome1");
var dome2 = document.getElementById("dome2");
//设置三个DIV的高度一样
dome1.style.height = dome.offsetHeight+"px";
dome2.style.height = dome.offsetHeight+"px";
//将dome1中的内容复制到dome2中
dome2.innerHTML = dome1.innerHTML;
//定时器
var timer = window.setInterval("scrollUp()",50);
function scrollUp()
{
	if(dome.scrollTop >= dome.offsetHeight)
	{
		dome.scrollTop = 0;
	}else
	{
		dome.scrollTop++;
	}
}
//鼠标放到dome上时，滚动停止，鼠标移开时，继续滚动
dome.onmouseover = function(){
		clearInterval(timer);
	}
dome.onmouseout = function(){
		timer = window.setInterval("scrollUp()",50);
	}


*/





/*
//首先，取得三个对象
var dome = document.getElementById("dome");
var dome1 = document.getElementById("dome1");
var dome2 = document.getElementById("dome2");
//给dome增加事件onmouseover和onmouseout
dome.onmouseover = function(){clearInterval(timer);}
dome.onmouseout = function(){timer=window.setInterval("scrollUp()",50);}
//三个div的高度一致
dome1.style.height = dome.offsetHeight+"px";
dome2.style.height = dome.offsetHeight+"px";
//将dome1中的内容复制到dome2中
dome2.innerHTML = dome1.innerHTML;
//定时器：让文本滚动起来
var timer = window.setInterval("scrollUp()",50);
//定义函数scrollUp
function scrollUp()
{
	//如果滚动上去的距离=260，则从头再开始滚动
	if(dome.scrollTop>=dome.offsetHeight)
	{
		dome.scrollTop = 0;
	}else
	{
		dome.scrollTop++;
	}
}
*/

/*************************************焦点图*****************************************/
/*
分析结果：
	（1）先让图片轮换起来，第一次图片从2开始轮换
	（2）事件：鼠标放到图片上停止轮换、鼠标移开继续
	（3）序号也要跟着变背景
	（4）事件：鼠标放到序号上停止轮换，移出继续轮换
*/
//定时器：轮换图片
var timer2 = window.setInterval("swapImg()",1000);
var num = 1; //初始图片序号
function swapImg()
{
	num++; //变量自增
	//如果等于第7张图片，则从1开始
	if(num==7)
	{
		num = 1;
	}
	//取得id=dd_scroll的元素对象
	var oImg = document.getElementById("dd_scroll");
	oImg.src = "images/dd_scroll_"+num+".jpg";
	//鼠标放到图片上时停止轮换，移出后继续轮换
	oImg.onmouseover = function(){clearInterval(timer2);}
	oImg.onmouseout = function(){timer2 = window.setInterval("swapImg()",1000);}
	//更改序列号的背景色
	changeBackgroundColor();
}
//更改序列号背景色
function changeBackgroundColor()
{
	//取得所有li元素
	var lis = document.getElementsByTagName("li");
	for(var i=0;i<lis.length;i++)
	{
		//更改所有li元素对象的背景色，并增加onmouseout事件
		lis[i].style.backgroundColor = "";
		lis[i].onmouseout = function(){timer2=window.setInterval("swapImg()",1000);}
	}
	//更改当前li元素对象的背景色
	lis[num-1].style.backgroundColor = "orange";
}
//定义函数：scrollStop()
function scrollStop(id)
{
	//设置当前图片序号
	num = id;
	//更改序号背景色
	changeBackgroundColor();
	//更改当前图片地址
	document.getElementById("dd_scroll").src = "images/dd_scroll_"+num+".jpg";
	//清除定时器
	clearInterval(timer2);
}

/***********************************************首页选项卡切换效果*********************************************/
function showMe(id)
{
	//使用数组，保存四个标签的id
	var arr = ["history","family","culture","novel"];
	//遍历数组
	for(var i=0;i<arr.length;i++)
	{
		//当前选项卡用当前样式
		if(arr[i]==arr[id])
		{
			document.getElementById(arr[id]).className = "book_type_out";
			document.getElementById("book_"+arr[id]).className = "book_show";
			/*
									"book_"   arr[0]  "history"
									      "book_history"
			*/
		}else
		{
			document.getElementById(arr[i]).className = "book_type";
			/*
					id=1   arr[1]   family
					id=2   arr[2]   culture
					id=3   arr[3]   novel  .className 
			*/
			document.getElementById("book_"+arr[i]).className = "book_none";
		}
	}
}















/*
function showMe(id)
{
	//定义一个数组：数组中各元素名称与选项卡名称一致
	var arr = ["history","family","culture","novel"];
	//遍历数组：找到当前元素
	for(var i=0;i<arr.length;i++)
	{
		if(arr[i] == arr[id])
		{
			document.getElementById(arr[i]).className = "book_type_out";
			document.getElementById("book_"+arr[i]).className = "book_show";
		}else
		{
			document.getElementById(arr[i]).className = "book_type";
			document.getElementById("book_"+arr[i]).className = "book_none";
		}
	}
}
*/

