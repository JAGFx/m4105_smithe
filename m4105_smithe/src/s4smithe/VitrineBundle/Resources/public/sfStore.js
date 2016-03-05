	$(document).ready(function ($) {
		$.fn.setHeightAllElem = function (options) {
			var p = $.extend({
				parent: "#" + $(this).attr("id"),
				child: null,
				toDo: "max"
			}, options);

			if (p.child === null)
				return;

			var obj = $(p.parent + " " + p.child);
			var hElem = (p.toDo === "max") ? 0 : 9999999999999;
			var action = true;
			var xsWindow = ($(window).width() < 768);
			var smWindow = ($(window).width() < 992);

			obj.each(function () {
				$(this).removeAttr("style");

				action = (xsWindow || (smWindow && $(this).outerHeight() > 0) || !smWindow);

				if (action && p.toDo === "max")
					hElem = (parseInt($(this).outerHeight()) >= hElem) ? parseInt($(this).outerHeight()) : hElem;
				else if (action && p.toDo === "min")
					hElem = (parseInt($(this).outerHeight()) <= hElem) ? parseInt($(this).outerHeight()) : hElem;
				//console.log(action);
				//console.log(hElem);
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