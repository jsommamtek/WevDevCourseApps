
$(".contentContainer").css("min-height", $(window).height());

$("textarea").css("height", $(window).height() - 300);

$("textarea").keyup(function() {
	$.post("updatediary.php", {diary:$("textarea").val()});
});
