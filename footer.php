</div>




<!-- FOOTER-->

<div class="footer">
<p class="small text-muted mb-0">&copy; Copyrights. All rights reserved.
</div>

<!--END OF FOOTER-->


	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript">
		$(function () {
		  $(document).scroll(function () {
		    var $nav = $(".navbar-fixed-top");
		    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
		  });
		});
	</script>
	<script type="text/javascript">
		$(function () {
		  $(document).scroll(function () {
		    var $nav = $(".nav-link");
		    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
		  });
		});
	</script>
	<script type="text/javascript">
	    $(window).on('load', function() {
	        $('#p-modal').modal('show');
	    });
	</script>
</body>
</html>
