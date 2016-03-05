	$(document).ready(function ($) {
		$.fn.setHeightAllElem = function (options) {
			var p = $.extend({
				parent: "#" + $(this).attr("id"),
				child: null,
				toDo: "max"
			}, options);

			if (p.child === null)
				return;

			var obj = $(p.parent + " " + p.child + " .caption");
			var hElem = (p.toDo === "max") ? 0 : 9999999999999;
			var action = true;
			var xsWindow = ($(window).width() < 768);
			var smWindow = ($(window).width() < 992);
			var hCurrentElem = 0;
			
			/*console.log("INIT -----------------------------");
			console.log("hElem: " + hElem);
			console.log("xsWindow: " + xsWindow);
			console.log("smWindow: " + smWindow);
			console.log("toDo: " + p.toDo);
			console.log("END -----------------------------");*/

			obj.each(function () {
				$(this).removeAttr("style");
				hCurrentElem = parseInt($(this).outerHeight()) + 182;

				action = (xsWindow || (smWindow && hCurrentElem > 0) || !smWindow);

				if (action && p.toDo === "max")
					hElem = (hCurrentElem >= hElem) ? hCurrentElem : hElem;
				else if (action && p.toDo === "min")
					hElem = (hCurrentElem <= hElem) ? hCurrentElem : hElem;
				//console.log(action);
				//console.log("hObj: " + hCurrentElem );
				//console.log("hElem final: " + hElem);
			});

			//console.log(!xsWindow);
			if (!xsWindow) {
				obj.each(function () {
					$(this).css("height", hElem + "px");
				});
			}
		};
		

		$('#panier').tooltip();
		$("#contentArticles").setHeightAllElem({child: ".thumbnail"});
	});