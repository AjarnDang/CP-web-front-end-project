<?php include('header.php') ?>
<link rel="stylesheet" href="css/course.css">

<!--
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
-->

<script src="https://kit.fontawesome.com/0f35e6e1c5.js" crossorigin="anonymous"></script>
<script>/*
    $(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)',
                        'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }
    }); */
</script>

<body class="course-body">
    
<div id="banner" style="background-image: url('img/bg4.png');">
        <div class="container">
            <div class="topic">
                <!--<h1>&lt;GTCoding/&gt;</h1>-->
                
                <h1 style="color:white;"><b>Course</b></h1>
                <p>Increasing knowledge is a magical thing. Whether it's studying life on Mars or the birth of the universe. Learning is almost a part of being human. And I believe it will continue. 
                    <br>
                    — Sally Ride
                </p>
                
            </div>

            <a class="topic-link" href="https://e-learning.kku.ac.th/">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                เข้าสู่เว็บไซต์ E-Learning มหาวิทยาลัย</a>
        </div>
</div>

<!--
<div class="container">
	<div class="row">
		<div class="MultiCarousel" data-items="2,3,4,5" data-slide="1" id="MultiCarousel"  data-interval="5000">
            <div class="MultiCarousel-inner">
                
                <div class="item">
                    <div class="pad15">
                        <p class="course-id">342117</p>
                        <p class="lead">STRUCTURED PROGRAMMING FOR INFORMATION TECHNOLOGY</p>
                        <div class="course-img" 
                        style="background-image: url('https://bookworm-online.com/wp-content/uploads/2019/07/Problem-Solving-Structured-Programming-in-Pascal.jpg');">
                        </div>
                    </div>
                    
                </div>
                <div class="item">
                    <div class="pad15" style="background-image: url('https://bookworm-online.com/wp-content/uploads/2019/07/Problem-Solving-Structured-Programming-in-Pascal.jpg');">
                        <p class="course-id">342117</p>
                        <p class="lead">STRUCTURED PROGRAMMING FOR INFORMATION TECHNOLOGY</p>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="pad15" style="background-image: url('https://bookworm-online.com/wp-content/uploads/2019/07/Problem-Solving-Structured-Programming-in-Pascal.jpg');">
                        <p class="course-id">342117</p>
                        <p class="lead">STRUCTURED PROGRAMMING FOR INFORMATION TECHNOLOGY</p>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="pad15" style="background-image: url('https://bookworm-online.com/wp-content/uploads/2019/07/Problem-Solving-Structured-Programming-in-Pascal.jpg');">
                        <p class="course-id">342117</p>
                        <p class="lead">STRUCTURED PROGRAMMING FOR INFORMATION TECHNOLOGY</p>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="pad15" style="background-image: url('https://bookworm-online.com/wp-content/uploads/2019/07/Problem-Solving-Structured-Programming-in-Pascal.jpg');">
                        <p class="course-id">342117</p>
                        <p class="lead">STRUCTURED PROGRAMMING FOR INFORMATION TECHNOLOGY</p>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="pad15" style="background-image: url('https://bookworm-online.com/wp-content/uploads/2019/07/Problem-Solving-Structured-Programming-in-Pascal.jpg');">
                        <p class="course-id">342117</p>
                        <p class="lead">STRUCTURED PROGRAMMING FOR INFORMATION TECHNOLOGY</p>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="pad15" style="background-image: url('https://bookworm-online.com/wp-content/uploads/2019/07/Problem-Solving-Structured-Programming-in-Pascal.jpg');">
                        <p class="course-id">342117</p>
                        <p class="lead">STRUCTURED PROGRAMMING FOR INFORMATION TECHNOLOGY</p>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="pad15" style="background-image: url('https://bookworm-online.com/wp-content/uploads/2019/07/Problem-Solving-Structured-Programming-in-Pascal.jpg');">
                        <p class="course-id">342117</p>
                        <p class="lead">STRUCTURED PROGRAMMING FOR INFORMATION TECHNOLOGY</p>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="pad15" style="background-image: url('https://bookworm-online.com/wp-content/uploads/2019/07/Problem-Solving-Structured-Programming-in-Pascal.jpg');">
                        <p class="course-id">342117</p>
                        <p class="lead">STRUCTURED PROGRAMMING FOR INFORMATION TECHNOLOGY</p>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="pad15" style="background-image: url('https://bookworm-online.com/wp-content/uploads/2019/07/Problem-Solving-Structured-Programming-in-Pascal.jpg');">
                        <p class="course-id">342117</p>
                        <p class="lead">STRUCTURED PROGRAMMING FOR INFORMATION TECHNOLOGY</p>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="pad15" style="background-image: url('https://bookworm-online.com/wp-content/uploads/2019/07/Problem-Solving-Structured-Programming-in-Pascal.jpg');">
                        <p class="course-id">342117</p>
                        <p class="lead">STRUCTURED PROGRAMMING FOR INFORMATION TECHNOLOGY</p>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="pad15" style="background-image: url('https://bookworm-online.com/wp-content/uploads/2019/07/Problem-Solving-Structured-Programming-in-Pascal.jpg');">
                        <p class="course-id">342117</p>
                        <p class="lead">STRUCTURED PROGRAMMING FOR INFORMATION TECHNOLOGY</p>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="pad15" style="background-image: url('https://bookworm-online.com/wp-content/uploads/2019/07/Problem-Solving-Structured-Programming-in-Pascal.jpg');">
                        <p class="course-id">342117</p>
                        <p class="lead">STRUCTURED PROGRAMMING FOR INFORMATION TECHNOLOGY</p>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="pad15" style="background-image: url('https://bookworm-online.com/wp-content/uploads/2019/07/Problem-Solving-Structured-Programming-in-Pascal.jpg');">
                        <p class="course-id">342117</p>
                        <p class="lead">STRUCTURED PROGRAMMING FOR INFORMATION TECHNOLOGY</p>
                        
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="course-id">342117</p>
                        <p class="lead">STRUCTURED PROGRAMMING FOR INFORMATION TECHNOLOGY</p>
                        
                    </div>
                    
                </div>
                <div class="item">
                    <div class="pad15" style="background-image: url('https://bookworm-online.com/wp-content/uploads/2019/07/Problem-Solving-Structured-Programming-in-Pascal.jpg');">
                        <p class="course-id">342117</p>
                        <p class="lead">STRUCTURED PROGRAMMING FOR INFORMATION TECHNOLOGY</p>
                        
                    </div>
                </div>
            </div>

            <button style="vertical-align: middle;" class="leftLst"><i class="fa-solid fa-angle-left"></i></button>
            <button style="vertical-align: middle;" class="rightLst"><i class="fa-solid fa-angle-right"></i></button>
        </div>
        
	</div>
