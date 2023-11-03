<?php
session_start();
if (!isset($_SESSION["userEmail"]) || $_SESSION["userName"]){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Authentication - PHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <section>
    <div class='flex items-center justify-center min-h-screen from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'>
		<div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
			<div class='max-w-md mx-auto space-y-6'>
				<h2 class="text-center font-medium" >
					<?php
					echo $_SESSION['userName'];
					?>
				</h2>
			</div>
		</div>
	</div>
    </section>
</body>
</html>