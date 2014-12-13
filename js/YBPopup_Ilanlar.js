var YBPopup = null;
function set_YBPopup() {
	YBPopup = new _YBPopup();
}
function _YBPopup(onhide,onshow,beforehide,beforeshow)
{
	this.onhide = onhide;
	this.onshow = onshow;
	this.beforehide = beforehide;
	this.beforeshow = beforeshow;
	var YBPopup_DIV = null;
	var YBPopup_ShadowDIV = null;
	
	function initializeDIV() 
	{
		YBPopup_DIV = document.createElement("DIV");
		with(YBPopup_DIV) {
			id = "YBPopup_DIV";
			style.position = 'absolute';
			style.display = 'none';
			className = 'shadowed';
			innerHTML = "<table id='tblDiv' width='100%' cellSpacing='0' cellPadding='0' border='0' class='popupTable'>"+
						"<tr  id='trTitle' onmousedown=YB.dnd.startDrag(event,YB.ById('YBPopup_DIV'));>"+
						    "<td class='popupHeader'>"+
						       "<table cellpadding='0' cellspacing='0' border='0' width='100%' class='inherit'>"+
							        "<tr>"+
							            "<td id='txtTitle' align='left' class='popupTitle'>"+
							            "</td>"+
							            "<td align='right'>"+
							                "<img onclick='javascript:YBPopup.hide();' onmouseover=this.style.cursor='pointer'; src='" + $YBVP + "/Assets/images/general/filterHeader_rght_im_close.gif' alt='Kapat'/>" +
							            "</td>"+
							        "</tr>"+
							    "</table> "+
						    "</td>"+
						"</tr>"+
						"<tr>"+
							"<td colSpan='2' class='ybPopupBg'>"+
								"<div id='dvStatic'></div>"+
								"<div id='dvContent' style='display:none;'></div>"+
							"</td>"+
						"</tr>"+
						"</table>";
			style.zIndex = 10000000;
		}
		if(document.forms[0]!=null)
			document.forms[0].appendChild(YBPopup_DIV);
		else
			document.body.appendChild(YBPopup_DIV);
	}

	this.show = function(div, title, state) 
	{
	    if (typeof this.beforeshow == 'function') {
	        this.beforeshow();
	        this.beforeshow = null;
	    }
	    if (!YBPopup_DIV) initializeDIV();
	    if (YBPopup_DIV.style.display == '')
	        this.hide();
	    var divContent = YB.ById('dvContent');
	    if (title)
	        YB.ById('txtTitle').innerHTML = title;
	    YBPopup_DIV.style.display = '';
	    YB.dom.swapNode(div, divContent);
	    div.style.display = '';
	    YBPopup_DIV.style.width = div.style.width;
	    YB.dom.centerPos(YBPopup_DIV);
	    YBPopup.div = div;
	    YB.html.disablePage();
	    this.hideSelects('hidden');
	    if (typeof this.onshow == 'function') {
	        this.onshow();
	        this.onshow = null;
	    }
	}
	
	this.hide = function() 
	{
		if(typeof this.beforehide == 'function') {
			this.beforehide();
			this.beforehide = null;
		}
		YBPopup_DIV.style.display = 'none';
		var divContent = YB.ById('dvContent');
		YBPopup.div.style.display = 'none';
		if(divContent.previousSibling==null || (divContent.previousSibling!=null && divContent.previousSibling.getAttribute==null) || (divContent.previousSibling!=null && divContent.previousSibling.getAttribute('ID')!='dvStatic'))
			YB.dom.swapNode(divContent,YBPopup.div);
		YB.html.enablePage();

		this.hideSelects('');
		
		if(typeof this.onhide == 'function') {
			this.onhide();
			this.onhide = null;
		}
    },
	
	// In IE, select elements hover on top of the lightbox
	this.hideSelects = function(visibility)
	{
		selects = document.getElementsByTagName('select');
		for(i = 0; i < selects.length; i++) {
			selects[i].style.visibility = visibility;
		}
	}
}

YB.bodyOnLoad(set_YBPopup);