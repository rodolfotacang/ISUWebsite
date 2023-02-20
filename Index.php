<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Course Recommendation System</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  


        <style>
            .header-image{
                background: linear-gradient(to bottom, rgb(0, 96, 47) 0%, rgb(1, 177, 52) 88%, rgb(1, 192, 52) 100%);

                }
            a:active {
                 background-color: green !important;
                }

            .form-control:focus {
                border-color: #28a745;
                box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
                }    
    
           li.navitem{
            vertical-align: middle;
           }
           .nav-item{
                height:100%;
           }
           li{
    
            line-height: 30px;
           }
        .fa-circle{
            color:limegreen;
        }

        .fa-check{
            color:limegreen;
        }
        
        </style>

    <body>


    </head>
<section class=" " >
<div>

<img src="assets/img/bannertop.jpg"  width="100%" height="190px;" class="img-fluid" alt="Responsive image">

</div>
</section>
<!-- comment -->
        <div class="d-flex " id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white " id="sidebar-wrapper" >
                <div class="list-group list-group-flush sticky-top" >
                    <label for="Title of system" class="p-3" style="font-size: 20px;"> Course Recommendation System
                        <hr> 
                    </label>
                    <div class="list-group-item  p-3 " > 
                        <form>
                            <div class="form-group " >
                              <label for="GWA">ENTER General Weighted Average</label>
                                <br><br>
                              <input class="form-control" name="gwainput" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "5" placeholder="GWA" />
                              <form>
                                <div class="form-group">
                                    <br>
                                  <label for="imgGWA">Input GWA Image</label>
                                 
                                  <input type="file" class="form-control-file" pattern="[0-9]+" id="">
                                </div>
                              </form>
                             <br>   
                            </div>
                            <div class="form-group">
                              <label for="EXAmresult">ENTER Entrance Examination Score</label> 
                              <br><br>
                              <input class="form-control"  class="form-control" name="entrancescore" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "5" placeholder="Entrance Exam Score"/>
                            </div>
                            <div class="form-check">
                                <br>
                              <input type="checkbox"  class="form-check-input" id="exampleCheck1">
                            
                              <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success">Submit</button>
                          </form>
                        </div>
                        <!--<a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Shortcuts</a>-->   
       
                </div>
            </div>

            <!-- Page content wrapper-->
            <div id="page-content-wrapper ">
                <!-- Top navigation-->
                <?php include 'navtop.html';?>
            
                <!-- Page content-->
                <div class="container-fluid p-4 " >
                    <!--start of content per dropdown-->
             
                    <?php include 'poly.html';?>
                    <?php include 'educ.html';?>
                    <?php include 'informationTech.html';?> 
                    <?php include 'ccje.html';?> 
                    <?php include 'agri.html';?> 
                    <?php include 'saas.html';?> 
                    <?php include 'cbm.html';?> 
               
                </div>
                <!-- END OF Page content-->
            </div> 
        </div>
        <!--script for the logic of content change same page-->
      
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!--import for jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    </body>
</html>
