<?php require("script.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="How to store form data in a json file with php">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>Storing messages in a json file with PHP</title>
</head>
<body>

	<h1>Fill out your information</h1>

	<!-- Let's begin with our form element -->
	<form action="" method="post">
	<!-- <img src="iti.jpg" alt="" /> -->
   
	<img src="iti.jpg" alt="" />
    <form action="/contactInfo" method="post" id="contactForm">
      <table>
        <tr>
          <td>
            <label>First Name</label>
          </td>
          <td>
            <input
              type="text"
              name="firstname"
              id="firstname"
              required
              placeholder=" firstname:"
            />
          </td>
        </tr>
        <tr>
          <td>
            <label>Last Name</label>
          </td>
          <td>
            <input
              type="text"
              name="lastname"
              id="lastname"
              required
              placeholder=" lastname:"
            />
          </td>
        </tr>
        <tr>
          <td>
            <label>Email</label>
          </td>
          <td>
            <input
              type="email"
              name="email"
              id="email"
              required
              placeholder=" email:"
            />
          </td>
        </tr>
        <tr>
          <td>
            <label>StudentID</label>
          </td>
          <td>
            <input type="number"
              name="id"
              id="id"
              required
              placeholder=" id:">
          </td>
        </tr>
        <tr>
          <td>
            <label>Password</label>
          </td>
          <td>
            <input
              type="password"
              name="password"
              id="password"
              required
              placeholder=" Password:"
            />
          </td>
        </tr>
        <tr>
          <td>
            <label>Gender</label>
          </td>
          <td>
            <input
              type="radio"
              value="male"
              name="gender"
              id="gender"
              placeholder=" Gender:"
            />
            <label>Male</label><br />
            <input
              type="radio"
              value="female"
              name="gender"
              id="gender"
              placeholder=" Gender:"
            />
            <label>Female</label><br />
          </td>
        </tr>
        <tr>
          <td>
            <label> Tracks </label>
          </td>
          <td>
            <input
              type="radio"
              value="Software Testing"
              name="track"
              id="track"
              placeholder=" track:"
            />
            <label>Software Teesting</label><br />
            <input
              type="radio"
              value="IOS Development"
              name="track"
              id="track"
              placeholder=" track:"
            />
            <label>IOS Development</label><br />
            <input
              type="radio"
              value="Full Stack "
              name="track"
              id="track"
              placeholder=" track:"
            />
            <label>FullStack Development</label><br />
            <input
              type="radio"
              value="Machine learning"
              name="track"
              id="track"
              placeholder=" track:"
            />
            <label>Machine learning</label><br />
          </td>
        </tr>
        <tr>
          <td><label>Certifications</label></td>
          <td>
            <textarea
              rows="10"
              cols="30"
              placeholder=" Message..."
              id="certifications"
              name="certifications"
            ></textarea>
          </td>
        </tr>

        <tr>
          <td>
		  <input type="submit" name="submit" value="Send message">
          </td>
        </tr>
      </table>

		

		<p class="error"><?php echo @$error; ?></p>
		<p class="success"><?php echo @$success; ?></p>
	</form>
	
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>