var xhr = new XMLHttpRequest();
xhr.onload=function (){
    if( xhr.status == 200 ){
        member(xhr.responseText);
    }else{
        alert( xhr.status );
    }
}

// var url = "../member.php";
xhr.open("Get", url, true);
xhr.send( null );