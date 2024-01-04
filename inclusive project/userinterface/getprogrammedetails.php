

<HTML>
    <head>
        <title>get programme details</title>
        <link href="/inclusive project/global/bootstrap.css" rel="stylesheet"></link>
        <link href="/inclusive project/css/getprogrammedetails.css" rel="stylesheet"></link> 
    </head>
    <body>
        <main>
            <div class="heading">
                PROGRAMME DETAILS
            </div>
            
            <div id="contentdiv" class="test1">
            

            </div>
        </main>

        <div class="modal fade" id="modalprogramme">
            <div class="modal-dialog">

                <div class="modal-content">

                    <div class="modal-header">
                        <h1>Add New Programme</h1>
                        <button class="btn btn-danger fw-bold p-3" data-bs-dismiss="modal"> X </button>
                    </div>
                    <div class="modal-body">

                    <h2 class="fw-bold mb-0 text-black m-4">Code</h2>
                    <input type="text" id="tcode"  class="form-control form-control-lg p-3 m-2">
                    
                    <h2 class="fw-bold mb-0 text-black m-4">Title</h2>
                    <input type="text" id="Txtitle" class="form-control form-control-lg p-3 m-2">

                    <h2 class="fw-bold mb-0 text-black m-4">Technicale Level</h2>
                    <select  class="form-select form-select-lg p-3 m-2" id="tl">
                        <option value="NONE">NONE</option>
                        <option value="BTECH">BTECH</option>
                        <option value="MTECH">MTECH</option>
                    </select>

                    <h2 class="fw-bold mb-0 text-black m-4">Nembre Of Semstere</h2>
                    <input type="text" id="nos"  class="form-control form-control-lg p-3 m-2">

                    <h2 class="fw-bold mb-0 text-black m-4">Graduation Level</h2>
                    <select  class="form-select form-select-lg p-3 m-2" id="gl">
                        <option value="NONE">NONE</option>
                        <option value="UG">UG</option>
                        <option value="PG">PG</option>
                        <option value="PSH">PSH</option>
                    </select>
                    <h2 class="fw-bold mb-0 text-black m-4">Departement</h2>
                    <!-- <input type="text"  class="form-control form-control-lg p-3 m-2"> -->
                    <select class="form-select form-select-lg p-3 m-2" id="SDepart">
                    </select>
                    <hidden id="flag">
                    <hidden id="pid">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger  fw-bold p-3"  data-bs-dismiss="modal" >CANCEL</button>
                        <button class="btn btn-success  fw-bold p-3" id="savebtn">SAVE</button>
                    </div>

                </div>

            </div>

        </div>

        <div>
            <script src="/inclusive project/global/jquery.js"></script>
            <script src="/inclusive project/global/bootstrap.js"></script>
            <script src="/inclusive project/js/getprogrammedetails.js"></script>
        </div>
    </body>
</HTML>
