function myFunction() {
    var x = document.getElementById("likeButton");
    if (x.style.color === "white") {
        $( "#likeButton" ).css( "color", "#4DF0DA" );
        $( "#likeButton" ).css( "background-color", "white" );
        $("i").removeClass("fe-pulse-w-pause");
    } else {
        $( "#likeButton" ).css( "color", "white" );
        $( "#likeButton" ).css( "background-color", "#4DF0DA" );
        $("i").addClass("fe-pulse-w-pause");
    }
}