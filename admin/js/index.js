
function init() {

    $('.editBtn').on('click',function(){
        $(".editInput").show();
        $(".saveBtn").show();
        $(this).closest("tr").find(".editBtn").hide();
    });

    $('.saveBtn').on('click',function(){
        $(this).closest("tr").find(".editBtn").show();
        $(this).closest("tr").find(".saveBtn").hide();
    });

    // var editBtns = document.getElementsByClassName("editBtn");
    // for (let i = 0; i < editBtns.length; i++) {
    //     editBtns[i].addEventListener('click', editRow);
    // }

    // function editRow(e) {
    //     console.log(this);
    //     let tr = this.parentNode.parentNode;
    //     console.log(tr);
    //     // let admNo = tr.children[0].innerHTML;
    //     let admId = tr.children[1].innerHTML;
    //     let admPsw = tr.children[2].innerHTML;
    //     let admPer = tr.children[3].innerHTML;
    //     let admStatus = tr.children[4].innerHTML;

    //     // 修改為input button
    //     tr.children[1].innerHTML = `<input type="text" class="form-control form-control-sm" name="admId" value=${admId}>`;
    //     tr.children[2].innerHTML = `<input type="text" class="form-control form-control-sm" name="admPsw" value=${admPsw}>`;
    //     tr.children[3].innerHTML = `<input type="text" class="form-control form-control-sm" name="admPer" value=${admPer}>`;
    //     tr.children[4].innerHTML = `<input type="text" class="form-control form-control-sm" name="admStatus" value=${admStatus}>`;
    // }


    // var saveBtns = document.getElementsByClassName("saveBtn");
    // for( let i = 0 ; i < saveBtns.length ; i++ ){
    //     saveBtns[i].addEventListener('click',saveRow);
    // }

    // function saveRow(e){

    //     console.log(this);
    //     let tr = this.parentNode.parentNode;
    //     console.log(tr);



    //     // 修改為text
    //     tr.children[1].innerHTML = tr.children[1].firstChild.value;//admId;
    //     tr.children[2].innerHTML = tr.children[2].firstChild.value;
    //     tr.children[3].innerHTML = tr.children[3].firstChild.value;
    //     tr.children[4].innerHTML = tr.children[4].firstChild.value;

    // }
}

window.onload = init;

