//toggle completed effect
$("ul").on("click", "li", function(){
    $(this).toggleClass("completed");
});

//delete todo with x
$("ul").on("click", "span", function(event){
    $(this).parent().fadeOut(500, function(){
        //remove item and not just set display: none;
        $(this).remove();
    });
    //stop li click event from occuring
    event.stopPropagation();
});

//create new to-do
$("input[type='text']").keypress(function(event){
    if(event.which === 13){
        //grab new todo from input
        var todoText = $(this).val();
        //clear input
        $(this).val("");
        //create new LI and add to ul
        $("ul").append("<li><span><i class='fas fa-trash-alt'></i></span>"+" "+todoText+"</li>");
    }
});

//fade add todo on icon toggle
$(".fa-plus").on("click",function(){
    $("input").fadeToggle();
});