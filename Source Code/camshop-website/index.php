<?php
include './admin_area/includes/db.php';
session_start();

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
	 <link type="text/css" rel="stylesheet" href="css/style.css"/> 

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
<style>
	 .View-Product-btn {

		position: relative;
  border: 2px solid transparent;
  height: 40px;
  padding: 0 30px;
  background-color: #ef233c;
  color: #FFF;
  text-transform: uppercase;
  font-weight: 700;
  border-radius: 40px;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;


}
.View-Product-btn>i  {
  position: absolute;
  left: 0;
  top: 0;
  width: 40px;
  height: 40px;
  line-height: 38px;
  color: #D10024;
  opacity: 0;
  visibility: hidden;
}


.View-Product-btn:hover  {
  background-color: #FFF;
  color: #D10024;
  border-color: #D10024;
  padding: 0px 30px 0px 50px;
}

.View-Product-btn:hover>i {
  opacity: 1;
  visibility: visible;
}
.newsletter-btn {
  border-radius: 40px 40px 40px 40px;
}
</style>
    </head>
	<body>
		<!-- HEADER -->
		

		<?php include './layouts/header.php';?>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">

						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="store.php">Store</a></li>
						<li><a href="laptop.php">Laptops</a></li>
						<li><a href="pc.php">computers</a></li>
						<li><a href="monitor.php">monitors</a></li>
                        <li><a href="bags.php">bags</a></li>
						<li><a href="accessories.php">Accessories</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop01.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Laptop<br>Collection</h3>
								<a href="laptop.php" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
 <!-- shop -->
<div class="col-md-4 col-xs-6">
	<div class="shop">
		<div class="shop-img">
			<img src="https://pisces.bbystatic.com/image2/BestBuy_US/Gallery/learn-BuyingGuide_DER-76255.jpg;maxHeight=312;maxWidth=459" alt="">
		</div>
		<div class="shop-body">
			<h3>PCs<br>Collection</h3>
			<a href="pc.php" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div>
