/*****************************************��Ѷ���***********************************************/

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

//��1����ȡ��������dome��dome1��dome2
//��2����������DIV�ĸ߶�Ϊһ��
//��3��id=dome��<div>��CSS���ԣ�overflow:hidden
//��4��dome2�е�������dome1������һ��
//��5��ͨ��dome��scrollTop������ʵ�ֹ���
//��6��������domeֹͣ����������ƿ�dome��������

//��ȡ��������
var dome = document.getElementById("dome");
var dome1 = document.getElementById("dome1");
var dome2 = document.getElementById("dome2");
//��������DIV�ĸ߶�һ��
dome1.style.height = dome.offsetHeight+"px";
dome2.style.height = dome.offsetHeight+"px";
//��dome1�е����ݸ��Ƶ�dome2��
dome2.innerHTML = dome1.innerHTML;
//��ʱ��
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
//���ŵ�dome��ʱ������ֹͣ������ƿ�ʱ����������
dome.onmouseover = function(){
		clearInterval(timer);
	}
dome.onmouseout = function(){
		timer = window.setInterval("scrollUp()",50);
	}


*/





/*
//���ȣ�ȡ����������
var dome = document.getElementById("dome");
var dome1 = document.getElementById("dome1");
var dome2 = document.getElementById("dome2");
//��dome�����¼�onmouseover��onmouseout
dome.onmouseover = function(){clearInterval(timer);}
dome.onmouseout = function(){timer=window.setInterval("scrollUp()",50);}
//����div�ĸ߶�һ��
dome1.style.height = dome.offsetHeight+"px";
dome2.style.height = dome.offsetHeight+"px";
//��dome1�е����ݸ��Ƶ�dome2��
dome2.innerHTML = dome1.innerHTML;
//��ʱ�������ı���������
var timer = window.setInterval("scrollUp()",50);
//���庯��scrollUp
function scrollUp()
{
	//���������ȥ�ľ���=260�����ͷ�ٿ�ʼ����
	if(dome.scrollTop>=dome.offsetHeight)
	{
		dome.scrollTop = 0;
	}else
	{
		dome.scrollTop++;
	}
}
*/

/*************************************����ͼ*****************************************/
/*
���������
	��1������ͼƬ�ֻ���������һ��ͼƬ��2��ʼ�ֻ�
	��2���¼������ŵ�ͼƬ��ֹͣ�ֻ�������ƿ�����
	��3�����ҲҪ���ű䱳��
	��4���¼������ŵ������ֹͣ�ֻ����Ƴ������ֻ�
*/
//��ʱ�����ֻ�ͼƬ
var timer2 = window.setInterval("swapImg()",1000);
var num = 1; //��ʼͼƬ���
function swapImg()
{
	num++; //��������
	//������ڵ�7��ͼƬ�����1��ʼ
	if(num==7)
	{
		num = 1;
	}
	//ȡ��id=dd_scroll��Ԫ�ض���
	var oImg = document.getElementById("dd_scroll");
	oImg.src = "images/dd_scroll_"+num+".jpg";
	//���ŵ�ͼƬ��ʱֹͣ�ֻ����Ƴ�������ֻ�
	oImg.onmouseover = function(){clearInterval(timer2);}
	oImg.onmouseout = function(){timer2 = window.setInterval("swapImg()",1000);}
	//�������кŵı���ɫ
	changeBackgroundColor();
}
//�������кű���ɫ
function changeBackgroundColor()
{
	//ȡ������liԪ��
	var lis = document.getElementsByTagName("li");
	for(var i=0;i<lis.length;i++)
	{
		//��������liԪ�ض���ı���ɫ��������onmouseout�¼�
		lis[i].style.backgroundColor = "";
		lis[i].onmouseout = function(){timer2=window.setInterval("swapImg()",1000);}
	}
	//���ĵ�ǰliԪ�ض���ı���ɫ
	lis[num-1].style.backgroundColor = "orange";
}
//���庯����scrollStop()
function scrollStop(id)
{
	//���õ�ǰͼƬ���
	num = id;
	//������ű���ɫ
	changeBackgroundColor();
	//���ĵ�ǰͼƬ��ַ
	document.getElementById("dd_scroll").src = "images/dd_scroll_"+num+".jpg";
	//�����ʱ��
	clearInterval(timer2);
}

/***********************************************��ҳѡ��л�Ч��*********************************************/
function showMe(id)
{
	//ʹ�����飬�����ĸ���ǩ��id
	var arr = ["history","family","culture","novel"];
	//��������
	for(var i=0;i<arr.length;i++)
	{
		//��ǰѡ��õ�ǰ��ʽ
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
	//����һ�����飺�����и�Ԫ��������ѡ�����һ��
	var arr = ["history","family","culture","novel"];
	//�������飺�ҵ���ǰԪ��
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

