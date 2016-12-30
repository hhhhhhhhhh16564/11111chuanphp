/*****************************************��Ѷ���***********************************************/
//��1����ȡ��������dome��dome1��dome2
//��2����������DIV�ĸ߶�Ϊһ��
//��3��id=dome��<div>��CSS���ԣ�overflow:hidden
//��4��dome2�е�������dome1������һ��
//��5��ͨ��dome��scrollTop������ʵ�ֹ���
//��6��������domeֹͣ����������ƿ�dome��������

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
/*
	ѡ������������ǣ�book_type��book_type_out
	���ݵ��������ǣ�book_show��book_none
*/
function showMe(id)
{
	//���ĸ�id�浽һ��������
	var arr = ["history","family","culture","novel"];
	//ѭ�����飬�������е��ַ���ת�ɶ���
	for(var i=0;i<arr.length;i++)
	{
		//������ݹ�����idֵ�������е��±�һ����˵���ǵ�ǰѡ�
		if(arr[i]==arr[id])
		{
			//  arr[3] ���� arr[3]
			//����ǵ�ǰѡ��������������Ϊbook_type_out
			document.getElementById(arr[i]).className = "book_type_out";
			//����ǵ�ǰ�����ݲ㣬�����������Ϊbook_show
			document.getElementById("book_"+arr[i]).className = "book_show";
		}else
		{
			//������ǵ�ǰѡ�񿨣������������Ϊbook_type
			document.getElementById(arr[i]).className = "book_type";
			//������ǵ�ǰ�����ݲ㣬�����������Ϊbook_none;
			document.getElementById("book_"+arr[i]).className = "book_none";
			 //                      book_  arr[0] history ����book_history
			 //                      book_  arr[1] family  ����book_family
		}
	}
	
	
	
	
	
	



/*

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
			*//*
		}else
		{
			document.getElementById(arr[i]).className = "book_type";
			/*
					id=1   arr[1]   family
					id=2   arr[2]   culture
					id=3   arr[3]   novel  .className 
			*//*
			document.getElementById("book_"+arr[i]).className = "book_none";
		}
	}
*/
}

