/****************************根据据您挑选的商品，当当为您推荐部分的显示和隐藏*************************/
function shopping_commend_show(obj)
{
	//取得id=shopping_commend_sort的对象
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

/**************************************购物车模块****************************************/
//表格背景色：鼠标放上变#FFF，鼠标移出变#fefbf2
function productOver(obj)
{
	obj.style.backgroundColor = "#fff";
}
function productOut(obj)
{
	obj.style.backgroundColor = "#fefbf2";
}
//删除一个产品：删除某一个tr标记
function deleteProduct(str)
{
	if(window.confirm("确认要删除吗？"))
	{
		//将传过来的字符串转成一个对象：因为字符串与id=shoppingProduct_01的值一样
		//取得id=str的对象
		var node_tr = document.getElementById(str);
		//删除当前行<tr>标记：先找出父节点tbody，再删除子节点tr
		node_tr.parentNode.removeChild(node_tr);
		//重新统计金额
		productCount();
	}
}



//商品计算：商品总金额、商品总积分、共节省的总金额
function productCount()
{
	//我们的目标是求三个值：总金额、总积分、总节省
	var total = 0;  //总金额
	var jiesheng = 0;  //总节省
	var jifen = 0;  //总积分
	
	//获取id=shopList表格对象
	var node_table = document.getElementById("shopList");
	//获取所有的tr节点
	var trs = node_table.rows;
	//统计所有行的相关数据
	for(var i=0;i<trs.length;i++)
	{
		//找出行中的所有单元格
		var tds = trs[i].cells;
		//取出数量
		var num = tds[4].firstChild.value;
		//取出市场价
		var price1 = (tds[2].innerHTML).substr(1);
		//取出当当价
		var price2 = parseFloat((tds[3].innerHTML).substr(1));
		
		//计算一个商品的总金额、总积分、总节省
		total += num*price2;  //总金额：当当价*数量
		jiesheng += (price1-price2)*num;  //总节省：(市场价-当当价)*数量
		jifen += (tds[1].innerHTML)*num;  //总积分：积分*数量
	}
	
	//将三个值写入到指定的位置
	document.getElementById("total").innerHTML = "&yen; "+total.toFixed(2);
	document.getElementById("jiesheng").innerHTML = "&yen; "+jiesheng.toFixed(2);
	document.getElementById("jifen").innerHTML = jifen;
	
	
	/*
	
	
	
	
	
	
	
	
	
	//变量初始化
	var total = 0;    //总金额
	var jiesheng = 0; //总节省
	var jifen = 0;    //总积分
	
	//取得id=shopList的表格对象
	var node_table = document.getElementById("shopList");
	//取出所有的tr节点，是一个数组
	var node_tr = node_table.rows;
	//循环所有的行，分别统计总金额、总积分、总节省
	for(var i=0;i<node_tr.length;i++)
	{
		//取出一行中所有的单元格，是一个数组
		var node_td = node_tr[i].cells;
		//取出每一行的数量
		var count = parseInt(node_td[4].firstChild.value);
		//取出每一行的总金额：数量*当当价
		total += count * parseFloat(node_td[3].innerHTML.substr(1));
		//取出每一行的总积分：数量*单品积分
		jifen += count * parseInt(node_td[1].innerHTML);
		//取出每一行的总节省：数量*市场价 - 数量*当当价
		jiesheng += count * parseFloat(node_td[2].innerHTML.substr(1)) - count * parseFloat(node_td[3].innerHTML.substr(1))
	}
	//将三个值分别写入到对应的id中去
	document.getElementById("total").innerHTML = "&yen; "+total.toFixed(2);
	document.getElementById("jifen").innerHTML = jifen;
	document.getElementById("jiesheng").innerHTML = "&yen; "+jiesheng.toFixed(2);
	*/
}








/*
function productCount()
{
	//变量初始化
	var total_price = 0; 		//单行价格
	var total_jifen = 0;  	//单行积份
	var total_jiesheng = 0; 	//单行节省
	
	//取得id=shopList对象
	var node_table = document.getElementById("shopList");
	//取得所有的tr对象
	var node_trs = node_table.rows;
	//循环所有的行：计算每行的总金额、总积分、共节省
	for(var i=0;i<node_trs.length;i++)
	{
		//取出一行中所有的单元格
		var node_tds = node_trs[i].cells;
		//取得：数量、积份、市场价、当当价
		var count = parseInt(node_tds[4].firstChild.value);
		var jifen = parseFloat(node_tds[1].innerHTML);
		var price1 = parseFloat(node_tds[2].innerHTML.substr(1));
		var price2 = parseFloat(node_tds[3].innerHTML.substr(1));
		//将每一行的数据累加起来
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
