function gethtml(result) {

    let x=``;

    x=x+`<div class="addnew"><button id="btnAddNew" class="btn btn-primary">ADD NEW</button></div>`;

    x=x+`<table class="table table-striped">`;
    
    let i = 0;
    
    for (i = 0; i < result.length; i++) {
        if (i == 0) 
        {
        x=x+`<thead>
        <th>SLNO</th> <th>CODE</th> <th>TITLE</th> <th>DEPT</th> <th>NSEM</th>
        <th>GRDTN_LVL</th> <th>TECH_LVL</th> <th></th>
        </thead><tbody>`;    
        }

        x=x+`<tr>
        <td>${i+1}</td>  <td>${result[i]['pcode']}</td>  <td>${result[i]['ptitle']}</td>  
        <td>${result[i]['dtitle']}</td>
        <td>${result[i]['nos']}</td>
        <td>${result[i]['gl']}</td>
        <td>${result[i]['tl']}</td>
        <td><button class="btn btn-primary btnEdit" data-details='${JSON.stringify(result[i])}'>EDIT</button></td>
        <td><button class="btn btn-danger btnDelete" data-details='${JSON.stringify(result[i])}'>DELETE</button></td>
        `;
        
    }


    x=x+`</tbody></>`;

    return x
}

function getSelectionbox(result) 
{

    let x = ``;
    x=x+`<option value="-1">SELECT ONE</option>`;

    for (let i = 0; i < result.length; i++) {
        
        x=x+`<option value="${result[i].did}">${result[i].dtitle}</option>`;
        
    }
    return x;
}

function getprogrammedetails()
{
    $.ajax({
        url:"/inclusive project/ajax/getprogrammedetailsAJAX.php",
        type:"POST",
        dataType:"JSON",
        data:{action1:"getprogrammedetails"},
        beforeSend:function () {  
        },
        success:function(result){
            let html = gethtml(result);
            $("#contentdiv").html(html);
        },
        error:function(){alert("erour");}
    });
}

function getdepartementdetails()
{
    $.ajax({
        url:"/inclusive project/ajax/getprogrammedetailsAJAX.php",
        type:"POST",
        dataType:"JSON",
        data:{action1:"getdepartementdetails"},
        beforeSend:function () {  
        },
        success:function(result){
            // let x=JSON.stringify(result);
            // alert(x);
            let html=getSelectionbox(result);
            $("#SDepart").html(html);
        },
        error:function(){alert("erour");}
    });
}

function pushtoserver(code,title,Technicale_Level,Nembre_Of_Semstere,Graduation_Level,departement)
{
    $.ajax({
        url:"/inclusive project/ajax/getprogrammedetailsAJAX.php",
        type:"POST",
        dataType:"JSON",
        data:{code:code,title:title,Technicale_Level:Technicale_Level,Nembre_Of_Semstere:Nembre_Of_Semstere,Graduation_Level:Graduation_Level,departement:departement,action1:"saveprogrammedetails"},
        beforeSend:function () {  
        },
        success:function(result){
             let x=JSON.stringify(result);
             if (x=="0") {
                    alert("not insertd");
             } else {
                alert("insertd");
                let html = gethtml(result);
                $("#contentdiv").html(html);
             }
            // alert(x);
           // let html=getSelectionbox(result);
            // $("#SDepart").html(html);
        },
        error:function(){alert("erour");}
    });
}

function updateprogramme(pid,code,title,Technicale_Level,Nembre_Of_Semstere,Graduation_Level,departement)
{
    $.ajax({
        url:"/inclusive project/ajax/getprogrammedetailsAJAX.php",
        type:"POST",
        dataType:"JSON",
        data:{pid:pid,code:code,title:title,Technicale_Level:Technicale_Level,Nembre_Of_Semstere:Nembre_Of_Semstere,Graduation_Level:Graduation_Level,departement:departement,action1:"editprogrammedetails"},
        beforeSend:function () {  
        },
        success:function(result){
             let x=JSON.stringify(result);
             if (x=="0") {
                    alert("not upedate");
             } else {
                alert("upedated");
                let html = gethtml(result);
                $("#contentdiv").html(html);
             }
        },
        error:function(){alert("erour");}
    });
}

function deleteProgramme(pid) {
    $.ajax({
        url:"/inclusive project/ajax/getprogrammedetailsAJAX.php",
        type:"POST",
        dataType:"JSON",
        data:{pid:pid,action1:"deleteprogrammedetails"},
        beforeSend:function () {  
        },
        success:function(result){
            // alert("success");
             let x=JSON.stringify(result);
             if (x=="0") {
                    alert("not delete");
             } else {
                alert("delete");
                let html = gethtml(result);
                $("#contentdiv").html(html);
             }

        },
        error:function(){alert("erour");}
    });
}


$(document).ready(function () {
    getprogrammedetails();
    getdepartementdetails();
    
    $(document).on("click","#btnAddNew",function() {
        $("#modalprogramme").modal("show");
        $("#flag").val("NEW");

        $("#tcode").val("");
        $("#Txtitle").val("");
        $("#tl").val("");
        $("#nos").val("");
        $("#gl").val("");
        $("#SDepart").val("");

        // $("#pid").val(details["pid"]);

    });

    $(document).on("click","#savebtn",function() {
        let code=$("#tcode").val();
        let title=$("#Txtitle").val();
        let Technicale_Level=$("#tl").val();
        let Nembre_Of_Semstere=$("#nos").val();
        let Graduation_Level=$("#gl").val();
        let departement=$("#SDepart").val();
        let pid = $("#pid").val();

        if (code !='' && title !='' && departement>=0 && Nembre_Of_Semstere !='' ) 
        {
            if ($("#flag").val()=="NEW") {
                pushtoserver(code,title,Technicale_Level,Nembre_Of_Semstere,Graduation_Level,departement);
            } else {
                alert("edit");
                updateprogramme(pid,code,title,Technicale_Level,Nembre_Of_Semstere,Graduation_Level,departement);
                
                // $("#tcode").val("");
                // $("#Txtitle").val("");
                // $("#tl").val("");
                // $("#nos").val("");
                // $("#gl").val("");
                // $("#SDepart").val("");
            }
        }
        else{
            alert("input invalid")
        }

    });

    $(document).on("keypress","#nos",function(a) { // input for NOF a suguset for numbre and no noyhing else
        // alert(a.keyCode);
        if (!(a.keyCode>= 48 && a.keyCode<=57)) {
            a.preventDefault();
        }
     });

    $(document).on("click",".btnEdit",function() {
       $("#flag").val("EDIT");
       $("#modalprogramme").modal("show");
       let details = $(this).data("details");
       $("#tcode").val(details["pcode"]);
       $("#Txtitle").val(details["ptitle"]);
       $("#tl").val(details["tl"]);
       $("#nos").val(details["nos"]);
       $("#gl").val(details["gl"]);
       $("#SDepart").val(details["did"]);
       $("#pid").val(details["pid"]);
    });     

    $(document).on("click",".btnDelete",function() {
    if (confirm("are you sure you wont to delete this row ?")) {
        deleteProgramme($(this).data("details")["pid"]);
    } else {
        alert("you cancelled");
    }
    });    


});

