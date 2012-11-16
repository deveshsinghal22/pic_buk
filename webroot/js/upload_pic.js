$(document).ready(function(){ 
    $count = 0;

    $('#Upload').click(function(){
        alert("hide");
        $("#imgDynamic").hide();
        $("#imgDynamic").attr("src","loading.gif");
        
        var data = new FormData();
        jQuery.each($('#loadImage')[0].files, function(i, file) {
            data.append('file-'+i, file);
        });
        $.ajax({
            url: 'upload_pic.php',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            dataType: "JSON",
            success: function(data){
                if(data[0].reply == "success") {
                    $count++;
                    img = "img/"+data[0].image;
                    $("#imgDynamic").attr("src",img);
                    $('#Upload').attr("disabled","disabled");
                } else if(data.reply == "session") {
                    $("#view").html("You have upoloaded maximum number of images.");
                } else {
                    $("#imgDynamic").attr("src","");
                    $("#imgDynamic").hide();
                }
            }
        });
        
        $("#loadImage").change(function(){
            $('#Upload').removeAttr("disabled");
        });
        
        
    });
    
    
});