</div>
<!-- /shop -->
<!-- shop -->
<div class="col-md-4 col-xs-6">
	<div class="shop">
		<div class="shop-img">
			<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhUSExAWFhUWFxcYFxcYGRgXGRgVGBkYFhoWGBcYICghGBsoGxYXIjEhJSkrLi4uGB81ODMtNygtLisBCgoKDg0OGxAQGi0mICY1LysyLS0tLS0tLy0tMC0vLy0wLS0tLS0tLS0tLS8tLS0tLS0tLTAtLS0tLS0tLS0tLf/AABEIALsBDgMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABQYDBAcIAgH/xABHEAABAwIDBAYHBQQJAwUAAAABAAIRAyEEEjEFQVFhBgcTInGBMkJSkaGxwSNicpLRQ1Th8AgUFzNTgqKywiTD0kRjc5Oj/8QAGgEBAAIDAQAAAAAAAAAAAAAAAAMEAQIFBv/EADARAAIBAwIDBQkAAwEAAAAAAAABAgMRIQQxEkFhBVFxgfATIjKRobHB0fFCUuEz/9oADAMBAAIRAxEAPwDuKIiAIiIAiIgMWIrBjXPOjQSfACVUOiHWLhMe80QTRrgkCm8jvgb6btHW3ai9oup3pZX7PB138GH4kD6rydSmxm9jIsQdZBGhlaylZXJaNJ1HZHshFwzoP1s1KOWjjs1WnoK4vUYP/cH7Qcx3vxLtOAx1OvTbVo1G1GOEtc0ggjxCymnsazhKDtJG0iIsmgREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAVHrUxPZ7MxB4tIHjBI+IXmtjbDwXfOvPE5dnFu9z2jykA/By4U1ihruyR0ezo3lJ+Hr6GLIproz0kxWz6mfD1IBMvpuvTqfibuMesIPOLKNDF+5FXU2tjpToRmrSR6E6G9YWGx8Uz9jiIvReR3uJpO0qD3HiArmvJBp/CCDvBGhB3FdF6G9Z+IoZaWKDsRREAPF67Bzn++HjDubtFZhVT3OVW0E4u8Mr6nckUdsfbFDF0xVw9ZtRh3tOh9lwN2u5GCpFSlEIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIDkv8ASBr/AGGHp+08/Q/8VyYNXRevuvOIw1Pg0O85eP0XOwq2oex2eyo4k/D6XP0NX1lWRoX7lVW51+Ew5VtYNt/513L4DFt4WndYk8G1KHvItvQjZbi6pWZWqUKjQ0NqMNjqYqMPdqNto4b7EG6t+yOsZjXmhjg2k8EtFds9g8i0um9E8nS37y0OhzA3DF5MZnE+QAHzlc72y6XOMgy5xkb5KzRryjjkVtVoaWoqVZbNWyu+3Pv+/U9I03hwBBBBEgi4IO8Hesi83dE+lOJwLstGtFOb0ny6lfWGi9M82+YK7BsDp9h65bTrf9PWdAa17gadQn/Crei/8Jyu+6uhGalsedraedL4tu/1sXFERbkAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAefOuevm2oG+wyPe1rv1VRYpvrIr9ptbEH2Tl/LLfoFC01U1PxHe7Kjak33v8IytWULE1ZmqsdU+mhb+EprSphS2BZMAb1pN4LOminIv1EdjgRO+mT5uk/Mrm+1WCTlMhdI6TPDMMGD7ojyP0BXN8ZqVpAgpO9KU/9m2RDxBggjnu/DPFbeCx+QGm8B9J2oMEeIBURWZL+7e885WZ1Y72+PJXrONmjjRrKompr8o6psXamIwtFtXDYptWkBJw9YlzREmKdS76Zjd3mi9la+jfWNg8UQx7jh6xt2dUgBx+5U9F3hY8lxDZO1DTDmGcjwQRcQ7c4LFUANiJVlVFJXKEtHZuzxy9dD1Oi85dH+l+MwUNo1s1MfsqkvpgcG3zM8GkDkumbB608NVAGJY7DusC49+lJ++0S0c3ADmt07ledGcN0dBRYMNiWVGh9N7XsNw5pDmkciLFZ0IgiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIixYmrkY559VpPuEoDy1t6v2mPxL+NV58i6fqsDFrYdxJqOOpIn5LaYqVd++z0XZqtp4+f3a/BlaseJxBZYDXQ+C+wFr4yuPRt/HkeS0grssaqfBTbTs/Xq5IYKq4loe0gubmadzmyRI8wfcVaOjtLNWpj7zT7jP0VI2HHaNe89ymQHccrrQNYXXthYDDF9OvQqE03Zg3MHWcBpmyiwmJW1TTud+A10/aMadO1W92nZ2vflm3W+9lgx9Mqlmt5z7h/FUXENurr0kbnrtbOg9wJ/gqzj8KGVInMOI8j/AAUFKk2rlr2ihSjDpcqWMaaVTuEgEX8N4PESPgtmm4OHOLj+ddFl2thsznRMgZhwy8YPBKWEDBbzKsVMRV9zm6VS9rJR+H1satVqz0nD1haN2o58/BflVq+qNIuMAe+w95WaTJNRFI+qlhDrt9VwvG/Xf+E38FiFNwu3vCLxe33hqAs7Q4nuHK8wMvoh1rRuuNx8tYX26kZ7waMtw9mUEH2nBh9Gd8c542UUW7evx+n5XwSfQyo/tT2FepSMBxyOgyXNZdpltRve9YGCBbjcqHWXWw7izEUm12gMOdn2dSHZhdplrj3TplCqnQ6llxlxlz03W4PY9jnj/wDNxHIhanSmllqPB17KmB4tqlv/ADUFSc4TXrmWKGloV6U3JZTvfnt9c3WeZ2XYvT/Z+JgNxApvNslX7N08AT3XH8JKtIK8t4GtTGFqjt253tnIbGWmYHtTAUh0K2piKbK3Y4mowsZmY0OlstBcR2bpabA7t6khW4nZroU6/Z7pxUoyvi/ha/d4dO49KouM7O60MXTcW1aFOu1oaS4fYuggGSbtOthAVt2f1n4N8CrTr0Cfapue3yNLNbmQFMslGdKcPiReUWlszadHEs7ShVbUZJGZpkAjUHgbix4rdQjCIiAIiIAiIgCIiAIiIAobpfiOzwOKfwoVY8cjgPiplVLrVxPZ7KxTuLWN/PUY36oDzlgLtJ4uP1P1W60LW2Yz7MfzyW61q59V++z1OijahDw++T8eLax97gq9UN9Z4k8d6spIAJOg1VerPDiXC0k2+qkocyp2ml7uc5x+fng+6Lzzjf8AxXW+rS9Iu4gW0AJcZAA0HcGioHRosggTn9bwk5YXUehGGDMO6LAGB4AD9Soq1Rv3F6sS6bTKFB1rp3VvBtrn5NPGNiN25iPtXb4geNp18z7lC1K2Yusee6AIhSO163feN0lQ/Z63ufH6LNO6RerKySsfdJjajpLRmvFhYG9vco3EUi0kRoYU1Xwga2bH8J03KIe8mR4x+i2qLBFBOMso1KgWzgXAHKWgzIiYknQTuMgEHcfFaxfxgCRdaGJ243OO7DZuTqOcbvBb6fmVdc9r9fwTeN2Y0OhpqDXuOpuLxBItlsdN8LRbhHFw7J0vB9GC18/hM5uYBPgpitha1Sw7QgXGWXAHm1smPK0LE6i5pDXuzFpECs17L6gsqzmbcetA4qyoPDtYpSlKDcW72+3fst1ybS6lr6LYUNxD6eZorhoLRPsnuMANgA0xAN8zuAy6HTynhzTdXaSC4sEGxafTdY694CfDmqvtHGvdiK1VriKmUuB10AnIbd6JiZlfDMdXxGAqMzMLaT3F+YuzuAlwMuu7U6wbXUFsJsld1NxjfF8Y5Z8+9Lk1fniuBpOmgMXVg6IZWPdXqWYym9s6jtHtNNjZG8k6qrtg9434Dj/MK20elNKhh6WHp0y6m8l2MDg37cHu9k2ZyhrTLTbvGVLGCTuVa1Vum0ueP34Y5G7tbBNpUy53eaaoYIOXOaTBSzZr90FtX4KHpPaXNh5aLCDJF7a+e8ea2sTjaYPZVKprMw9sMxkFjqbu83tH2Mt7rTaTl81HnFh4+0bEGW5Gtbl4iBAIsNZ01CxNJ4LGjnP2alnv/Vrp36vGdmdW6lsa1tTF4UGfQrN3STLHkDcLU/fuXWFwfoLi20dp0Hhxy12mmbbntLmgmfaYywXeFmk7wRT7Qp8GokvMIiKQphERAEREAREQBERAFznr3xOXZZb/AIlam0eIzVP+2ujLkX9InERhsJT9qu5/kxhb/wBwLK3DOZbMoEU28CPmZWxl4iFu7Nw806bQQCWtmbDSZML9q4Nw1bPfLLX7w1aALnUacVy5Nttns6UI06cYX2S+xC7YB7F2U8J8JEqtscrrXw4LHA8CD7lRqblYoP3Wjkdq0+GpGXevt/Sw9H8e2m4h1g6O9wjjyXW9gY0Nw8D1pIPiVwlj1cOhu2y09g93dIOTk7XL4H5+Ki1FL/KJJodUmlp6m18Pr3Px9dJ/aNSSTxn5qPoyDPP5XhfdZ6xdrA4Rv/nTRQwZ2azu8GXaO3BoWieLe7N7uOoGu4LTG2e19RrPZyi8aG+p0UFjnl7gfbdA5AW+oPgStzBiZdEcBwBAI88pA8lM4pK7OfGrOc2k8Gjt2s4ugEyJmJEggQ4aGZn3KHq0HlucghpsHEWJG4nSYM+YW7t1s1JBnK0B3EG5+R3KOrYl7+5Jyl0hg0zQBIHGLK3RdkmcfVS9+Sk30t68megaexsPjsDTr0C15awNLgC3vta0EEEDxnfKq1J9aiC1uLrNvHddDRwH2jmybGwVc6HdKcXgy3CucRQdIDXC2Z0mWPGl7ndylWjaeGFVgq5yWkSADm5G82VyrUg8xf8AOvgV4RqRVp4V7eD3tbr8upn6ObQf/WiMUWVabWOeO0o0g53oxkOXNUIOYQCRpdfHSRmzftKPYClVLS5pYYb2vZl5Y8E270MygelMwoPCVn/1im4OyZCS2ALQPRvusFWOkeLz1aj50d3TxdNzzJgz4qo6j47Ft0rUlUe7bXhazxyWMO97t9LuLxDw5/dJERrBt56hbtfY9WnQp1nMmlUc5rHgyMzQMzbeidLHXctfD0XGCbNdGY7w2Y8tR71eOgWWvTxezHultVhfRJ9WtTEtcOBya8QxbKV8FarBxXE118v+bkLsBmELGGcuIh4cC0VWu7xImjUGuUCCx2ouOOR9UVLCoypycwU3f5CLA8p8isOKp021MLSokCrSzdq70C2qHExm0IkS0694A6Bbm18fUDWZ6QD+9LXU25HCTDmu1nwKxxJr1/PmmSUqcoytbN7Wdk1byvbFrxlH8mwwBjKNdjyH0X5g1wy96mc7Wuv9yLTrpuXpDD1g9rXtMtcA4HiCJB9y83YDE5sO7K8NymR2kOAiDYkExHGIneu2dWmO7bZuHJMmm3sidb0iWD/SGnzWlKybS7ybtKMmqdSXNJfLySe26v4staIimOUEREAREQBERAEREAXDf6Rdea2Cp+yys6PxGmB/sK7kvPXX89x2lRbBgYZuW1iS+pmg79yyjDV0ZmbMgNdSqkEAQQZ3RZzVhLK7MstzBrzU3mXHUkgzu1XPqT6lMy0vbzaSPiFK4TpVimftcw4PAd8dfiqj0sl8LO3HtVP/ANI/Z/XDJnbG1uxpAlky6plbuDnst3dwBAKq+JfhHklrXM+zqWB/aA9yJkQQJI3ZjGgW1t/a78WGZw1pZPog3Ji5k8lCHCO5H+eakpU5RWdyrq9TGtP3cJf1/Nlho9HaNRtI0sU4udhn16jXUwRS7MimQ57XWBqB8WmMliXCYKk8iCDB18CsbWvYZGZp0kSLGxEhfjCtmV0XvZmI7amH79HcnD9Rdam0MRYhpgevU3MHjvPIKv7PxbWOGfMacgvaPWiYkeJVg2ztf7NlWnRJbnBDjEZoOXut1vfWxCpuk1PB36WqjVoNydmt8Xb73ZbLvfjlYZF12HO1nsU3E8iWEke97FIueGMe42AL/wDcVq4emCWio9vbvPfbLTAzhx9EkDuU4jXRYukFWMMMp9N/nlJLx4WyKSpB8ai+n7/ZrSqKNKVWPc3+l5YK7XxGeSdTc8JUv0Mp/wDUNe6mHsZOYkxlJDi1w5yOBUHQqhrgS0GDodD4hSuxdqPp1GtsKb3XAAGtpmN30U9RPgaRyNHKD1EJVHi628efS+/O17d5d8VgA69N0fdO7lI/gvzCur02BmbK3MZi8i1p0jkvtugPMj3QfqtmlVXN9vNHs56GlV+JeR9BsVKZp0wTnveDERIkxMwqTj6QbjXHs25X1T3Hd7uuMyOBgzyJV4pvGdpJtJvrBykjTnCrfSzZpZlxDIOUgkcSH2PxA9yl09R3s3vg5/aelShx04/C1Kytba75dMrYjq7IdXaBYl7OW4/8QtTo/tB2HrsrtPepvDo4t0c3zGYeakMzapc9p9N5MGBDiDb/AFBRm1ML2VdwiA64G7iY8wVNTdsPf9JHP1cOLhmvhba8pXsWjbdTscU/E0ILK4vIkEPAdBA0zQH+MjVpWOnjWuOVv2Tpu03pZhue3RvuBHErL0QbnoP7zS6mYa06ua7vFsezIkcDPFVbpBRy1nPbOV0EcQYALSeIPzB3qaNR8WNinOioUU5rPeue7TfJ38OTzdXLdgaId2rQ3I+ZyaRIjuTqJ0jdFrSek9T+KI/rNEyO8ys0H77Axwvw7Nv5lxXD7bfMZrwMpMG1u7fmLbjysRceqXbzhtOmxwGWoypSkEgAx2gzMN2maQHDvLWNNqpxrZm9fVU56T2Er8UXi63y9nnFm8PKta73PQqIisHHCIiAIiIAiIgCIiALVx+z6VduStSZUb7L2hw9xW0iAoG1uqjA1SXUjUoO4MOZk/hfMeAIVT2l1R4lv93Uo1hwM03e4yP9S7WizcHnDG9AcTT9PA1RzYM499MkKGqbBgxmc08HC/usvVC1Mds+lWblq02vHMTHhwS4PLx2S9uhB+Cw1MC71qc+QPyXoLG9XmEfdocw8jb3WUHjOrB37KuP8w/n5rIOJuwDN7S33j5r7x2AbUDIDWFoglogvFhLrxNtY3rpuM6AYxmjGvHL9AXH4KtbT6PVqfp4dzfLL/uha8KN41ZJNJ4e/lkpbNg+jNS2bvAD1eIJ1PIrSxOErmQWOyzMAh0eEclP4hjmn1h8f1WB2MI1I87LNjVyxY0+jmyO0e/tGkNDSLiO8bCJ3i58gorH4R1J7qbxdvxGoI8VZWYon1R7/wCCynDtfd1IO8QD81ooNSbvjuJpVacqKp8HvK/vX3vyatyxbP3LLhn9rQpOLC0FodMauc1ocRBNrA+ZWSnhnbiP55aqEwFZ9IZWl7GibASPdwlSA2uYhzmn8TSPgIHwVGppJt4sek0/blGMUpX80nnns779EbD2FpuIKxdIW5sI8yPAm5uxwA8bjxXwdpcMkCbAxx0ty3RqPLT2hjhVYWlsTE75ggxrbTmtYaapGSbRNX7Z0tWhKKlmz5PdqxXNl0S2lm3OJj/LAI8f1ClulILqLKgF2OBB3w+0eE5VhwLQ2j2T3NbDs03dJvfuixgx5DgFKjE0S3I6o1wIAMh0e7Kt6ikqilZkOkqaeppHRdSKbVsyW+6w2tnYrmwcdlqMMCMwJ421Hukea3ultH7Ys9tuZv8A8jS7MB43H5VC0qZa4WMA8DpP6Kc6X1s/ZvaQSyo8AiCdKbgfCcysRXDM5VSXtNNh5/j/AH4lYqxlaeUe5b+xNq9hXo1zOajUpvDhwY5pLXcRlBHFa2KYMsgWJkcgZt5G3lzWoVusFRrjSfej2pTeHAOBkEAg8isiqvVjtT+s7LwtQmSKYpunXNSJpEnxyT5q1KQqBERAEREAREQBERAEREAREQBERAEREAREQELtfY2Gqf3mGpOPEsaT74lcb63NlUcK1j8PSDCQ4ujMRZzBoTAsTou17SqXXLust0voz7NT5sQFR6rujrNpue2s5zMocQWAXjLqHT7RXQqvVE31MX+alPycFo9UIAxTw0AAUTAFgO83cuvLIOSVeqvEj0cVQP4qMe83K1/7L8aPWwjvOu34XXY0S7NHTj/Lr7HFn9WWO9mh5PP1asD+rLG/4VI+Dx+i7giXNrHBKnVltD92YfCq0fVa7+q/aH7qPKtT+rl6DRLmTzyeq/aP7qf/ALaH/kslHqn2g65ptZ+Koy/5JXoJEuYsefXdUm0fZp/nastDqdxzpzPottaXE34GBbxuu+olxYqHVt0XrbOwrqFaqx5dULwGA5WAtaMoJgm7SdBqreiLBkIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCItfEVwBKA0sdQBJM/Fck6z6oFekwG7WEm8+kYH+0romP2gDK5n0q6P43E4l1WjhjUplrQHdpRboLiH1AdZ3LKBudUeNDccWuMZ6TgPEFpjx1XbF5px/RraVBnatw7mOZcFlSi5wI3gNeSfAArPs7rqx9IZajWVCLd4ZDbjY3Rg9HouFYbr7f6+DZ/lcfqFJUOvmgfSwjx4Ob9SlgdjRcvw/XdgHelTqN/KfkVJUOt3Zjv2rx4sd9AlgX5FUsP1jbNfpigPFrm/MLfpdMsA7TG0fN7R8ysAnkUdS23hnejiaR8HtP1W3TxDHei8HwIKAzIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiID5c2RCpG1ei2KaXOwuKcJJPZvl9MkmYg3Z/lPkryiA5Liq+1W90bHpuItnFfuu5iSCPcr30ZwbzhaRxFFrKzgS9gOYNJJIbO+0KeX6gI6vsek4QaYUTW6EYN5l1BjjzAPzVnRAVVvQDAjTDUx4NC/D1f4H92p/lCtaIConq52ef/AEtP8rf0Xx/Zrs79zpfkb+iuKICnf2Z7N/dKX5G/ov1vVvs8aYZg8AB8lcEQFSHV3gP8ALb2T0NweGqitSow9swZJiRB1PAqxIgCIiAIiIAiIgCIiA//2Q==" alt="">
		</div>
		<div class="shop-body">
			<h3>Monitor<br>Collection</h3>
			<a href="monitor.php" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div>
