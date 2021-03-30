$(document).ready(function(){
    var link = $("#link"),
    counter = $("#counter"),
    count = 0;


    $(".show_next_task").submit(function(){
        
        count++;
        counter.html(count);
        var xhr = new XMLHttpRequest();
        var showbyid = count;
        // console.log(".show_next_task");
        xhr.open("POST", "api/show_next_task.php?showbyid=" + showbyid);
        xhr.send();
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                $('.otvet2').html('');
                
                $(".otvet2").append(xhr.responseText);
            }
        }
        return false;
    });
    
    $(".show_next").submit(function(){
        count++;
        counter.html(count);
        var xhr = new XMLHttpRequest();
        var showbyid = count;
        // console.log(".show_next");
        xhr.open("POST", "api/show_next.php?showbyid=" + showbyid);
        xhr.send();
        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200 ){
                $('.otvet3').html('');
                
                $(".otvet3").append(xhr.responseText);
            }
        }        
        return false;
    });
    
});