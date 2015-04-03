/**
 * 表格生成插件，兼容ie8，firefox，chrome
 * Copyright 2012 suntek
 * @author zhc
 * 
 */
(function($) {
	$.fn.queryTable = function(options) {
		var extendOptions= $.extend({}, $.fn.queryTable.defaults, options);
		
		var queryTableFunc=function(){
			   var perPage=extendOptions.resultsPerpage;
			   var currentPage=1;
			   var totalPage=1;
			   var datas=[];
			   var opts=extendOptions;
			   var appendBodyHtml=function(target){
				   var start=0,end=datas.length;
				   var html='';
				   if(opts.useResultsPerpage){
					   start=(currentPage-1)*perPage;
					   end=start+perPage;
					   if(datas.length<end){
						   end=datas.length;
					   }
				   }
				   for(var j=start;j<end;j++){
						html+='<tr class="'+(((j+1)%2==0)?opts.doubleRowClassName:opts.singleRowClassName)+'">';
						var serialInd=opts.serialNumCol;
						if(opts.colModels.length>0&&opts.colModels[0].type=="radio"){
							serialInd=serialInd+1;
						}
					for(var i=0;i<opts.colModels.length;i++){
						var model=opts.colModels[i];
						if(i==serialInd&&opts.showSerialNum){
							html+='<td>'+(j+1)+'</td>';
						}
						if(model.type=='radio'){
							html+='<td><input type="radio" name="'+model.radioName+'" value="'+j+'"></td>';
							
						}else if(model.type=='other'){
							html+='<td>'+model.value+'</td>';
						}else if(datas[j][model.name]!==undefined){
							var value=datas[j][model.name];
							if(value==null){
								value='';
							}
							if(model.render!=null){
								value=model.render.call(this,value,j);
							}
							html+='<td>'+value+"</td>";
						}else{
							if(model.render!=null){
								model.value=model.render.call(this,datas[j],j);
							}
							html+='<td>'+model.value+'</td>';
						}
					}
					html+='</tr>';
					}
				    if(target!=null){
					   $(target).find("tbody").html(html);
					   $(target).find("tbody td").click(function(){
						   $(target).find("tbody tr").removeClass("trselect");
						   var inradio=$(this).parent().addClass("trselect").find("input:radio");
						   if(inradio.length>0){
							   inradio.attr("checked","checked");
						   }
					   });
					}
			   };
			   return {	
				   getCurrentPage:function(){
					   return currentPage;  
				   },
				   getTotalPage:function(){
					   return totalPage;
				   },
				   getDatas:function(){
					   return datas;  
				   },
				createTableBody:function(target,param,url){
					var responseData=[];
					   var queryUrl=opts.url;
					   if(url!=undefined){
						   queryUrl=url;
					   }
					$.ajax({
						type : opts.method,
						url : queryUrl,
						data : param,
						dataType : opts.dataType,
						async: opts.async,
						timeout:10000,
						success : function(response) {
							if(response.error){
								opts.errorHandler.call(this,response.error);
								return ;
							}else if(typeof response.data == "Array" ){
								responseData=response.data;
							}else if(typeof response.data == "object"){
								responseData=new Array();
								for(var i in response.data){
									responseData.push(response.data[i]);
								}
							}else if(typeof response == "object"){
								responseData=new Array();
								for(var i in response){
									responseData.push(response[i]);
								}
							}
							
							totalPage=Math.ceil(responseData.length/perPage);
							$(target).find("div.queryTableContain").css("background",'#ffffff');
							$(target).find('.totalPage').html(totalPage);
							datas=responseData;
							currentPage=1;
							appendBodyHtml(target);
							opts.successFunction.call(this, response);
						},
						error : function(XMLHttpRequest, textStatus, errorThrown) {
							alert("连接超时，请稍后再试。");
							try {
								$(target).find("div.queryTableContain").css("background",'#ffffff');
								if (opts.onError)
									opts.onError(XMLHttpRequest, textStatus,
											errorThrown);
							} catch (e) {
							}
						}
					});
				},
				prepage:function(target){
					if(currentPage>1){
						currentPage--;
						appendBodyHtml(target);
					}
				},
				nextPage:function(target){
					if(currentPage<totalPage){
						currentPage++;
						appendBodyHtml(target);
					}
				},
				toPage:function(target,page){
					if(page>0&&page<=totalPage){
						currentPage=page;
						appendBodyHtml(target);
					}	
				}
		};
		};
		var func=queryTableFunc();
		this.options=options;
		this.queryTableFunc=func;
		
		var createBottomHTML=function(){
			var html='<div class="pDiv"><div class="pDiv2"><div class="btnseparator"></div><div class="pGroup"><div class="pFirst pButton"><span></span></div><div class="pPrev pButton"><span></span></div></div><div class="btnseparator"></div>'+
			          '<div class="pGroup"><span class="pcontrol">第&nbsp;<input type="text" value="1" size="3">&nbsp;页&nbsp;&nbsp;共&nbsp;<span class="totalPage">1</span>&nbsp;页</span></div><div class="btnseparator"></div>'+
				      '<div class="pGroup"><div class="pNext pButton"><span></span></div><div class="pLast pButton"><span></span></div></div><div class="btnseparator"></div><div class="pGroup">'+
				      '<div class="pReload pButton"><span></span></div></div><div class="btnseparator"></div><div class="pGroup"><span class="pPageStat"></span></div>'+
				      '</div><div style="clear: both"></div></div>';
			return html;
		};
		var createTableHeadHTML=function(){
			var html='<div><table cellspacing="0" width="'+extendOptions.width+'" height="'+extendOptions.height+'" align="center" class="'
			          +extendOptions.tableClassName+'"><thead><tr class="'+extendOptions.headClassName+'">';
			
			var serialInd=extendOptions.serialNumCol;
			if(extendOptions.colModels.length>0&&extendOptions.colModels[0].type=="radio"){
				serialInd=serialInd+1;
			}
			for(var i=0;i<extendOptions.colModels.length;i++){
				var model=extendOptions.colModels[i];
				if(i==serialInd&&extendOptions.showSerialNum){
					html+='<td align="center">序号</td>';
				}
				if(model.type=='radio'){
					html+='<td width="'+model.width+'" height="'+model.height+'" align="'+model.align+'"></td>';
				}else{
					html+='<td width="'+model.width+'" height="'+model.height+'" align="'+model.align+'">'+model.headName+"</td>";
				}
			}
			html+='</tr></thead><tbody></tbody></table></div>';
			return html;
		};
		var bindBottomEvent=function(target){
			$(target).find(".pPrev span").bind("click",function(){
				func.prepage(target);
				$(target).find(".pcontrol input").val(func.getCurrentPage());
			});
			$(target).find(".pNext span").bind("click",function(){
				var pcontrol=$(target).find(".pcontrol input").val();
				if(!isNaN(pcontrol)&&pcontrol!=func.getCurrentPage()){
					func.toPage(target,pcontrol);
				}else{
					func.nextPage(target);
				}
				$(target).find(".pcontrol input").val(func.getCurrentPage());
			});
			
			$(target).find(".pFirst span").bind("click",function(){
				func.toPage(target,1);
				$(target).find(".pcontrol input").val(func.getCurrentPage());
			});
			$(target).find(".pLast span").bind("click",function(){
				func.toPage(target,func.getTotalPage());
				$(target).find(".pcontrol input").val(func.getTotalPage());
				
			});
			$(target).find(".pReload span").bind("click",function(){
				func.createTableBody(target);
				$(target).find(".pcontrol input").val(func.getCurrentPage());
				$(target).find(".pGroup span.totalPage").html(func.getTotalPage());
			});
			
			$(target).find(".pGroup span.totalPage").html(func.getTotalPage());
		};
		
		return this.each(function() {
			var target=this;
			var html='<div class="queryTableContain">'+createTableHeadHTML();
			if(extendOptions.useResultsPerpage){
			    html+=createBottomHTML();
			}
			$(this).html(html+'</div>');
			if(extendOptions.useResultsPerpage){
				var tableHeight=$(target).find("table thead tr").height()+
	                    $(target).find("table thead tr").height()*extendOptions.resultsPerpage;
				var bottomHeight=$(target).find("http://www.gzjd.gov.cn/vehinspection/js/jquery-queryTable/div.pDiv").height();
				$(target).find("table").parent().css("height",tableHeight+"px");
				$(target).css("height",tableHeight+bottomHeight+"px");
			}
			func.createTableBody(target);
			
			if(extendOptions.useResultsPerpage){
				bindBottomEvent(this);
				
			}
		});
	};
	$.fn.queryTable.defaults = {
		url : "",   //ajax 查询url
		width : "100%",  //表格宽度  暂时无用
		height : "auto",  //表格高度 暂时无用
		tableClassName:"querytable",
		headClassName:"trbg0",
		singleRowClassName:"tr01",  
		doubleRowClassName:"tr02",
		method : "POST",
		dataType : "json",
		async:true,
		useResultsPerpage : false, // use the results per page select box
		showSerialNum:true, //显示序号
		serialNumCol:0,    //序号位置，所在列
		resultsPerpage : 5, // results per page
		successFunction:function(){},
		errorHandler:function(error){
			
		},
		onError : function(XMLHttpRequest, textStatus, errorThrown) {
		},
		colModels : [ {
			name : '',
			headName:'',
			align : 'center',
			type:'radio', //radio or data or other
			radioName:'',
			width:"auto",
			height:"auto",
			render:null,
			value:''
		} ]
		
	};
	$.fn.createTableBody=function(param,url){
		var target=this;
		return this.each(function(){
			if(target.queryTableFunc){
				target.queryTableFunc.createTableBody(target,param,url);
				if(target.options&&target.options.useResultsPerpage){
				$(target).find(".pGroup span.totalPage").html(target.queryTableFunc.getTotalPage());
				$(target).find(".pcontrol input").val(target.queryTableFunc.getCurrentPage());
				}
			}
		});
	};
	$.fn.getQueryDatas=function(){
		var target=this;
		if(target.queryTableFunc){
			return target.queryTableFunc.getDatas();
		}
	};
	$.fn.getQueryDataByIndex=function(index){
		var target=this;
		if(target.queryTableFunc){
			var datas=target.queryTableFunc.getDatas();
			if(datas){
				return datas[index];
			}
		}
	};
})(jQuery);