</div>
<!-- /shop -->
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop03.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Accessories<br>Collection</h3>
								<a href="accessories.php" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="https://media.istockphoto.com/photos/laptop-in-a-bag-picture-id182157353?k=20&m=182157353&s=612x612&w=0&h=rjzpYA2zToQpZxPsjYuHlTpE1eIW8wZJ3rGNwl4vAE0=" alt="">
							</div>
							<div class="shop-body">
								<h3>Bags<br>Collection</h3>
								<a href="bags.php" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
					
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="data:image/jpeg;base64,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" alt="">
							</div>
							<div class="shop-body">
								<h3>More<br>Collections</h3>
								<a href="store.php" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->


		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							
							<h2 class="text-uppercase">hot deal this week</h2>
							<p>New Collection </p>
							<a class="primary-btn cta-btn" href="hot_deals.php">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Laptops</h3>
							
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
								
									<div class="products-slick" data-nav="#slick-nav-2">
									
										<?php  
							$query = "SELECT * FROM products where product_keywords='laptop'";
							$con->query($query);
							if ($result = $con->query($query)) {
							  while($row = $result->fetch_assoc() ){?>
							

						
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
									<img src="./admin_area/product_images/<?php echo $row['product_img1']; ?>" alt="">
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category"><?php echo $row['product_keywords']; ?></p>
										<h3 class="product-name"><a href="product.php?product_id=<?php echo $row['product_id']; ?>"><?php echo $row['product_title']; ?></a></h3>
										<h4 class="product-price">$<?php echo $row['product_price']; ?> <del class="product-old-price">$<?php echo $row['past_price']; ?></del></h4>
									
										<div class="product-btns">
										
											
											<a class="quick-view" href="product.php?product_id=<?php echo $row['product_id']; ?>"><span class="tooltipp">quick view</span></a>
							              
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
							</div>
							<?php  } } ?>
						
										
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->


		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>If you have any  <strong>Question or Comment</strong></p>
							<form action="contact us.php">
								<!-- <input class="input" type="email" placeholder="Enter Your Email"> -->
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Contact Us</button>
							</form>
							
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		
		<?php include './layouts/footer.php';?>
		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<!-- <script src="js/bootstrap.min.js"></script> -->
		<script src="js/slick.min.js"></script>
		<!-- <script src="js/nouislider.min.js"></script> -->
		<!-- <script src="js/jquery.zoom.min.js"></script> -->
		<script src="js/main.js"></script>

	</body>
</html>
