
			$(function(){
				var t=3000;
				var arr=new Array("../images/art.jpg","../images/2.jpg","../images/123.jpg","../images/美图.jpg","../images/201189504837.jpg");
				var num=0;
				var timer = null;
				var oCar=document.getElementById("lunbo");
				var oImg=oCar.getElementsByTagName("img")[0];
				var aLi=document.getElementsByTagName("li");
//				设置定时器
				function autoPlay(){
					timer = setInterval(function(){
						num++;
						num%=arr.length;
						fnTab();
					}, t);
				}

//				有用户来操作的定时器，开启之前一定要先关闭

				setTimeout( autoPlay, 1000 );
				oCar.onmouseover = function (){
				clearTimeout( timer );
				};

				oCar.onmouseout = autoPlay;
				//初始化
				function fnTab(){
				oImg.src = arr[num];
				for( var i=0; i<aLi.length; i++ ){
				aLi[i].style.background="grey";
				}
				aLi[num].style.background="white";
				}

				fnTab();
				//鼠标放上去显示本块内容

			for( var i=0; i<aLi.length; i++ ){
				aLi[i].index = i;
				// 索引值
				aLi[i].onmouseover = function (){
					num = this.index;
					fnTab();
				};
			}
})
