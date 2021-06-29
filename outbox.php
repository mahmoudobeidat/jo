<?php
ob_start();
session_start();

$con = mysqli_connect("a2nlmysql47plsk.secureserver.net:3306","salt_php","J0rd@nCOdEe","salt_php");
if (!isset($_SESSION['id'])) {
 header('location:loggin.php');
}
$from=$_SESSION['id'];

$sql="SELECT * FROM users WHERE id='$from'";
$result1=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result1);
$id=$row['id'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/css.css" />
    <link rel="stylesheet" href="GE_Dinar_Two/GE Dinar Two Light.ttf" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=apRJxGF6"></script>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <link rel="stylesheet" href="css/all.css" />
    <!--CSS Add slick.css in your <head>-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.min.css" />
    <!--JS Add slick.js before your closing <body>tag,
after jQuery (requires jQuery 1.7 +) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.js"></script>
    <title>البريد الصادر</title>
    <style>
        .dark {
            background-color: #222;
            color: rgb(248, 172, 29);
            /* #e6e6e6 */
        }
        
        .dark,
        slider {
            color: rgb(248, 172, 29);
        }
        
        .theme-switch-wrapper {
            display: flex;
            align-items: center;
            float: right;
        }
        
        .theme-switch {
            display: inline-block;
            height: 34px;
            position: relative;
            width: 60px;
            text-align: right;
        }
        
        .theme-switch input {
            display: none;
        }
          .mail-box {
    border-collapse: collapse;
    border-spacing: 0;
    display: table;
    table-layout: fixed;
    width: 200%;

}
.mail-box aside {
    display: table-cell;
    float: right;
    
    padding: 0;
    vertical-align: top;
    height: 500px;
}
.mail-box .sm-side {
    background: none repeat scroll 0 0 #f8f9fa;
    border-radius: 4px 0 0 4px;
    width: 30%;

}
.mail-box .lg-side {
    background: none repeat scroll 0 0 #fff;
    border-radius: 0 4px 4px 0;
    width: 70%;
}
.mail-box .sm-side .user-head {
    background: none repeat scroll 0 0 #f8f9fa;
    border-radius: 4px 0 0;
    color: #fff;
    min-height: 232px;
    padding: 10px;
}
.user-head .inbox-avatar {
    float: right;
    width: 65px;
}
.user-head .inbox-avatar img {
    border-radius: 4px;
}
.user-head .user-name {
    display: inline-block;
    margin: 0 0 0 10px;
}
.user-head .user-name h5 {
    font-size: 14px;
    font-weight: 300;
    margin-bottom: 0;
    margin-top: 15px;
}
.user-head .user-name h5 a {
    color: black;
}
.user-head .user-name span a {
    color: black;
    font-size: 12px;

}
a.mail-dropdown {
    background: none repeat scroll 0 0 #80d3d9;
    border-radius: 2px;
    color: black;
    font-size: 10px;
    margin-top: 20px;
    padding: 3px 5px;
}
.inbox-body {
    padding: 20px;
}
.btn-compose {
    background: none repeat scroll 0 0 #ff6c60;
    color: black;
    padding: 12px 0;
    text-align: center;
    width: 100%;
    border-radius: 50px 50px;
}
.btn-compose:hover {
    background: none repeat scroll 0 0 #f5675c;
    color: black;
}
ul.inbox-nav {
    display: inline-block;
    margin: 0;
    padding: 0;
    width: 100%;
}
.inbox-divider {
    border-bottom: 1px solid #d5d8df;
}
ul.inbox-nav li {
    display: inline-block;
    line-height: 45px;
    width: 100%;
      background-color: #f8f9fa;
}
ul.inbox-nav li:hover {
    background: none repeat scroll 0 0 #d5d7de;
}
ul.inbox-nav li a {
    color: black;
    display: inline-block;
    line-height: 45px;
  
    width: 100%;
}
ul.inbox-nav li a:hover, ul.inbox-nav li.active a, ul.inbox-nav li a:focus {
    background: none repeat scroll 0 0 #d5d7de;
    color: #6a6a6a;
    text-decoration: none;

}
ul.inbox-nav li a i {
    color: #6a6a6a;
    font-size: 16px;
    padding-right: 10px;

}
ul.inbox-nav li a span.label {
    margin-top: 13px;
}
ul.labels-info li h4 {
    color: #5c5c5e;
    font-size: 13px;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 5px;
    text-transform: uppercase;
}
ul.labels-info li {
    margin: 0;
}
ul.labels-info li a {
    border-radius: 0;
    color: #6a6a6a;

}
ul.labels-info li a:hover, ul.labels-info li a:focus {
    background: none repeat scroll 0 0 #d5d7de;
    color: #6a6a6a;
}
ul.labels-info li a i {
    padding-right: 10px;
}
.nav.nav-pills.nav-stacked.labels-info p {
    color: #9d9f9e;
    font-size: 11px;
    margin-bottom: 0;
    padding: 0 22px;
}
.inbox-head {
    background: none repeat scroll 0 0 orange;
    border-radius: 0 4px 0 0;
    color: #fff;
    min-height: 80px;
    padding: 20px;
}
.inbox-head h3 {
    display: inline-block;
    font-weight: 300;
    margin: 0;
    padding-top: 6px;
}
.inbox-head .sr-input {
    border: medium none;
    border-radius: 4px 0 0 4px;
    box-shadow: none;
    color: #8a8a8a;
    float: right;
    height: 40px;
    padding: 0 10px;
}
.inbox-head .sr-btn {
    background: none repeat scroll 0 0 #00a6b2;
    border: medium none;
    border-radius: 0 4px 4px 0;
    color: #fff;
    height: 40px;
    padding: 0 20px;
}
.table-inbox {
    border: 1px solid #d3d3d3;
    margin-bottom: 0;
}
.table-inbox tr td {
    padding: 12px !important;
}
.table-inbox tr td:hover {
    cursor: pointer;
}
label{
  float: right;
}
input{
  direction: rtl;
}
textarea{
  direction: rtl;
}
input[type=file]::file-selector-button {
 
 
  border-radius: .2em;
  background-color: orange;

}
.send {
  background-color: orange;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  margin-top: 20px;
  margin-bottom: 40px;
  margin-left: 320px;
  border-radius: 20px 50px;

}
.dot {
  height: 25px;
  width: 25px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  color: orange;
  background-color: orange;
}
a{
  text-decoration: none;
 
}
a:hover{
  text-decoration: none;
 
}
    </style>
    <script>$(document).ready(function(){
  $("body").on("click", "#mydark", function(event){
    $(event.delegateTarget).css("-webkit-filter", "");
     $(event.delegateTarget).css("filter", "");
     $(event.delegateTarget).css("background-color", "");
    $(event.delegateTarget).css("-webkit-filter", "grayscale(100%)");
     $(event.delegateTarget).css("filter", "grayscale(100%)");
          $(event.delegateTarget).css("background-color", "white");
     $(event.delegateTarget).css("color", "black");


  });
});
</script>

 <script>$(document).ready(function(){
  $("body").on("click", "#mylight", function(event){
    $(event.delegateTarget).css("-webkit-filter", "");
     $(event.delegateTarget).css("filter", "");
     $(event.delegateTarget).css("background-color", "white");
     $(event.delegateTarget).css("color", "black");
     // $('#news').css("padding-top", "0px");

  });
});
</script>

<script>$(document).ready(function(){
  $("body").on("click", "#yellow", function(event){
     $(event.delegateTarget).css("filter", "");
     $(event.delegateTarget).css("background-color", "");

    $(event.delegateTarget).css("-webkit-filter", "grayscale(100%)  sepia(90%) hue-rotate(5deg) saturate(500%) contrast(0.7)");
    $(event.delegateTarget).css("brightness", "grayscale(100%) brightness(120%) sepia(90%) hue-rotate(5deg) saturate(500%) contrast(0.7)");
     document.getElementById("#h1").style.fontSize = "xxx-large";
     $(event.delegateTarget).css("color", "black");
    $('#news').css("padding-top", "10px");


   

  });

});
</script>


    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet" />
</head>

<body>
    <!--STRAT NAVBAR-->
    <?php include "TopBar.php";?>
    <!-- end navbar -->
    <!--Start Slider-->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" style="max-height: 600px;">
            <div class="carousel-item">
                <img class="d-block w-100 " src="img/RepeatGrid28.png" height="600px" alt="First slide" />
            </div>
          
            <div class="carousel-item active ">
                <img class="d-block w-100 " src="img/RepeatGrid28.png" height="600px" alt="Second slide" />
            </div>
            <div class="carousel-control-next listrightslider">
                <ul class="list-group" aria-hidden="true">
                    <li class="list-group-item imgslidestop">
                        <button style="border: none;" id="bigger">
                <img src="img/font.png" alt="" />
              </button>
                        <button style="border: none;" id="smaller">
                <img class="my-1" src="img/font2.png" alt="" />
              </button>
                        <button style="border: none;" id="moreBigger">
                <img class="my-1 mr-3" src="img/font3.png" alt="" />
              </button>
                       <button style="border:none;" id="checkbox"><img class="my-1" id="mydark" src="img/picture (1).png" alt=""></button>
                        <img class="my-1" id="yellow" src="img/picture (1)0.png" alt="">
                        <img class="my-1" id="mylight" src="img/picture (2).png" alt="">
                        <img class="my-1" src="img/visibility.png"  alt="">
                        <img class="my-1" src="img/invisible.png"  alt="">
                        <button type="button" id="">
                <img class="my-1" src="img/microphone.png" alt="" />
              </button>
    
                    </li>
                </ul>
            </div>
        </div>
        <h2 style="    background: rgb(248, 172, 29); color:white;
        opacity: 85%;
        position: absolute;
        right: 3px;
        bottom: -3px;
        padding: 19px ">البريد الصادر</h2>

    </div>
    <!--End Slider-->
    <!--Start ticker--><style>
        .ticker-move{animation-duration: 350s;}
    </style>
    <?php $serverName = "a2nlmysql47plsk.secureserver.net:3306";
$username = "salt_php";
$password = "J0rd@nCOdEe";
$db = "salt_php";

$con = mysqli_connect($serverName, $username, $password, $db);
    
    $query2="select title_ar,id from news";
    $result2=mysqli_query($con,$query2);
    $result2=mysqli_fetch_all($result2);
   

    ?>
    <div class="container-fluid tickernews" >
        <div class="row">
            <div class="col-10">
                <div class="tcontainer">
                    <div class="ticker-wrap">
                        <div class="ticker-move body_news_ticker" style="padding: 12px;">
                        <?php 
                                    for($i=0;$i<count($result2);$i++){       
                                ?>

                            <div class="ticker-item">
                            <a style="color: white;text-decoration:none "href="show_news.php?id=<?php echo $result2[$i][1]; ?>">
                              <?php print_r($result2[$i][0]);?>
								
								</a>
                            </div>
                            <img src="img/ticker.png" width="63" height="49" alt="">							
                                        <?php }
                                       ;
                                        ?>
                            
                            						
						
						
						</div>
                     
                    </div>
                   
                </div>
                
            </div>
            <div class="col-2 tickernews d-flex justify-content-end titlenew_header_right">
                <p class="d-flex align-items-center newss my-2">شريط الأخبار</p>
            </div>
            
        </div>
    </div>
    <!--end ticker-->
    <!--end ticker-->
    <div class="endslider">
        <div class="container titleh444" style="direction: rtl;">
            <div class="row">
                <div class="col-6">
                   
                   
                    <div class="container">
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
 <div class="mail-box">
                  <aside class="sm-side" style="padding-left: 10px;" >
                      <div style="float: right; margin-bottom: 20px; margin-top: 15px;margin-right: 10px;">
                          <a class="inbox-avatar" href="javascript:;">
                              <i class='fas fa-user-circle' style='font-size:48px;color:orange'></i>
                          </a>
                         
                              <h5 style="float: left; margin-right: 10px; margin-top: 10px;"><a style="direction: rtl;" href="#"><?php echo $row['fname']." ".$row['lname']; ?></a></h5>
                             
                         
                        </div>
                     
                      <div  class="inbox-body">
                          <a style="background-color: white; color: orange; font-size: 15px; font-weight: 20px;" href="mail.php"    class="btn btn-compose">
                             <strong> انشاء </strong>  <span class="dot"><i style="color: white; " class="fas fa-plus"></i></span>
                          </a>
                        
                      </div>
                      <ul style="background-color: white; " class="inbox-nav inbox-divider">
                          <a style="color: black;" dir="rtl" href="inbox.php"> <li style="padding-left: 130px; " >
                             <i style="color: orange; margin: 5px;" class="fa fa-inbox w3-xxxlarge"></i>البريد الوارد

                          </li></a>
                         <a style="color: black;" dir="rtl" href="outbox.php"> <li style="padding-left: 110px; ">
                              <i style="color: orange;margin: 5px;" class="fa fa-envelope-o w3-xxxlarge"></i> البريد الصادر 
                          </li></a>
                          
                          
                      </ul>
                     
                      


                  </aside>
                 
                  <aside class="lg-side">
                     

                      <div class="inbox-body">
                         <div class="mail-option">

                          <div  class="inbox-head">
                          <h3 style="float: right;"> البريد الصادر</h3>
                          
                      </div>
                      <div class="inbox-body">
                         <div class="mail-option">
                             

                             
                             

                            
                         </div>
                          <table class="table table-inbox table-hover">

                       
                            <tbody style="width: 100%; overflow-y:scroll;height:330px;display:block;">
                                    <tr class="unread">
                                  
                                  
                                  <td  class="view-message  dont-show text-center ">#</td>
                                  <td class="view-message text-center ">الى</td>
                                  <td class="view-message  inbox-small-cells text-center ">الموضوع</td>
                                  <td class="view-message  inbox-small-cells text-center ">الوصف</td>
                                  <td class="view-message  inbox-small-cells text-center ">ملف</td>
                                  <td class="view-message  text-right">التاريخ</td>
                                  <td class="view-message  text-right">الوقت</td>
                              </tr>

<?php 


$query="SELECT users.id as uid,users.fname,users.lname,`mail_id`, `to`, `subject`, `foreword`, `file`, `from`, `description`, mails.date, `time`
        FROM `mails`
        inner join users on users.id=mails.from
        WHERE `from`='$id' 
        order by mail_id desc";
        $i=1;
        $result=mysqli_query($con,$query);
        while ($row=mysqli_fetch_assoc($result)) {
          $sql="SELECT mails.*,users.id,users.fname,users.lname from mails
          inner join users on users.id=mails.to
          WHERE `from`='$id' 
          order by mail_id desc";
          $res= mysqli_query($con,$sql);
          $value=mysqli_fetch_assoc($res);
        

?>


                              <tr class="unread">
                                  
                                  
                                    <td hidden  class="view-message  dont-show"><?php echo $row['mail_id']; ?></td>
                                  
                                  <td  class="view-message  dont-show"><?php echo $i++; ?></td>
                                  <td class="view-message "><?php echo $value['fname']." ".$value['lname'] ?></td>
                                  <td class="view-message  inbox-small-cells"><?php echo $row['subject'] ?></td>
                                  
                                  <td hidden class="view-message  inbox-small-cells"><?php echo $row['description'] ?></td>
                                  <td hidden class="view-message  inbox-small-cells"><?php echo $row['file'] ?></td>
                                  <td class="view-message  inbox-small-cells">
                                     <button type="button" class="btn btn-warning edit" data-toggle="modal" data-target="#exampleModal2">عرض</button>
                                  </td>

                                <td class="view-message  inbox-small-cells text-center" width="200px;">
                                <?php  

                                  $files =$row['file'];
                                   $file2 = explode(",", $files);
                                   $v=1;
                                   foreach ($file2 as $key => $value) {
                                    

                                    ?>

                                       <a href="mail_files/<?php echo $value ?>" download="<?php echo $value; ?>" class="download_link">الملف <?php echo $v++; ?><br></a>  <?php
                                   }
                                           
                                ?>
</td>

                                  
                                  <td class="view-message  text-right"><?php echo $row['date'] ?></td>
                                  <td class="view-message  text-right"><?php echo $row['time'] ?></td>
                              </tr>
                             
                            
                            
                       <?php
                   }?>       
                          </tbody>
                          </table>
                      </div>

                             
<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">الرسالة</h5>
        
         
        </button>
      </div> <form method="post" action="inbox.php" enctype="multipart/form-data">
      <div class="modal-body">
          <strong>الى : </strong> <output style="direction: rtl; margin-left: 300px;" id="name"></output>
              <input type="hidden" name="id" id="mail_id">
             
              <input type="hidden"  name="subject" id="subject">
              <input type="hidden" name="image" id="file">
                <div class="form-group">
        <label for="exampleFormControlTextarea1">الوصف</label>
        <textarea disabled style="overflow-y:scroll;" class="form-control" id="msg" name="msg" id="exampleFormControlTextarea1" placeholder="نص الرسالة"  rows="10" required></textarea>
      </div>
      
 
      </div>
      <div class="modal-footer">
        
        
        <button type="button" class="btn btn-danger" data-dismiss="modal">اغلاق</button>
 </form>
      </div>
    </div>
  </div>
</div>
           
                             
                             

                            
                         </div>
                       
                      </div>
                  </aside>

              </div>
</div>
                </div>
            </div>


        </div>
    </div>
    <!-- Footer --><?php include "include/footer.php";?>
   
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
</body>
  <script type="text/javascript">
            function openTab(th)
            {
                window.open(th.name,'_blank');
            }
        </script>
        <script>
        $(document).ready(function(){
            $('.edit').on('click',function(){
           

             $tr=$(this).closest('tr');

            var data =$tr.children("td").map(function(){
                return $(this).text();
            }).get();

            console.log(data);
            
            $('#mail_id').val(data[0]);
            $('#name').val(data[2]);
            $('#subject').val(data[3]);
            $('#msg').val(data[4]);
            $('#file').val(data[5]);
            
           
           
            


        });
        });
    </script>
</html>