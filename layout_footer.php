    
  
  
<div class="row footer">
<div class="clearfix">
<div class="container">

<div class="col-sm-6">LOGO HERE</div>

  <div class="col-sm-6 fontawsome" >
                 <div style="float:right;"> <i class="fa fa-facebook-square fonts"></i> 
                 <i class="fa fa-twitter-square fonts"></i> <i class="fa fa-linkedin-square fonts"></i> 
                 <i class="fa fa-instagram fonts"></i>
               </div>
</div>
</div>

<div class="colss">
<div class="container">
<hr class="devider">
<div class="col-md-3">
    
<ul>
 <li class="colist"><h3>Contattaci</h3></li>   
<li class="colist"><o class="o"><i class="fa fa-location-arrow"></i></o>&nbsp; Lorem ipsim dolor amet</li>
<li class="colist"><o class="o"><i class="fa fa-phone"></i></o>&nbsp; +39 45454.559.111</li>
<li class="colist"><o class="o"><i class="fa fa-fax"></i></o>&nbsp; +39 0422.444.000</li>
<li class="colist"><o class="o"><i class="fa fa-envelope"></i></o>&nbsp; info@mail.com</li>
</ul>
</div>
<div class="col-md-3">

<ul>
<li class="colist"><h3>La Nostra Storia</h3></li>   
<li class="colist"><o class="o">1987</o>&nbsp; Holding di Partecipazioni</li>
<li class="colist"><o class="o">2000&nbsp;</o> Private Equity Captive</li>
<li class="colist"><o class="o">2006&nbsp;</o> Management Buy Out di lorem</li>
<li class="colist"><o class="o">2008&nbsp;</o> Private Equity Indipendente</li>
<li class="colist"><o class="o">2016&nbsp;</o> Alcedo IV</li>
</ul>
</div>
<div class="col-md-3">

<ul>
<li class="colist"><h3>Menu</h3></li> 
<li class="colist"><a style="color:white;" href="#">HOME</a></li>
<li class="colist"><a  style="color:white;"href="#">CHISIAMO</a></li>
<li class="colist"><a  style="color:white;"href="#">INVESTIMENTI</a></li>
<li class="colist"><a  style="color:white;" href="#">STAMPA E NEWS</a></li>
<li class="colist"><a  style="color:white;" href="#">CONTATTI</a></li>
<li class="colist"><a  style="color:white;" href="#">ACCESSO SOTTOSCRITTORI</a></li>
</ul>
</div>
<div class="col-md-3">

<ul>
<h3>Recent Investimenti</h3>
<li class="colist">Lorem ipsum dolor sit amet,
consecte-tur adipisicing elit</li>
<li class="colist"><o class="o"><i class="fa fa-clock-o"></i></o>  &nbsp; 31 March</li>
<li class="colist">Lorem ipsum dolor sit amet,
consecte-tur adipisicing elit</li>
<li class="colist"><o class="o"><i class="fa fa-clock-o"></i> </o> &nbsp; 31 March</li>
</ul>


</div>
</div>


<div class="newsletter">
<div class="container">
    <hr class="devider">
<div class="col-sm-6">
<h2><i class="fa fa-envelope-o"></i>&nbsp;&nbsp;Newsletter</h2></div>
<div class="col-sm-6">
<form method="GET">

<input type="email" class="email" placeholeder="email" required>
<input type="button" value="Sottoscrivi" class="subbutton">
</form>



</div>
</div>
</div>
</div>




<?php //end of footer container  ?>

</div>
<div class="row">
    <div class="copyright" style="padding-bottom:30px;">
    <div class="container ">
    <hr class="devider">
    <div class="col-sm-6 ">© 2017 <a  style="color:orange; href="#" <o class="o"> Lorem ipsum S.p.A.</o></a>All Rights Reserved - P.IVA 03555555282 - Note Legali</div>
</div>
</div>


</div>

<?php //end of footer  ?>
</div>


<script>

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

    //responsiviteti i carouselit 
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
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //levizja e objekteve shigjeta
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

  
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
    </script>




</body>
</html>