/****************************���ݾ�����ѡ����Ʒ������Ϊ���Ƽ����ֵ���ʾ������*************************/
function shopping_commend_show(obj)
{
	//ȡ��id=shopping_commend_sort�Ķ���
	var content = document.getElementById("shopping_commend_sort");
	if(content.style.display=="block")
	{
		content.style.display="none";
		obj.src = "images/shopping_arrow_up.gif";
	}else
	{
		content.style.display="block";
		obj.src ="images/shopping_arrow_down.gif";
	}
	
}

/**************************************���ﳵģ��****************************************/
//��񱳾�ɫ�������ϱ�#FFF������Ƴ���#fefbf2
function productOver(obj)
{
	obj.style.backgroundColor = "#fff";
}
function productOut(obj)
{
	obj.style.backgroundColor = "#fefbf2";
}
//ɾ��һ����Ʒ��ɾ��ĳһ��tr���
function deleteProduct(str)
{
	if(window.confirm("ȷ��Ҫɾ����"))
	{
		//�����������ַ���ת��һ��������Ϊ�ַ�����id=shoppingProduct_01��ֵһ��
		//ȡ��id=str�Ķ���
		var node_tr = document.getElementById(str);
		//ɾ����ǰ��<tr>��ǣ����ҳ����ڵ�tbody����ɾ���ӽڵ�tr
		node_tr.parentNode.removeChild(node_tr);
		//����ͳ�ƽ��
		productCount();
	}
}



//��Ʒ���㣺��Ʒ�ܽ���Ʒ�ܻ��֡�����ʡ���ܽ��
function productCount()
{
	//���ǵ�Ŀ����������ֵ���ܽ��ܻ��֡��ܽ�ʡ
	var total = 0;  //�ܽ��
	var jiesheng = 0;  //�ܽ�ʡ
	var jifen = 0;  //�ܻ���
	
	//��ȡid=shopList������
	var node_table = document.getElementById("shopList");
	//��ȡ���е�tr�ڵ�
	var trs = node_table.rows;
	//ͳ�������е��������
	for(var i=0;i<trs.length;i++)
	{
		//�ҳ����е����е�Ԫ��
		var tds = trs[i].cells;
		//ȡ������
		var num = tds[4].firstChild.value;
		//ȡ���г���
		var price1 = (tds[2].innerHTML).substr(1);
		//ȡ��������
		var price2 = parseFloat((tds[3].innerHTML).substr(1));
		
		//����һ����Ʒ���ܽ��ܻ��֡��ܽ�ʡ
		total += num*price2;  //�ܽ�������*����
		jiesheng += (price1-price2)*num;  //�ܽ�ʡ��(�г���-������)*����
		jifen += (tds[1].innerHTML)*num;  //�ܻ��֣�����*����
	}
	
	//������ֵд�뵽ָ����λ��
	document.getElementById("total").innerHTML = "&yen; "+total.toFixed(2);
	document.getElementById("jiesheng").innerHTML = "&yen; "+jiesheng.toFixed(2);
	document.getElementById("jifen").innerHTML = jifen;
	
	
	/*
	
	
	
	
	
	
	
	
	
	//������ʼ��
	var total = 0;    //�ܽ��
	var jiesheng = 0; //�ܽ�ʡ
	var jifen = 0;    //�ܻ���
	
	//ȡ��id=shopList�ı�����
	var node_table = document.getElementById("shopList");
	//ȡ�����е�tr�ڵ㣬��һ������
	var node_tr = node_table.rows;
	//ѭ�����е��У��ֱ�ͳ���ܽ��ܻ��֡��ܽ�ʡ
	for(var i=0;i<node_tr.length;i++)
	{
		//ȡ��һ�������еĵ�Ԫ����һ������
		var node_td = node_tr[i].cells;
		//ȡ��ÿһ�е�����
		var count = parseInt(node_td[4].firstChild.value);
		//ȡ��ÿһ�е��ܽ�����*������
		total += count * parseFloat(node_td[3].innerHTML.substr(1));
		//ȡ��ÿһ�е��ܻ��֣�����*��Ʒ����
		jifen += count * parseInt(node_td[1].innerHTML);
		//ȡ��ÿһ�е��ܽ�ʡ������*�г��� - ����*������
		jiesheng += count * parseFloat(node_td[2].innerHTML.substr(1)) - count * parseFloat(node_td[3].innerHTML.substr(1))
	}
	//������ֵ�ֱ�д�뵽��Ӧ��id��ȥ
	document.getElementById("total").innerHTML = "&yen; "+total.toFixed(2);
	document.getElementById("jifen").innerHTML = jifen;
	document.getElementById("jiesheng").innerHTML = "&yen; "+jiesheng.toFixed(2);
	*/
}








/*
function productCount()
{
	//������ʼ��
	var total_price = 0; 		//���м۸�
	var total_jifen = 0;  	//���л���
	var total_jiesheng = 0; 	//���н�ʡ
	
	//ȡ��id=shopList����
	var node_table = document.getElementById("shopList");
	//ȡ�����е�tr����
	var node_trs = node_table.rows;
	//ѭ�����е��У�����ÿ�е��ܽ��ܻ��֡�����ʡ
	for(var i=0;i<node_trs.length;i++)
	{
		//ȡ��һ�������еĵ�Ԫ��
		var node_tds = node_trs[i].cells;
		//ȡ�ã����������ݡ��г��ۡ�������
		var count = parseInt(node_tds[4].firstChild.value);
		var jifen = parseFloat(node_tds[1].innerHTML);
		var price1 = parseFloat(node_tds[2].innerHTML.substr(1));
		var price2 = parseFloat(node_tds[3].innerHTML.substr(1));
		//��ÿһ�е������ۼ�����
		total_price += price2 * count;
		total_jifen += jifen * count;
		total_jiesheng += price1 * count - price2 * count;
	}
	document.getElementById("total").innerHTML = "&yen; "+total_price.toFixed(2);
	document.getElementById("jiesheng").innerHTML = "&yen; "+total_jiesheng.toFixed(2);
	document.getElementById("jifen").innerHTML = total_jifen;
}
*/
window.onload=productCount;
