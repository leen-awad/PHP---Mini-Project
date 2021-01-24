<html>
<head>

<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-dark bg-warning">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/testphp/dashbord.php/">dashbord</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/testphp/Attendance-Report-Page.php">Attendance Report Page</a>
      </li>
     
    </ul>
  </div>
</nav>
<?php 
/*
<!-- <div class="card-group">
  <div class="card">
    <img class="card-img-top" src="https://hgtvhome.sndimg.com/content/dam/images/hgtv/fullset/2015/11/10/0/CI_Costa-Farms-Ballad-aster.jpg.rend.hgtvcom.966.644.suffix/1447169929799.jpeg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://hgtvhome.sndimg.com/content/dam/images/hgtv/fullset/2015/11/10/0/CI_Costa-Farms-Ballad-aster.jpg.rend.hgtvcom.966.644.suffix/1447169929799.jpeg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://hgtvhome.sndimg.com/content/dam/images/hgtv/fullset/2015/11/10/0/CI_Costa-Farms-Ballad-aster.jpg.rend.hgtvcom.966.644.suffix/1447169929799.jpeg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div> -->
*/
?>
<?php 
             $dataStudent = array(array(
                'id' => '1',
                'name' => "Angham",
                'birthday' => '13 November',
                'github account' => 'https://github.githubassets.com/images/modules/open_graph/github-mark.png ',
                'linkedin' => 'https://acorjordan.org/wp-content/uploads/2019/11/linkedin-logo.png ',
                'image' => "https://media-exp1.licdn.com/dms/image/C4E03AQE6NJe7uZqp-Q/profile-displayphoto-shrink_800_800/0/1603292000441?e=1616630400&v=beta&t=FaPf2sJ7qjE3-q94n17PR2XwzYPC1aL8E2MXXB8i8Ao",
                // 'projects' => array(
                //                 array('project_name' => 'Profile', 'is_compleated' => 'yes'),
                //                array('project_name' => 'Wordpress', 'is_compleated' => 'no')
                //             ),
                // 'attendance' => array( array('check_in' =>'15 dec 2020 09:00', 'check_ out' => '15 dec 2020 16:00'),
                //                   array('check_in' => '14 dec 2020 08:00', 'check_ out' => '14 dec 2020 14:00')
                                
        ),
        array(
            'id' => '2',
            'name' => ' taima',
            'birthday' => '13 November',
            'github account' => 'https://github.githubassets.com/images/modules/open_graph/github-mark.png ',
                'linkedin' => 'https://acorjordan.org/wp-content/uploads/2019/11/linkedin-logo.png ',
            'image' =>  "https://media-exp1.licdn.com/dms/image/C4D03AQEk2yfTx9JWKw/profile-displayphoto-shrink_800_800/0/1600941375205?e=1616630400&v=beta&t=TdsqfO0sGQeWmOjTtHiYhNKs8ofV0mprnMyeVs-Yxn8",
        ),
        array(
            'id' => '2',
            'name' => ' razan',
            'birthday' => '13 November',
            'github account' => 'https://github.githubassets.com/images/modules/open_graph/github-mark.png ',
                'linkedin' => 'https://acorjordan.org/wp-content/uploads/2019/11/linkedin-logo.png ',
            'image' =>  "https://media-exp1.licdn.com/dms/image/C5603AQF9uesRQRhrWw/profile-displayphoto-shrink_800_800/0/1608051824763?e=1616630400&v=beta&t=7Y7B4LlFhnJOIvNSmbrlP14NxPmZh809WCq3fwKH8WY",
        ),
        array(
            'id' => '2',
            'name' => 'maysam ',
            'birthday' => '13 November',
            'github account' => 'https://github.githubassets.com/images/modules/open_graph/github-mark.png ',
                'linkedin' => 'https://acorjordan.org/wp-content/uploads/2019/11/linkedin-logo.png ',
            'image' =>  "https://media-exp1.licdn.com/dms/image/C4D03AQFXtIBZLsEhdQ/profile-displayphoto-shrink_800_800/0/1603582539193?e=1616630400&v=beta&t=hALRlQoMKfgjOIirdlv7nA8XvD4925yIxjTQ_0kz7Yc",
        ),
        array(
            'id' => '2',
            'name' => ' lubna',
            'birthday' => '13 November',
            'github account' => 'https://github.githubassets.com/images/modules/open_graph/github-mark.png ',
                'linkedin' => 'https://acorjordan.org/wp-content/uploads/2019/11/linkedin-logo.png ',
            'image' =>  "https://media-exp1.licdn.com/dms/image/C4D03AQF5DFcPUktlmw/profile-displayphoto-shrink_800_800/0/1609313591813?e=1616630400&v=beta&t=8upEzyPGO2J4mfjQKvjlwu4SSR4RJTQHaKb0mm7emYI",
        ),array(
            'id' => '2',
            'name' => 'waed ',
            'birthday' => '13 November',
            'github account' => 'https://github.githubassets.com/images/modules/open_graph/github-mark.png ',
                'linkedin' => 'https://acorjordan.org/wp-content/uploads/2019/11/linkedin-logo.png ',
            'image' =>  "https://media-exp1.licdn.com/dms/image/C5603AQGevyt3Ca2aCA/profile-displayphoto-shrink_200_200/0/1607703874872?e=1616630400&v=beta&t=Awpjm6pBFGcWuJKtuzXN2Up3qA8ji0Sr3kxBuc194lE",
        )
        ,
        array(
            'id' => '2',
            'name' => 'jenan ',
            'birthday' => '13 November',
            'github account' => 'https://github.githubassets.com/images/modules/open_graph/github-mark.png ',
                'linkedin' => 'https://acorjordan.org/wp-content/uploads/2019/11/linkedin-logo.png ',
            'image' =>  "https://media-exp1.licdn.com/dms/image/C4D03AQFYQXOG_7w38w/profile-displayphoto-shrink_200_200/0/1519254755443?e=1616630400&v=beta&t=P0Qpc6TM2w78WyCsJU-qCPOaG0I1idrMDDowkg74Zw0",
        ),array(
            'id' => '2',
            'name' => ' heba',
            'birthday' => '13 November',
            'github account' => 'https://github.githubassets.com/images/modules/open_graph/github-mark.png ',
                'linkedin' => 'https://acorjordan.org/wp-content/uploads/2019/11/linkedin-logo.png ',
            'image' =>  "https://media-exp1.licdn.com/dms/image/C4E03AQEkT2ka5ie_4A/profile-displayphoto-shrink_200_200/0/1603270434265?e=1616630400&v=beta&t=EHEInQg3a0hxqAGASMqm7JkFUJVpQdvjaz_xjR_iTaA",
        )
        
    
    
    
    
    );
            // 'projects' => array(
            //                 array('project_name' => 'Profile', 'is_compleated' => 'yes'),
            //                array('project_name' => 'Wordpress', 'is_compleated' => 'no')
            //             ),
            // 'attendance' => array( array('check_in' =>'15 dec 2020 09:00', 'check_ out' => '15 dec 2020 16:00'),
            //                   array('check_in' => '14 dec 2020 08:00', 'check_ out' => '14 dec 2020 14:00')
            //                 )
            //         ));
        // echo "<pre>";
        // print_r($dataStudent);
        // echo "</pre>"
        //
            ?>
