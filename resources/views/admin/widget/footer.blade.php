	<script src="css/jquery-2.2.3.min.js"></script>
	<script src="css/bootstrap.js"></script>
	<script src="css/aos.js"></script>
	<script src="css/aos1.js"></script>
	<script type="text/javascript">
		var dropdown = document.getElementsByClassName("dropdown-btn");
		var i;
		for (i = 0; i < dropdown.length; i++) {
			dropdown[i].addEventListener("click", function() {
				this.classList.toggle("active");
				var dropdownContent = this.nextElementSibling;
				if
					(dropdownContent.style.display === "block") {
						dropdownContent.style.display = "none";
					} 
					else 
					{
						dropdownContent.style.display = "block";
					}
				});
		}
	</script>
	<script type="text/javascript">
			$(function () {  
				$("#datetimepicker").datepicker({         
				autoclose: true,         
				todayHighlight: true 
				}).datepicker('update', new Date());
			});
	</script>
</body>
</html>