<?php
session_start();
if (!isset($_SESSION["userName"])){
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
					echo "Hey! " . $_SESSION['userName'] . "</br>";
					echo 'Welcome to Dashboard'
					?>
				</h2>
			</div>
			<form action="logout.php" method="post">
			<div class="flex justify-between">
                    <input type="submit" class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300" value="logout">                    
            </div>
			</form>	
		</div>
	</div>
    </section>
</body>
</html>