<!--  -->
    


<div class="row row-cols-1 row-cols-md-4 g-4" style="padding-top:70px; padding-left:250px ;padding-right:250px", >
  
        <!-- <div class="row " style="margin-top:15px;">
            <div class="col-sm-12 ">
    <div class="card-deck"> -->
    <?php for($i=0;$i<count($dataStudent);$i++):?> 
        <div class="col">
  <div class="card" style="margin:0.7rem">
     
    <img class="card-img-top" style="height:20rem" src="<?php echo $dataStudent[$i]['image']; ?> " alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title"><b><?php echo $dataStudent[$i]['name']; ?></b></h5>
    
                                <p class="card-text"><b><?php echo $dataStudent[$i]['birthday']; ?></b></p>
                                <a href="https://www.linkedin.com/feed/"><img   src="<?php echo $dataStudent[$i]['linkedin']; ?> " alt="Card image cap"style="height:40px;width:40px"></a>
                                <a href="https://github.com/"><img class="link_img"  src="<?php echo $dataStudent[$i]['github account']; ?> " alt="Card image cap" style="height:40px;width:50px"></a>
    </div>
    <div class="card-footer">
    <a href="http://localhost/testphp/angham.php"><button type="button" class="btn btn-warning">more details</button></a>
         </div>
  </div>
  </div>
  <?php endfor?>
  </div>
  <!-- </div>
</div> 
</div> -->
       
    

 </body>
    <!-- <div class="card-body">
    echo$dataStudent[$i]['id'];
    echo$dataStudent[$i]['name'];
    echo$dataStudent[$i]['birthday'];
    echo$dataStudent[$i]['linkedin'];
    echo $dataStudent[$i]['image']
    </div> -->
</html>
