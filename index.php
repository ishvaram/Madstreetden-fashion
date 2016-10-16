<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mad street Den</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/style.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

   

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">MAD Street den  <span class="skills desc"> - Fushion Style </span></a> 
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="index.php"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="http://vue.ai/about.html" target="_blank">About</a>
                    </li>
                   
                </ul>
            </div>

        
        </div>
    
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <img class="img-responsive" src="img/profile.png" alt=""> -->
                    <div class="intro-text">
                        <span class="name">Mad Street Den</span>
                        <hr class="star-light">
                        <span style="font-size:16px;"><i class="fa fa-quote-left" aria-hidden="true"></i> ...Fashion is nothing without the people!... <i class="fa fa-quote-right" aria-hidden="true"></i> </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- product list -->
<section>

     <div class="searchbar clicked">
        <form action="search.php" method="post">
      <input type="text" class="btn-extended" name="searchterm" placeholder="search by name and category" />
      <input type="submit" class="btn-search" name="submit" value="Submit"></input>
      </form>
     <!--  <div ></div> -->

    <!--  <div id="DrpDwn" class="sorto">
        Category: <select id="DropDown_cate"><option>Category</option></select>
        Price: <select id="DropDown_price"><option>Price</option></select>
       
</div> -->
        </div>

        <br><br><br>
        <hr>
    <?php 

    $url = 'https://hackerearth.0x10.info/api/fashion?type=json&query=list_products';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_USERAGENT, 'MyBot/1.0 (http://www.imkovalan.com/)');

    $result = curl_exec($ch);

    if (!$result) {
      exit('CURL Error: '.curl_error($ch));
    }

    $products = json_decode($result, true);


    unset($products['quote_max']); 
    unset($products['quote_available']); 
    


    foreach ($products as $key => $value) {
           
    echo " <div class='container'> <div class='resultcount'>Results:".count($value)."</div></div>";
    $no_of_rows=0;
    $no_of_rows=count($value);
    for($i=0;$i<$no_of_rows;$i++)
    { 


   


      echo "<div class='container'>
    <div class='row'>

        <div class='col-xs-12 col-sm-6 col-md-4'>
            <article class='card-wrapper'>
                <div class='image-holder'>
                    <img src='".$value[$i]['image']."' >
                </div>

                <div class='product-description'>
                    <!-- title -->
                    <h1 class='product-description__title'>
                        <a href='#'>                        
                           ".$value[$i]['name']."
                            </a>
                    </h1>
                    
                    <span class='stars'>".$value[$i]['rating']."</span>
                    <!-- category and price -->
                    <div class='row'>

                        <div class='col-xs-12 col-sm-8 product-description__category secondary-text'>
                          Quantity: ".$value[$i]['quantity']."
                        </div>

                        <div class='col-xs-12 col-sm-4 product-description__price'>
                          $".$value[$i]['price']."
                        </div>
                    </div>

                    <hr />

                    
                    <div class=''>
                        <b>Description:</b>
                        <br />
                        <span class=''>
                            ".$value[$i]['description']."
                        </span>
                    </div>

    
                    <div class='color-wrapper'>
                        <b>Colors</b>
                        <br />
                        <ul class='list-inline color-list'>
                            <li class='color-list__item color-list__item--red' style='background-color: ".$value[$i]['color']." !important;'>sdsd</li>
                        </ul>
                    </div>
                </div>

            </article>
        </div>
      
        ";

    }
}

    ?>


</section>
   
    <script src="js/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    

    <!-- Theme JavaScript -->
    <script src="js/app.min.js"></script>
   <script type="text/javascript">
   $.fn.stars = function() {
    return this.each(function(i,e){$(e).html($('<span/>').width($(e).text()*16));});
};

$('.stars').stars();

   </script>
</body>
</html>