</div>
-->

<div class="container" style="margin-top: 6em; margin-bottom: 6em;">
<h1 class="mb-4"><b>Avialable Course </b><i class="fa-solid fa-minus" style="vertical-align: middle; display: inline-block;"></i></h1>
<div class="course mb-5">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-xs-12">
            <div class="course-card">
                <h2><b>342117</b></h2>
                <h5>Structured Programming for Infomation Technology</h5>
                <hr>
                <p>Introduction to computer programming: flowchart, pseudocode, problem solving, logical thinking, data types, variables, control structure, array, function, input/output, file</p>
                <p>Teacher : <a class="teacher" href="">Asst. Prof. Dr.Prof.Saiyan Saiyod</a></p>
                <a class="join-class" href="">Join Class</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="course-img">
                <img src="data:image/jpeg;base64,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" alt="">
            </div>
        </div>
    </div>
    </div>

<div class="course mb-5">
<div class="row">
    
        <div class="col-lg-8 col-md-8 col-xs-12">
            <div class="course-card">
                <h2><b>342118</b></h2>
                <h5>Object Oriented Concepts and Programming</h5>
                <hr>
                <p>Object-oriented concepts, object design, object and class, object initialization and destroying, assignment responsibility, abstract concept, encapsulation, inheritance, override and overload, Introductionto Java programming, object-oriented programming concept and Java programming language</p>
                <p>Teacher :<a class="teacher" href=""> Asst. Prof. Dr.Saiyan Saiyod</a></p>
                <a href="">Join Class</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="course-img">
                <img src="https://freebooks.pk/wp-content/uploads/2016/09/Object-Oriented-Programming-1.jpg" alt="">
            </div>
        </div>
    </div>
</div>
    

<div class="course mb-5">
<div class="row">
    
        <div class="col-lg-8 col-md-8 col-xs-12">
            <div class="course-card">
                <h2><b>342432</b></h2>
                <h5>Web Design Technology</h5>
                <hr>
                <p>Web design concepts, planning the site, designing the site, Web design environment, creating Web typography, designing page layouts, incorporating graphics and color, designing content, planning site navigation, multimedia,Web accessibility, responsive Web design, HTML and CSS</p>
                <p>Teacher :<a class="teacher" href=""> Asst. Prof. Dr.Sumonta Kasemvilas</a></p>
                <a href="">Join Class</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="course-img">
            <img src="https://www.schandpublishing.com//Uploads/BookImages/schand-books/9788121927635.jpg" alt="">
            </div>
        </div>
    </div>
</div>


<div class="course mb-5">
<div class="row">
    
        <div class="col-lg-8 col-md-8 col-xs-12">
            <div class="course-card">
                <h2><b>342372</b></h2>
                <h5>Systems Analysis and Design</h5>
                <hr>
                <p>Fundamental of object technology and object-oriented system development, project proposal development, project management, data gathering and requirement analysis, use case model, scenario model, domain model,system development alternatives, architecture design, interaction model, class model, class modeling using GRASP, database design, software coding, implementation and maintenance, case study: online registration system.</p>
                <p>Teacher :<a class="teacher" href=""> Assoc. Prof. Dr.Somjit Arch-Int</a></p><br>
                <a href="">Join Class</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="course-img">
            <img src="https://images-na.ssl-images-amazon.com/images/I/41ISnRaS08L._SX390_BO1,204,203,200_.jpg" alt="">
            </div>
        </div>
    </div>
</div>

    
</div>
                              		
<?php include('footer.php') ?>
</body>




<div class="container">
    <div class="row">
        <div class="col-3">
            
        </div>
        <div class="col-3">
            
        </div>
        <div class="col-3">
            
        </div>
    </div>
</div>