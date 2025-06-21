

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
		<a class="navbar-brand" href="{{ route('login') }}">
            <img src="{{ asset('assets/images/logo.png') }}" alt="MinhTrietEras" height="40">

            </a>			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="{{ route('posts.index') }}" class="nav-link">Tutorial</a></li>
					<li class="nav-item"><a href="{{ route('tools.index') }}" class="nav-link">Tools</a></li>
					 <li class="nav-item"><a href="{{ route('resource') }}" class="nav-link">Download</a></li>
					 <!-- <li class="nav-item"><a href="login.php" class="nav-link"><img src="assets/images/logo_mau_sv.png" alt="Sao Viet" width="30"></a></li> -->

					<!--<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="contact.html" class="nav-link">Contact us</a></li>
					<li class="nav-item cta"><a href="#" class="nav-link">Free Consultation</a></li> -->
<!-- Google Calendar Appointment Scheduling begin -->
<link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
<script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
<script>
(function() {
  var target = document.currentScript;
  window.addEventListener('load', function() {
    calendar.schedulingButton.load({
      url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ1IBcQOunErCs-s-ZDkuhAiPxgmOe-_M4WR6PvK1XxnJ7pvAj53AsDTkVVpDTbhoxqcTAYVzo6N?gv=true',
      color: '#110457',
      label: "\u0110\u1EB7t l\u1ECBch h\u1ECDc",
      target,
    });
  });
})();
</script>
<!-- end Google Calendar Appointment Scheduling -->
				</ul>
			</div>
		</div>
	</nav>