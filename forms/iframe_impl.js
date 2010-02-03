function onInit()
{
	var scrolling_select_handler =
	{
		form: this,
		handleEvent: function (event)
		{
			if (event.target.value == "no")
			{
				alert("&modules.iframe.document.iframe.Scrolling-warning;");
			}
		}
	}
	
	this.getFieldByName('scrolling').addEventListener('select', scrolling_select_handler, false);
}