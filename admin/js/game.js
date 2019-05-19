

$(document).ready(function() {
    
    // 顯示所有工作人員在圖上
    getAllStuffLoc();

    // 設定每次點擊圖像放置位置
    $(".map").on("click", setStuffLoc);
    
});


// 顯示所有工作人員在圖上
function getAllStuffLoc(e){

    let mapboard = document.getElementById('mapboard');

    console.log( typeof globalVariable);
    console.log(globalVariable);
    console.log(globalVariable.length);

    for(let i = 0 ; i < globalVariable.length ; i++){

        console.log(globalVariable[i]["admLoc"]);

        let locationXandY = (globalVariable[i]["admLoc"]).split(",");

        let percX = locationXandY[0];
        let percY = locationXandY[1];

        // 建一個img節點
        let stuffpoint = document.createElement("img");

        // 設定point屬性
        stuffpoint.classList.add("allStuffPoint");
        stuffpoint.setAttribute("width", "5%");
        stuffpoint.setAttribute("src", "../images/owl_3.png");
        stuffpoint.style.position = "absolute";
        stuffpoint.style.zIndex = "100";
        stuffpoint.style.transform ="translate(-50%,-50%)";                
        stuffpoint.style.top = percY +"%";
        stuffpoint.style.left = percX +"%";
        // 放置到地圖上
        mapboard.appendChild(stuffpoint);
    }
};


// 設定每次點擊圖像放置位置
function setStuffLoc(e) {

    // Var
    let insertLoc = document.getElementById('insetLoc');
    let mapboard = document.getElementById('mapboard');
    let points = document.getElementsByClassName("point");
    let point = document.createElement("img");

    // 每次點擊後，移除之前的座標圖像
    removeElementsByClass('point');

    // 設定point屬性
    point.classList.add("point");
    point.setAttribute("width", "5%");
    point.setAttribute("src", "../images/owl_2.png");
    point.style.position = "absolute";
    point.style.zIndex = "100";
    point.style.transform ="translate(-50%,-50%)";
    mapboard.appendChild(point);

    // 計算相對位置
    let percX = ( e.offsetX ) / $(e.target).width() * 100;
    let percY = ( e.offsetY ) / $(e.target).height() * 100;

    // 設定point位置
    point.style.top = percY +"%";
    point.style.left = percX +"%";
    insertLoc.value = percX.toFixed(2) + "," + percY.toFixed(2) ;

    console.log( e.offsetX + " " + e.offsetY );
    console.log(point.height + " " + point.width);
    console.log(point.style.left + " " + point.style.top);
}


// 移除className的節點
function removeElementsByClass(className){
    var elements = document.getElementsByClassName(className);
    while(elements.length > 0){
        elements[0].parentNode.removeChild(elements[0]);
    }
}